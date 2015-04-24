<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="shortcut icon" href="favicon.png">
    
    <title>Thank you!</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome-animation.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>


    <!-- Header Contact Information -->
    <div class="hidden-print hidden-xs" style="background: #004060; /* Old browsers */
    background: -moz-linear-gradient(top,  #004060 0%, #0080c4 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#004060), color-stop(100%,#0080c4)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #004060 0%,#0080c4 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #004060 0%,#0080c4 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #004060 0%,#0080c4 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #004060 0%,#0080c4 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#004060', endColorstr='#0080c4',GradientType=0 ); /* IE6-9 */">
        <div id="header-contact" class="container text-right">
            <i class="fa fa-phone"></i>&nbsp;1-800-559-8590
            <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:support@multifamilyinvestors.org">support@multifamilyinvestors.org</a>
        </div>

        <!-- Logo & Navigation -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="../index.php"><img src="../img/logo.png" class="img-responsive navbar-logo"></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="../about.php">About</a>
                        </li>
                        <li><a href="../faqs.php">Real Estate FAQs</a>
                        </li>
                        <li><a href="http://multifamilyinvestors.org/articles">Articles</a>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Live Events <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/california">California - April 2015</a></li>
                        </ul>
                        </li>
                        <li><a href="../contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center">Thank you for your order!</h1>
                <h2>Below are your order details:</h2>
<div role="tabpanel">
                <ul id="tabs-order" class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#order-information" data-toggle="tab"><i class="fa fa-credit-card"></i> Your Order Information</a></li>
  <li role="presentation"><a href="#shipping-information" data-toggle="tab"><i class="fa fa-truck"></i> Your Shipping Information</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="order-information">
  <h3>Order Information</h3>

<?php
$payment2 = new DateTime();
$payment2->modify("+30 day");

$payment3 = new DateTime();
$payment3->modify("+60 day");
?>

<?php 
if (isset ($_GET['orderId']) || !empty ($_GET['orderId'])) { 
    $OrderID = $_GET['orderId'];
        echo "<strong>Order Number:</strong> " . $OrderID . " <br> ";
}
else {
}
if (isset ($_GET['infusion_name']) || !empty ($_GET['infusion_name'])) { 
    $ProductName = $_GET['infusion_name'];
        echo "<strong>Product:</strong> " . $ProductName . " <br> ";
}
elseif (isset ($_GET['ProductName']) || !empty ($_GET['ProductName'])) { 
    $ProductName = $_GET['ProductName'];
        echo "<strong>Product:</strong> " . $ProductName . " <br> ";
}
if (isset ($_GET['PayTotal_A']) || !empty ($_GET['PayTotal_A'])) { 
    $ProductPrice = $_GET['PayTotal_A'];
        echo "<strong>Your credit card has been charged a one-time price of:</strong> $" . $ProductPrice . "0 <br> ";
}
elseif (isset ($_GET['ProductPrice']) || !empty ($_GET['ProductPrice'])) { 
    $ProductPrice = $_GET['ProductPrice'];
        echo "<strong>Your credit card has been charged a one-time price of:</strong> $" . $ProductPrice . "0 <br> ";
}
elseif (isset ($_GET['PaymentPlan']) || !empty ($_GET['PaymentPlan'])) { 
    $ProductPrice = $_GET['PaymentPlan'];
        echo "<strong>Your Payment Plan:</strong> Your credit card has been charged $" . $ProductPrice . "0 now and will be charged again on " . $payment2->format("M j") . " and " . $payment3->format("M j") . ".";
}
else {
    echo "<div class='alert alert-warning text-center'><i class='fa fa-exclamation-triangle'></i> Your order details could not be retrieved.<br>Please contact support to ensure your order has been processed.</div>";
}
?>

</div>

<div role="tabpanel" class="tab-pane fade" id="shipping-information">
<h3>Shipping Information</h3>
<?php 
if (isset ($_GET['Contact0FirstName']) || !empty ($_GET['Contact0FirstName'])) { 
    $FirstName = $_GET['Contact0FirstName'];
        echo "<p>We will be sending your order to the following address:</p> <strong>Name:</strong> " . $FirstName . " ";
}
elseif (isset ($_GET['inf_field_FirstName']) || !empty ($_GET['inf_field_FirstName'])) { 
    $FirstName = $_GET['inf_field_FirstName'];
        echo "<p>We will be sending your order to the following address:</p> <strong>Name:</strong> " . $FirstName . " ";
}
if (isset ($_GET['Contact0LastName']) || !empty ($_GET['Contact0LastName'])) { 
    $LastName = $_GET['Contact0LastName'];
        echo $LastName . "<br>";
}
elseif (isset ($_GET['inf_field_LastName']) || !empty ($_GET['inf_field_LastName'])) { 
    $LastName = $_GET['inf_field_LastName'];
        echo $LastName . "<br>";
}
if (isset ($_GET['Contact0StreetAddress1']) || !empty ($_GET['Contact0StreetAddress1'])) { 
    $BillingAddress = $_GET['Contact0StreetAddress1'];
        echo "<strong>Address:</strong> " . $BillingAddress . " <br> ";
}
elseif (isset ($_GET['inf_field_StreetAddress1']) || !empty ($_GET['inf_field_StreetAddress1'])) { 
    $BillingAddress = $_GET['inf_field_StreetAddress1'];
        echo "<strong>Address:</strong> " . $BillingAddress . " <br> ";
}
if (isset ($_GET['Contact0City']) || !empty ($_GET['Contact0City'])) { 
    $BillingCity = $_GET['Contact0City'];
        echo "<strong>City:</strong> " . $BillingCity . ", ";
}
elseif (isset ($_GET['inf_field_City']) || !empty ($_GET['inf_field_City'])) { 
    $BillingCity = $_GET['inf_field_City'];
        echo "<strong>City:</strong> " . $BillingCity . ", ";
}
if (isset ($_GET['Contact0State']) || !empty ($_GET['Contact0State'])) { 
    $BillingState = $_GET['Contact0State'];
        echo $BillingState;
}
elseif (isset ($_GET['inf_field_State']) || !empty ($_GET['inf_field_State'])) { 
    $BillingState = $_GET['inf_field_State'];
        echo $BillingState;
}
if (isset ($_GET['Contact0PostalCode']) || !empty ($_GET['Contact0PostalCode'])) { 
    $BillingZip = $_GET['Contact0PostalCode'];
        echo " " . $BillingZip;
}
elseif (isset ($_GET['inf_field_PostalCode']) || !empty ($_GET['inf_field_PostalCode'])) { 
    $BillingZip = $_GET['inf_field_PostalCode'];
        echo " " . $BillingZip;
}
else {
echo "<div class='alert alert-warning text-center'><i class='fa fa-exclamation-triangle'></i> Your shipping details could not be retrieved.<br>Please contact support to ensure your order has been processed.</div>";
}
?>


</div>
</div>
</div>
<hr class="shadow">
<h2>Please Note:</h2>
<p>An email has been sent to the email address you used for your order. This email contains the link to download your product and bonuses.</p>
<h2>100% Iron-Clad Better Than Risk-Free Guarantee</h2> 
<div class="row">
    <div class="col-sm-4">
        <img class="img-responsive" alt="100% Guarantee" src="img/funnel/seal-guarantee.png" />
    </div>
    <div class="col-sm-8">
<p>If for some reason you’re not completely satisfied with the quality of this invaluable training, simply send us an email and return the program anytime within the next 30 days, and you’ll receive a fast and courteous refund. It’s literally that simple. AND... Please keep your invaluable <strong>BONUS GIFTS</strong> for <strong>FREE</strong> as our gift to you for taking action.</p>
    </div>
</div>
<p><strong>Please Note: A receipt for your investment has been sent to your email address. <small>The charge on your credit card statement will appear as “Creative Success Alliance.”</small></strong></p>
               

             
             
            </div>
           

</div>
</div>


    <?php include('footer.php');?>
