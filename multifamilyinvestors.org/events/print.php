<?php include('../header.php');?>

<div class="hidden-print">
	<?php 
	if ($_GET['contactType'] == 'guest') {
		$GuestTicket = 'hidden';
	}
	else {
		$GuestTicket = 'ticket';
	}
	if (isset ($_GET['contactId']) || !empty ($_GET['contactId'])) {
		echo '<h1 class="text-center">Print Your Tickets</h1>
			<div class="ticket">
			<img src="../img/bg-ticket.jpg" width="1024" height="390" alt="Bg Ticket">
			<div class="date">
			' . $inf_custom_EventDate0 . ' 
			</div>
			<div class="time">
			Reserved for ' . $PrimaryFirstName . ' ' . $PrimaryLastName . ' at ' . $SessionTime . '
			</div>
			<div class="addr">
			Multi Family Investing Workshop <br>' . $inf_custom_EventHotelName . '<br>' . $inf_custom_EventHotelAddress . '<br>' . $inf_custom_EventHotelCity . ', ' . $inf_custom_EventHotelState . ' ' . $inf_custom_EventHotelZip . '
			</div>
			<div class="dateside">
			' . $inf_custom_EventDate0 . '<br> @ ' . $SessionTime . ' 
			</div>
			<div class="barcode">
				<div class="bcTarget">
				</div>
			</div>
		</div>
		<hr>
		<p class="text-center"><a href="javascript:window.print()" class="btn btn-default text-center"><i class="fa fa-print"></i> Click to print your tickets</a></p>
		<hr>
		<div class="ticket">
		<img src="../img/bg-ticket.jpg" width="1024" height="390" alt="Bg Ticket">
			<div class="date mono">
			' . $inf_custom_EventDate0 . ' 
			</div>
			<div class="time mono">
			Reserved for the guest of ' . $PrimaryFirstName . ' ' . $PrimaryLastName . ' at ' . $SessionTime . '
			</div>
			<div class="addr mono">
			Multi Family Investing Workshop <br>' . $inf_custom_EventHotelName . '<br>' . $inf_custom_EventHotelAddress . '<br>' . $inf_custom_EventHotelCity . ', ' . $inf_custom_EventHotelState . ' ' . $inf_custom_EventHotelZip . '
			</div>
			<div class="dateside mono">
			' . $inf_custom_EventDate0 . '<h2 class="text-center"><strong>For Guest of<br>Registered Attendee</strong></h2>' . ' 
			</div>
		</div>';
	}
	else {	
		echo '<h1 class="text-center">There was a problem generating your ticket</h1>
		<h2 class="text-center">Please call us at 1-781-982-5700 or<br>email us at <a href="mailto:support@creativesuccessalliance.com">support@creativesuccessalliance.com</a></h2>';
	}
	?>
	</div>
	<div class="visible-print-block">
	<h3><strong>Event Details:</strong></h3>
	<strong>Date:</strong> <?php echo $inf_custom_EventDate0;?><br>
	<strong>Time:</strong> <?php echo $SessionTime;?><br>
	<strong>Hotel:</strong> <?php echo $inf_custom_EventHotelName;?><br>
	<strong>Address:</strong> <?php echo $inf_custom_EventHotelAddress;?><br>
	<?php echo $inf_custom_EventHotelCity . ", " . $inf_custom_EventHotelState . " " . $inf_custom_EventHotelZip;?>
	<hr>
	<?php if (isset ($_GET['contactId']) || !empty ($_GET['contactId'])) {
		echo '<div class="ticket">
		<img src="../img/bg-ticket.jpg" width="1024" height="390" alt="Bg Ticket">
			<div class="date">
			' . $inf_custom_EventDate0 . ' 
			</div>
			<div class="time">
			Reserved for ' . $PrimaryFirstName . ' ' . $PrimaryLastName . ' at ' . $SessionTime . '
			</div>
			<div class="addr">
			Wealth Building Event <br>' . $inf_custom_EventHotelName . '<br>' . $inf_custom_EventHotelAddress . '<br>' . $inf_custom_EventHotelCity . ', ' . $inf_custom_EventHotelState . ' ' . $inf_custom_EventHotelZip . '
			</div>
			<div class="dateside">
			' . $inf_custom_EventDate0 . '<br> @ ' . $SessionTime . ' 
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
		' . $inf_custom_EventDate0 . ' 
		</div>
		<div class="time">
		Reserved for the guest of ' . $PrimaryFirstName . ' ' . $PrimaryLastName . ' at ' . $SessionTime . '
		</div>
		<div class="addr">
		Wealth Building Event <br>' . $inf_custom_EventHotelName . '<br>' . $inf_custom_EventHotelAddress . '<br>' . $inf_custom_EventHotelCity . ', ' . $inf_custom_EventHotelState . ' ' . $inf_custom_EventHotelZip . '
		</div>
		<div class="dateside">
		' . $inf_custom_EventDate0 . '<h2 class="text-center"><strong>For Guest of<br>Registered Attendee</strong></h2>' . ' 
		</div>
	</div>';
	}
	else {	
		echo '<h1 class="text-center">There was a problem generating your ticket</h1>
		<h2 class="text-center">Please call us at 1-781-982-5700 or<br>email us at <a href="mailto:support@creativesuccessalliance.com">support@creativesuccessalliance.com</a></h2>';
	}
	?>

</div>


<?php include('../footer.php');?>