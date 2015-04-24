<?php

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

// Set the full date and hotel info based on what day the user picks
if ($SessionDay == 'wednesday') {
    $EventDate = 'Wednesday, January 7th';
    $EventHotelName = 'Crown Plaza';
    $EventHotelAddress = '5303 West Kennedy Boulevard';
    $EventHotelCity = 'Tampa';
    $EventHotelState = 'FL';
    $EventHotelZip = '33609';
    $GoogleMap = 'https://goo.gl/maps/UR6cN';
	$GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14098.30149420361!2d-82.532882!3d27.94566!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b84eaa928d3c03!2sCrowne+Plaza!5e0!3m2!1sen!2sus!4v1417555826244" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
elseif ($SessionDay == 'thursday') {
    $EventDate = 'Thursday, January 8th';
    $EventHotelName = 'Holiday Inn & Suites';
    $EventHotelAddress = '5905 Kirkman Road';
    $EventHotelCity = 'Orlando';
    $EventHotelState = 'FL';
    $EventHotelZip = '32819';
    $GoogleMap = 'https://goo.gl/maps/oFggH';
	$GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14028.407295932893!2d-81.457593!3d28.47648!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x69a4c768fa252ebf!2sHoliday+Inn!5e0!3m2!1sen!2sus!4v1417555873883" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
elseif ($SessionDay == 'friday') {
    $EventDate = 'Friday, January 9th';
    $EventHotelName = 'Marriott Orlando Airport';
    $EventHotelAddress = '7499 Augusta National Drive';
    $EventHotelCity = 'Orlando';
    $EventHotelState = 'FL';
    $EventHotelZip = '32822';
    $GoogleMap = 'https://goo.gl/maps/Ygk2h';
	$GoogleEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14031.09114038994!2d-81.30557!3d28.456265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0e6b87d7a2501ea!2sOrlando+Airport+Marriott!5e0!3m2!1sen!2sus!4v1417555928331" width="600" height="450" frameborder="0" style="border:0"></iframe>';
}
else {
}

// Set page title
$CurrentPage = $_SERVER['REQUEST_URI'];
    
if($CurrentPage== '/' || $CurrentPage== '/index.php' || $CurrentPage== '' ) {
    $PageTitle = 'Multi-Family Investing Workshop';
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
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS stylesheet -->
    <link href="css/styles.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Optimizely -->
    <script src="//cdn.optimizely.com/js/255151401.js"></script>

    <!-- KISSmetrics tracking snippet -->
    <script type="text/javascript">
    var _kmq = _kmq || [];
    var _kmk = _kmk || '6fe3e2d53f742b6510321c9519383d11f2023a26';

    function _kms(u) {
        setTimeout(function() {
            var d = document,
                f = d.getElementsByTagName('script')[0],
                s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = u;
            f.parentNode.insertBefore(s, f);
        }, 1);
    }
    _kms('//i.kissmetrics.com/i.js');
    _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
    </script>

    <!-- Crazy Egg -->
    <script type="text/javascript">
    setTimeout(function() {
        var a = document.createElement("script");
        var b = document.getElementsByTagName("script")[0];
        a.src = document.location.protocol + "//dnn506yrbagrg.cloudfront.net/pages/scripts/0017/5996.js?" + Math.floor(new Date().getTime() / 3600000);
        a.async = true;
        a.type = "text/javascript";
        b.parentNode.insertBefore(a, b)
    }, 1);
    </script>


</head>

<body>

    <!-- Contact Information -->
    <div id="header-contact" style="background: #004060">
        <div class="container" style="max-width: 960px;">
            <div class="text-right" style="font-size: 14px; color: #fff; padding: 5px 0; font-weight: 700; letter-spacing: 1.5px; font-family: 'Roboto', sans-serif;">
                <i class="fa fa-phone" style="margin-left: 10px; font-size: 18px; color: #A7C9F0;"></i> 1-800-559-8590
                <i class="fa fa-envelope" style="margin-left: 10px; font-size: 16px; color: #A7C9F0"></i> <a href="mailto:support@multifamilyinvestors.org" style="color: #fff">support@multifamilyinvestors.org</a>
            </div>
        </div>
    </div>

    <!-- Logo & Navigation -->
    <div class="navbar clearfix" style="margin-bottom: 20px">
        <div class="container" style="max-width: 960px;">
            <a href="../index.php"><img src="http://www.multifamilyinvestors.org/img/logo.png" class="img-responsive navbar-logo"></a>
            <nav>
                <ul class="nav navbar-nav">
                    <li><a href="../about.php">About</a></li>
                    <li><a href="../faqs.php">Real Estate FAQs</a></li>
                    <li><a href="http://multifamilyinvestors.org/florida">Upcoming Events</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>