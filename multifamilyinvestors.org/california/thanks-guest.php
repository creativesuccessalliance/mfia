<?php include('../header.php');?>

<div class="container hidden-print">
    <div class="row">
        <div class="col-sm-12">
            <a href="javascript:window.print()" class="btn btn-default pull-right" style="margin-top: 20px"><i class="fa fa-print"></i> Click to print this page</a>
            <h1>You and <?php echo $GuestFirstName;?> are all set!</h1>
            <p><?php echo $GuestFirstName;?> will receive their email shortly. <strong>You can also print this page and <?php echo $GuestFirstName;?> can use it to gain admission to the event.</strong></p>
            <p>We look forward to seeing you at our Multi-Family Investing Workshop!</p>
            <h2 class="confirmation-code"><strong><?php echo $GuestFirstName;?>'s confirmation code: <?php $ConfirmationCode = mt_rand(1000000,9999999); ?><?php echo $ConfirmationCode;?></strong></h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-7">
            <div class="map" style="min-height: 389px">
            <?php echo $GoogleEmbed;?>
			</div>
        </div>
        <div class="col-sm-5">
            <div style="border: 1px solid #eee">
                <h2 class="text-center" style="background-color:#3A5E80; color: #fff; padding: 10px; margin-top: 0">Your Event Details</h2>
                <p class="text-center" style="padding: 10px; font-size: 20px">
                    <strong>“Multi-Family Investing Workshop”</strong>
                </p>
                <div style="background-color: #FBFBFB; border:1px solid #F2F2F2; padding: 13px 15px 2px; margin: 20px">
                    <p class="small" style="font-size: 14px"><i class="fa fa-user"></i> 
                        <strong>Name:</strong>
                        <br>
                        <?php echo $GuestFirstName;?> <?php echo $GuestLastName;?>
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
</div>

<div id="print-container" class="visible-print-block">
    <h2 class="text-center" style="margin: 0"><strong>Your Tickets</strong></h2>
    <h2 class="text-center" style="margin: 0">Confirmation Code: <?php echo $ConfirmationCode;?></h2>
    <h3 class="text-center" style="margin-top: 5px; margin-bottom: 20px">“Multi-Family Investing Workshop”</h3>
    <p><i class="fa fa-user"></i> 
        <strong>Name:</strong>
        <?php echo $GuestFirstName;?> <?php echo $GuestLastName;?>
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
        <?php
        if (!empty($_GET['GuestFirstName'])) {
            echo '<div class="ticket">
                    <img src="../img/bg-ticket.jpg" width="1024" height="390" alt="Bg Ticket">
                    <div class="date">
                    ' . $EventDate . ' 
                    </div>
                    <div class="time">
                    Reserved for ' . $GuestFirstName . ' ' . $GuestLastName . ' at ' . $SessionTime . '
                    </div>
                    <div class="addr">
                    Wealth Building Event <br>' . $EventHotelName . '<br>' . $EventHotelAddress . '<br>' . $EventHotelCity . ', ' . $EventHotelState . ' ' . $EventHotelZip . '
                    </div>
                    <div class="dateside">
                    ' . $EventDate . '<br> @' . $SessionTime . ' 
                    </div>
                    <div class="barcode">
                        <div class="bcTarget">
                        </div>
                    </div>
                </div>';
        } else {
            echo '<h1 class="text-center">There was a problem generating your ticket</h1>
                    <h2 class="text-center">Please call us at 1-781-982-5700 or<br>email us at <a href="mailto:support@creativesuccessalliance.com">support@creativesuccessalliance.com</a></h2>';
        }
        ?>
</div>

<?php include('../footer.php');?>