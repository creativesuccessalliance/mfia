<?php

$PageTitle = 'Your Order Was Successful!';

if (isset ($_GET['inf_field_Email']) || !empty ($_GET['inf_field_Email'])) { 
    $inf_field_Email = $_GET['inf_field_Email'];
}
else {
    $inf_field_Email = $_COOKIE['inf_field_Email'];
}

if (isset($_GET['inf_field_FirstName']) || !empty($_GET['inf_field_FirstName']) || isset($_GET['inf_field_LastName']) || !empty($_GET['inf_field_LastName']) || isset($_GET['inf_field_StreetAddress1']) || !empty($_GET['inf_field_StreetAddress1']) || isset($_GET['inf_field_StreetAddress2']) || !empty($_GET['inf_field_StreetAddress2']) || isset($_GET['inf_field_City']) || !empty($_GET['inf_field_City']) || isset($_GET['inf_field_State']) || !empty($_GET['inf_field_State']) || isset($_GET['inf_field_PostalCode']) || !empty($_GET['inf_field_PostalCode']) || isset($_GET['inf_field_Address2Street1']) || !empty($_GET['inf_field_Address2Street1']) || isset($_GET['inf_field_Address2Street2']) || !empty($_GET['inf_field_Address2Street2']) || isset($_GET['inf_field_City2']) || !empty($_GET['inf_field_City2']) || isset($_GET['inf_field_State2']) || !empty($_GET['inf_field_State2']) || isset($_GET['inf_field_PostalCode2']) || !empty($_GET['inf_field_PostalCode2']) || isset($_GET['ProductName']) || !empty($_GET['ProductName']) || isset($_GET['ProductPrice']) || !empty($_GET['ProductPrice'])) {
    $FirstName      = $_GET['inf_field_FirstName'];
    $LastName       = $_GET['inf_field_LastName'];
    $BillingAddress = $_GET['inf_field_StreetAddress1'];
    $BillingAddress2 = $_GET['inf_field_StreetAddress2'];
    $BillingCity    = $_GET['inf_field_City'];
    $BillingState   = $_GET['inf_field_State'];
    $BillingZip     = $_GET['inf_field_PostalCode'];
    $ShippingAddress = $_GET['inf_field_Address2Street1'];
    $ShippingAddress2 = $_GET['inf_field_Address2Street2'];
    $ShippingCity    = $_GET['inf_field_City2'];
    $ShippingState   = $_GET['inf_field_State2'];
    $ShippingZip     = $_GET['inf_field_PostalCode2'];
    $ProductName    = $_GET['ProductName'];
    $ProductPrice   = $_GET['ProductPrice'];
    $ThankYouURL    = 'https://multifamilyinvestors.org/ups/underwriting-template-thank-you.php?inf_field_FirstName=' . urlencode($FirstName) . '&inf_field_LastName=' . urlencode($LastName) . '&inf_field_StreetAddress1=' . urlencode($BillingAddress) . '&inf_field_StreetAddress2=' . urlencode($BillingAddress2) . '&inf_field_City=' . urlencode($BillingCity) . '&inf_field_State=' . urlencode($BillingState) . '&inf_field_PostalCode=' . urlencode($BillingZip) . '&inf_field_Address2Street1=' . urlencode($ShippingAddress) . '&inf_field_Address2Street2=' . urlencode($ShippingAddress2) . '&inf_field_City2=' . urlencode($ShippingCity) . '&inf_field_State2=' . urlencode($ShippingState) . '&inf_field_PostalCode2=' . urlencode($ShippingZip) . '&infusion_name=' . urlencode($ProductName) . '&PayTotal_A=' . urlencode($ProductPrice);
} else {
    $ThankYouURL = 'https://multifamilyinvestors.org/ups/underwriting-template-thank-you.php';
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

    <link rel="shortcut icon" href="favicon.png">
    
    <title>Your Order Was Successful!</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

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

    <style>
        i.fa-check-square-o { color: #b20000;}
    </style>

</head>

<body style="background: #004060; /* Old browsers */
    background: -moz-linear-gradient(top,  #004060 0%, #0080c4 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#004060), color-stop(100%,#0080c4)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #004060 0%,#0080c4 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #004060 0%,#0080c4 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #004060 0%,#0080c4 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #004060 0%,#0080c4 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#004060', endColorstr='#0080c4',GradientType=0 ); /* IE6-9 */">

    <div class="container">
        <h1 class="text-center" style="color: #fff; font-size: 42px; margin-bottom: 0">Your Order Was Successful!</h1>
        <h2 class="text-center" style="color: #fff; margin-top: 0; font-weight: 400">Here's a special offer just for you!</h2>
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="padding: 0; background: #fff">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="//fast.wistia.net/embed/iframe/x3k75ygjo6?videoFoam=true" allowtransparency="true" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="510" height="287"></iframe>
                </div>
                <script src="//fast.wistia.net/assets/external/E-v1.js"></script>
            </div>
            <div class="col-md-8 col-md-offset-2" style="background: #fff; padding: 0 40px">
                <div id="home-study-course-cta-top" style="display: none; margin-top: 20px">
    <form id="home-study-course-upsell-top" accept-charset="UTF-8" action="https://m160.infusionsoft.com/app/form/process/2702c71360efaec1c62616f2d5507e16" class="infusion-form" method="POST" data-parsley-validate>
        <input name="inf_form_xid" type="hidden" value="2702c71360efaec1c62616f2d5507e16" />
        <input name="inf_form_name" type="hidden" value="$995 Home Study Course Upsell" />
        <input name="infusionsoft_version" type="hidden" value="1.39.0.34" />
        <input id="inf_field_Email" name="inf_field_Email" type="hidden" value="<?php echo $inf_field_Email ?>" />
                                                    <input id="inf_field_FirstName" name="inf_field_FirstName" type="hidden" value="<?php echo $FirstName ?>" />
                    <input id="inf_field_LastName" name="inf_field_LastName" type="hidden" value="<?php echo $LastName ?>" />
                    <input id="inf_field_StreetAddress1" name="inf_field_StreetAddress1" type="hidden" value="<?php echo $BillingAddress ?>" />
                    <input id="inf_field_StreetAddress2" name="inf_field_StreetAddress2" type="hidden" value="<?php echo $BillingAddress2 ?>" />
                    <input id="inf_field_City" name="inf_field_City" type="hidden" value="<?php echo $BillingCity ?>" />
                    <input id="inf_field_State" name="inf_field_State" type="hidden" value="<?php echo $BillingState ?>" />
                    <input id="inf_field_PostalCode" name="inf_field_PostalCode" type="hidden" value="<?php echo $BillingZip ?>" />
                    <input id="inf_field_Address2Street1" name="inf_field_Address2Street1" type="hidden" value="<?php echo $ShippingAddress ?>" />
                    <input id="inf_field_StreetAddress2" name="inf_field_StreetAddress2" type="hidden" value="<?php echo $ShippingAddress2 ?>" />
                    <input id="inf_field_City2" name="inf_field_City2" type="hidden" value="<?php echo $ShippingCity ?>" />
                    <input id="inf_field_State2" name="inf_field_State2" type="hidden" value="<?php echo $ShippingState ?>" />
                    <input id="inf_field_PostalCode2" name="inf_field_PostalCode2" type="hidden" value="<?php echo $ShippingZip ?>" />
                        <input id="ProductName" name="ProductName" type="hidden" value="Apartment House Riches Home Study Course" />
                        <input id="ProductPrice" name="ProductPrice" type="hidden" value="995.0" />
        <input id="Order" type="image" src="../img/funnel/btn-ship-course.gif" class="img-responsive img-center" style="margin-bottom: 20px;">
        <div class="alert alert-warning text-center" style="border: 1px dashed; margin-bottom: 5px">
            <p class="text-center" style="line-height: 1;"><span class="terms-top text-danger faa-flash animated hidden"><small>Check this Box</small> <i class="fa fa-arrow-right"></i></span>
                <input id="terms-checkbox-top" type="checkbox" name="terms-top" data-parsley-error-message="You must agree to these terms and conditions." data-parsley-errors-container="#terms-error-top" required data-parsley-group="terms-top"> I understand that by clicking the button above, my credit card will be charged a one-time fee of $995. Please click the button only once, your submission may take a few seconds to complete.</p>
        </div>
        <span id="terms-error-top"></span>
    </form>
</div>

 


                <h2 class="text-center">Here is just a sample of what you will get
                <br>(there’s way too much to list)...</h2>
                <ul style="list-style-type: none; font-size: 20px;">
                    <li><i class="fa fa-check-square-o fa-lg"></i> Information-packed 184-page manual</li>
                    <li><i class="fa fa-check-square-o fa-lg"></i> 12 Audio CDs</li>
                    <li><i class="fa fa-check-square-o fa-lg"></i> Letters, Forms and Leases CD</li>
                    <li><i class="fa fa-check-square-o fa-lg"></i> Quick Start Guide DVD</li>
                    <li><i class="fa fa-check-square-o fa-lg"></i> <em>23 Most Costly Mistakes and How to Avoid Them</em></li>
                    <li><i class="fa fa-check-square-o fa-lg"></i> <em>77 Ways to Fill Your Vacancies Fast</em></li>
                    <li><i class="fa fa-check-square-o fa-lg"></i> Multi Unit Profit Finder Analyzer CD</li>
                    <li><i class="fa fa-check-square-o fa-lg"></i> Million Dollar Deals CDs</li>
                    <li><i class="fa fa-check-square-o fa-lg"></i> International Investing CD</li>
                    <li><i class="fa fa-check-square-o fa-lg"></i> Principles of Success - 84 page manual and 4 Audio CDs</li>
                </ul>
                <hr class="shadow">
                <img src="../img/funnel/ahr-bundle.png" class="img-responsive center-block">
                <hr class="shadow">
                <form id="home-study-course-upsell" accept-charset="UTF-8" action="https://m160.infusionsoft.com/app/form/process/2702c71360efaec1c62616f2d5507e16" class="infusion-form" method="POST" data-parsley-validate>
                    <input name="inf_form_xid" type="hidden" value="2702c71360efaec1c62616f2d5507e16" />
                    <input name="inf_form_name" type="hidden" value="$995 Home Study Course Upsell" />
                    <input name="infusionsoft_version" type="hidden" value="1.39.0.34" />
                    <input id="inf_field_Email" name="inf_field_Email" type="hidden" value="<?php echo $inf_field_Email ?>" />
                                         <input id="inf_field_FirstName" name="inf_field_FirstName" type="hidden" value="<?php echo $FirstName ?>" />
                    <input id="inf_field_LastName" name="inf_field_LastName" type="hidden" value="<?php echo $LastName ?>" />
                    <input id="inf_field_StreetAddress1" name="inf_field_StreetAddress1" type="hidden" value="<?php echo $BillingAddress ?>" />
                    <input id="inf_field_StreetAddress2" name="inf_field_StreetAddress2" type="hidden" value="<?php echo $BillingAddress2 ?>" />
                    <input id="inf_field_City" name="inf_field_City" type="hidden" value="<?php echo $BillingCity ?>" />
                    <input id="inf_field_State" name="inf_field_State" type="hidden" value="<?php echo $BillingState ?>" />
                    <input id="inf_field_PostalCode" name="inf_field_PostalCode" type="hidden" value="<?php echo $BillingZip ?>" />
                    <input id="inf_field_Address2Street1" name="inf_field_Address2Street1" type="hidden" value="<?php echo $ShippingAddress ?>" />
                    <input id="inf_field_StreetAddress2" name="inf_field_StreetAddress2" type="hidden" value="<?php echo $ShippingAddress2 ?>" />
                    <input id="inf_field_City2" name="inf_field_City2" type="hidden" value="<?php echo $ShippingCity ?>" />
                    <input id="inf_field_State2" name="inf_field_State2" type="hidden" value="<?php echo $ShippingState ?>" />
                    <input id="inf_field_PostalCode2" name="inf_field_PostalCode2" type="hidden" value="<?php echo $ShippingZip ?>" />
                        <input id="ProductName" name="ProductName" type="hidden" value="Apartment House Riches Home Study Course" />
                        <input id="ProductPrice" name="ProductPrice" type="hidden" value="995.0" />
                    <input id="Order" type="image" src="../img/funnel/btn-ship-course.gif" class="img-responsive img-center" style="margin-bottom: 20px;">
                    <div class="alert alert-warning text-center" style="border: 1px dashed; margin-bottom: 5px">
                        <p class="text-center" style="line-height: 1;"><span class="terms text-danger faa-flash animated hidden"><small>Check this Box</small> <i class="fa fa-arrow-right"></i></span> <input id="terms-checkbox" type="checkbox" name="terms" data-parsley-error-message="You must agree to these terms and conditions." data-parsley-errors-container="#terms-error" required data-parsley-group="terms"> I understand that by clicking the button above, my credit card will be charged a one-time fee of $995. Please click the button only once, your submission may take a few seconds to complete.</p>
                    </div>
                    <span id="terms-error"></span>
                </form>
                <p class="text-center" style="margin: 20px 0 40px"><a href="<?php echo $ThankYouURL ?>" style="color: #00f; font-size: 20px;">No thanks, please give me access to the training I’ve already enrolled for.</a></p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    _kmq.push(['identify', '<?php echo $inf_field_Email ?>']); // IDENTIFY CONTACT
    _kmq.push(['record', 'Viewed Page - UPS Home Study Course']); // PAGE SPECIFIC EVENT
    </script>

    <?php include( '../footer.php');?>

    <!-- Exit Pop -->
    <script>
    var _ouibounce = ouibounce(document.getElementById('three-pay-modal'), {
        aggressive: true,
        timer: 0,
        callback: function() {
            $('#three-pay-modal').modal('show');
        }
    });
    </script>

    <!-- Hide/Show Terms Message -->
        <script>
        $(document).ready(function() {
            $('#home-study-course-upsell').parsley().subscribe('parsley:form:validate', function(formInstance) {

                // check if terms checkbox is selected
                if (formInstance.isValid('terms', true)) {
                    $('.terms').addClass('hidden');

                    return;
                }
                // else stop form submission
                formInstance.submitEvent.preventDefault();

                // and display a warning message
                $('.invalid-form-error-message')
                $('.terms').removeClass('hidden');
                return;
            });
        });
        </script>

         <script>
        $(document).ready(function() {
            $('#home-study-course-upsell-top').parsley().subscribe('parsley:form:validate', function(formInstance) {

                // check if terms checkbox is selected
                if (formInstance.isValid('terms-top', true)) {
                    $('.terms-top').addClass('hidden');

                    return;
                }
                // else stop form submission
                formInstance.submitEvent.preventDefault();

                // and display a warning message
                $('.invalid-form-error-message')
                $('.terms-top').removeClass('hidden');
                return;
            });
        });
        </script>

        <!-- Hide/Show Terms Arrow -->
        <script>
        $('#terms-checkbox').change(function() {
            if ($(this).is(":checked")) {
                $('.terms').addClass("hidden");
            } else {
                $('.terms').removeClass("hidden");
            }
        });

        $('#terms-checkbox-top').change(function() {
            if ($(this).is(":checked")) {
                $('.terms-top').addClass("hidden");
            } else {
                $('.terms-top').removeClass("hidden");
            }
        });
        </script>



    <script>
    $(document).ready(function() {
        // display CTA at 6:05
        $("#home-study-course-cta-top").delay(365000).fadeIn('slow');
    });
    </script>

    <!-- Three Pay Modal -->
    <div id="three-pay-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: repeating-linear-gradient(
              45deg,
              #A33332,
              #A33332 20px,
              #8C0000 20px,
              #8C0000 40px
            );; padding: 10px">
                    <button type="button" class="close mynewclassclose" data-dismiss="modal" aria-hidden="true">
                        <img src="../img/close-btn.png" height="38" width="38" />
                    </button>
                    <h1 class="modal-title text-center" style="color: #fff; font-size: 36px; text-shadow: 1px 1px 1px #000;">WAIT! Before you go...</h1>
                </div>
                <div class="modal-body">
                    <h2 class="text-center" style="margin-top: 0">What if I was willing to let you split the program into 3 payments of $349?</h2>
                    <p class="text-center">Click the button below to get my complete <strong>Apartment House Riches</strong> home study course! You will be on your way to <strong>fast success</strong> in no time!</p>
                    <img src="../img/funnel/ahr-bundle.png" class="img-responsive center-block">
                    <form accept-charset="UTF-8" action="https://m160.infusionsoft.com/app/form/process/0d2868b0ffcee7e1aec1f9e567aa4a8b" class="infusion-form" method="POST" data-parsley-validate>
                        <input name="inf_form_xid" type="hidden" value="0d2868b0ffcee7e1aec1f9e567aa4a8b" />
                        <input name="inf_form_name" type="hidden" value="$349x3 Home Study Course Upsell" />
                        <input name="infusionsoft_version" type="hidden" value="1.39.0.34" />
                        <input id="inf_field_Email" name="inf_field_Email" type="hidden" value="<?php echo $inf_field_Email ?>" />
                                            <input id="inf_field_FirstName" name="inf_field_FirstName" type="hidden" value="<?php echo $FirstName ?>" />
                    <input id="inf_field_LastName" name="inf_field_LastName" type="hidden" value="<?php echo $LastName ?>" />
                    <input id="inf_field_StreetAddress1" name="inf_field_StreetAddress1" type="hidden" value="<?php echo $BillingAddress ?>" />
                    <input id="inf_field_StreetAddress2" name="inf_field_StreetAddress2" type="hidden" value="<?php echo $BillingAddress2 ?>" />
                    <input id="inf_field_City" name="inf_field_City" type="hidden" value="<?php echo $BillingCity ?>" />
                    <input id="inf_field_State" name="inf_field_State" type="hidden" value="<?php echo $BillingState ?>" />
                    <input id="inf_field_PostalCode" name="inf_field_PostalCode" type="hidden" value="<?php echo $BillingZip ?>" />
                    <input id="inf_field_Address2Street1" name="inf_field_Address2Street1" type="hidden" value="<?php echo $ShippingAddress ?>" />
                    <input id="inf_field_StreetAddress2" name="inf_field_StreetAddress2" type="hidden" value="<?php echo $ShippingAddress2 ?>" />
                    <input id="inf_field_City2" name="inf_field_City2" type="hidden" value="<?php echo $ShippingCity ?>" />
                    <input id="inf_field_State2" name="inf_field_State2" type="hidden" value="<?php echo $ShippingState ?>" />
                    <input id="inf_field_PostalCode2" name="inf_field_PostalCode2" type="hidden" value="<?php echo $ShippingZip ?>" />
                        <input id="ProductName" name="ProductName" type="hidden" value="Apartment House Riches Home Study Course" />
                        <input id="PaymentPlan" name="PaymentPlan" type="hidden" value="349.0" />
                        <input id="Order" type="image" src="../img/funnel/btn-3payments.gif" class="img-responsive center-block" style="margin-bottom: 20px;">
                        <div class="alert alert-warning text-center" style="border: 1px dashed; margin-bottom: 5px">
                            <p class="text-center" style="line-height: 1;">
                                <input type="checkbox" name="terms-modal" data-parsley-error-message="You must agree to these terms and conditions." data-parsley-errors-container="#terms-error-modal" required data-parsley-group="terms-modal"> I understand that by clicking the button above, my credit card will be charged $349 now and then again on <?php
$date = new DateTime();
$date->modify("+30 day");
echo $date->format("M j");
?> and <?php
$date = new DateTime();
$date->modify("+60 day");
echo $date->format("M j");
?>.
Please click the button only once, your submission may take a few seconds to complete.</p>
                        </div>
                        <span id="terms-error-modal"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>



