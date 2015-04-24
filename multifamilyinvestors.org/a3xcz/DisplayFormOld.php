<?php


include ('interface.php');
include ('Kiss_mysql.php');

/** Begin Simple Auth **/
$users = array(
	'usreia'
);

$passwords = array(
	'usreia' => 'r3m3nt0r'
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
	if (!$_POST['confirm'] && $_POST['askconfirm'])
	{
		$invoice_id = (int) $_POST['invoiceId'];
		$inf = new Infusion ('m160','73c4741dd9d84e1e475ccd33d16a0edf');
		$invoice = $inf->get_invoice_by_id ($invoice_id);
		if ($invoice)
		{
			$contact = $inf->get_contact_by_id ($invoice['ContactId']);
		}
		else
		{
			$results = 'Invalid Invoice Number.';
			$class = 'error';
		}
	}
	else
	{
		// Do things
		$invoice_id = (int) $_POST['invoiceId'];
		$inf = new Infusion ('m160','73c4741dd9d84e1e475ccd33d16a0edf');
		$invoice = $inf->get_invoice_by_id ($invoice_id);
		if ($invoice)
		{
			$contact = $inf->get_contact_by_id ($invoice['ContactId']);
			list($order_items, $invoice_items) = $inf->get_invoice_order_items ($invoice_id);

			$kiss = new KMMySQL();
			foreach ($order_items as $order_item)
			{
				$kiss->create_item_entry (
					$order_item['ItemName'], $order_item['ProductId'],
					"{$contact['FirstName']} {$contact['LastName']}",
					$contact['Email'], $order_item['PPU'], $order_item['Qty'],
					$invoice['DateCreated'], $order_item['ItemType']
				);
			}

			foreach ($invoice_items as $invoice_item) {
				$order_item = find_array_row('Id', $invoice_item['OrderItemId'], $order_items);
				if ($order_item['SubscriptionPlanId'] > 0)
				{
					$kiss->create_billing_entry ($invoice_item['InvoiceAmt'], KMMYSQL_PLAN, $invoice_item['DateCreated'], $contact['Email']);
				}

				$kiss->create_billing_entry ($invoice_item['InvoiceAmt'], KMMYSQL_ONETIME, $invoice_item['DateCreated'], $contact['Email']);
			}

			$results = 'Imported invoice successfully.';
			$class = 'success';
		}
		else
		{
			$results = 'Invalid Invoice Number.';
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
					<p style='text-align:left'>
					Customer Name: <?echo "{$contact['FirstName']} {$contact['LastName']}";?><br>
					Invoice Number: #<?=$invoice_id?><br>
					Invoice Total: $<?=number_format($invoice['InvoiceTotal'], 2) ?>
					</p>
					<button type='submit' name='confirm' value='confirm'>Confirm Import</button> <a href="./DisplayForm.php">Cancel</a>
				<? else: ?>
					<label for='invoiceId'>Invoice ID: <input type='text' name='invoiceId' placeholder='Enter Invoice ID'></label><br><br>
					<!-- input type='hidden' name='csrf_token' value="<?=$token;?>" -->
					<label for='askconfirm'>Confirm Import? <input type='checkbox' name='askconfirm' checked="checked"></label>
					<button type='submit'>Put Data Into Kiss</button>
				<? endif; ?>
			</form>
		</div>
	</body>
</html>
