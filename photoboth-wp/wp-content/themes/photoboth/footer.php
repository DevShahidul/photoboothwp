<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Photoboth
 */

	
	$footerCalltoActionButton = get_field('footer_call_to_action_button', 'Options');
?>

	<!-- Footer Upper Section -->

	<div class="footer-upper orange-bg">
	  <div class="wrapper inline-text">
	    <div >
	      <h4><?php echo the_field('footer_call_to_action_text', 'Options'); ?></h4>
	    </div>
	    <div> 
	    &nbsp;&nbsp;&nbsp;<a href="<?php echo $footerCalltoActionButton['url']; ?>" class="read-more-btn-blue btn-sm"> <?php echo $footerCalltoActionButton['title']; ?></a> 
	    </div>
	  </div>
	</div>

	<!-- Footer -->
	<footer>
	  <div class="no-gutters text-info-bootom">
	    <i>We Service New York, New Jersey, Connecticut, and Beyond</i>
	  </div>
	  <div class="no-gutters address-panel">
	    <div class="col-sm-3 border-right-plan">
	      <b><?php echo the_field('head_quarters_title', 'Options'); ?></b>
	      <?php echo the_field('head_quarters_text', 'Options'); ?>
	    </div>
	    <div class="col-sm-9">
	      <div class="text-center"><b><?php echo the_field('other_offices_title', 'Options'); ?></b></div>
	      <div >
			
			<?php if(get_field('right_widgets', 'Options')): ?>
				<?php while(has_sub_field('right_widgets', 'Options')): ?>

					<div class="col-sm-3">
	          			<?php the_sub_field('right_widget_text', 'Options'); ?>
			        </div>

				<?php endwhile; ?>

			<?php endif; ?>
	      </div>
	      
	    </div>
	  </div>
	   <div class="clearfix"></div>
	    <?php
			wp_nav_menu( array(
				'theme_location' => 'footer-menu',
				'menu_id'        => 'footer-menu',
				'menu_class' 		=> 'links',
			) );
		?>
	    <ul class="social-icon">
	        <span>Get in touch</span>
	        <?php if(have_rows('footer_social_items', 'Options')): ?>
				<?php 
					while( have_rows('footer_social_items', 'Options') ) : the_row();

					$footerSocialIcon =	get_sub_field('social_icon', 'Options'); 

				?>

					<li><a href="<?php echo $footerSocialIcon['url']; ?>" target="_blank"><i class="fa fa-<?php echo $footerSocialIcon['title']; ?>"></i></a></li>

				<?php endwhile; ?>

			<?php endif; ?>
	    </ul>
	    <ul class="partner">
			
			<?php if(have_rows('footer_partner_logo_items', 'Options')): ?>
				<?php 
					while( have_rows('footer_partner_logo_items', 'Options') ) : the_row();

					$partnerLogo =	get_sub_field('partner_logo', 'Options'); 

				?>

					<li><a href="<?php the_sub_field('partner_link', 'Options'); ?>" target="_blank"><img src="<?php echo $partnerLogo['url']; ?>" alt="<?php echo $partnerLogo['alt']; ?>"></a></li>

				<?php endwhile; ?>

			<?php endif; ?>
	    </ul>
	  </div>
	</footer>
	<div class="copyright">
	  <p>Copyright&copy; <?php echo date("Y"); ?> <?php echo the_field('footer_copyright_text', 'Options'); ?></p>
	</div>

<?php wp_footer(); ?>
<script>
	(function($){
		$(function(){
			$( ".date-input-css" ).datepicker();
		});
	})(jQuery);
</script>

</body>
</html>
