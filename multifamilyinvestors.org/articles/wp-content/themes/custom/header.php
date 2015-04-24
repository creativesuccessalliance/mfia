<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="http://multifamilyinvestors.org/css/theme.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body>

    <!-- Contact Information -->
    <div id="header-contact" style="background: #004060">
        <div class="container">
            <div class="text-right" style="font-size: 14px; color: #fff; padding: 5px 0; font-weight: 700; letter-spacing: 1.5px; font-family: 'Roboto', sans-serif;">
                <i class="fa fa-phone" style="margin-left: 10px; font-size: 18px; color: #A7C9F0;"></i> 1-800-559-8590
                <i class="fa fa-envelope" style="margin-left: 10px; font-size: 16px; color: #A7C9F0"></i> <a href="mailto:support@multifamilyinvestors.org" style="color: #fff">support@multifamilyinvestors.org</a>
            </div>
        </div>
    </div>

    <!-- Logo & Navigation -->
    <div class="navbar clearfix">
        <div class="container">
            <a href="../index.php"><img src="http://multifamilyinvestors.org/img/logo.png" class="img-responsive pull-left"></a>
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

    <div class="container">