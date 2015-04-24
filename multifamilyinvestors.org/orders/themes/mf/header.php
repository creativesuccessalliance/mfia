<?php
if (isset ($_GET['csalsid']) || !empty ($_GET['csalsid'])) {
$csalsid = $_GET['csalsid'];
setcookie("CSAlsid", $csalsid);
}
else {
}
?>

<?php 
if (isset ($_GET['inf_field_Email']) || !empty ($_GET['inf_field_Email'])) {
    $PrimaryEmail = $_GET['inf_field_Email'];
}
else {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/mf/favicon.ico">
    <title>Multi Family Investing Association - Order</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!-- Custom CSS stylesheet -->
    <link href="themes/mf/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<?php
	$ipaddress = $_SERVER["REMOTE_ADDR"];
	//Check if your IP Address is one of the following
	// 152.179.160.114 - CSA
	// 66.67.46.235, 63.131.31.189 - Mike Deiure
	// 69.35.208.62 - Ray
	// 66.113.45.134, 66.113.45.135 Montana
	
	if (($ipaddress == '152.179.160.114') || ($ipaddress == '66.67.46.235') || ($ipaddress == '66.113.45.134') || ($ipaddress == '63.131.31.189') || ($ipaddress == '69.35.208.62') || ($ipaddress == '66.113.45.135')) {
	} 
	else {
		include('../tracking.php');
	}
	?>

</head>
<body>
    <header>
        <div class="container">
            <a href="http://www.multifamilyinvestors.org/"><img src="themes/mf/img/logo.png" class="logo img-responsive">
            </a>
        </div>
    </header>