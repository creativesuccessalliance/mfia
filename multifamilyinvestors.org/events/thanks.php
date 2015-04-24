<?php include('../header.php');?>

<div class="container hidden-print">
<div class="row">
		
	    <div class="col-sm-7">
	    	<a href="javascript:window.print()" class="btn btn-default pull-right" style="margin: 20px 0"><i class="fa fa-print"></i> Click to print this page</a>
	    <h1>Congratulations <?php echo $PrimaryFirstName;?></h1>
	    <h3><strong>Your Seat is Reserved. Your Confirmation Code: <?php echo $_GET['contactId'];?>.</strong></h3>
	    <p>An email with your tickets and event details has been sent to you. You can also print this page and use it to gain admission to the event.</p>
			 <p>Would you like to save the seat next to you for a friend who can help you review the system and make an informed decision?</p>
			<p><a href="register-guest.php?PrimaryFirstName=<?php echo $PrimaryFirstName;?>&amp;PrimaryLastName=<?php echo $PrimaryLastName;?>&amp;PrimaryEmail=<?php echo $PrimaryEmail;?>&amp;SessionDay=<?php echo $SessionDay;?>&amp;SessionTime=<?php echo $SessionTime;?>&amp;RegTime=<?php echo $RegTime;?>" class="btn btn-success btn-lg">Click Here to Save the Seat Next to You</a></p>
			<p>If you prefer to come alone, <a href="javascript:window.print()">Click Here</a> to print this page.</p>
	        <hr>
	        <div class="map" style="min-height: 326px">
	        <?php echo $GoogleEmbed;?>
			</div>
			</div>
			<div class="col-sm-5">
			<div class="embed-responsive embed-responsive-16by9" style="margin: 20px 0">
			    <iframe src="//fast.wistia.net/embed/iframe/w4n4hs9d36?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe>
			    <script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
			</div>
			<div style="border: 1px solid #eee">
	            <h2 class="text-center" style="background-color:#3A5E80; color: #fff; padding: 10px; margin-top: 0">Your Event Details</h2>
	            <p class="text-center" style="padding: 10px; font-size: 20px">
	                <strong>“Multi-Family Investing Workshop”</strong>
	            </p>
	            <div style="background-color: #FBFBFB; border:1px solid #F2F2F2; padding: 13px 15px 2px; margin: 20px">
	                <p class="small" style="font-size: 14px"><i class="fa fa-user"></i> 
	                    <strong>Name:</strong>
	                    <br>
	                    <?php echo $PrimaryFirstName;?>
	                    <?php echo $PrimaryLastName;?>
	                </p>
	                <p class="small" style="font-size: 14px"><i class="fa fa-calendar"></i> 
	                    <strong>Date:</strong>
	                    <br><?php echo $EventDate;?></p>
	                <p class="small" style="font-size: 14px"><i class="fa fa-clock-o"></i> 
	                    <?php echo $SessionTime;?>
	                </p>
	                <p class="small" style="font-size: 14px"><i class="fa fa-location-arrow"></i> 
	                    <strong>Location:</strong>
	                    <br><?php echo $EventHotelName;?>
	                    <br><?php echo $EventHotelAddress;?>
	                    <br><?php echo $EventHotelCity . ", " . $EventHotelState . " " . $EventHotelZip;?>
	                </p>
	            </div>
	        </div>
			</div>
	    
	</div>
	<div class="row">
	    <div class="col-sm-7">
	        
	    </div>
	    <div class="col-sm-5">
	        
	    </div>
	</div>
</div>

<div id="print-container" class="visible-print-block">
    <h2 class="text-center" style="margin: 0"><strong>Your Tickets</strong></h2>
    <h2 class="text-center" style="margin: 0">Confirmation Code: <?php echo $_GET['contactId'];?></h2>
    <h3 class="text-center" style="margin-top: 5px; margin-bottom: 20px">“Multi-Family Investing Workshop”</h3>
    <p><i class="fa fa-user"></i> 
        <strong>Name:</strong>
        <?php echo $PrimaryFirstName;?> <?php echo $PrimaryLastName;?>
    </p>
    <p><i class="fa fa-calendar"></i> 
        <strong>Date:</strong>
        <?php echo $EventDate;?>
    </p>
    <p><i class="fa fa-clock-o"></i> 
        <?php echo $SessionTime;?>
    </p>
    <p><i class="fa fa-location-arrow"></i> 
        <strong>Location:</strong>
        <br><?php echo $EventHotelName;?>
        <br><?php echo $EventHotelAddress;?>
        <br><?php echo $EventHotelCity . ", " . $EventHotelState . " " . $EventHotelZip;?>
    </p>    
	<?php
	
	if (isset($_GET['contactId']) || !empty($_GET['contactId'])) {
		echo '<div class="ticket">
				<img src="../img/bg-ticket.jpg" width="1024" height="390" alt="Bg Ticket">
						<div class="date">
						' . $EventDate . ' 
						</div>
						<div class="time">
						Reserved for ' . $PrimaryFirstName . ' ' . $PrimaryLastName . ' at ' . $SessionTime . '
						</div>
						<div class="addr">
						' . $EventHotelName . '<br>' . $EventHotelAddress . '<br>' . $EventHotelCity . ', ' . $EventHotelState . ' ' . $EventHotelZip . '
						</div>
						<div class="dateside">
						' . $EventDate . '<br> @' . $SessionTime . ' 
						</div>
						<div class="barcode">
							<div class="bcTarget">
							</div>
						</div>
					</div>
					<hr>
					<div class="ticket">
					<img src="../img/bg-ticket.jpg" width="1024" height="390" alt="Bg Ticket">
					<div class="date">
					' . $EventDate . ' 
					</div>
					<div class="time">
					Reserved for the guest of ' . $PrimaryFirstName . ' ' . $PrimaryLastName . ' at ' . $SessionTime . '
					</div>
					<div class="addr">
					' . $EventHotelName . '<br>' . $EventHotelAddress . '<br>' . $EventHotelCity . ', ' . $EventHotelState . ' ' . $EventHotelZip . '
					</div>
					<div class="dateside">
					' . $EventDate . '<h2 class="text-center">For Guest of<br>' . $PrimaryFirstName . ' ' . $PrimaryLastName . '</h2>' . ' 
					</div>
				</div>';
	} else {
		echo '<h1 class="text-center">There was a problem generating your ticket</h1>
					<h2 class="text-center">Please call us at 1-781-982-5700 or<br>email us at <a href="mailto:support@creativesuccessalliance.com">support@creativesuccessalliance.com</a></h2>';
	}

	?>
</div>

<!-- Facebook Conversion Code -->
<script>
	(function() {
	    var _fbq = window._fbq || (window._fbq = []);
	    if (!_fbq.loaded) {
	        var fbds = document.createElement('script');
	        fbds.async = true;
	        fbds.src = '//connect.facebook.net/en_US/fbds.js';
	        var s = document.getElementsByTagName('script')[0];
	        s.parentNode.insertBefore(fbds, s);
	        _fbq.loaded = true;
	    }
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(['track', '6022086316170', {
	    'value': '0.00',
	    'currency': 'USD'
	}]);
</script>

<noscript>
	<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6022086316170&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" />
</noscript>

<?php include('../footer.php');?>
