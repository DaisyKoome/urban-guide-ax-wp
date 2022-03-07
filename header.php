<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package axis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<!-- main_wrapper -->
<div id="main_wrapper" class="clearfloat">
    <!-- mobile_nav_wrapper -->
    <div id="mobile_nav_wrapper">
        <div class="mobile-nav-content">
            <div class="header">
                <a href="#" class="menu-close">&times;</a>
                <a href="#" class="logo">
                    <img src="images/Axis-logo.png" alt="logo">
                </a>
            </div>
            <ul class="mobile-nav">
                <li>
                    <a href="#" class="active">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Features</a>
                </li>
                <li>
                    <a href="#">Help Centre</a>
                </li>
                <li>
                    <a href="#">Pricing</a>
                </li>
                <li>
                    <a href="#">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile_nav_wrapper end -->
<!-- header -->
<section class="bg">
    <header class="scrollingg">
        <div class="wrapper" class="clearfloat">
            <div class="top-bar">
                <div class="col left">
                    <a href="index.html" class="logo"> <img src="images/Axis-logo.png" width="186" height="77" alt="Axis-logo"> </a>
                </div>
                <div class="col right">
                    <div class="menu-icon"><span class="icon-main-menu"></span></div>
                    <div class="main-menu">
                        <ul id="main_nav">
                            <li class="current active">
                                <a href="#">About</a>
                            </li>
                            <li >
                                <a href="#">Features</a>
                            </li>
                            <li >
                                <a href="#">Help Centre</a>
                            </li>
                            <li >
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="about-us.html">Jobs</a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-secondary btn-join">
                        <span>Join us</span>
                    </button>
                </div>
            </div>
        </div>
    </header>