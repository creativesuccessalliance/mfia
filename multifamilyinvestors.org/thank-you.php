<?php include('../header.php');?>

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
$second_payment = new DateTime();
$second_payment->modify("+30 day");

$third_payment = new DateTime();
$third_payment->modify("+60 day");

if (isset ($_GET['orderId']) && !empty ($_GET['orderId'])) { 
    $OrderID = $_GET['orderId'];
        echo "<strong>Order Number:</strong> " . $OrderID . " <br> ";
}
if (isset ($_GET['infusion_name']) && !empty ($_GET['infusion_name'])) { 
    $ProductName = $_GET['infusion_name'];
        echo "<strong>Product:</strong> " . $ProductName . " <br> ";
}
elseif (isset ($_GET['ProductName']) && !empty ($_GET['ProductName'])) { 
    $ProductName = $_GET['ProductName'];
        echo "<strong>Product:</strong> " . $ProductName . " <br> ";
}

// 3 pay webinar
if (isset ($_GET['PlanCount_A']) && !empty ($_GET['PlanCount_A'])) { 
    $PlanCount = $_GET['PlanCount_A'];
}
if (isset ($_GET['ProductID']) || !empty ($_GET['ProductID'])) { 
    $ProductID = $_GET['ProductID'];
}
if (isset ($_GET['Contact0_EventDateLocation']) && !empty ($_GET['Contact0_EventDateLocation'])) { 
    $EventDateLocation = $_GET['Contact0_EventDateLocation'];
    echo "<strong>Your Event:</strong> " . $EventDateLocation . "<br> ";
}

if ($PlanCount == '2') {
    echo "<strong>Your Payment Plan:</strong> Your credit card has been charged $515 now and will be charged again on " . $second_payment->format("M j") . " and " . $third_payment->format("M j") . ".<br><br><div class='alert alert-warning text-center'><i class='fa fa-exclamation-triangle'></i> Reminder: You must be paid in full before attending the event.</div>";
}
elseif (isset ($_GET['PayTotal_A']) && !empty ($_GET['PayTotal_A'])) { 
    $ProductPrice = $_GET['PayTotal_A'];
        echo "<strong>Your credit card has been charged a one-time price of:</strong> $" . $ProductPrice . "0 <br> ";
}

else {
    echo "<div class='alert alert-warning text-center'><i class='fa fa-exclamation-triangle'></i> Your order details could not be retrieved.<br>Please contact support to ensure your order has been processed.</div>";
}
?>

</div>

<div role="tabpanel" class="tab-pane fade" id="shipping-information">
<h3>Shipping Information</h3>
<?php 
// first name
if (isset ($_GET['Contact0FirstName']) && !empty ($_GET['Contact0FirstName'])) { 
    $FirstName = $_GET['Contact0FirstName'];
        echo "<p>We will be sending your order to the following address:</p> <strong>Name:</strong> " . $FirstName . " ";
}
elseif (isset ($_GET['inf_field_FirstName']) && !empty ($_GET['inf_field_FirstName'])) { 
    $FirstName = $_GET['inf_field_FirstName'];
        echo "<p>We will be sending your order to the following address:</p> <strong>Name:</strong> " . $FirstName . " ";
}

