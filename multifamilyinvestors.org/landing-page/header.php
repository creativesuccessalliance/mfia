<?php
if (isset ($_GET['csalsid']) || !empty ($_GET['csalsid'])) {
	$csalsid = $_GET['csalsid'];
}
elseif (isset ($_GET['inf_custom_csalsid']) || !empty ($_GET['inf_custom_csalsid'])) {
	$csalsid = $_GET['inf_custom_csalsid'];
}
else {
	$csalsid = NULL;
}

// Event Variables
$location = "Baltimore";
$date = "October 18, 2014";

// Email
if ($csalsid == 'em') {
  $btnurl = '#step1-em';
}
// Social Media
elseif ($csalsid == 'sm') {
  $btnurl = '#step1-sm';
}
// Online
elseif ($csalsid == 'online') {
  $btnurl = '#step1-online';
}
// chris test
elseif ($csalsid == 'chris') {
  $btnurl = "register.php";
}

// Default to Direct Mail
else {
  $btnurl = '#step1-dm';
}







if ($csalsid == 'house') {
	$homelink = "baltimore.php?csalsid=$csalsid";
	$reglink = "register-house.php?csalsid=$csalsid";
	$guestlink = "register-guest-house.php";
}
elseif ($csalsid == 'em') {
	$homelink = "baltimore.php?csalsid=$csalsid";
	$reglink = "register-em.php";
	$guestlink = "register-guest-em.php";
}
elseif ($csalsid == 'sm') {
	$homelink = "baltimore.php?csalsid=$csalsid";
	$reglink = "register-sm.php";
	$guestlink = "register-guest-sm.php";
}
elseif ($csalsid == 'fb') {
	$homelink = "baltimore.php?csalsid=$csalsid";
	$reglink = "register-fb.php";
	$guestlink = "register-guest-fb.php";
}
else {
	$homelink = "baltimore.php";
	$reglink = "register.php";
	$guestlink = "register-guest.php";
}

if (isset ($_GET['inf_field_FirstName']) || !empty ($_GET['inf_field_FirstName'])) {
	$FirstName = $_GET['inf_field_FirstName'];
}
else {
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>Multi-Family Workshop - <?php echo $location . " on " . $date;?></title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css">
    <!-- Custom CSS stylesheet -->
    <link href="css/theme.css" rel="stylesheet" media="screen">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

        <script src="//cdn.optimizely.com/js/1841780774.js"></script>

    <!-- KISSmetrics tracking snippet -->
<script type="text/javascript">var _kmq = _kmq || [];
var _kmk = _kmk || '6fe3e2d53f742b6510321c9519383d11f2023a26';
function _kms(u){
  setTimeout(function(){
    var d = document, f = d.getElementsByTagName('script')[0],
    s = d.createElement('script');
    s.type = 'text/javascript'; s.async = true; s.src = u;
    f.parentNode.insertBefore(s, f);
  }, 1);
}
_kms('//i.kissmetrics.com/i.js');
_kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
</script>

    <style> body {text-align: left}</style>
  </head>

<body>