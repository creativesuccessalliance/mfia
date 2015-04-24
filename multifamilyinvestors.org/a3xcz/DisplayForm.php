<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);
include ('interface.php');
include ('Kiss_mysql.php');
include ('km.php');

KM::init('8a0bd9e9008f5f1ae0d972b6df6cc6c8d3e87bab');
KM::identify(uniqid());

/** Begin Simple Auth **/
$users = array(
  'admin'
);

$passwords = array(
  'admin' => 'r3m3nt0r'
);

// Simple authentication check
if (! isset($_SERVER['PHP_AUTH_USER']) )
{
  header('WWW-Authenticate: Basic realm="site"');
  header('HTTP/1.0 401 Unauthorized');
  echo "Sorry! We need your credentials to allow you access...";
  exit;
}
else if ( !in_array($_SERVER['PHP_AUTH_USER'], $users) || $_SERVER['PHP_AUTH_PW'] != $passwords[$_SERVER['PHP_AUTH_USER']] )
{
  header('WWW-Authenticate: Basic realm="site"');
  header('HTTP/1.0 401 Unauthorized');
  echo "Sorry! We need your credentials to allow you access...";
  exit;
}
/** End Simple Auth **/

/** to find order items **/

function find_array_row ($key, $value, $arr)
{
  foreach ($arr as $row)
  {
    if (isset($row[$key]) && $row[$key] == $value)
    {
      return $row;
    }
  }

  return false;
}

// Test for post
if ($_POST['invoiceId'])
{
  $invoice_id = (int) $_POST['invoiceId'];
  $kiss = new KMMySQL();
  $invoice_entry_exists = $kiss->invoice_entry_exists($invoice_id);

  if (!$_POST['confirm'] && $_POST['askconfirm'])
  {
    $inf = new Infusion ('m160','73c4741dd9d84e1e475ccd33d16a0edf');
    $invoice = $inf->get_invoice_by_id ($invoice_id);

    if ($invoice && (!$invoice_entry_exists || $_POST['refund']) )
    {
      $contact = $inf->get_contact_by_id ($invoice['ContactId']);
    }
    else
    {

      $results = ($invoice_entry_exists) ?'This invoice is already in the system ('.$invoice_entry_exists.')' : 'Invalid Invoice Number.';
      $class = 'error';
    }
  }
  else
  {
    $inf = new Infusion ('m160','73c4741dd9d84e1e475ccd33d16a0edf');
    $invoice = $inf->get_invoice_by_id ($invoice_id);

    if ($invoice && (!$invoice_entry_exists || $_POST['refund']))
    {
      $contact = $inf->get_contact_by_id ($invoice['ContactId']);
      list($order_items, $invoice_items) = $inf->get_invoice_order_items ($invoice_id);

      if(!$_POST['refund'])
      {
        if ($invoice['RefundStatus'])
          $multiplier = -1;
        else
          $multiplier = 1;
        foreach ($order_items as $order_item)
        {
          $kiss->create_item_entry (
            $order_item['ItemName'], $order_item['ProductId'],
            "{$contact['FirstName']} {$contact['LastName']}",
            $contact['Email'], $order_item['PPU']*$multiplier, $order_item['Qty'],
            $invoice['DateCreated'], $order_item['ItemType']
          );
        }

        foreach ($invoice_items as $invoice_item) {
          $order_item = find_array_row('Id', $invoice_item['OrderItemId'], $order_items);
          if ($order_item['SubscriptionPlanId'] > 0)
          {
            $kiss->create_billing_entry ($invoice_item['InvoiceAmt']*$multiplier, KMMYSQL_PLAN, $invoice_item['DateCreated'], $contact['Email']);
          } else
          {
            $kiss->create_billing_entry ($invoice_item['InvoiceAmt']*$multiplier, KMMYSQL_ONETIME, $invoice_item['DateCreated'], $contact['Email']);
          }
        }

        $kiss->register_entry($invoice_id);
        KM::record('invoice entered', array('Invoice ID' => $invoice_id));
        
      }
      else
      {
        foreach ($invoice_items as $invoice_item) {
          $order_item = find_array_row('Id', $invoice_item['OrderItemId'], $order_items);
          if (($invoice_item['InvoiceAmt']*$multiplier)<0)
          {
            if ($order_item['SubscriptionPlanId'] > 0)
            {
              $kiss->create_billing_entry ($invoice_item['InvoiceAmt']*$multiplier, KMMYSQL_PLAN, $invoice_item['DateCreated'], $contact['Email']);
            }
            else
            {
              $kiss->create_billing_entry ($invoice_item['InvoiceAmt']*$multiplier, KMMYSQL_ONETIME, $invoice_item['DateCreated'], $contact['Email']);
            }
          }
        }

        $kiss->update_entry($invoice_id);
        KM::record('refund entered', array('Invoice ID' => $invoice_id));
      }
      $results = 'Imported invoice successfully.';
      $class = 'success';
    }
    else
    {
      $results = ($invoice_entry_exists) ? 'This invoice is already in the system ('.$invoice_entry_exists.')' : 'Invalid Invoice Number.';
      $class = 'error';
    }
  }
}

