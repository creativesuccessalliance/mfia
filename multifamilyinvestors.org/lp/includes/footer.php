    <footer>
        <div class="container">
            <p class="text-center">Multi-Family Investing Association | 100 Weymouth Street | Rockland, MA 02370 | 781-982-5700</p>
            <p class="text-center">Copyright &copy; 2002-
                <?php echo date( "Y") ?> | <a href="#privacy" data-toggle="modal" data-target="#privacy">Privacy Policy</a> | <a href="#disclaimer" data-toggle="modal" data-target="#disclaimer">Testimonial Disclaimer</a> | <a href="#terms" data-toggle="modal" data-target="#terms">Terms of Use</a>
            </p>
        </div>
    </footer>

    <!-- Opt-in -->
    <div id="opt-in" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close mynewclassclose" data-dismiss="modal" aria-hidden="true">
                        <img src="img/close-btn.png" height="38" width="38" />
                    </button>
                    <div class="progress" style="height: 40px; margin: 10px 0; background-color: #C8D6DC;">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; font-size: 18px;
line-height: 2;">
                            50% Complete
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="background: url(img/bg-light.png) repeat;">
                    <p class="text-center">Almost there! Complete this form and click the button below to start your training course.</p>

                    <div class="row">
                        <div class="col-sm-5">
                            <img src="img/arrow-download.png" height="256" width="256" class="img-responsive hidden-xs" style="margin-top: 40px">
                        </div>
                        <div class="col-sm-7">
                            <h3 class="text-center" style="margin-bottom: 25px">Where do we send your video course & quick start printout?</h3>
                            <form accept-charset="UTF-8" action="https://m160.infusionsoft.com/app/form/process/30fc7755437ff2eaef1452d609c698bfss" class="infusion-form" method="POST">
                                <input name="inf_form_xid" type="hidden" value="30fc7755437ff2eaef1452d609c698bf" />
                                <input name="inf_form_name" type="hidden" value="Dave's Dollar Deal: Marketing Tool Kit - Step 1" />
                                <input name="infusionsoft_version" type="hidden" value="1.29.9.21" />
                                <input name="inf_custom_csalsid" type="hidden" value="<?php echo $csalsid;?>" />
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="inf_field_FirstName" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" name="inf_field_Email" placeholder="Email">
                                </div>
                                <p class="text-center">
                                    <button type="submit" class="btn btn-block cta-button">Start The Training Course&nbsp;<i class="fa fa-angle-double-right"></i>
                                    </button>
                                </p>
                                <p class="text-center cta-disclaimer">
                                    <img src="img/lock.png" height="18" width="14">&nbsp;We won’t send you spam. Unsubscribe at any time.</p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Privacy Modal -->
    <div class="modal fade bs-example-modal-lg" id="privacy" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title">Privacy Policy</h2>
                </div>
                <div class="modal-body" style="background: url(img/bg-light.png) repeat;">
                    <?php include( 'privacy.php');?>
                </div>
            </div>
        </div>
    </div>

    <!-- Terms Modal -->
    <div class="modal fade bs-example-modal-lg" id="terms" tabindex="-1" role="dialog" aria-labelledby="terms" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title">Terms of Service</h2>
                </div>
                <div class="modal-body" style="background: url(img/bg-light.png) repeat;">
                    <?php include( 'terms.php');?>
                </div>
            </div>
        </div>
    </div>

    <!-- Disclaimer Modal -->
    <div class="modal fade bs-example-modal-lg" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="disclaimer" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title">Testimonial Disclaimer</h2>
                </div>
                <div class="modal-body" style="background: url(img/bg-light.png) repeat;">
                    <?php include( 'disclaimer.php');?>
                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>


</html>