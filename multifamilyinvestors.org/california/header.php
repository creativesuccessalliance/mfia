<?php
// ============== Set Lead Source Vars

// Set the lsid
if (isset ($_GET['lsid']) || !empty ($_GET['lsid'])) {
    $lsid = $_GET['lsid'];
}
else {
    $lsid = NULL;
}

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

// Set the marketing source
if (isset ($_GET['source']) || !empty ($_GET['source'])) {
    $source = $_GET['source'];
}
elseif (isset ($_GET['inf_custom_MarketingSource']) || !empty ($_GET['inf_custom_MarketingSource'])) {
    $source = $_GET['inf_custom_MarketingSource'];
}
else {
    $source = 'Facebook';
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
else {

}

// ============== Set Contact Vars

// Set a first name, last name, email, and contact ID for thank you pages
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
    $inf_custom_SessionTime = urldecode($_GET['inf_custom_SessionTime']);
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

// Set the registration time
if (isset ($_GET['inf_custom_RegTime']) || !empty ($_GET['inf_custom_RegTime'])) {
    $RegTime = urldecode($_GET['inf_custom_RegTime']);
}
else {  
}

// Set the full date and hotel info based on what day the user picks
if ($SessionDay == 'Wednesday') {
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
elseif ($SessionDay == 'Thursday') {
    $EventDate = 'Thursday, April 16th';
    $EventHotelName = 'Courtyard San Jose';
    $EventHotelAddress = '655 Creekside way';
    $EventHotelCity = 'Campbell';
    $EventHotelState = 'CA';
    $EventHotelZip = '95008';
    $VenuePicture = 'courtyard-apr16.jpg';
    $GoogleMap = 'https://goo.gl/maps/kwJ70';
    $GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3174.0818042041956!2d-121.93610570000003!3d37.293195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e34c4caf95f75%3A0x8a8da8365469a339!2s655+Creekside+Way%2C+Campbell%2C+CA+95008!5e0!3m2!1sen!2sus!4v1427205528856" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
elseif ($SessionDay == 'Friday') {
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
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Live Events <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/california">California - April 2015</a></li>
                        </ul>
                        </li>
                        <li><a href="../contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>