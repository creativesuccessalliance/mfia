<?php include('../header.php');?>

<div class="container">
<h1>Live Training Registration</h1>
    <h3><strong>Please save your seat ASAP for the Multi-Family Investing Workshop on <?php echo $EventDate;?> at <?php echo $SessionTime?></strong></h3>
     <p>Due to the nature of this training, and the volume of questions, we will <u>ONLY</u> accept 35 students per session. You should register yourself and your guest (if you choose to bring one) immediately.</p>
    <p>You'll be able to <u>add a guest</u> on the next page once you've reserved your seat.</p>
	<div class="row">
		
	    <div class="col-md-6">
			<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Register Below</h3>
					</div>
					<div class="panel-body">
						<form accept-charset="UTF-8" action="https://m160.infusionsoft.com/app/form/process/fa65f065c56d490494079599240d2683" class="infusion-form" method="POST">
						    <input name="inf_form_xid" type="hidden" value="fa65f065c56d490494079599240d2683" />
						    <input name="inf_form_name" type="hidden" value="Sweeps Primary" />
						    <input name="infusionsoft_version" type="hidden" value="1.39.0.28" />
	            			<input name="inf_custom_csalsid" type="hidden" value="<?php echo $csalsid;?>" />
				            <input name="inf_field_LeadSourceId" type="hidden" value="<?php echo $lsid;?>" />
				            <input name="inf_custom_MarketingSource" type="hidden" value="<?php echo $source;?>" />
				            <input name="inf_custom_utmsource" type="hidden" value="<?php echo $utm_source;?>" />
				            <input name="inf_custom_EventDate0" type="hidden" value="<?php echo $EventDate;?>" />
				            <input name="inf_custom_SessionDay" type="hidden" value="<?php echo $SessionDay;?>" />
							<input name="inf_custom_SessionTime" type="hidden" value="<?php echo $SessionTime;?>" />
							<input name="inf_custom_RegTime" type="hidden" value="<?php echo $RegTime;?>" />
							<input name="inf_custom_EventHotelName" type="hidden" value="<?php echo $EventHotelName;?>" />
							<input name="inf_custom_EventHotelAddress" type="hidden" value="<?php echo $EventHotelAddress;?>" />
							<input name="inf_custom_EventHotelCity" type="hidden" value="<?php echo $EventHotelCity;?>" />
							<input name="inf_custom_EventHotelState" type="hidden" value="<?php echo $EventHotelState;?>" />
							<input name="inf_custom_EventHotelZip" type="hidden" value="<?php echo $EventHotelZip;?>" />
							<input name="inf_custom_VenuePicture" type="hidden" value="<?php echo $VenuePicture;?>" />
	            <div class="form-group">
	                <strong>First Name:</strong>
	                <br>
	                <input id="inf_field_FirstName" name="inf_field_FirstName" type="text" class="form-control input-lg" placeholder="Enter First Name" data-parsley-trigger="change" data-parsley-error-message="Please enter your first name." required>
	            </div>
	            <div class="form-group">
	                <strong>Last Name:</strong>
	                <br>
	                <input id="inf_field_LastName" name="inf_field_LastName" type="text" class="form-control input-lg" placeholder="Enter Last Name" data-parsley-trigger="change" data-parsley-error-message="Please enter your last name." required>
	            </div>
	            <div class="form-group">
	                <strong>Email:</strong>
	                <br>
	                <input id="inf_field_Email" name="inf_field_Email" type="email" class="form-control input-lg" placeholder="email@example.com" data-parsley-trigger="change" data-parsley-error-message="Please enter a valid email address." required>
	            </div>
	            <div class="form-group" style="margin-bottom: 0">
	                <strong>Phone:</strong>
	                <small><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" data-html="true" title="<strong style='font-size: 18px'>Why is this required?</strong><br>Because we respect our time as much as you respect yours, phone number is required to confirm your attendance. These are NOT sales calls and are only confirmation calls to verify your attendance. Please only register if you are serious about attending." style="color: #ccc"></i></small>
	                <br>
	                <input id="inf_field_Phone1" name="inf_field_Phone1" type="tel" class="form-control input-lg" placeholder="123-456-7890" data-parsley-trigger="change" data-parsley-error-message="Please enter your phone." required />
	            </div>
	            <div class="checkbox">
	                <label class="checkbox-label">
	                    <input type="checkbox" id="inf_option_TextReminder" name="inf_option_TextReminder" value="35294">Would you like to receive a text reminder?
	                </label>
	            </div>
				<div class="form-group">
			    <strong>Address:</strong> 
			    <small><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" data-html="true" title="<strong style='font-size: 18px'>Why is this required?</strong><br>Enter your primary address in order for us to send you the tickets via USPS." style="color: #ccc"></i></small>
				<br>
				<input id="inf_field_StreetAddress1" name="inf_field_StreetAddress1" type="text" class="form-control input-lg" placeholder="Enter Address" data-parsley-trigger="change" data-parsley-error-message="Please enter your address." required />
			    </div>
			    <div class="form-group">
			    <strong>City:</strong>
				<br>
				<input id="inf_field_City" name="inf_field_City" type="text" class="form-control input-lg" placeholder="Enter City" data-parsley-trigger="change" data-parsley-error-message="Please enter your city." required />
			    </div>
			    <div class="form-group">
					<div class="row">
						<div class="col-md-7">
			    		<strong>State:</strong>
			    		<br>
						<select id="inf_field_State" name="inf_field_State" class="form-control input-lg" data-parsley-trigger="change" data-parsley-error-message="Please enter your state." required>
							<option value="">Choose...</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
						</div>
						<div class="col-md-5">
						<strong>Enter Zip</strong>
						<br>
						<input id="inf_field_PostalCode" name="inf_field_PostalCode" class="form-control input-lg" type="text" placeholder="Enter Zip" data-parsley-trigger="change" data-parsley-error-message="Please enter your zip code." required />
						</div>
					</div>
				</div>
	            <input type="submit" value="Submit Your Registration" class="btn btn-success btn-lg btn-block" />
	        </form>
	        <script type="text/javascript" src="https://m160.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=35c7ce73753cad35a563d96f4a6dc966"></script>
	    </div>
	</div>
