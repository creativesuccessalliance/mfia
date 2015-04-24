<?php

define ('KMMYSQL_USER','usreales_inf');
define ('KMMYSQL_PW','dba$$');
define ('KMMYSQL_HOST', 'localhost');
define ('KMMYSQL_DB', 'usreales_infusion');
define ('KMMYSQL_ONETIME', 1);
define ('KMMYSQL_PLAN', 0);

class KMMySQL
{
	protected $_tableprefix = 'kiss_event';
	protected $_db;

	/**
	 * Initialises the database connection for use
	 * by other functions.
	 */
	public function __construct ()
	{
		$this->_db = new mysqli(KMMYSQL_HOST, KMMYSQL_USER, KMMYSQL_PW, KMMYSQL_DB);
		if ( $this->_db->connect_errno )
		{
			throw new Exception ('Failed to connect to ' . KMMYSQL_HOST . '');
		}
	}

	public function create_item_entry (
		$product_name, $product_item_number, $customer_name,
		$customer_email, $product_price, $qty, $date, $item_type
	)
	{
		if ( !in_array((int) $item_type, array(4,5,9,12,7)))
		{
			return true;
		}
		$date = date('Y-m-d H:i:s', strtotime($date));
		$product_name = $this->_db->real_escape_string ($product_name . ' (offline)');
		$customer_name = $this->_db->real_escape_string ($customer_name);
		$customer_email = $this->_db->real_escape_string ($customer_email);
		$qty = $this->_db->real_escape_string ($qty);

		$query = "
		INSERT INTO `{$this->_tableprefix}_item` (`Product Name`, `Product Item Number`, `Customer Name`, customer_email, `Product Price`, qty, date_created)
		VALUES ('$product_name', $product_item_number, '$customer_name', '$customer_email', $product_price, '$qty', '$date')
		";
		$result = $this->_db->query ( $query );
		return $result;

	}

	public function create_billing_entry (
		$amount, $type = null, $date, $email
	)
	{
		$date = date('Y-m-d H:i:s', strtotime($date));
		$email = $this->_db->real_escape_string ($email);
		if($amount>0)
		{
			if ($type == 1)
			{
				$query = "
				INSERT INTO `{$this->_tableprefix}_billing` (`Billing Amount`, `Revenue Type`, `One Time Revenue`, date_created, email)
				VALUES ($amount, 'one-time', $amount, '$date', '$email')
				";
			}
			else
			{
				$query = "
				INSERT INTO `{$this->_tableprefix}_billing` (`Billing Amount`, `Revenue Type`, `Subscription Billing Amount`, date_created, email)
				VALUES ($amount, 'Recurring', $amount, '$date', '$email')
				";
			}
		}
		else
		{
			if ($type == 1)
			{
				$query = "
				INSERT INTO `{$this->_tableprefix}_billing` (`Billing Amount`, `Revenue Type`, `One Time Revenue`, date_created, email)
				VALUES ($amount, 'one-time-refund', $amount, '$date', '$email')
				";
			}
			else
			{
				$query = "
				INSERT INTO `{$this->_tableprefix}_billing` (`Billing Amount`, `Revenue Type`, `Subscription Billing Amount`, date_created, email)
				VALUES ($amount, 'recurring-refund', $amount, '$date', '$email')
				";
			}
		}


		$result = $this->_db->query ( $query );
		return $result;
	}

	public function invoice_entry_exists ($id)
	{
		$query = "SELECT imported FROM `{$this->_tableprefix}_invoices` WHERE `invoice_id` = $id LIMIT 1";
		$result = $this->_db->query ( $query );
		if (!$result)
		{
			return false;
		}

		$row = $result->fetch_row();
		return $row[0];
	}

	public function register_entry( $id )
	{
		$query = "INSERT INTO `{$this->_tableprefix}_invoices` (`imported`, `invoice_id`) VALUES (NOW(), $id)";
		$result = $this->_db->query ( $query );
		if (!$result)
		{
			return false;
		} else return true;
	}

	public function update_entry( $id )
	{
		$query = "UPDATE `{$this->_tableprefix}_invoices` SET `imported`=NOW() WHERE `invoice_id`=$id";
		$result = $this->_db->query ( $query );
		if (!$result)
		{
			return false;
		} else return true;
	}
}

// Required kiss fields: KM_PERSON, KM_TIME, KM_LAST_RAN

/**
 * IPN
 * 			 KM::record('Customer Purchase', array(
 *               'Product Name' => $_REQUEST['cprodtitle'],
 *               'Product Item Number' => $_REQUEST['cproditem'],
 *               'Customer Name' => $_REQUEST['ccustfullname'],
 *               'Product Price' =>
 *               'TID' => $_REQUEST['ctid'],
 *               'Customer Email' => $_REQUEST['ccustemail']
 *       ));
 *
 *	    	KM::record('billed', array(
 *	    		'Billing Amount' => Zend_Registry::get('configuration')->cb->product->{$_REQUEST['cproditem']},
 *	    		'Revenue Type' => 'one-time',
 *	    		'One-time Revenue' => Zend_Registry::get('configuration')->cb->product->{$_REQUEST['cproditem']},
 *	    	));
 */
