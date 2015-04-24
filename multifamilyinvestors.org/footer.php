    <!-- Footer -->
    <footer class="hidden-print">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        Multi-Family Investing Association | 100 Weymouth Street | Rockland, MA 02370 | 1-800-559-8590
                            <br>Copyright &copy;&nbsp;<?php echo date( "Y") ?> | <a href="#privacy" data-toggle="modal" data-target="#privacy">Privacy Policy</a> | <a href="#disclaimer" data-toggle="modal" data-target="#disclaimer">Earnings Disclaimer</a> | <a href="#terms" data-toggle="modal" data-target="#terms">Terms of Use</a>
                        
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Privacy Modal -->
    <div class="modal fade bs-example-modal-lg" id="privacy" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title">Privacy Policy</h2>
                </div>
                <div class="modal-body">
                    <?php include('privacy.php');?>
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
                <div class="modal-body">
                    <?php include('terms.php');?>
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
                    <h2 class="modal-title">Earnings Disclaimer</h2>
                </div>
                <div class="modal-body">
                    <?php include('disclaimer.php');?>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Parsley -->
    <script src="../js/parsley.min.js"></script>
    <!-- OUIBounce -->
    <script src="../js/ouibounce.min.js"></script>

    <script>
    $('[data-toggle="tooltip"]').tooltip();
    </script>

    <!-- Barcode -->
    <script src="../js/jquery-barcode.min.js"></script>
    <script>
        $(".bcTarget").barcode({
            code: "<?php echo $_GET['contactId'];?>",
            crc: false
        }, "int25", {
            barWidth: 4,
            barHeight: 50
        });
    </script>

    <!-- allow google map embed interaction if user clicks on it // off by default -->
    <script>
    $('.map').click(function() {
        $('.map iframe').css("pointer-events", "auto");
    });
    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>