// last name
if (isset ($_GET['Contact0LastName']) && !empty ($_GET['Contact0LastName'])) { 
    $LastName = $_GET['Contact0LastName'];
        echo $LastName . "<br>";
}
elseif (isset ($_GET['inf_field_LastName']) && !empty ($_GET['inf_field_LastName'])) { 
    $LastName = $_GET['inf_field_LastName'];
        echo $LastName . "<br>";
}
// street address
if (isset ($_GET['Contact0Address2Street1']) && !empty ($_GET['Contact0Address2Street1'])) { 
    $BillingAddress = $_GET['Contact0Address2Street1'];
        echo "<strong>Address:</strong> " . $BillingAddress . " <br> ";
}
elseif (isset ($_GET['Contact0StreetAddress1']) && !empty ($_GET['Contact0StreetAddress1'])) { 
    $BillingAddress = $_GET['Contact0StreetAddress1'];
        echo "<strong>Address:</strong> " . $BillingAddress . " <br> ";
}
elseif (isset ($_GET['inf_field_StreetAddress1']) && !empty ($_GET['inf_field_StreetAddress1'])) { 
    $BillingAddress = $_GET['inf_field_StreetAddress1'];
        echo "<strong>Address:</strong> " . $BillingAddress . " <br> ";
}
// street address 2
if (isset ($_GET['Contact0Address2Street2']) && !empty ($_GET['Contact0Address2Street2'])) { 
    $BillingAddress2 = $_GET['Contact0Address2Street2'];
        echo $BillingAddress2 . " <br>";
}
elseif (isset ($_GET['Contact0StreetAddress2']) && !empty ($_GET['Contact0StreetAddress2'])) { 
    $BillingAddress2 = $_GET['Contact0StreetAddress2'];
        echo $BillingAddress2 . " ";
}
elseif (isset ($_GET['inf_field_StreetAddress2']) && !empty ($_GET['inf_field_StreetAddress2'])) { 
    $BillingAddress = $_GET['inf_field_StreetAddress2'];
        echo $BillingAddress2 . " ";
}
// city
if (isset ($_GET['Contact0City2']) && !empty ($_GET['Contact0City2'])) { 
    $BillingCity = $_GET['Contact0City2'];
        echo "<strong>City:</strong> " . $BillingCity . ", ";
}
elseif (isset ($_GET['Contact0City']) && !empty ($_GET['Contact0City'])) { 
    $BillingCity = $_GET['Contact0City'];
        echo "<strong>City:</strong> " . $BillingCity . ", ";
}
elseif (isset ($_GET['inf_field_City']) && !empty ($_GET['inf_field_City'])) { 
    $BillingCity = $_GET['inf_field_City'];
        echo "<strong>City:</strong> " . $BillingCity . ", ";
}
// state
if (isset ($_GET['Contact0State2']) && !empty ($_GET['Contact0State2'])) { 
    $BillingState = $_GET['Contact0State2'];
        echo $BillingState;
}
elseif (isset ($_GET['Contact0State']) && !empty ($_GET['Contact0State'])) { 
    $BillingState = $_GET['Contact0State'];
        echo $BillingState;
}
elseif (isset ($_GET['inf_field_State']) && !empty ($_GET['inf_field_State'])) { 
    $BillingState = $_GET['inf_field_State'];
        echo $BillingState;
}
// postal code
if (isset ($_GET['Contact0PostalCode2']) && !empty ($_GET['Contact0PostalCode2'])) { 
    $BillingZip = $_GET['Contact0PostalCode2'];
        echo " " . $BillingZip;
}
elseif (isset ($_GET['Contact0PostalCode']) && !empty ($_GET['Contact0PostalCode'])) { 
    $BillingZip = $_GET['Contact0PostalCode'];
        echo " " . $BillingZip;
}
elseif (isset ($_GET['inf_field_PostalCode']) && !empty ($_GET['inf_field_PostalCode'])) { 
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
        <img class="img-responsive" alt="100% Guarantee" src="../img/funnel/seal-guarantee.png" />
    </div>
    <div class="col-sm-8">
<p>If for some reason you’re not completely satisfied with the quality of this invaluable training, simply send us an email and return the program anytime within the next 30 days, and you’ll receive a fast and courteous refund. It’s literally that simple. AND... Please keep your invaluable <strong>BONUS GIFTS</strong> for <strong>FREE</strong> as our gift to you for taking action.</p>
    </div>
</div>
<p><strong>Please Note: A receipt for your investment has been sent to your email address. <small>The charge on your credit card statement will appear as “Creative Success Alliance.”</small></strong></p>
               

             
             
            </div>
           

</div>
</div>


    <?php include('../footer.php');?>