$class = (!empty($class)) ? $class : 'hide' ;
$results = (!empty($results)) ? $results : '';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kissmetrics Offline Entries</title>
    <style type='text/css'>
      body
      {
        background-color: #efefef;
        font-family: "Helvetica", "Arial", sans-serif;
        font-weight: 200;
      }
      .form_container
      {
        padding: 20px;
        background-color: #fff;
        width:35%;
        margin:auto;
        margin-top: 30px;
        border:1px solid #ccc;
        box-shadow: 1px 1px 1px 1px #ccc;
      }

      .form_container input
      {
        padding:5px;
        font-size: 14px;
      }

      .form_container
      {
        text-align: center;
      }

      button
      {
        display: block;
        text-align: center;
        padding:5px;
        font-size: 14px;
        width:170px;
        margin: auto;
        margin-top: 30px;
      }

      h2
      {
        font-weight: 200;
        margin-top: 10px;
        margin-bottom: 50px
      }

      .hide
      {
        display:none;
      }

      .error
      {
        color:red;
      }

      .success
      {
        color:blue;
      }
    </style>
  </head>

  <body>
    <div class='form_container'>
      <h2>KISSMetrics Offline Data Input</h2>
      <div class='<?=$class;?>'><?=$results?></div>
      <form method='post'>
        <? if(!isset($_POST['confirm']) && isset($_POST['askconfirm'])): ?>
          <input type='hidden' name='invoiceId' value='<?=$_POST['invoiceId']?>'>
          <?php if ($class != 'error'): ?>
            <p style='text-align:left'>
            <?if($invoice_entry_exists):?>
            <span style='font-weight:bold;color:red'>WARNING: This invoice has already been entered (<?=$invoice_entry_exists;?>). Proceed with caution as we don't track if a refund has already entered Kiss!</span><br>
            <?endif;?>
            <?php if($invoice['RefundStatus'] && !$invoice_entry_exists):?><span class='success'>This is an refunded invoice</span><br><?php endif; ?>
            Customer Name: <?echo "{$contact['FirstName']} {$contact['LastName']}";?><br>
            Invoice Number: #<?=$invoice_id?><br>
            Invoice Total: $<?=number_format($invoice['InvoiceTotal'], 2) ?>
            </p>
            <?php if($_POST['refund']): ?><input type='hidden' value='<?=$_POST['refund']?>' name='refund'><?php endif; ?>
            <button type='submit' name='confirm' value='confirm'>Confirm Import</button>
          <? endif;?> <a href="./DisplayForm.php">Cancel</a>
        <? else: ?>
          <label for='invoiceId'>Invoice ID: <input type='text' name='invoiceId' placeholder='Enter Invoice ID'></label><br><br>
          <!-- input type='hidden' name='csrf_token' value="<?=$token;?>" -->
            <label for='askconfirm'>Confirm Import? <input type='checkbox' name='askconfirm' checked="checked"></label><br>
            <label for='refund'>Do refund? <input type='checkbox' name='refund'></label><br>
          <button type='submit'>Put Data Into Kiss</button>
        <? endif; ?>
      </form>
    </div>
  </body>
</html>
