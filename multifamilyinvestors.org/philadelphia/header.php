<?php
// Set the csalsid
if (isset ($_GET['csalsid']) || !empty ($_GET['csalsid'])) {
    $csalsid = $_GET['csalsid'];
}
elseif (isset ($_GET['inf_custom_csalsid']) || !empty ($_GET['inf_custom_csalsid'])) {
    $csalsid = $_GET['inf_custom_csalsid'];
}
else {
    $csalsid = 'fb';
}

// Set the source
if ($csalsid == 'youtube') {
    $source = 'YouTube';
}
else {
    $source = 'Facebook';
}

// Set primary first name, last name, and email for thank you page
if (isset ($_GET['inf_field_FirstName']) || !empty ($_GET['inf_field_FirstName'])) {
    $PrimaryFirstName = $_GET['inf_field_FirstName'];
}
else {
}

if (isset ($_GET['inf_field_LastName']) || !empty ($_GET['inf_field_LastName'])) {
    $PrimaryLastName = $_GET['inf_field_LastName'];
}
else {
}

if (isset ($_GET['inf_field_Email']) || !empty ($_GET['inf_field_Email'])) {
    $PrimaryEmail = $_GET['inf_field_Email'];
}
else {
}

// Set the session day
if (isset ($_GET['inf_custom_SessionDay']) || !empty ($_GET['inf_custom_SessionDay'])) {
    $SessionDay = $_GET['inf_custom_SessionDay'];
}
else {  
}

// Set the session time
if (isset ($_GET['inf_custom_SessionTime']) || !empty ($_GET['inf_custom_SessionTime'])) {
    $SessionTime = urldecode($_GET['inf_custom_SessionTime']);
}
else {  
}

// Set the registration time
if (isset ($_GET['inf_custom_RegTime']) || !empty ($_GET['inf_custom_RegTime'])) {
    $RegTime = urldecode($_GET['inf_custom_RegTime']);
}
else {  
}

// Set the full date and hotel info based on what day the user picks
if ($SessionDay == 'Tuesday') {
    $EventDate = 'Tuesday, March 24th';
    $EventHotelName = 'Wingate by Wyndham Allentown';
    $EventHotelAddress = '4325 Hamilton Blvd';
    $EventHotelCity = 'Allentown';
    $EventHotelState = 'PA';
    $EventHotelZip = '18103';
    $VenuePicture = 'wingate-mar24.jpg';
    $GoogleMap = 'https://goo.gl/maps/Oso99';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3030.6328365361737!2d-75.54305169999999!3d40.571784699999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c4308911eba69d%3A0x4a3b8df1f0018415!2s4325+Hamilton+Blvd%2C+Allentown%2C+PA+18103!5e0!3m2!1sen!2sus!4v1425311439456" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
elseif ($SessionDay == 'Wednesday') {
    $EventDate = 'Wednesday, March 25th';
    $EventHotelName = 'DoubleTree by Hilton Hotel';
    $EventHotelAddress = '700 N King St';
    $EventHotelCity = 'Wilmington';
    $EventHotelState = 'DE';
    $EventHotelZip = '19801';
    $VenuePicture = 'doubletree-mar25.jpg';
    $GoogleMap = 'https://goo.gl/maps/iYtFU';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3067.8804682929294!2d-75.5481452!3d39.7423358!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6fd419ecca109%3A0x58142737341775fa!2s700+N+King+St%2C+Wilmington%2C+DE+19801!5e0!3m2!1sen!2sus!4v1425910938604" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
elseif ($SessionDay == 'Thursday') {
    $EventDate = 'Thursday, March 26th';
    $EventHotelName = 'Lancaster Host Resort';
    $EventHotelAddress = '2300 Lincoln Highway East';
    $EventHotelCity = 'Lancaster';
    $EventHotelState = 'PA';
    $EventHotelZip = '17602';
    $VenuePicture = 'lancaster-mar26.jpg';
    $GoogleMap = 'https://goo.gl/maps/gn8mh';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3055.2498897131513!2d-76.213668!3d40.0251999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c63ba5565a31dd%3A0x918d4447462793e4!2s2300+Lincoln+Hwy+E%2C+Lancaster%2C+PA+17602!5e0!3m2!1sen!2sus!4v1425311085566" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
else {
}

// Set page title
$CurrentPage = $_SERVER['REQUEST_URI'];
    
if($CurrentPage== '/' || $CurrentPage== '/index.php' || $CurrentPage== '' ) {
    $PageTitle = 'Multi Family Investing Association';
} else {
    $PageTitle = 'Multi-Family Investing Workshop - ' . $EventHotelCity . ', ' . $EventHotelState . ' on ' . $EventDate;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    
    <title><?php echo $PageTitle;?></title>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Custom CSS stylesheet -->
    <link href="css/styles.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

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

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W4JN7K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W4JN7K');</script>
<!-- End Google Tag Manager -->

        <!-- Header Contact Information -->
    <div class="hidden-print hidden-xs hidden-sm" style="background: #004060; /* Old browsers */
    background: -moz-linear-gradient(top,  #004060 0%, #0080c4 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#004060), color-stop(100%,#0080c4)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #004060 0%,#0080c4 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #004060 0%,#0080c4 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #004060 0%,#0080c4 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #004060 0%,#0080c4 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#004060', endColorstr='#0080c4',GradientType=0 ); /* IE6-9 */">
        <div id="header-contact" class="container">
            <i class="fa fa-phone"></i>&nbsp;1-800-559-8590
            <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:support@multifamilyinvestors.org">support@multifamilyinvestors.org</a>
        </div>

        <!-- Logo & Navigation -->
        <nav class="navbar navbar-default hidden-xs hidden-sm">
            <div class="container" style="max-width: 960px;">
                <div class="navbar-header">
                    <a href="../index.php"><img src="../img/logo.png" class="img-responsive navbar-logo"></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="../about.php">About</a></li>
                        <li><a href="../faqs.php">Real Estate FAQs</a></li>
                        <li><a href="http://multifamilyinvestors.org/articles">Articles</a></li>
                        <li><a href="http://multifamilyinvestors.org/philadelphia">Live Events</a></li>
                        <li><a href="../contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>