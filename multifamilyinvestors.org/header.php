<?php
// ============== Set Lead Source Vars

// Set the lsid
if (isset ($_GET['lsid']) || !empty ($_GET['lsid'])) {
    $lsid = $_GET['lsid'];
}
else {
}

// Set the csalsid
if (isset ($_GET['csalsid']) || !empty ($_GET['csalsid'])) {
    $csalsid = $_GET['csalsid'];
}
elseif (isset ($_GET['inf_custom_csalsid']) || !empty ($_GET['inf_custom_csalsid'])) {
    $csalsid = $_GET['inf_custom_csalsid'];
}
else {
}

// Set the utm_source
if (isset ($_GET['utm_source']) || !empty ($_GET['utm_source'])) {
    $utm_source = $_GET['utm_source'];
}
else {
}

// Set the marketing source
if (isset ($_GET['source']) || !empty ($_GET['source'])) {
    $source = $_GET['source'];
}
elseif (isset ($_GET['inf_custom_MarketingSource']) || !empty ($_GET['inf_custom_MarketingSource'])) {
    $source = $_GET['inf_custom_MarketingSource'];
}
else {
}

// ============== Set Marketing Source Based on CSALSID

if ($csalsid == 'pc' || $csalsid == 'rpc') {
    $lsid = '9';
    $source = 'Direct Mail';
}
elseif ($csalsid == 'em' || $csalsid == 'em1' || $csalsid == 'em2' || $csalsid == 'em3' || $csalsid == 'em4' || $csalsid == 'em5' || $csalsid == 'em6' || $csalsid == 'em7' || $csalsid == 'em8' || $csalsid == 'em9') {
    $lsid = '1386';
    $source = 'House Email';
}
elseif ($csalsid == 'web') {
    $lsid = '3107';
    $source = 'Web';
}
elseif ($csalsid == 'jv') {
    $lsid = '6';
    $source = 'Realty 411';
}
elseif ($csalsid == 'jv1') {
    $lsid = '6';
    $source = 'Affiliate';
}
elseif ($csalsid == 'linkedin') {
    $lsid = '1922';
    $source = 'LinkedIn';
}
elseif ($csalsid == 'youtube') {
    $lsid = '1922';
    $source = 'YouTube';
}
elseif ($csalsid == 'digital') {
    $source = 'Digital';
}
elseif ($csalsid == 'vb') {
    $source = 'Voice Blast';
}
elseif ($csalsid == 'retarget') {
    $source = 'Retargeting';
}
elseif ($csalsid == 'fb') {
    $source = 'Facebook';
}
elseif ($utm_source == 'google') {
    $csalsid = 'google';
    $source = 'Google';
}
elseif ($csalsid == 'google') {
    $source = 'Google';
}
else {
    $csalsid = 'fb';
    $source = 'Facebook';
}

// ============== Set Contact Vars

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

// ============== Set Session Vars

// Set the session day
if (isset ($_GET['inf_custom_SessionDay']) || !empty ($_GET['inf_custom_SessionDay'])) {
    $SessionDay = $_GET['inf_custom_SessionDay'];
}
elseif (isset ($_GET['SessionDay']) || !empty ($_GET['SessionDay'])) {
    $SessionDay = $_GET['SessionDay'];
}
else {  
}

// Set the session time
if (isset ($_GET['inf_custom_SessionTime']) || !empty ($_GET['inf_custom_SessionTime'])) {
    $SessionTime = urldecode($_GET['inf_custom_SessionTime']);
}
elseif (isset ($_GET['SessionTime']) || !empty ($_GET['SessionTime'])) {
    $SessionTime = urldecode($_GET['SessionTime']);
}
else {  
}

// Set the session date
if (isset ($_GET['inf_custom_EventDate0']) || !empty ($_GET['inf_custom_EventDate0'])) {
    $inf_custom_EventDate0 = urldecode($_GET['inf_custom_EventDate0']);
}
else {  
}

