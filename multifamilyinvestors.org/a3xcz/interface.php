<?php
/**
 * Created by Dustin Lunt
 * Company: Marketing Mavens
 * Website: http://marketingmavens.com
 */

require('isdk.php');

class TypeError extends exception
{

}


class infusion  extends iSDK
{


  function __construct($app = '', $api_key = '')
  {
    if (empty($app) || empty($api_key))
      throw new TypeError('No App Name or Api Key Specified');
    //Connect to Infusion API
    $this->connect($app,$api_key);


  }

  /**
   * [get_contact_by_id description]
   * @param  integer $id [description]
   * @return mixed     [description]
   */
  public function get_contact_by_id ( $id )
  {
    $contacts = $this->dsQuery('Contact',1,0,array('Id' => $id), array('Id','FirstName','LastName', 'Email'));
    if (count ($contacts) == 1)
    {
      return $contacts[0];
    }

    return false;
  }

  /**
   * Retrieves an invoice by passing the invoices ID
   * @param  integer $id [description]
   * @return mixed     [description]
   */
  function get_invoice_by_id ( $id )
  {
    if (!is_int($id))
    {
      throw new TypeError('$id should be an integer');
    }

    $invoice = $this->dsQuery ('Invoice',1,0, array (
      'Id' => $id
    ), array (
      'ContactId',
      'DateCreated',
      'InvoiceTotal',
      'PayStatus',
      'RefundStatus',
      'Description',
      'ProductSold'
    ));

    if (is_array($invoice))
    {
      return $invoice[0];
    }

    else return $invoice;
  }

  /**
   * Gets a list of items on the invoice  
   * @param  int $invoice_id Id of the invoice
   * @return mixed             [description]
   */
  function get_invoice_order_items ( $invoice_id )
  {
    /**
     * A list of items on the invoice specified by $invoice_id
     * @var array
     */
    $invoice_items = $this->dsQuery ('InvoiceItem', 1000, 0, array (
      'InvoiceId' => $invoice_id
    ), array (
      'OrderItemId',
      'DateCreated',
      'Description',
      'InvoiceAmt'
    ));

    if ( !is_array($invoice_items) )
      return false;

    $ids = array();

    foreach ($invoice_items as $invoice_item) {
      $ids []= $invoice_item['OrderItemId'];
    }

    $order_items = $this->dsQuery ( 'OrderItem', 1000, 0, array (
      'Id' => $ids
    ), array (
      'Id',
      'ProductId',
      'SubscriptionPlanId',
      'ItemName',
      'Qty',
      'PPU',
      'ItemDescription',
      'ItemType'
    ));

    if ( is_array($order_items) && count ($order_items) > 0)
    {
      return array($order_items, $invoice_items);
    }
    else
    {
      return false;
    }


  }


  function create_contact($data)
  {
    try {

      $contacts = $this->dsQuery('Contact',1,0,array('Email' => $data['Email'],'FirstName' => $data['FirstName']),array('Id','FirstName','LastName'));
      if(is_array($contacts) && isset($contacts[0]['Id']))
      {

        foreach($contacts as $contact)
        {
          if(!isset($contact['LastName']))
          {
            $this->updateCon($contact['Id'],$data);
            return $contact['Id'];
          }
          if($contact['LastName'] == $data['LastName'])
          {
            //Update
            $this->updateCon($contact['Id'],$data);
            return $contact['Id'];
          }

          $contact_id = $this->addCon($data,'Purchased Online');
          return $contact_id;

        }


      }
      else
      {
        //Add Contact
        $contact_id = $this->addCon($data,'Purchased Online');
      }

      //$contact_id = $this->addWithDupCheck($data,'EmailAndName');
    }catch (Exception $e)
    {
      //print_r($e->getMessage());
      return FALSE;
    }

    return $contact_id;

  }


  function find_contact($query)
  {
    $data = $this->dsQuery('Contact',10,0,$query,$this->get_fields('Contact'));

    return $data;

  }


  function add_credit_card($contact_id,$data)
  {
    //Check to see if they already have this card
    $last_4 = substr($data['CardNumber'],-4);
    $cc_id = $this->locateCard($contact_id,$last_4);

    if($cc_id == 0) //Doesn't Exist
    {
      //Add Card
      $cc_id = $this->dsAdd('CreditCard',$data);
      return $cc_id;
    }
    elseif($cc_id > 0)
    {
      //Check if card as same expiration date
      $card_data = $this->dsLoad('CreditCard',$cc_id,array('ExpirationMonth','ExpirationYear'));
      if(
        $card_data['ExpirationMonth'] == $data['ExpirationMonth'] &&
        $card_data['ExpirationYear'] == $data['ExpirationMonth']) {
        return $cc_id;
      }
      else
      {
        //Update CC Dates
        return $this->dsUpdate('CreditCard',$cc_id,array('ExpirationYear' => $data['ExpirationYear'],'ExpirationMonth' => $data['ExpirationMonth']));
      }


    }
    else
    {
      return FALSE;
    }

  }




