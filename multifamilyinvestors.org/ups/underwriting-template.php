<?php

$PageTitle = 'Investing Confidently Is All About The Numbers';

if (isset ($_GET['Contact0Email']) || !empty ($_GET['Contact0Email'])) { 
    $inf_field_Email = $_GET['Contact0Email'];
}
else {
    $inf_field_Email = $_COOKIE['inf_field_Email'];
}

if (isset($_GET['Contact0FirstName']) || !empty($_GET['Contact0FirstName']) || isset($_GET['Contact0LastName']) || !empty($_GET['Contact0LastName']) || isset($_GET['Contact0StreetAddress1']) || !empty($_GET['Contact0StreetAddress1']) || isset($_GET['Contact0StreetAddress2']) || !empty($_GET['Contact0StreetAddress2']) || isset($_GET['Contact0City']) || !empty($_GET['Contact0City']) || isset($_GET['Contact0State']) || !empty($_GET['Contact0State']) || isset($_GET['Contact0PostalCode']) || !empty($_GET['Contact0PostalCode']) || isset($_GET['Contact0Address2Street1']) || !empty($_GET['Contact0Address2Street1']) || isset($_GET['Contact0Address2Street2']) || !empty($_GET['Contact0Address2Street2']) || isset($_GET['Contact0City2']) || !empty($_GET['Contact0City2']) || isset($_GET['Contact0State2']) || !empty($_GET['Contact0State2']) || isset($_GET['Contact0PostalCode2']) || !empty($_GET['Contact0PostalCode2']) || isset($_GET['orderId']) || !empty($_GET['orderId']) || isset($_GET['infusion_name']) || !empty($_GET['infusion_name']) || isset($_GET['PayTotal_A']) || !empty($_GET['PayTotal_A'])) {
    $FirstName      = $_GET['Contact0FirstName'];
    $LastName       = $_GET['Contact0LastName'];
    $BillingAddress = $_GET['Contact0StreetAddress1'];
    $BillingAddress2 = $_GET['Contact0StreetAddress2'];
    $BillingCity    = $_GET['Contact0City'];
    $BillingState   = $_GET['Contact0State'];
    $BillingZip     = $_GET['Contact0PostalCode'];
    $ShippingAddress = $_GET['Contact0Address2Street1'];
    $ShippingAddress2 = $_GET['Contact0Address2Street2'];
    $ShippingCity    = $_GET['Contact0City2'];
    $ShippingState   = $_GET['Contact0State2'];
    $ShippingZip     = $_GET['Contact0PostalCode2'];
    $OrderID        = $_GET['orderId'];
    $ProductName    = $_GET['infusion_name'];
    $ProductPrice   = $_GET['PayTotal_A'];
    $ThankYouURL    = 'https://multifamilyinvestors.org/oto/bus-tour-thank-you.php?Contact0FirstName=' . urlencode($FirstName) . '&Contact0LastName=' . urlencode($LastName) . '&Contact0StreetAddress1=' . urlencode($BillingAddress) . '&Contact0StreetAddress2=' . urlencode($BillingAddress2) . '&Contact0City=' . urlencode($BillingCity) . '&Contact0State=' . urlencode($BillingState) . '&Contact0PostalCode=' . urlencode($BillingZip) . '&Contact0Address2Street1=' . urlencode($ShippingAddress) . '&Contact0Address2Street2=' . urlencode($ShippingAddress2) . '&Contact0City2=' . urlencode($ShippingCity) . '&Contact0State2=' . urlencode($ShippingState) . '&Contact0PostalCode2=' . urlencode($ShippingZip) . '&orderId=' . urlencode($OrderID) . '&infusion_name=' . urlencode($ProductName) . '&PayTotal_A=' . urlencode($ProductPrice);
} else {
    $ThankYouURL = 'https://multifamilyinvestors.org/oto/bus-tour-thank-you.php';
}
?>