// Set the session hotel info
if (isset ($_GET['inf_custom_EventHotelName']) || !empty ($_GET['inf_custom_EventHotelName'])) {
    $inf_custom_EventHotelName = urldecode($_GET['inf_custom_EventHotelName']);
}
else {  
}
if (isset ($_GET['inf_custom_EventHotelAddress']) || !empty ($_GET['inf_custom_EventHotelAddress'])) {
    $inf_custom_EventHotelAddress = urldecode($_GET['inf_custom_EventHotelAddress']);
}
else {  
}
if (isset ($_GET['inf_custom_EventHotelCity']) || !empty ($_GET['inf_custom_EventHotelCity'])) {
    $inf_custom_EventHotelCity = urldecode($_GET['inf_custom_EventHotelCity']);
}
else {  
}
if (isset ($_GET['inf_custom_EventHotelState']) || !empty ($_GET['inf_custom_EventHotelState'])) {
    $inf_custom_EventHotelState = urldecode($_GET['inf_custom_EventHotelState']);
}
else{
}
if (isset ($_GET['inf_custom_EventHotelZip']) || !empty ($_GET['inf_custom_EventHotelZip'])) {
    $inf_custom_EventHotelZip = urldecode($_GET['inf_custom_EventHotelZip']);
}
else{
}

// Set the registration time
if (isset ($_GET['inf_custom_RegTime']) || !empty ($_GET['inf_custom_RegTime'])) {
    $RegTime = urldecode($_GET['inf_custom_RegTime']);
}
else {  
}

