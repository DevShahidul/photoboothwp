<?php
/**
 * Template Name: Photo Gallery
 * Template Post Type: post, page, product
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
?>



<!-- Photo Gallery -->
<div class="section text-center grypattern " id="movePhotoGalary">
  <div class="wrapper">
    <div class="title">
      <h2><?php echo the_field('photo_gallery_section_title', 'Options'); ?></h2>
    </div>
    <?php echo the_field('photo_gallery_section_text', 'Options'); ?>
    <div class="owl-carousel owl-theme" id="photogallery">
		<?php 
	      $args = array( 'post_type' => 'photo_gallery', 'order' => 'ASC', 'posts_per_page' => -1 );
	      $photo_gallery_query = new WP_Query( $args ); 

	      if ( $photo_gallery_query->have_posts() ) : 
	      	while ( $photo_gallery_query->have_posts() ) : $photo_gallery_query->the_post(); 
	        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	      ?>
		      <div class="item">
		        <div class="hovereffect"> <img class="img-responsive" src="<?php echo $backgroundImg[0]; ?>" alt="<?php the_title(); ?>">
		          <div class="overlay">
		            <div class="info"> <a class="enlarge-btn" href="<?php echo $backgroundImg[0]; ?>" data-fancybox="gallery" data-caption=""><i class="fa fa-search"></i></a> </div>
		          </div>
		        </div>
		      </div>
	      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</div>


