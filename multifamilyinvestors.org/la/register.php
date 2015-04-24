<?php include('header.php');?>
<div class="register">
	<div class="container white">
	<h1>Live Training Registration</h1>
	<p style="font-size: 19px"><strong>Please save your seat ASAP for the Multi-Family Investing Workshop on October 18th at <?php echo $_GET['inf_custom_SessionTime'];?>!</strong></p>
	<p>Due to the nature of this training, and the volume of questions, we will <u>ONLY</u> accept 35 students per session.  You should register yourself and your guest (if you choose to bring one) immediately.</p>
	<p>You'll be able to <u>add a guest</u> on the next page once you've reserved your seat.

	</p>
		<div class="row">
			<div class="col-md-5">
				<form accept-charset="UTF-8" action="https://m160.infusionsoft.com/app/form/process/a5de5086707d4bebaf4faf71558bc605" class="infusion-form" method="POST" data-parsley-validate>
			    <input name="inf_form_xid" type="hidden" value="a5de5086707d4bebaf4faf71558bc605" />
			    <input name="inf_form_name" type="hidden" value="Baltimore LeadPages&#a;Facebook" />
			    <input name="infusionsoft_version" type="hidden" value="1.33.0.47" />
				<input name="inf_custom_csalsid" type="hidden" value="<?php echo $csalsid;?>" />
				<?php
				if (isset ($_GET['inf_custom_SessionTime']) || !empty ($_GET['inf_custom_SessionTime'])) {
					$inf_custom_SessionTime = $_GET['inf_custom_SessionTime'];
				}
				else {	
				}
				if ($inf_custom_SessionTime == '8:30AM') {
					echo '<input name="inf_custom_SessionTime" type="hidden" value="8:30AM" />';
				}
				elseif
					($inf_custom_SessionTime == '12:30PM') {
					echo '<input name="inf_custom_SessionTime" type="hidden" value="12:30PM" />';
				}
				else {
				}
				?>
			    <div class="form-group">
				<strong>First Name:</strong>
				<br>
			    <input id="inf_field_FirstName" name="inf_field_FirstName" type="text" class="form-control" placeholder="Enter First Name" data-parsley-trigger="change" data-parsley-error-message="Please enter your first name." required>
			    </div>
				<div class="form-group">
				<strong>Last Name:</strong>
				<br>
			    <input id="inf_field_LastName" name="inf_field_LastName" type="text" class="form-control" placeholder="Enter Last Name" data-parsley-trigger="change" data-parsley-error-message="Please enter your last name." required>
			    </div>
			    <div class="form-group">
				<strong>Email:</strong>
				<br>
			    <input id="inf_field_Email" name="inf_field_Email" type="email" class="form-control" placeholder="Enter Email" data-parsley-trigger="change" data-parsley-error-message="Please enter a valid email address." required>
			    </div>
				<div class="form-group">
				<strong>Phone:</strong> <small><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Because we respect our time as much as you respect yours, phone number is required to confirm your attendance. These are NOT sales calls, they are confirmation calls to verify your attendance. Please only register if you are serious about attending." style="color: #ccc"></i></small>
				<br>
			    <input id="inf_field_Phone1" name="inf_field_Phone1" type="text" class="form-control" placeholder="Enter Phone" data-parsley-trigger="change" data-parsley-error-message="Because we respect our time as much as you respect yours, phone number is required to confirm your attendance. These are NOT sales calls, they are confirmation calls to verify your attendance. Please only register if you are serious about attending." required>
			    </div>
			    <input type="submit" value="Register For The Event" class="btn btn-success btn-lg btn-block" />
				</form>
			</div>
			<div class="col-md-7">
			<img src="img/apartment-building-small.jpg" alt="Baltimore Multi-Family Homes" class="img-responsive img-center" style="margin-top: 20px">
			</div>
		</div>
	</div>
</div>


<?php include('footer.php');?>
