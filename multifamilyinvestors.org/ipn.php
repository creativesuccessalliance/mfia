<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('third-party/km.php');

file_put_contents('dump.txt',$_REQUEST['cost'].','.$_REQUEST['Email'].','.date('YmdHis').'\n',FILE_APPEND);

KM::init("8a0bd9e9008f5f1ae0d972b6df6cc6c8d3e87bab", array('log_dir' => $_SERVER['DOCUMENT_ROOT'].'/km_log/'));
KM::identify($_REQUEST['Email']);
KM::record('Bought - ' . $_REQUEST['product']);
KM::record('billed', array(
	'Product Name' => $_REQUEST['product'],
	'Customer Name' => $_REQUEST['FirstName'] . " " . $_REQUEST['LastName'],
	'Customer Email' => $_REQUEST['Email'],
	'City' => $_REQUEST['City'],
	'Billing Amount' => $_REQUEST['cost']
));

if(isset($_REQUEST['plan_lvl'])) {
	KM::set(array(
		'Plan Level' => $_REQUEST['plan_lvl'],
		'Plan Name' => $_REQUEST['plan_name']
	));
}