// California Sweeps
if ($inf_custom_EventHotelState == 'CA' && $SessionDay == 'Wednesday') {
    $EventDate = 'Wednesday, April 15th';
    $EventHotelName = 'Hilton Concord';
    $EventHotelAddress = '1970 Diamond Blvd';
    $EventHotelCity = 'Concord';
    $EventHotelState = 'CA';
    $EventHotelZip = '94520';
    $VenuePicture = 'hilton-apr15.jpg';
    $GoogleMap = 'https://goo.gl/maps/iuUP5';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3145.24892562853!2d-122.05419660000001!3d37.9713197!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808566c5cf308d81%3A0x53f25cac8f9413e8!2s1970+Diamond+Blvd%2C+Concord%2C+CA+94520!5e0!3m2!1sen!2sus!4v1427205479377" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
elseif ($inf_custom_EventHotelState == 'CA' && $SessionDay == 'Thursday') {
    $EventDate = 'Thursday, April 16th';
    $EventHotelName = 'Courtyard San Jose';
    $EventHotelAddress = '655 Creekside Way';
    $EventHotelCity = 'Campbell';
    $EventHotelState = 'CA';
    $EventHotelZip = '95008';
    $VenuePicture = 'courtyard-apr16.jpg';
    $GoogleMap = 'https://goo.gl/maps/kwJ70';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3174.0818042041956!2d-121.93610570000003!3d37.293195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e34c4caf95f75%3A0x8a8da8365469a339!2s655+Creekside+Way%2C+Campbell%2C+CA+95008!5e0!3m2!1sen!2sus!4v1427205528856" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
elseif ($inf_custom_EventHotelState == 'CA' && $SessionDay == 'Friday') {
    $EventDate = 'Friday, April 17th';
    $EventHotelName = 'Hilton San Francisco Bayfront';
    $EventHotelAddress = '600 Airport Blvd';
    $EventHotelCity = 'Burlingame';
    $EventHotelState = 'CA';
    $EventHotelZip = '94010';
    $VenuePicture = 'hilton-apr17.jpg';
    $GoogleMap = 'https://goo.gl/maps/MUc4c';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3161.5146943200966!2d-122.342929!3d37.590044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f9d92241beb47%3A0xe3c5e36becb97a5f!2s600+Airport+Blvd%2C+Burlingame%2C+CA+94010!5e0!3m2!1sen!2sus!4v1427205579785" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
else {
}

// Chicago Sweeps
if ($inf_custom_EventHotelState == 'IL' && $SessionDay == 'Wednesday') {
    $EventDate = 'Wednesday, May 27th';
    $EventHotelName = 'Hilton Oak Lawn';
    $EventHotelAddress = '9333 S. Cicero Avenue';
    $EventHotelCity = 'Oak Lawn';
    $EventHotelState = 'IL';
    $EventHotelZip = '60453';
    $VenuePicture = 'hilton-may27.jpg';
    $GoogleMap = 'https://goo.gl/maps/HSRJI';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2977.8981026134898!2d-87.7394688!3d41.722717599999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e3a61f9eafe23%3A0x85b8354db855bd32!2s9333+S+Cicero+Ave%2C+Oak+Lawn%2C+IL+60453!5e0!3m2!1sen!2sus!4v1428940822955" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
elseif ($inf_custom_EventHotelState == 'IL' && $SessionDay == 'Thursday') {
    $EventDate = 'Thursday, May 28th';
    $EventHotelName = 'Hilton Garden Inn';
    $EventHotelAddress = '10 Drury Lane';
    $EventHotelCity = 'Oakbrook Terrace';
    $EventHotelState = 'IL';
    $EventHotelZip = '60181';
    $VenuePicture = 'hilton-may28.jpg';
    $GoogleMap = 'https://goo.gl/maps/b9K3G';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2971.5504538781192!2d-87.9538915!3d41.859502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e4c5fb70f7fa7%3A0xe16e2ee924333350!2s10+Drury+Ln%2C+Villa+Park%2C+IL+60181!5e0!3m2!1sen!2sus!4v1428940942274" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
elseif ($inf_custom_EventHotelState == 'IL' && $SessionDay == 'Friday') {
    $EventDate = 'Friday, May 29th';
    $EventHotelName = 'Sheraton Chicago Northbrook Hotel';
    $EventHotelAddress = '1110 Willow Road';
    $EventHotelCity = 'Northbrook';
    $EventHotelState = 'IL';
    $EventHotelZip = '60062';
    $VenuePicture = 'sheraton-may29.jpg';
    $GoogleMap = 'https://goo.gl/maps/gd5kP';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2959.9626325396716!2d-87.8072285!3d42.1082711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fc6e54287646d%3A0x54cb9b05ef3b3292!2s1110+Willow+Rd%2C+Northbrook%2C+IL+60062!5e0!3m2!1sen!2sus!4v1428941097729" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
else {
}

// Set the link event to the correct directory
if ($inf_custom_EventHotelState == 'CA') {
    $eventlink = 'california';
}
elseif ($inf_custom_EventHotelState == 'TX') {
    $eventlink = 'philadelphia';
}
else {

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
    
    <!--
    <meta property="og:title" content="Looking to Increase Cash Flowing Investments And Obtain Future Appreciation?"/>
    <meta property="og:image" content="http://www.multifamilyinvestors.org/img/og-image-dave-teaching.jpg"/>
    <meta property="og:description" content="Join us in Los Angeles on February 4-6th and discover the system used to invest in multi-family properties, created by a man who has controlled over 8,200 units across the United States!"/>
    <meta property="og:url" content="http://www.multifamilyinvestors.org/"/>
    -->

    <link rel="shortcut icon" href="favicon.png">
    
    <title><?php echo $PageTitle;?></title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome-animation.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
        include('tracking.php');
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
    <div class="hidden-print hidden-xs" style="background: #004060; /* Old browsers */
    background: -moz-linear-gradient(top,  #004060 0%, #0080c4 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#004060), color-stop(100%,#0080c4)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #004060 0%,#0080c4 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #004060 0%,#0080c4 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #004060 0%,#0080c4 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #004060 0%,#0080c4 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#004060', endColorstr='#0080c4',GradientType=0 ); /* IE6-9 */">
        <div id="header-contact" class="container text-right">
            <i class="fa fa-phone"></i>&nbsp;1-800-559-8590
            <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:support@multifamilyinvestors.org">support@multifamilyinvestors.org</a>
        </div>

        <!-- Logo & Navigation -->
        <nav class="navbar navbar-default">
            <div class="container">
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
                        <li><a href="../about.php" target="_blank">About</a>
                        </li>
                        <li><a href="../faqs.php" target="_blank">Real Estate FAQs</a>
                        </li>
                        <li><a href="http://multifamilyinvestors.org/articles" target="_blank">Articles</a>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Live Events <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/california" target="_blank">California - April 2015</a></li>
                            <li></li>
                            <li><a href="/illinois" target="_blank">Illinois - May 2015</a></li>
                        </ul>
                        </li>
                        <li><a href="../contact.php" target="_blank">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
