<?php include( '../header.php');?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center">Training Module 1<br>
                <span style="font-weight: 400">Discover Emerging Markets</span></h1>
                <h3 class="text-center"><?php echo date("F d, Y") ?> by David Lindahl</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <div id="wistia_1x4gkiormz" class="embed-responsive-item wistia_embed"></div>
                    <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>
                    <script>
                    wistiaEmbed = Wistia.embed("1x4gkiormz", {
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
                    loadKMTrackableVideo(wistiaEmbed, "Training Module 1");
                    </script>
                </div>    
                <hr class="shadow">
                <h3>In This Training Video:</h3>
                <p>3:00 - How I Got Started<br>
                5:20 - The Wall of Fame - What's Possible For You<br>
                8:00 - Training Overview<br>
                9:40 - What is an Emerging Market</p>
                <div id="comment-box" class="alert alert-warning">
                    <h3>Have Questions or Comments?</h3>
                    <p>1. What was your greatest “takeaway” from this lesson?
                    <br>2. What’s the #1 question you now have regarding Real Estate Investing?</p>
                </div>
                <h1>Leave your comment below</h1>
                <?php include('../comments.php');?>
            </div>
            <?php include('../webinar/sidebar-registration.php');?>
            <div id="module-sidebar" class="col-md-4 text-center">
                <div id="module-sidebar-header">
                    <h2>Upcoming Training</h2>
                    <small>5-Day Online Quick Start Training Course</small>
                </div>
                <div class="module-sidebar-content">
                    <div class="row vertical-align">
                        <div class="col-md-7">
                            <h2>Module 2</h2>
                            <p>Where The Deals Are</p>
                            <small class="text-danger">(available soon)</small>
                        </div>
                        <div class="col-md-5">
                            <img src="../img/sidebar-module2.png" class="img-responsive center-block disabled">
                        </div>
                    </div>
                    <hr class="thick">
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