  function add_extra_person($billing_person,$data,$product_id,$action_set_id = 0)
  {
    //Map Main Address to Shipping Address fields
    $data['Address2Street1'] = $data['StreetAddress1'];
    $data['Address2Street2'] = $data['StreetAddress2'];
    $data['City2'] = $data['City'];
    $data['State2'] = $data['State'];
    $data['PostalCode2'] = $data['PostalCode'];
    $data['Country2'] = $data['Country'];
    $data['_OrderName'] = $billing_person->FirstName . " " . $billing_person->LastName . " " . $billing_person->Email;
    $data['_PurchasedBy'] = $billing_person->FirstName . " " . $billing_person->LastName;
    $data['_OrderEmail'] = $billing_person->Email;

    $contact_id = $this->create_contact($data);
    //Opt Person In
    $this->optIn($data['Email'],'Friend purchased');

    //Create Zero Dollar Order
    $affiliate_id = $this->get_current_affiliate($contact_id);
    $invoice_id = $this->blankOrder($contact_id,'Extra: The Matrix Assessment Profile',$this->infuDate(date('d-m-Y')),$affiliate_id,$affiliate_id);
    $this->addOrderItem($invoice_id,$product_id,4,0.00,1,'Friend: ' . $data['_OrderName'] . ' ordered','');

    sleep(1); //IS throttling

    //Add Notes to the Job/Order Record
    $invoice = $this->dsLoad('Invoice',$invoice_id,array('JobId'));
    $r = $this->dsUpdate('Job',$invoice['JobId'],array('JobNotes' => 'Ordered By: ' . $data['_OrderName']));

    sleep(1); //IS throttling

    $r = $this->runAS($contact_id,$action_set_id);

    $this->achieveGoal('optimalwellness','mapfriendemail',$contact_id);

    return $data['FirstName'] . ' ' . $data['LastName'] . ' ID: ' . $contact_id;

  }


  function add_consultation($contact_id,$desc,$product_id,$as)
  {
    $order_date = $this->infuDate(date('d-m-Y'));
    $affiliate_id = $this->get_current_affiliate($contact_id);
    $invoice_id = $this->blankOrder($contact_id,$desc,$order_date,$affiliate_id,$affiliate_id);
    $product_type = 4;
    $this->addOrderItem($invoice_id,$product_id,$product_type,0.00,1,$desc,'');

    sleep(1);

    //Run AS
    $this->runAS($contact_id,$as);

    $invoice = $this->dsLoad('Invoice',$invoice_id,array('JobId'));

    return $invoice;


  }



  function get_current_affiliate($contact_id)
  {

    //Check if aff_code cookie is set, then look up affiliate by code
    if(isset($_COOKIE['aff_code']) && strlen($_COOKIE['aff_code']) > 1)
    {
      $affiliates = $this->dsQuery('Affiliate',1,0,array('AffCode' => $_COOKIE['aff_code']),array('Id'));
      if(isset($affiliates[0]['Id'])):
        return $affiliates[0]['Id'];
      endif;

    }


    $affiliate_id = 0;

    $referrals = $this->dsQueryOrderBy('Referral',10,0,array('ContactId' => $contact_id),array('ContactId','AffiliateId','DateSet'),'DateSet',FALSE);


    if(isset($referrals[0]))
    {
      foreach($referrals as $affiliate)
      {
        $affiliate_data = $this->dsQuery('Affiliate',1,0,array('Id' => 1),array('LeadCookieFor'));
        if(isset($affiliate_data[0]))
        {
          if(isset($affiliate_data[0]['LeadCookieFor']) && $affiliate_data[0]['LeadCookieFor'] > 0)
          {
            $days = $affiliate_data[0]['LeadCookieFor'];

            $expires = strtotime($affiliate['DateSet'] .  ' + ' . $days . ' days');
            if(strtotime('now') < $expires)
            {
              $affiliate_id = $affiliate['AffiliateId'];
              break;
            }

          }
          else
          {
            $affiliate_id = $affiliate['AffiliateId'];
            break;
          }
        }
      }
    }


    return $affiliate_id;

  }






