</div>
	    <div class="col-md-6">
	    <img src="../img/apartment-building.jpg" alt="Multi-Family Apartment" class="img-responsive img-center">
	         <div style="background-color: #FBFBFB; border:1px solid #F2F2F2; border-top: none; padding: 13px 15px 2px;">
	        

	                  <span class="event-date" style="font-size: 32px;
        text-transform: uppercase;
        font-weight: 700;
        font-family: 'Oswald',sans-serif;"><i class="fa fa-calendar"></i> <?php echo $EventDate;?></span>
                                <br><span class="event-location" style="font-size: 25px;
        text-transform: uppercase;
        font-weight: 200;
        font-family: 'Oswald',sans-serif;"><i class="fa fa-clock-o"></i> 
	                    <?php echo $SessionTime;?></span>
                                <hr style="border-width: 2px 0px 0px; border-color: #000; margin-top: 10px; margin-bottom: 10px">
                              
                                  


<i class="fa fa-location-arrow"></i> 
	                    <strong style="font-family: 'Roboto', sans-serif;">Location:</strong>
	                    <br><?php echo $EventHotelName;?>
	                    <br><?php echo $EventHotelAddress;?>
	                    <br><?php echo $EventHotelCity . ", " . $EventHotelState . " " . $EventHotelZip;?>
	                    <br><i class="fa fa-map-marker" style="margin-top: 10px"></i> <strong style="font-family: 'Roboto', sans-serif;">Google Map:</strong> <a href="<?php echo $GoogleMap?>" target="_blank"><?php echo $GoogleMap?></a>
	                </p>
	            </div>
	            
	    </div>
	</div>
</div>

<?php include('../footer.php');?>