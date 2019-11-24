<?php
/**
 * Template Name: Video Gallery
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

<!-- Video Gallery -->
<div class="section text-center">
  <div class="wrapper">
    <div class="title">
      <h2><?php echo the_field('our_video_gallery_title', 'Options'); ?></h2>
    </div>
    <p class="text-center"><?php echo the_field('our_video_gallery_text', 'Options'); ?></p>
    <div class="owl-carousel owl-theme" id="videogallery">
      <?php 
        $args = array( 'post_type' => 'video_gallery', 'order' => 'ASC', 'posts_per_page' => -1 );
        $video_gallery_query = new WP_Query( $args ); 

        if ( $video_gallery_query->have_posts() ) : 
          while ( $video_gallery_query->have_posts() ) : $video_gallery_query->the_post(); 
          $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        ?>
          <div class="item">
            <div class="hovereffect2"> <img class="img-responsive" src="<?php echo $backgroundImg[0]; ?>" alt="<?php the_title(); ?>">
              <div class="overlay">
                <div class="info">
                  <h3><?php the_title(); ?></h3>
                  <a class="enlarge-btn" href="<?php the_excerpt(); ?>" data-fancybox><i class="fa fa-play-circle"></i></a> </div>
              </div>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
  
    </div>
  </div>
</div>