  function get_fields($type='Contact', $ret = 'Keys')
  {
    switch($type)
    {
      case 'ActionSequence':
      $fields = array(
        'Id' => 'Integer',
        'TemplateName' => 'String',
        'VisibleToTheseUsers' => 'String'
      );
      break;

      case 'Affiliate':
      $fields = array(
        'Id' => 'Integer',
        'ContactId' => 'Integer',
        'ParentId' => 'Integer',
        'LeadAmt' => 'Double' ,
        'LeadPercent' => 'Double',
        'SaleAmt' => 'Double',
        'SalePercent' => 'Double',
        'PayoutType' => 'Integer',
        'DefCommissionType' => 'Integer',
        'Status' => 'Integer',
        'AffName' => 'String',
        'Password' => 'String',
        'AffCode' => 'String',
        'NotifyLead' => 'Integer',
        'NotifySale' => 'Integer',
        'LeadCookieFor' => 'Integer',
      );
      break;

      case 'Campaign':
      $fields = array(
        'Id' => 'Integer',
        'Name' => 'String',
        'Status' => 'String',

      );
      break;

      case 'Campaignee':
      $fields = array(
         'CampaignId' => 'Integer',
         'Status' => 'Enum',
         'Campaign' => 'String',
         'ContactId' => 'Integer',
        );
        break;

      case 'CampaignStep':
      $fields = array(
         'Id' => 'Integer',
         'CampaignId' => 'Integer',
         'TemplateId' => 'Integer',
         'StepStatus' => 'String',
         'StepTitle' => 'String',
      );
      break;

      case 'CCharge':
      $fields = array(
         'Id' => 'Integer',
         'CCId' => 'Integer',
         'PaymentId' => 'String',
         'MerchantId' => 'String',
         'OrderNum' => 'String',
         'RefNum' => 'String',
         'ApprCode' => 'String',
         'Amt' => 'Double',
      );
      break;

      case 'Company':
      $fields = array(
         'Address1Type' => 'String',
         'Address2Street1' => 'String',
         'Address2Street2' => 'String',
         'Address2Type' => 'String' ,
         'Address3Street1' => 'String',
         'Address3Street2' => 'String',
         'Address3Type' => 'String',
         'Anniversary' => 'Date',
         'AssistantName' => 'String',
         'AssistantPhone' => 'String',
         'BillingInformation' => 'String',
         'Birthday' => 'Date',
         'City' => 'String',
         'City2' => 'String',
         'City3' => 'String',
         'Company' => 'String',
         'AccountId' => 'Integer',
         'CompanyID' => 'Integer',
         'ContactNotes' => 'String' ,
         'ContactType' => 'String',
         'Country' => 'String',
         'Country2' => 'String',
         'Country3' => 'String',
         'CreatedBy' => 'Integer',
         'DateCreated' => 'DateTime',
         'Email' => 'String',
         'EmailAddress2' => 'String',
         'EmailAddress3' => 'String',
         'Fax1' => 'String',
         'Fax1Type' => 'String',
         'Fax2' => 'String',
         'Fax2Type' => 'String',
         'FirstName' => 'String',
         'Groups' => 'String' ,
         'Id' => 'Integer',
         'JobTitle' => 'String',
         'LastName' => 'String',
         'LastUpdated' => 'DateTime',
         'LastUpdatedBy' => 'Integer',
         'MiddleName' => 'String',
         'Nickname' => 'String',
         'OwnerID' => 'Integer',
         'Password' => 'String',
         'Phone1' => 'String',
         'Phone1Ext' => 'String',
         'Phone1Type' => 'String',
         'Phone2' => 'String',
         'Phone2Ext' => 'String',
         'Phone2Type' => 'String' ,
         'Phone3' => 'String',
         'Phone3Ext' => 'String',
         'Phone3Type' => 'String',
         'Phone4' => 'String',
         'Phone4Ext' => 'String',
         'Phone4Type' => 'String',
         'Phone5' => 'String',
         'Phone5Ext' => 'String',
         'Phone5Type' => 'String',
         'PostalCode' => 'String',
         'PostalCode2' => 'String',
         'PostalCode3' => 'String',
         'ReferralCode' => 'String',
         'SpouseName' => 'String',
         'State' => 'String' ,
         'State2' => 'String',
         'State3' => 'String',
         'StreetAddress1' => 'String',
         'StreetAddress2' => 'String',
         'Suffix' => 'String',
         'Title' => 'String',
         'Username' => 'String',
         'Validated' => 'String',
         'Website' => 'String',
         'ZipFour1' => 'String',
         'ZipFour2' => 'String',
         'ZipFour3' => 'String',
      );
      break;

      case 'Contact':

      $fields = array(
         'Address1Type' => 'String',
         'Address2Street1' => 'String',
         'Address2Street2' => 'String',
         'Address2Type' => 'String' ,
         'Address3Street1' => 'String',
         'Address3Street2' => 'String',
         'Address3Type' => 'String',
         'Anniversary' => 'Date',
         'AssistantName' => 'String',
         'AssistantPhone' => 'String',
         'BillingInformation' => 'String',
         'Birthday' => 'Date',
         'City' => 'String',
         'City2' => 'String',
         'City3' => 'String',
         'Company' => 'String',
         'AccountId' => 'Integer',
         'CompanyID' => 'Integer',
         'ContactNotes' => 'String' ,
         'ContactType' => 'String',
         'Country' => 'String',
         'Country2' => 'String',
         'Country3' => 'String',
         'CreatedBy' => 'Integer',
         'DateCreated' => 'DateTime',
         'Email' => 'String',
         'EmailAddress2' => 'String',
         'EmailAddress3' => 'String',
         'Fax1' => 'String',
         'Fax1Type' => 'String',
         'Fax2' => 'String',
         'Fax2Type' => 'String',
         'FirstName' => 'String',
         'Groups' => 'String' ,
         'Id' => 'Integer',
         'JobTitle' => 'String',
         'LastName' => 'String',
         'LastUpdated' => 'DateTime',
         'LastUpdatedBy' => 'Integer',
         'Leadsource' => 'String',
         'LeadSourceId' => 'Integer',
         'MiddleName' => 'String',
         'Nickname' => 'String',
         'OwnerID' => 'Integer',
         'Password' => 'String',
         'Phone1' => 'String',
         'Phone1Ext' => 'String',
         'Phone1Type' => 'String',
         'Phone2' => 'String',
         'Phone2Ext' => 'String',
         'Phone2Type' => 'String' ,
         'Phone3' => 'String',
         'Phone3Ext' => 'String',
         'Phone3Type' => 'String',
         'Phone4' => 'String',
         'Phone4Ext' => 'String',
         'Phone4Type' => 'String',
         'Phone5' => 'String',
         'Phone5Ext' => 'String',
         'Phone5Type' => 'String',
         'PostalCode' => 'String',
         'PostalCode2' => 'String',
         'PostalCode3' => 'String',
         'ReferralCode' => 'String',
         'SpouseName' => 'String',
         'State' => 'String' ,
         'State2' => 'String',
         'State3' => 'String',
         'StreetAddress1' => 'String',
         'StreetAddress2' => 'String',
         'Suffix' => 'String',
         'Title' => 'String',
         'Username' => 'String',
         'Validated' => 'String',
         'Website' => 'String',
         'ZipFour1' => 'String',
         'ZipFour2' => 'String',
         'ZipFour3' => 'String',
      );
      break;

      case 'ContactAction':
      $fields = array(
         'Id' => 'Integer',
         'ContactId' => 'Integer',
         'OpportunityId' => 'Integer',
         'ActionType' => 'String',
         'ActionDescription' => 'String',
         'CreationDate' => 'DateTime' ,
         'CreationNotes' => 'String',
         'CompletionDate' => 'DateTime',
         'ActionDate' => 'DateTime',
         'EndDate' => 'DateTime',
         'PopupDate' => 'DateTime',
         'UserID' => 'Integer',
         'Accepted' => 'Integer',
         'CreatedBy' => 'Integer',
         'LastUpdated' => 'DateTime',
         'LastUpdatedBy' => 'Integer',
         'Priority' => 'Integer',
         'IsAppointment' => 'Integer',

      );
      break;

      case 'ContactGroup':
      $fields = array(
         'Id' => 'Integer',
         'GroupName' => 'String',
         'GroupCategoryId' => 'Integer',
         'GroupDescription' => 'String',

      );
      break;

      case 'ContactGroupAssign':
      $fields = array(
         'GroupId' => 'Integer',
         'ContactGroup' => 'String',
         'DateCreated' => 'DateTime',
         'ContactId' => 'Integer' ,
         'Contact.Address1Type' => 'String',
         'Contact.Address2Street1' => 'String',
         'Contact.Address2Street2' => 'String',
         'Contact.Address2Type' => 'String',
         'Contact.Address3Street1' => 'String',
         'Contact.Address3Street2' => 'String',
         'Contact.Address3Type' => 'String',
         'Contact.Anniversary' => 'Date',
         'Contact.AssistantName' => 'String',
         'Contact.AssistantPhone' => 'String',
         'Contact.BillingInformation' => 'String',
         'Contact.Birthday' => 'String',
         'Contact.City' => 'String',
         'Contact.City2' => 'String',
         'Contact.City3' => 'String' ,
         'Contact.Company' => 'String',
         'Contact.CompanyID' => 'Integer',
         'Contact.ContactNotes' => 'String',
         'Contact.ContactType' => 'String',
         'Contact.Country' => 'String',
         'Contact.Country2' => 'String',
         'Contact.Country3' => 'String',
         'Contact.CreatedBy' => 'Integer',
         'Contact.DateCreated' => 'DateTime',
         'Contact.Email' => 'String',
         'Contact.EmailAddress2' => 'String',
         'Contact.EmailAddress3' => 'String' ,
         'Contact.Fax1' => 'String',
         'Contact.Fax1Type' => 'String',
         'Contact.Fax2' => 'String',
         'Contact.Fax2Type' => 'String',
         'Contact.FirstName' => 'String',
         'Contact.Groups' => 'String',
         'Contact.Id' => 'Integer',
         'Contact.JobTitle' => 'String',
         'Contact.LastName' => 'String',
         'Contact.LastUpdated' => 'String',
         'Contact.LastUpdatedBy' => 'String',
         'Contact.Leadsource' => 'String',
         'Contact.MiddleName' => 'String',
         'Contact.Nickname' => 'String' ,
         'Contact.OwnerID' => 'Integer',
         'Contact.Phone1' => 'String',
         'Contact.Phone1Ext' => 'String',
         'Contact.Phone1Type' => 'String',
         'Contact.Phone2' => 'String',
         'Contact.Phone2Ext' => 'String',
         'Contact.Phone2Type' => 'String',
         'Contact.Phone3' => 'String',
         'Contact.Phone3Ext' => 'String',
         'Contact.Phone3Type' => 'String',
         'Contact.Phone4' => 'String',
         'Contact.Phone4Ext' => 'String',
         'Contact.Phone4Type' => 'String',
         'Contact.Phone5' => 'String',
         'Contact.Phone5Ext' => 'String',
         'Contact.Phone5Type' => 'String',
         'Contact.PostalCode' => 'String',
         'Contact.PostalCode2' => 'String',
         'Contact.PostalCode3' => 'String',
         'Contact.ReferralCode' => 'String',
         'Contact.SpouseName' => 'String',
         'Contact.State' => 'String',
         'Contact.State2' => 'String' ,
         'Contact.State3' => 'String',
         'Contact.StreetAddress1' => 'String',
         'Contact.StreetAddress2' => 'String',
         'Contact.Suffix' => 'String',
         'Contact.Title' => 'String',
         'Contact.Website' => 'String',
         'Contact.ZipFour1' => 'String',
         'Contact.ZipFour2' => 'String',
         'Contact.ZipFour3' => 'String',

      );
      break;

      case 'ContactGroupCategory':
      $fields = array(
         'CategoryName' => 'String',
         'CategoryDescription' => 'String',

      );
      break;

      case 'CProgram':
      $fields = array(
         'Id' => 'Integer',
         'ProgramName' => 'String',
         'DefaultPrice' => 'Double',
         'DefaultCycle' => 'String' ,
         'DefaultFrequency' => 'Integer',
         'Sku' => 'String',
         'ShortDescription' => 'String',
         'BillingType' => 'String',
         'Description' => 'String',
         'HideInStore' => 'Integer',
         'Status' => 'Integer',
         'Active' => 'Boolean',
         'LargeImage' => 'Blob',
         'Taxable' => 'Integer',
         'Family' => 'String',
         'ProductId' => 'Integer',

      );
      break;

      case 'CreditCard':
      $fields = array(
         'Id' => 'Integer',
         'ContactId' => 'Integer',
         'BillName' => 'String',
         'FirstName' => 'String' ,
         'LastName' => 'String',
         'PhoneNumber' => 'String',
         'Email' => 'String',
         'BillAddress1' => 'String',
         'BillAddress2' => 'String',
         'BillCity' => 'String',
         'BillState' => 'String',
         'BillZip' => 'String',
         'BillCountry' => 'String',
         'ShipFirstName' => 'String',
         'ShipMiddleName' => 'String',
         'ShipLastName' => 'String',
         'ShipCompanyName' => 'String',
         'ShipPhoneNumber' => 'String',
         'ShipAddress1' => 'String' ,
         'ShipAddress2' => 'String',
         'ShipCity' => 'String',
         'ShipState' => 'String',
         'ShipZip' => 'String',
         'ShipCountry' => 'String',
         'ShipName' => 'String',
         'NameOnCard' => 'String',
         'CardNumber' => 'String',
         'Last4' => 'String',
         'ExpirationMonth' => 'String',
         'ExpirationYear' => 'String',
         'CVV2' => 'String',
         'Status' => 'Integer',
         'CardType' => 'String',
         'StartDateMonth' => 'String' ,
         'StartDateYear' => 'String',
         'MaestroIssueNumber' => 'String',

      );
      break;

      case 'DataFormField':
      $fields = array(
        'DataType' => 'Integer',
        'Id' => 'Integer',
        'FormId' => 'Integer',
        'GroupId' => 'Integer',
        'Name' => 'String',
        'Label' => 'String',
        'DefaultValue' => 'String',
        'Values' => 'String',
        'ListRows' => 'Integer'

      );
      break;

      case 'DataFormTab':
      $fields = array(
         'Id' => 'Integer' ,
         'FormId' => 'Integer',
         'TabName' => 'String',

      );
      break;

      case 'DataFromGroup':
      $fields = array(
         'Id' => 'Integer' ,
         'TabId' => 'Integer',
         'Name' => 'String',

      );
      break;

      case 'Expense':
      $fields = array(
         'Id' => 'Integer' ,
         'ContactId' => 'Integer',
         'ExpenseType' => 'Enum',
         'TypeId' => 'Integer' ,
         'ExpenseAmt' => 'Double',
         'DateIncurred' => 'DateTime',

      );
      break;

      case 'GroupAssign':
      $fields = array(
         'Id' => 'Integer',
         'UserId' => 'Integer' ,
         'GroupId' => 'Integer',
         'Admin' => 'Integer',

      );
      break;

      case 'Invoice':
      $fields = array(
         'Id' => 'Integer',
         'ContactId' => 'Integer',
         'JobId' => 'Integer',
         'DateCreated' => 'DateTime',
         'InvoiceTotal' => 'Double',
         'TotalPaid' => 'Double',
         'TotalDue' => 'Double' ,
         'PayStatus' => 'Integer',
         'CreditStatus' => 'Integer',
         'RefundStatus' => 'Integer',
         'PayPlanStatus' => 'Integer',
         'AffiliateId' => 'Integer',
         'LeadAffiliateId' => 'Integer',
         'PromoCode' => 'String',
         'InvoiceType' => 'String',
         'Description' => 'String',
         'ProductSold' => 'String',
         'Synced' => 'Integer',


      );
      break;

      case 'InvoiceItem':
      $fields = array(
         'Id' => 'Integer',
         'InvoiceId' => 'Integer',
         'OrderItemId' => 'Integer',
         'InvoiceAmt' => 'Double',
         'Discount' => 'Double',
         'DateCreated' => 'DateTime',
         'Description' => 'String',
         'CommissionStatus' => 'Integer',

      );
      break;

      case 'InvoicePayment':
      $fields = array(
         'Id' => 'Integer',
         'InvoiceId' => 'Integer',
         'Amt' => 'Double',
         'PayDate' => 'Date',
         'PayStatus' => 'String',
         'PaymentId' => 'Integer',
         'SkipCommission' => 'Integer',

      );
      break;

      case 'Job':
      $fields = array(
         'Id' => 'Integer',
         'JobTitle' => 'String' ,
         'ContactId' => 'Integer',
         'StartDate' => 'Date',
         'DueDate' => 'Date',
         'JobNotes' => 'String',
         'ProductId' => 'Integer',
         'JobStatus' => 'String',
         'DateCreated' => 'DateTime',
         'JobRecurringId' => 'Integer',
         'OrderType' => 'String',
         'OrderStatus' => 'Integer',
         'ShipFirstName' => 'String',
         'ShipMiddleName' => 'String',
         'ShipLastName' => 'String',
         'ShipCompany' => 'String',
         'ShipPhone' => 'String' ,
         'ShipStreet1' => 'String',
         'ShipStreet2' => 'String',
         'ShipCity' => 'String',
         'ShipState' => 'String',
         'ShipZip' => 'String',
         'ShipCountry' => 'String',

      );
      break;

      case 'JobRecurringInstance':
      $fields = array(
         'Id' => 'Integer',
         'RecurringId' => 'Integer',
         'InvoiceItemId' => 'Integer' ,
         'Status' => 'Integer',
         'AutoCharge' => 'Integer',
         'StartDate' => 'Date',
         'EndDate' => 'Date',
         'DateCreated' => 'DateTime',
         'Description' => 'String',

      );
      break;

      case 'Lead':
      $fields = array(
         'Id' => 'Integer',
         'OpportunityTitle' => 'String' ,
         'ContactID' => 'Integer',
         'AffiliateId' => 'Integer',
         'UserID' => 'Integer',
         'StageID' => 'Integer',
         'StatusID' => 'Integer',
         'Leadsource' => 'String',
         'Objection' => 'String',
         'ProjectedRevenueLow' => 'Double',
         'ProjectedRevenueHigh' => 'Double',
         'OpportunityNotes' => 'String',
         'DateCreated' => 'DateTime',
         'LastUpdated' => 'DateTime',
         'LastUpdatedBy' => 'Integer',
         'CreatedBy' => 'Integer',
         'EstimatedCloseDate' => 'DateTime' ,
         'NextActionDate' => 'DateTime',
         'NextActionNotes' => 'String',

      );
      break;

      case 'LeadSource':
      $fields = array(
         'Id' => 'Integer',
         'Name' => 'String',
         'Description' => 'String',
         'StartDate' => 'Date',
         'EndDate' => 'Date',
         'CostPerLead' => 'String',
         'Vendor' => 'String',
         'Medium' => 'String',
         'Message' => 'String',
         'LeadSourceCategoryId' => 'Integer',
         'Status' => 'String',

      );
      break;

      case 'LeadSourceCategory':
      $fields = array(
         'Id' => 'Integer',
         'Name' => 'String',
         'Description' => 'String',

      );
      break;

      case 'LeadSourceExpense':
      $fields = array(
         'Id' => 'Integer',
         'LeadSourceRecurringExpenseId' => 'Integer',
         'LeadSourceId' => 'Integer',
         'Title' => 'String',
         'Notes' => 'String',
         'Amount' => 'Double',
         'DateIncurred' => 'DateTime',

      );
      break;

      case 'LeadSourceRecurringExpense':
      $fields = array(
         'Id' => 'Integer',
         'LeadSourceId' => 'Integer',
         'Title' => 'String',
         'Notes' => 'String',
         'Amount' => 'Double',
         'StartDate' => 'DateTime',
         'EndDate' => 'DateTime',
         'NextExpenseDate' => 'DateTime',

      );
      break;

      case 'OrderItem':
      $fields = array(
         'Id' => 'Integer',
         'OrderId' => 'Integer',
         'ProductId' => 'Integer',
         'SubscriptionPlanId' => 'Integer',
         'ItemName' => 'Double',
         'Qty' => 'Integer',
         'CPU' => 'Double',
         'PPU' => 'Double',
         'ItemDescription' => 'String',
         'ItemType' => 'Integer',
         'Notes' => 'String',

      );
      break;

      case 'Payment':
      $fields = array(
         'Id' => 'Integer',
         'PayDate' => 'Date',
         'UserId' => 'Integer',
         'PayAmt' => 'Double',
         'PayType' => 'String',
         'ContactId' => 'Integer',
         'PayNote' => 'String',
         'InvoiceId' => 'Integer',
         'RefundId' => 'Integer',
         'ChargeId' => 'Integer',
         'Commission' => 'Integer',
         'Synced' => 'Integer',

      );
      break;

      case 'PayPlan':
      $fields = array(
         'Id' => 'Integer',
         'InvoiceId' => 'Integer',
         'DateDue' => 'Date',
         'AmtDue' => 'Double',
         'Type' => 'Integer',
         'InitDate' => 'Date',
         'StartDate' => 'Date',
         'FirstPayAmt' => 'Double',

      );
      break;

      case 'PayPlanItem':
      $fields = array(
         'Id' => 'Integer',
         'PayPlanId' => 'Integer',
         'DateDue' => 'Date',
         'AmtDue' => 'Double',
         'Status' => 'Integer',
         'AmtPaid' => 'Double',

      );
      break;

      case 'Product':
      $fields = array(
         'Id' => 'Integer',
         'ProductName' => 'String',
         'ProductPrice' => 'Double' ,
         'Sku' => 'String',
         'ShortDescription' => 'String',
         'Taxable' => 'Integer',
         'CountryTaxable' => 'Integer',
         'StateTaxable' => 'Integer',
         'CityTaxable' => 'Integer',
         'Weight' => 'Double',
         'IsPackage' => 'Integer',
         'NeedsDigitalDelivery' => 'Integer',
         'Description' => 'String',
         'HideInStore' => 'Integer',
         'Status' => 'Integer',
         'TopHTML' => 'String',
         'BottomHTML' => 'String',
         'ShippingTime' => 'String' ,
         'LargeImage' => 'Blob',
         'InventoryNotifiee' => 'String',
         'InventoryLimit' => 'Integer',
         'Shippable' => 'Integer',

      );
      break;

      case 'ProductCategory':
      $fields = array(
         'Id' => 'Integer' ,
         'CategoryDisplayName' => 'String',
         'CategoryImage' => 'Blob',
         'CategoryOrder' => 'Integer',
         'ParentId' => 'Integer',

      );
      break;

      case 'ProductCategoryAssign':
      $fields = array(
         'Id' => 'Integer',
         'ProductId' => 'Integer',
         'ProductCategoryId' => 'Integer',

      );
      break;

      case 'ProductInterest':
      $fields = array(
         'Id' => 'Integer',
         'ObjectId' => 'Integer',
         'ObjType' => 'String',
         'ProductId' => 'Integer',
         'ProductType' => 'String',
         'Qty' => 'Integer',
         'DiscountPercent' => 'Integer',

      );
      break;

      case 'ProductInterestBundle':
      $fields = array(
         'Id' => 'Integer',
         'BundleName' => 'String',
         'Description' => 'String',

      );
      break;

      case 'RecurringOrder':
      $fields = array(
         'Id' => 'Integer',
         'ContactId' => 'Integer' ,
         'OriginatingOrderId' => 'Integer',
         'ProgramId' => 'Integer',
         'SubscriptionPlanId' => 'Integer',
         'ProductId' => 'Integer',
         'StartDate' => 'Date',
         'EndDate' => 'Date',
         'LastBillDate' => 'Date',
         'NextBillDate' => 'Date',
         'PaidThruDate' => 'Date',
         'BillingCycle' => 'String',
         'Frequency' => 'Integer',
         'BillingAmt' => 'Double',
         'Status' => 'String',
         'ReasonStopped' => 'String',
         'AutoCharge' => 'Integer' ,
         'CC1' => 'Integer',
         'CC2' => 'Integer',
         'NumDaysBetweenRetry' => 'Integer',
         'MaxRetry' => 'Integer',
         'MerchantAccountId' => 'Integer',
         'AffiliateId' => 'Integer',
         'PromoCode' => 'Integer',
         'LeadAffiliateId' => 'Integer',
         'Qty' => 'Integer',

      );
      break;

      case 'Referral':
      $fields = array(
         'Id' => 'Integer',
         'ContactId' => 'Integer',
         'AffiliateId' => 'Integer',
         'DateSet' => 'Date',
         'DateExpires' => 'Date',
         'IPAddress' => 'String',
         'Source' => 'String',
         'Info' => 'String',
         'Type' => 'Integer',

      );
      break;

      case 'Stage':
      $fields = array(
         'Id' => 'Integer',
         'StageName' => 'String',
         'StageOrder' => 'Integer',
         'TargetNumDays' => 'Integer',

      );
      break;

      case 'StageMove':
      $fields = array(
         'Id' => 'Long',
         'OpportunityId' => 'Long',
         'MoveDate' => 'DateTime',
         'MoveToStage' => 'Long',
         'MoveFromStage' => 'Long',
         'PrevStageMoveDate' => 'DateTime',
         'CreatedBy' => 'Long',
         'DateCreated' => 'DateTime',
         'UserId' => 'Long',

      );
      break;

      case 'SubscriptionPlan':
      $fields = array(
         'Id' => 'Integer',
         'ProductId' => 'Integer',
         'Cycle' => 'String',
         'Frequency' => 'Integer',
         'PreAuthorizeAmount' => 'Double',
         'Prorate' => 'Boolean',
         'Active' => 'Boolean',
         'PlanPrice' => 'Double',

      );
      break;

      case 'Template':
      $fields = array(
         'Id' => 'Integer',
         'PieceType' => 'String',
         'PieceTitle' => 'String',
         'Categories' => 'String',

      );
      break;

      case 'User':
      $fields = array(
         'EmailAddress3' => 'String',
         'FirstName' => 'String',
         'HTMLSignature' => 'String' ,
         'Id' => 'Integer',
         'LastName' => 'String',
         'MiddleName' => 'String',
         'Nickname' => 'String',
         'Phone1' => 'String',
         'Phone1Ext' => 'String',
         'Phone1Type' => 'String',
         'Phone2' => 'String',
         'Phone2Ext' => 'String',
         'Phone2Type' => 'String',
         'PostalCode' => 'String',
         'Signature' => 'String',
         'SpouseName' => 'String',
         'State' => 'String',
         'StreetAddress1' => 'String' ,
         'StreetAddress2' => 'String',
         'Suffix' => 'String',
         'Title' => 'String',
         'ZipFour1' => 'String',

      );
      break;

      case 'UserGroup':
      $fields = array(
         'Id' => 'Integer',
         'Name' => 'String',
         'OwnerId' => 'Integer',

      );
      break;
    }


    if($ret == 'Keys')
    {
      return array_keys($fields);
    }

  }




}
