<?php include( '../header.php');?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center">Training Module 2<br>
                <span style="font-weight: 400">Where The Deals Are</span></h1>
                <h3 class="text-center"><?php echo date("F d, Y") ?> by David Lindahl</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <div id="wistia_v006itpi7g" class="embed-responsive-item wistia_embed"></div>
                    <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>
                    <script>
                    wistiaEmbed = Wistia.embed("v006itpi7g", {
                        videoFoam: true
                    });
                    </script>
                    <script type="text/javascript">
                    function loadKMTrackableVideo(wistia_object, videoName) {
                        // Add tracking to 'play', 'pause', and 'end' events.
                        wistia_object.bind("play", function() {
                            _kmq.push(['record', 'Played Video', {
                                'Played Video Name': videoName
                            }]);
                        });
                        wistia_object.bind("pause", function() {
                            _kmq.push(['record', 'Paused Video', {
                                'Paused Video Name': videoName
                            }]);
                        });
                        wistia_object.bind("end", function() {
                            _kmq.push(['record', 'Finished Video', {
                                'Finished Video Name': videoName
                            }]);
                        });
                    }
                    loadKMTrackableVideo(wistiaEmbed, "Training Module 2");
                    </script>
                </div>
                <hr class="shadow">
                <h3>In This Training Video:</h3>
                <p>2:00 - Where to Focus<br>
                2:30 - Using Brokers<br>
                6:15 - It's in the Mail<br>
                6:50 - The Secret to Getting the Broker's Best Deal<br>
                8:26 - Cutting Broker Investment Time in Half!<br>
                12:00 - Getting Deals Online</p>
                <div id="comment-box" class="alert alert-warning">
                    <h3>Have Questions or Comments?</h3>
                    <p>1. What was your greatest “takeaway” from this lesson?
                    <br>2. What’s the #1 question you now have regarding Real Estate Investing?</p>
                </div>
                <h1>Leave your comment below</h1>
                <?php include( '../comments.php');?>
            </div>
            <div id="webinar-sidebar" class="col-md-4">
                <div id="webinar-sidebar-header" class="text-center">
                    <h2>Reserve Your Spot!</h2>
                    <small>Fast Start Online Training Registration</small>
                </div>
                <div class="webinar-sidebar-content">
                    <h2 class="text-center" style="margin-top: 0">Do you want <u class="text-danger">FREE</u> access to our extended online training?</h2>
                    <p>Reserve your spot and get <strong>Immediate Free Access</strong> to our <em>1-hour and 18-minute</em> intensive online training, including...</p>
                    <ul class="fa-ul" style="font-size: 16px">
                        <li><i class="fa-li fa fa-lg fa-check"></i> How to <strong>buy right and watch your wealth grow</strong> on auto pilot month after month.</li>
                        <li><i class="fa-li fa fa-lg fa-check"></i> How to <strong>generate enough positive cash flow</strong> that you quit your day job and live off the rewards.</li>
                        <li><i class="fa-li fa fa-lg fa-check"></i> <strong>How to get other people to pay your bills</strong>, leaving you with piles of equity and real estate you own "free & clear".</li>
                    </ul>
                    <p>For more information, and to guarantee your spot for this powerful online training, click below...</p>
                    <a href="../webinar/register.php" class="btn btn-block cta-button" style="padding: 15px 0; font-size: 25px; margin-top: 10px">Reserve My Spot&nbsp;<i class="fa fa-angle-double-right"></i></a>
                    <p class="small text-center" style="color: #777; line-height: 1.1"><em>Note: This presentation comes down in 48 hours on <?php echo date("F, j", strtotime("+ 2 day")); ?>.</em></p>
                </div>
            </div>
            <div id="module-sidebar" class="col-md-4 text-center">
                <div id="module-sidebar-header">
                    <h2>Past Training</h2>
                    <small>5-Day Online Quick Start Training Course</small>
                </div>
                <div class="module-sidebar-content">
                    <div class="row vertical-align">
                        <div class="col-md-7">
                            <h2>Module 1</h2>
                            <p>Discover Emerging Markets</p>
                        </div>
                        <div class="col-md-5">
                            <a href="module1.php"><img src="../img/sidebar-module1.png" class="img-responsive center-block"></a>
                        </div>
                    </div>
                </div>
                <h2 class="upcoming-training">Upcoming Training</h2>
                <div class="module-sidebar-content">
                    <div class="row vertical-align">
                        <div class="col-md-7">
                            <h2>Module 3</h2>
                            <p>Funding Your Deals Quickly And Easily</p>
                            <small class="text-danger">(available soon)</small>
                        </div>
                        <div class="col-md-5">
                            <img src="../img/sidebar-module3.png" class="img-responsive center-block disabled">
                        </div>
                    </div>
                    <hr class="thick">
                    <div class="row vertical-align">
                        <div class="col-md-7">
                            <h2>Module 4</h2>
                            <p>The Secret To Analyzing Deals</p>
                            <small class="text-danger">(available soon)</small>
                        </div>
                        <div class="col-md-5">
                            <img src="../img/sidebar-module4.png" class="img-responsive center-block disabled">
                        </div>
                    </div>
                    <hr class="thick">
                    <div class="row vertical-align">
                        <div class="col-md-7">
                            <h2>Module 5</h2>
                            <p>Management 101</p>
                            <small class="text-danger">(available soon)</small>
                        </div>
                        <div class="col-md-5">
                            <img src="../img/sidebar-module5.png" class="img-responsive center-block disabled">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include( '../footer.php');?>