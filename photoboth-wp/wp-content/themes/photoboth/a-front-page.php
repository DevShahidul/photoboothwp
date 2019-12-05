<?php 

/**
 * Template Name: Homepage
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


get_header(); ?>
<main class="main-wrap home-page">
<div class="clearfix"></div>
<!-- Home Banner -->
<div class="banner grypattern">
  <div class="poster"></div>
  <div class="wrapper">
    <div class="banner-content">
      <h2><?php echo bloginfo('description'); ?></h2>
      </div>
      <a href="<?php echo the_field('home_banner_video'); ?>" data-fancybox class="video-box">
        <i class="fa fa-play-circle"></i>
        <div class="overlay"></div>
      </a>
  </div>
  <div class="banner-footer">
    <div class="row">
      <?php
                  // check if the repeater field has rows of data
        if( have_rows('home_banner_footer') ):

          // loop through the rows of data
            while ( have_rows('home_banner_footer') ) : the_row();
            $link = get_sub_field('home_banner_footer_link');
            $linkUrl = !empty($link) ? $link['url'] : '';
            $target = get_sub_field('targeted_id');
            $targetId = !empty($target) ? $target : '';
      ?>
        <div class="col-sm-6 <?php echo the_sub_field('banner_footer_border_position'); ?>">
          <a href="<?php echo $linkUrl; ?>" data-id="<?php echo $targetId; ?>"> 
            <i class="fa fa-<?php echo the_sub_field('banner_footer_icon_name'); ?>"></i>
            <?php echo the_sub_field('banner_footer_title'); ?>
            <span><?php echo the_sub_field('banner_footer_text'); ?></span>
          </a>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<!-- Different Style of Photo Booths -->
<?php  include('template/different-style-photo-booths.php'); ?>

<!-- Booth For Every Occasion -->
<div class="section text-center">
  <div class="wrapper">
    <div class="title">
      <h2><?php echo the_field('every_occasion_section_title'); ?></h2>
    </div>
    <div class="row">
        <div class="col-sm-12">
          <?php echo the_field('every_occasion_section_content'); ?>
        </div>
    </div>
  </div>
</div>


<!-- Our Work -->
<div class="section text-center grypattern">
  <div class="wrapper">
    <div class="title">
      <h2><?php the_field('all_work_section_title'); ?></h2>
    </div>

    <?php 
      $args = array( 'post_type' => 'all_the_work', 'order' => 'ASC', 'posts_per_page' => 3 );
      $work_query = new WP_Query( $args ); 
      
      if ( $work_query->have_posts() ) : while ( $work_query->have_posts() ) : $work_query->the_post(); 
    ?>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="work-box"> <i class="flaticon-<?php echo the_field('all_work_item_icon'); ?>"></i>
          <h2><?php the_title(); ?> </h2>
          <?php the_content(); ?>
          <a href="<?php the_permalink(); ?>" class="viewAll">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
      </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>

  </div>
</div>

<!-- Different Type of Size -->
<div class="section">
  <div class="wrapper">
   
    <div class=" col-xs-12">
      <?php $photoBoothRentButton = get_field('photo_booth_rentals_section_button'); ?>
      <div class="title">
        <h2><?php echo the_field('photo_booth_rentals_section_title'); ?></h2>
      </div>
      <?php echo the_field('photo_booth_rentals_section_text'); ?>
      <a href="<?php echo $photoBoothRentButton['url']; ?>" class="read-more-btn"><?php echo $photoBoothRentButton['title']; ?></a> 
    </div>
  </div>
</div>

<!-- Photo Gallery -->
<?php  include('template-parts/photo-gallery.php'); ?>

<!-- Video Gallery -->
<?php  include('template-parts/video-gallery.php'); ?>

</main>
<div class="clearfix"></div>

<!-- //Footer -->
<?php get_footer(); ?>