<footer class="hidden-print">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<p class="text-center">
			<small>
			Creative Success Alliance | 100 Weymouth Street | Rockland, MA 02370 | 781-982-5700
			<br>
			Copyright &copy; <?php echo date("Y") ?> | <a href="#privacy" data-toggle="modal" data-target="#privacy">Privacy Policy</a> | <a href="#disclaimer" data-toggle="modal" data-target="#disclaimer">Testimonial Disclaimer</a> | <a href="#terms" data-toggle="modal" data-target="#terms">Terms of Use</a>
			</small>
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
      <div class="modal-body" style="background: url(img/bg-light.png) repeat;">
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
      <div class="modal-body" style="background: url(img/bg-light.png) repeat;">
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
        <h2 class="modal-title">Testimonial Disclaimer</h2>
      </div>
      <div class="modal-body" style="background: url(img/bg-light.png) repeat;">
      <?php include('disclaimer.php');?>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/parsley.min.js"></script>

    <script type="text/javascript">
    $('[data-toggle="tooltip"]').tooltip();
</script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
