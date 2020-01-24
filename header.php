<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vincelaylo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="mobile-menu">
    <div class="mm-inner">
        <?php wp_nav_menu(array( 
                            'theme_location' => 'main-menu1'
                            )) ?>
        <div id="mobile-locations">
        <?php
            if(is_active_sidebar('mlocations')){
                dynamic_sidebar('mlocations');
            }
        ?>
        </div>
    </div>
</div>


<header id="main-header">

    <!-- <div id="main-logo-container">
        <a href="<?php echo get_site_url() ?>"><img id="logo" src="<?php echo get_site_url() ?>/wp-content/uploads/2019/11/BK-Dental-sample-logo.svg"></a>               
    </div> -->
    <a href="www.vincelaylo.com"><div id="header-name">
        VINCE JOSHUA LAYLO
        </div>
        </a>

    <div id="main-header-menu-container"> 
        <?php wp_nav_menu(array( 
                        'theme_location' => 'main-menu1'
                        )) ?>
    </div>
    
    <?php
    if(is_active_sidebar('Locations')){
        dynamic_sidebar('Locations');
    }
    ?>


    <button class="hamburger-button">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </button>  
        
</header>



</div>
</div>


<div id="page" class="main-site-content-inside-border">

	<div id="content" class="site-content">

    