<?php
/**
 * Header.php is generally used on all the pages of your site and is called somewhere near the top
 * of your template files. It's a very important file that should never be deleted.
 * @package Bulletin WordPress Theme
 * @since 1.0
 * @author WPExplorer : http://www.wpexplorer.com
 * @copyright Copyright (c) 2012, WPExplorer
 * @link http://www.wpexplorer.com
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<?php wpex_hook_head_top(); ?>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <!-- Mobile Specific
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    
    <!-- Title Tag
    ================================================== -->
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
    
    <!-- Browser dependent stylesheets
    ================================================== -->
    <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" media="screen" />
    <![endif]-->
    
    <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7.css" media="screen" />
    <![endif]-->
    
    <!-- Load HTML5 dependancies for IE
    ================================================== -->
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lte IE 7]>
        <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
    <!--[if lt IE 7]>
        <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/>
    <![endif]-->
    
    <!-- WP Head
    ================================================== -->
    <?php wpex_hook_head_bottom(); ?>
    <?php wp_head(); // Very important WordPress core hook. If you delete this bad things WILL happen. ?>
    
</head><!-- /end head -->


<!-- Begin Body
================================================== -->
<body <?php body_class(); ?>>

<?php if( of_get_option('notification', '0') ) { ?>
    <div id="callout">
        <div id="callout-inner">
            <?php echo of_get_option('notification'); ?>
        </div><!-- /callout-exit -->
        <a href="#" id="callout-exit"><?php _e('Close Notification','minim'); ?></a>
    </div><!-- /callout -->
    <a href="#" id="callout-open"><?php _e('Open Notification','minim'); ?></a>
<?php } ?>

<div id="wrap" class="clearfix">
	<?php wpex_hook_content_before(); ?>
    <div id="main-content" class="clearfix">
    <?php wpex_hook_content_top(); ?>