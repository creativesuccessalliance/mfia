
<?php 
if (isset ($_GET['inf_field_FirstName']) || !empty ($_GET['inf_field_FirstName'])) { 
    $webinarAttendeeName = $_GET['inf_field_FirstName'];
}

if (isset ($_GET['inf_custom_MFIAWebinarDateTime']) || !empty ($_GET['inf_custom_MFIAWebinarDateTime'])) { 
    $webinarDate = $_GET['inf_custom_MFIAWebinarDateTime'];
}


if (isset ($_GET['inf_custom_MFIAWebinarTitle']) || !empty ($_GET['inf_custom_MFIAWebinarTitle'])) { 
    $webinarTitle = $_GET['inf_custom_MFIAWebinarTitle'];
}

if (isset ($_GET['inf_custom_MFIAWebinarUrl']) || !empty ($_GET['inf_custom_MFIAWebinarUrl'])) { 
    $webinarURL = $_GET['inf_custom_MFIAWebinarUrl'];
}

// Parse date and time string and break it down
$dateTime  = $_GET['inf_custom_MFIAWebinarDateTime'];
$dateTimeExtended = explode(" ", $dateTime);

// Declare vars
$webinarDay = $dateTimeExtended[0];
$webinarMonth = $dateTimeExtended[1];
$webinarDate = $dateTimeExtended[2];
$webinarStartTime = $dateTimeExtended[5];
$webinarStartTimeMeridiem = $dateTimeExtended[6];
$webinarTimeZone = $dateTimeExtended[7];

if ($webinarStartTimeMeridiem == 'AM' || $webinarStartTimeMeridiem == 'PM') {
	$centralTime = new DateTime($webinarStartTime . $webinarStartTimeMeridiem, new DateTimeZone('America/New_York'));
	$centralTime->setTimezone(new DateTimeZone('America/Chicago'));

	$pacificTime = new DateTime($webinarStartTime . $webinarStartTimeMeridiem, new DateTimeZone('America/New_York'));
	$pacificTime->setTimezone(new DateTimeZone('America/Los_Angeles'));
}
else {
	$centralTime = 'Subtract 1 hour for Central Time';
	$pacificTime = 'Subtract 3 hours for Pacific Time';
}

