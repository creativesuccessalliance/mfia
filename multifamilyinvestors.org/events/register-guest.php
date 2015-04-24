<?php include('../header.php');?>

<div class="container">
    <h1>Add A Guest</h1>
    <p>It's always more fun to bring a friend or family member! Fill out the form below to add a guest to your registration. Their tickets will arrive separately.</p>
    <div class="row">
        <div class="col-md-6">
            <form action="actions/register-guest.php" method="POST" class="" role="form" data-parsley-validate>
                <input id="csalsid" name="csalsid" type="hidden" value="<?php echo $csalsid;?>" />
                <input id="LeadSourceId" name="LeadSourceId" type="hidden" value="<?php echo $lsid;?>" />
                <input id="PrimaryFirstName" name="PrimaryFirstName" type="hidden" value="<?php echo $PrimaryFirstName;?>">
                <input id="PrimaryLastName" name="PrimaryLastName" type="hidden" value="<?php echo $PrimaryLastName;?>">
                <input id="PrimaryEmail" name="PrimaryEmail" type="hidden" value="<?php echo $PrimaryEmail;?>">
                <input id="MarketingSource" name="MarketingSource" type="hidden" value="Facebook" />
                <input id="SessionDay" name="SessionDay" type="hidden" value="<?php echo $SessionDay;?>" />
                <input id="SessionTime" name="SessionTime" type="hidden" value="<?php echo $SessionTime;?>" />
                <input name="inf_custom_RegTime" type="hidden" value="<?php echo $RegTime;?>" />
				<input id="EventDate" name="EventDate" type="hidden" value="<?php echo $EventDate;?>" />
				<input id="EventHotelName" name="EventHotelName" type="hidden" value="<?php echo $EventHotelName;?>" />
				<input id="EventHotelAddress" name="EventHotelAddress" type="hidden" value="<?php echo $EventHotelAddress;?>" />
				<input id="EventHotelCity" name="EventHotelCity" type="hidden" value="<?php echo $EventHotelCity;?>" />
                <input id="EventHotelState" name="EventHotelState" type="hidden" value="<?php echo $EventHotelState;?>" />
                <input id="EventHotelZip" name="EventHotelZip" type="hidden" value="<?php echo $EventHotelZip;?>" />
                <input name="inf_custom_VenuePicture" type="hidden" value="<?php echo $VenuePicture;?>" />
				<input id="GoogleMap" name="GoogleMap" type="hidden" value="<?php echo $GoogleMap;?>" />
				<input id="GoogleEmbed" name="GoogleEmbed" type="hidden" value='<?php echo $GoogleEmbed;?>' />
                <div class="form-group">
                    <label for="GuestFirstName">Guest First Name:</label>
                    <input id="GuestFirstName" type="text" name="GuestFirstName" class="form-control input-lg" placeholder="Guest First Name" data-parsley-trigger="change" data-parsley-error-message="Please enter the first name of your guest." required>
                </div>
                <div class="form-group">
                    <label for="GuestLastName">Guest Last Name:</label>
                    <input id="GuestLastName" type="text" name="GuestLastName" class="form-control input-lg" placeholder="Guest Last Name" data-parsley-trigger="change" data-parsley-error-message="Please enter the last name of your guest." required>
                </div>
                <div class="form-group">
                    <label for="GuestEmail">Guest Email:</label>
                    <small><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" data-html="true" title="<strong style='font-size: 14px'>We hate SPAM as much as you</strong> and will ONLY use this email address to send your guest their tickets." style="color: #ccc"></i></small>
                    <br>
                    <input  id="GuestEmail" type="email" name="GuestEmail" size="35" class="form-control input-lg" placeholder="example@domain.com" data-parsley-trigger="change" data-parsley-error-message="Please enter a valid email address for your guest." required>
                    <p class="alert alert-warning alert-guest-email">
                        <small>
                            <span class="text-danger">
                                <strong style="font-size: 18px"><i class="fa fa-exclamation-triangle"></i> Do not use your email address</span>
                            </strong>for your guests. Use their email so they can retrieve their tickets.
                        </small>
                    </p>
                </div>
                <input type="submit" value="Register A Guest For The Event" class="btn btn-success btn-lg btn-block" />
            </form>
        </div>
        <div class="col-md-6">
            <img src="../img/apartment-building.jpg" alt="Multi-Family Apartment" class="img-responsive img-center" style="margin-top: 20px">
        </div>
    </div>
</div>

<?php include('../footer.php');?>
