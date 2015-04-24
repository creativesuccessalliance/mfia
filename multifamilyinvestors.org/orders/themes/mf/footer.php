		<footer>
			<p class="text-center">
			<strong>Multi Family Investing Association</strong><br>
			100 Weymouth Street <br>
			Rockland, MA 02370 <br>
			781-982-5700
			</p>
		</footer>

		<?php include('themes/mf/modals.php');?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

		<!-- Form Validation JavaScript -->
		<script src="themes/mf/js/parsley.min.js"></script>

		<!-- OUIBounce -->
    	<script src="../../js/ouibounce.min.js"></script>

		<!-- Clickable Credit Card Icons -->
		<script type='text/javascript'>
		    $(window).load(function () {
		        var $select = $('#CreditCard0CardType');
		        $('a[href="#cc-type"]').click(function () {
		            $select.val($(this).data('select'));
		        });
		    });
		</script>

		<!-- Countdown Timer  -->
		<script type="text/javascript">
		    function countdown(minutes) {
		        var seconds = 60;
		        var mins = minutes

		            function tick() {
		                var counter = document.getElementById("timer");
		                var current_minutes = mins - 1
		                seconds--;
		                counter.innerHTML =
		                    current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
		                if (seconds > 0) {
		                    setTimeout(tick, 1000);
		                } else {

		                    if (mins > 1) {

		                        countdown(mins - 1);

		                    }
		                }
		            }
		        tick();
		    }

		    countdown(15);
		</script>

	</body>
</html>