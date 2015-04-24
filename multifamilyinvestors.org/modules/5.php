<?php include( '../header.php');?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center">Training Module 5<br>
                <span style="font-weight: 400">Management 101</span></h1>
                <h3 class="text-center"><?php echo date("F d, Y") ?> by David Lindahl</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <div id="wistia_ky59h1g185" class="embed-responsive-item wistia_embed"></div>
                    <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>
                    <script>
                    wistiaEmbed = Wistia.embed("ky59h1g185", {
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
                    loadKMTrackableVideo(wistiaEmbed, "Training Module 5");
                    </script>
                </div>
                <hr class="shadow">
                <h3>In This Training Video:</h3>
                <p>1:30 - Where to Find Good Managers<br>
                4:50 - Looking to the Future<br>
                9:00 - Reducing Tenant Turnover<br>
                12:00 - Collecting Rents</p>
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
                            <a href="1.php"><img src="../img/sidebar-module1.png" class="img-responsive center-block"></a>
                        </div>
                    </div>
                    <hr class="thick">
                    <div class="row vertical-align">
                        <div class="col-md-7">
                            <h2>Module 2</h2>
                            <p>Where The Deals Are</p>
                        </div>
                        <div class="col-md-5">
                            <a href="2.php"><img src="../img/sidebar-module2.png" class="img-responsive center-block"></a>
                        </div>
                    </div>
                    <hr class="thick">
                    <div class="row vertical-align">
                        <div class="col-md-7">
                            <h2>Module 3</h2>
                            <p>Funding Your Deals Quickly And Easily</p>
                        </div>
                        <div class="col-md-5">
                            <a href="3.php"><img src="../img/sidebar-module3.png" class="img-responsive center-block"></a>
                        </div>
                    </div>
                    <hr class="thick">
                    <div class="row vertical-align">
                        <div class="col-md-7">
                            <h2>Module 4</h2>
                            <p>The Secret To Analyzing Deals</p>
                        </div>
                        <div class="col-md-5">
                            <a href="4.php"><img src="../img/sidebar-module4.png" class="img-responsive center-block"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include( '../footer.php');?>