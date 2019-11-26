<?php 

/**
 * Template Name: Scrap book page
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

  $bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  $videoThumb = get_field('scrap_booking_page_video_thumb');

get_header(); ?>
<main class="main-wrap elite-photo-booth-page">
<div class="clearfix"></div>
<!-- Inner Banner -->
<div class="inner-banner-image" style="background-image:url(<?php echo $bannerImage[0]; ?>);">
  <div class="container">
    <p><?php the_title(); ?></p>
  </div>
</div>

<!-- Section -->
<div class="inner-content">
  <div class="wrapper">
    <div class="title">
      <h2><?php the_title(); ?></h2>
    </div>
    
    <div class="inner-video-section">
      <img src="<?php echo $videoThumb['url']; ?>" alt="<?php echo $videoThumb['alt']; ?>" class="img-thumbnail">               
      <a class="play-btn" href="<?php echo the_field('scrap_booking_page_video_link'); ?>" data-fancybox><i class="fa fa-play-circle"></i></a>        
    </div> 
    
    <?php echo the_field('scrap_booking_page_content'); ?>
  </div>
  <div class="clear"></div>
</div>


<!-- Photo Gallery -->
<div class="section text-center grypattern " id="movePhotoGalary">
  <div class="wrapper">
    <div class="title">
      <h2><?php echo the_field('scrap_booking_page_gallery_section_title'); ?></h2>
    </div>
    <?php echo the_field('photo_gallery_section_text'); ?>
    <div class="owl-carousel owl-theme" id="photogallery">
    <?php 
        $args = array( 'post_type' => 'scrap_book_gallery', 'order' => 'ASC', 'posts_per_page' => -1 );
        $scrap_book_gallery_query = new WP_Query( $args ); 

        if ( $scrap_book_gallery_query->have_posts() ) : 
          while ( $scrap_book_gallery_query->have_posts() ) : $scrap_book_gallery_query->the_post(); 
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

<div class="clear"></div>

<!-- //Footer -->
<?php get_footer(); ?>
