<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Photoboth
 */

// Get Feature image link
$bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

// Header
get_header();
?>

<!-- Inner Banner -->
<div class="inner-banner-image" style="background-image:url(<?php echo $bannerImage[0]; ?>);">
  <div class="container">
    <p><?php the_title(); ?></p>
  </div>
</div>

<!-- Section -->
<div class="inner-content">
  <div class="wrapper">
  	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.
	?>
  </div>
</div>
<div class="clearfix"></div>

<!-- //Footer -->
<?php get_footer(); ?>