$webinarEndTime = '';
$webinarDescription = 'Free webinar for those who are Multi-Family Investing Association Students';
$webinarOrganizer = 'Multi-Family Investing Association';
$webinarOrganizerEmail = 'support@multifamilyinvestors.org';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <link rel="shortcut icon" href="favicon.png">
    
    <title>You are confirmed!</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- AddThisEvent theme css -->
	<link rel="stylesheet" href="css/addthisevent.theme5.css" type="text/css" media="screen" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- AddThisEvent -->
	<script type="text/javascript" src="https://addthisevent.com/libs/ate-latest.min.js"></script>

	<!-- AddThisEvent Settings -->
	<script type="text/javascript">
	addthisevent.settings({
		license    : "replace-with-your-licensekey",
		css        : false,
		outlook    : {show:true, text:"Outlook"},
		google     : {show:true, text:"Google"},
		yahoo      : {show:true, text:"Yahoo"},
		outlookcom : {show:true, text:"Outlook.com"},
		appleical  : {show:true, text:"Apple"},
		dropdown   : {order:"appleical,google,outlook,outlookcom,yahoo"}
	});
	</script>

	<?php
    $ipaddress = $_SERVER["REMOTE_ADDR"];
    //Check if your IP Address is one of the following
    // 152.179.160.114 - CSA
    // 66.67.46.235, 63.131.31.189 - Mike Deiure
    // 69.35.208.62 - Ray
    // 66.113.45.134, 66.113.45.135 Montana
    
    if (($ipaddress == '152.179.160.114') || ($ipaddress == '66.67.46.235') || ($ipaddress == '66.113.45.134') || ($ipaddress == '63.131.31.189') || ($ipaddress == '69.35.208.62') || ($ipaddress == '66.113.45.135')) {
    } 
    else {
        include('../tracking.php');
    }
    ?>

  </head>

  <body>

  	<div class="row bg-white intro hidden-print">
  	<img src="https://lh6.ggpht.com/7HAx4p2lYSZ9pWdQXJm5IJtWb49CfgNOU95IOYOlQ37LEyWjalp4i22HEo1fHF3ZRfgnP0VDnQKmSCYaBTEISHk=s0" class="img-responsive img-center">
  	<p class="lead text-center">Great! You are now successfully registered and CONFIRMED for this webinar...</p>
  	</div>

		<div class="container bg-white main">
			<div class="row">
		    	<div class="col-md-7 hidden-print">
		    		<div class="page-header">
		    		<h1>Congratulations, Print this page!!</h1>
		    		</div>
		        	<div class="embed-responsive embed-responsive-16by9 video">
		        	<div id="wistia_h095wspvrq" class="wistia_embed embed-responsive-item" style="width:510px;height:287px;">&nbsp;</div>
						<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>
						<script>
						wistiaEmbed = Wistia.embed("h095wspvrq", {
						  videoFoam: true, 
						  autoPlay: true
						});
						</script>
					</div>
					<div class="alert alert-danger">
						<div class="row">
							<div class="col-md-2 text-center">
							<i class="fa fa-exclamation-triangle fa-3x"></i>
							</div>
							<div class="col-md-10">
							<p><strong>WARNING:</strong> Space is limited and these LIVE trainings always fill up because they are significantly better than the information others charge you thousands for... even though they are free.</p>
							</div>
						</div>
					</div>
				</div>
		        <div class="col-md-5">
		        	<div class="arrow hidden-print">
		        	<p><a href="#" onclick="window.print();return false;"><i class="fa fa-print"></i> Click to print this page</a></p>
		        	</div>
					<div class="panel panel-primary ticket">
						<div class="panel-heading">
						<h2 class="text-center">Your Ticket</h2>
						</div>
						<div class="panel-body">
						<h3 class="text-center">
						<strong>Admit One:</strong><br>
						<?php echo $webinarTitle ?>
						</h3>
						<hr class="dotted">
							<div class="well">
								<dl class="dl-horizontal">
								  <dt><i class="fa fa-user"></i></dt>
								  <dd><strong>Name:</strong><br><?php echo $webinarAttendeeName;?></dd>
								  <dt></dt>
								  <dd><br></dd>
								  <dt><i class="fa fa-calendar"></i></dt>
								  <dd><strong>Date:</strong><br><?php echo $webinarDay . " " . $webinarMonth . " " . $webinarDate . " " . date('Y');?></dd>
								  <dt></dt>
								  <dd><br></dd>
								  <dt><i class="fa fa-clock-o"></i></dt>
								  <dd><strong>Time:</strong><br><?php echo $webinarStartTime . $webinarStartTimeMeridiem . " "  . $webinarTimeZone;?></dd>	
								  <?php if ($webinarStartTimeMeridiem == 'AM' || $webinarStartTimeMeridiem == 'PM'):?>
								  <dt></dt>
								  <dd><?php echo $centralTime->format('g:iA');?> (Central)</dd>
								  <dt></dt>
								  <dd><?php echo $pacificTime->format('g:iA');?> (Pacific)</dd>
								  <?php else :?>
								  <dt></dt>
								  <dd><?php echo $centralTime;?></dd>
								  <dt></dt>
								  <dd><?php echo $pacificTime;?></dd>
								  <?php endif; ?>			  
								</dl>				
							</div>
						</div>
					<img src="img/page-corner.jpg" class="page-corner">
					</div>
		        </div>
	        </div>
	    <h3 class="text-center hidden-print">“Make Sure You Don’t Miss This Rare FREE Online Event.<br>Click to Add This Special Event To Your iCal, Outlook, or Google Calendar Now!”</h3>
	  		<div title="Add to Calendar" class="addthisevent hidden-print">
		    Add to Calendar
		    <span class="start"><?php echo $webinarDay . " " . $webinarMonth . " " . $webinarDate . " " . date('Y') . $webinarStartTime;?></span>
		    <span class="end"><?php echo $webinarDay . " " . $webinarMonth . " " . $webinarDate . " " . date('Y') . $webinarStartTime;?></span>
		    <span class="timezone">America/New_York</span>
		    <span class="title"><?php echo $webinarTitle;?></span>
		    <span class="description"><?php echo $webinarDescription;?></span>
		    <span class="location">Location of the event</span>
		    <span class="organizer"><?php echo $webinarOrganizer;?></span>
		    <span class="organizer_email"><?php echo $webinarOrganizerEmail;?></span>
		    <span class="facebook_event">https://www.facebook.com/events/703782616363133</span>
		    <span class="all_day_event">true</span>
		    <span class="date_format">MM/DD/YYYY</span>
			</div>
	    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

    <!-- KissMetrics Record Page Views -->
    <script type="text/javascript">
	_kmq.push(['identify', '<?php echo $inf_field_Email ?>']); // IDENTIFY CONTACT
	_kmq.push(['record', 'Viewed Page - TY Webinar Registration']); // PAGE SPECIFIC EVENT
	</script>

  </body>
</html>