<?php include('../header.php');?>

    <!-- Call to Action -->
    <div id="call-to-action-section" class="blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">Investing Confidently <br>Is All About The Numbers</h1>
                    <h2 class="text-center" style="">How to Quickly and Accurately Analyze Deals Without Doing Any of the Math Yourself</h2>
                    <hr class="dashed">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px">
                        <iframe src="//fast.wistia.net/embed/iframe/ftqv4psn3a?videoFoam=true" allowtransparency="true" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="510" height="287"></iframe>
                        <script src="//fast.wistia.net/assets/external/E-v1.js"></script>
                    </div>
                </div>
            </div>
            <div id="cta-top" class="row" style="display: none">
                <div class="col-sm-offset-1 col-sm-10">
                    <form id="underwriting-template-upsell-top" accept-charset="UTF-8" action="https://m160.infusionsoft.com/app/form/process/3681de4df8d8f9acc95ae1fb285f2514" class="infusion-form" method="POST" data-parsley-validate>
                        <input name="inf_form_xid" type="hidden" value="3681de4df8d8f9acc95ae1fb285f2514" />
                        <input name="inf_form_name" type="hidden" value="$127 Underwriting Template Upsell" />
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
                        <input id="ProductName" name="ProductName" type="hidden" value="Underwriting Template + Bonuses" />
                        <input id="ProductPrice" name="ProductPrice" type="hidden" value="127.0" />
                        <button type="submit" class="btn btn-block cta-button">YES! I want the Always Accurate Underwriting Template&nbsp;<i class="fa fa-angle-double-right"></i></button>
                        <div class="text-center cta-disclaimer" style="margin-bottom: 5px">
                        <p class="text-center" style="line-height: 1;"><span class="terms-top faa-flash animated hidden" style="color: #FDBD4A"><small>Check this Box</small> <i class="fa fa-arrow-right" style="color: #FDBD4A"></i></span>
                            <input id="terms-checkbox-top" type="checkbox" name="terms-top" data-parsley-error-message="You must agree to these terms and conditions." data-parsley-errors-container="#terms-error-top" required data-parsley-group="terms-top" data-parsley-ui-enabled="false"> I understand that by clicking the button above, my credit card will be charged a one-time fee of $127. Please click the button only once, your submission may take a few seconds to complete.</p>
                        </div>
                        <span id="terms-error-top" class="small" style="color: #FDBD4A !important"></span>
                    </form>
                    <p class="text-center"><a href="<?php echo $ThankYouURL; ?>" style="color: #fff">No thanks, please give me access to the training I’ve already enrolled for »</a></p>
                </div>
            </div>
        </div>
    </div>

    <div id="main-content">
        <div class="container">
            <h2 class="text-center" style="margin-bottom: 20px">Learn to Analyze Quickly and Accurately and Make Sure Every Deal is a Good Deal...</h2>
            <div class="row">
                <div class="col-sm-8">
                    <p>The always accurate underwriting template and accompanying case study shows you how to plug in the income, the expenses and the mortgage amount of any deal. It then instantly tells you whether or not you have a good deal.</p>
                    <p>If the deal is not good, it has built in rules of thumb so if the numbers of a deal are outside of the normal rules of thumb, you will be alerted. This may be an opportunity for you to get a very good deal! Analyzing a deal properly is a one of the most important skills you need to acquire when investing in multi family properties. If you read the numbers wrong or don’t know how to interpret them, you could get into a bad deal.</p>
                    <p>The always accurate underwriting template and the included case study will prevent this from happening to you. These tools will give you the confidence of knowing you analyzed the deal properly. I will give you the confidence of knowing that you did it “right” when you are submitting your offer.</p>
                </div>
                <div class="col-sm-4">
                    <img src="../img/productbundle-ups-mf127.png" class="img-responsive center-block">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <img src="../img/monitor-software.png" class="img-responsive center-block">
                </div>
                <div class="col-sm-8">
                    <h2 class="text-center" style="margin-top: 0;"><i class="fa fa-quote-left"></i>&nbsp;You don’t have to do any calculations yourself&nbsp;<i class="fa fa-quote-right"></i></h2>
                    <p>You will analyze deals by focusing on the three key ratios of multi family investing. You’ll discover what each of these ratios are, why they are so important, how to calculate them and where they need to be for you to have a kick butt deal.</p>
                    <p>And here is the best part, you don’t have to do any calculations yourself, you will do no math. All you have to do is know how to plug in the numbers and the Always Accurate Underwriting Template does all the calculations for you!</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-8">
                    <p>What if the numbers don’t come out to where you need them? Well you just make one or two simple adjustments and you will know the most you can pay for the property and get the return that you and your investors want.</p>
                    <p>This is real world experience that will prepare you for making your own offers confidently.</p>
                    <p>Will you have fears and doubts? Yes! Without this template you will fear that you did the calculations correctly, you will fear that you are overpaying for the property, you will fear you will not get the cash flow you expected. These are normal fears to have.</p>
                    <p>The Always Accurate Underwriting Template eliminates these fears because it does the calculations for you and it’s designed so you input the numbers correctly!</p>
                </div>
                <div class="col-sm-4">
                    <img src="../img/woman-using-computer.jpg" class="img-responsive center-block">
                </div>
            </div>
        </div>
    </div>

    <div id="testimonial-section" style="background: url(../img/bg-blue.png) repeat; padding: 40px 0">
        <div class="container">
            <h1 class="text-center" style="font-size: 45px">Here is what you get...</h1>
            <div class="row">
                <div class="col-sm-5">
                    <img src="../img/product-ups-alwaysaccurate.png" class="img-responsive center-block" style="margin-top: 40px">
                </div>
                <div class="col-sm-7">
                    <h2 class="text-center">Always Accurate Underwriting Template
                            <span style="font-style: italic; color: #B20000; font-weight: 700">($400 value)</span>
                        </h2>
                    <p>A pre-programed software that does the necessary calculations to determine whether a multi-family property is going to be a gold mind or a land mind.</p>
                    <p>It tells you if it's a good deal. It tells you if it's a bad deal. If it's a bad deal, it pinpoints where the numbers could be off. This will allow you to turn a bad deal into a good deal and get great cash flow and appreciation.</p>
                    <p>This proven tool is used by thousands of Real Estate investors throughout the US and the world to analyze multi family deals safely and confidently.</p>
                    <p>It’s an important tool in the most successful real estate investors tool box.</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-7">
                    <h2 class="text-center">Freedom Way Case Study and Training Session
                            <span style="font-style: italic; color: #B20000; font-weight: 700">($250 value)</span>
                        </h2>
                    <p>To get you started fast and accurately, you’ll get an actual case study of an actual 142 Unit Apartment Deal. You will plug in the DVD, spread out the listing sheet and the deal financials in front of you.  You will watch and follow along as your instructor takes you step by step through the process of understanding the numbers of a deal. You will then be shown how to plug those numbers into the Always Accurate Underwriting Template to determine if this opportunity is really a deal.</p>
                    <p>You won’t be alone, there were 242 other students in the class the day this was recorded and you will hear their questions and comments as well. This is like doing your very first 100+ unit deal!</p>
                </div>
                <div class="col-sm-5">
                    <img src="../img/product-ups-report-and-training.png" class="img-responsive center-block" style="margin-top: 40px">
                </div>
            </div>
            <hr>
            <div class="row">
                <h2 class="text-center">Free Business Coaching Sessions To Keep You On Track
                            <span style="font-style: italic; color: #B20000; font-weight: 700">($500 value)</span>
                        </h2>
                <div class="col-sm-5">
                    <img src="../img/certificate-quickstart.png" class="img-responsive center-block">
                </div>
                <div class="col-sm-7">
                    <p>Just to sweeten the deal, I’m going to give you two strategy sessions with my in house business consultants. These consultants are here to guide you and watch your back as you go through the process. They are here to make sure and re-assure you that you are doing things correctly. Their mission is to give you the confidence of knowing you CAN do this.</p>

