<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Photoboth
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

	<a href="tel:888 340 9190" class="mobile-device btn btn-success btn-circle btn-xl">
		<i class="fa fa-fw fa-phone faa-horizontal animated"></i>
	</a> 

	<!-- Header -->
	<header class="site-header">
	  <div class="wrapper">
	    <div class="logo"> 
	    	<!-- <a href="index.php"><img src="img/logo.png" alt=""></a>  -->
	    	<?php
			the_custom_logo();

			if ( $photoboth_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $photoboth_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
	    </div>
	    <div class="navigation">
	      <ul>
	        <li><span><?php echo the_field('header_call_to_action_title', 'Options'); ?>:</span>
	        <a href="tel:<?php echo the_field('header_call_to_action_phone_link', 'Options'); ?>"><i class="fa fa-phone"></i> <?php echo the_field('header_call_to_action_phone', 'Options'); ?></a>
	        &nbsp; | &nbsp;
	        <a href="mailto:<?php echo the_field('header_call_to_action_email', 'Options'); ?>"><i class="fa fa-envelope"></i><?php echo the_field('header_call_to_action_email', 'Options'); ?></a>
	      </li>
	      </ul>
	    </div>

	    <a id="menu-toggle" href class="toggle"><i class="fa fa-bars"></i> &nbsp;<span>Menu</span></a>

	    <div id="sidebar-wrapper">
	      <div>
	      <ul class="sidebar-nav menu-header">
	        <a id="menu-close"  class="btn btn-default btn-lg pull-right toggle">
	          <i class="fa fa-times"></i></a>
	        <li class="sidebar-brand"> 
	        	<!-- <a href="index.php"><img src="img/logo.png" alt=""></a>  -->
	        	<?php echo the_custom_logo(); ?>
	        </li>
	      </ul>
	      </div>
	      <?php
			wp_nav_menu( array(
				'theme_location' => 'main-menu',
				'menu_id'        => 'primary-menu',
				'menu_class' 		=> 'sidebar-nav menu-body',
				'container'        	=> 'div',
				'container_class' 	=> 'collapse navbar-collapse',
				'container_id' 		=> 'navbarNavDropdown',
				'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
		  ?>
	    </div>
	  </div>
	</header>
	<div class="clearfix"></div>