<p>Is there a deal your looking at right now or just want consultation on how to get your business started fast? Run it by your consultant and allow him/her to give you feedback as to whether or not your on the right track.</p>

<p>Typically we charge $250 an hour for our consultants time and they are in high demand but you’re going to get not one, but 2 calls with our mentors absolutely free. That’s a $500 value! But only if you take action today!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Click the Button Below and Get Started Now!</h1>
            </div>
        </div>
        <div class="col-sm-offset-1 col-sm-10">
            <form  id="underwriting-template-upsell" accept-charset="UTF-8" action="https://m160.infusionsoft.com/app/form/process/3681de4df8d8f9acc95ae1fb285f2514" class="infusion-form" method="POST" data-parsley-validate>
                    <input name="inf_form_xid" type="hidden" value="3681de4df8d8f9acc95ae1fb285f2514" />
                    <input name="inf_form_name" type="hidden" value="$127 Underwriting Template Upsell" />
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
                    <input id="ProductName" name="ProductName" type="hidden" value="Underwriting Template + Bonuses" />
                    <input id="ProductPrice" name="ProductPrice" type="hidden" value="127.0" />
                    <button type="submit" class="btn btn-block cta-button">YES! I want the Always Accurate Underwriting Template&nbsp;<i class="fa fa-angle-double-right"></i></button>
                    <div class="alert alert-warning text-center" style="border: 1px dashed; margin-top: 20px; margin-bottom: 5px">
                        <p class="text-center" style="line-height: 1;"><span class="terms text-danger faa-flash animated hidden"><small>Check this Box</small> <i class="fa fa-arrow-right"></i></span>
                            <input id="terms-checkbox" type="checkbox" name="terms" data-parsley-error-message="You must agree to these terms and conditions." data-parsley-errors-container="#terms-error" required data-parsley-group="terms" data-parsley-ui-enabled="false"> I understand that by clicking the button above, my credit card will be charged a one-time fee of $127. Please click the button only once, your submission may take a few seconds to complete.</p>
                    </div>
                    <span id="terms-error"></span>
                </form>
                <p class="text-center"><a href="<?php echo $ThankYouURL; ?>">No thanks, please give me access to the training I’ve already enrolled for »</a></p>
       
        </div>
    </div>

       <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <h1>Join the discussion</h1>
                <!-- Comments -->
                <?php include('../comments.php');?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    _kmq.push(['identify', '<?php echo $inf_field_Email ?>']); // IDENTIFY CONTACT
    _kmq.push(['record', 'Viewed Page - UPS Underwriting Template']); // PAGE SPECIFIC EVENT
    </script>

    <?php include('../footer.php');?>


    <script>
    ouibounce(document.getElementById('webinar-registration'), {
        aggressive: true,
        delay: 250,
        callback: function() { $('#webinar-registration').modal('show'); }
    });
    </script>

     <!-- Hide/Show Terms Message -->
        <script>
        $(document).ready(function() {
            $('#underwriting-template-upsell').parsley().subscribe('parsley:form:validate', function(formInstance) {

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
            $('#underwriting-template-upsell-top').parsley().subscribe('parsley:form:validate', function(formInstance) {

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
  $(document).ready(function () { 
    $("#cta-top").delay(102000).fadeIn('slow'); 
  });
</script>


        



     <!-- Webinar Registration -->
    <div id="webinar-registration" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: repeating-linear-gradient(
  45deg,
  #A33332,
  #A33332 20px,
  #8C0000 20px,
  #8C0000 40px
);; padding: 0">
                    <button type="button" class="close mynewclassclose" data-dismiss="modal" aria-hidden="true">
                        <img src="../img/close-btn.png" height="38" width="38" />
                    </button>
                    <h1 class="modal-title text-center" style="color: #fff; font-size: 36px; text-shadow: 1px 1px 1px #000; padding: 10px">WAIT! Before you go...</h1>
                </div>
                <div class="modal-body">
                
                    <h2 class="text-center" style="margin-top: 0">Do you want <u class="text-danger">FREE</u> access to our advanced training?</h2>
                    <p>If you’re enjoying our multi-family investing information so far, and you want to jump ahead and learn more detailed information about investing in apartments and multi-family homes now...today we’re giving you <strong>Immediate Free Access</strong> to our 1-hour and 18-minute intensive Apartment House Riches Online Class including:</p>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-lg fa-check"></i> How to <strong>buy right and watch your wealth grow</strong> on auto pilot month after month.</li>
                        <li><i class="fa-li fa fa-lg fa-check"></i> How to <strong>generate enough positive cash flow</strong> that you quit your day job and live off the rewards.</li>
                        <li><i class="fa-li fa fa-lg fa-check"></i> <strong>How to get other people to pay your bills</strong>, leaving you with piles of equity and real estate you own "free & clear".</li>
                    </ul>

<p>For more information, and to guarantee your spot for this powerful online training, click below...</p>
<a href="../webinar/register.php" class="btn btn-block cta-button">Take Me To The Presentation!&nbsp;<i class="fa fa-angle-double-right"></i></a>
<p class="small text-center"><em>Note: This presentation comes down in 48 hours on <?php echo date("F, j", strtotime("+ 2 day")); ?>.</em></p>
                        </div>
                 

            </div>
        </div>
    </div>


    
    