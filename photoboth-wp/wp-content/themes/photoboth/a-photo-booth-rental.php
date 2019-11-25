<?php 

/**
 * Template Name: Photo boot rental
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

get_header(); ?>
<main class="main-wrap wedding-photo-booth-page">
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
    <?php echo the_field('photo_booth_rental_upper_content'); ?>
    <div class="booth-image">
      <?php
                  // check if the repeater field has rows of data
        if( have_rows('photo_booth_thumbnail_items') ):

          // loop through the rows of data
            while ( have_rows('photo_booth_thumbnail_items') ) : the_row();
            $bootImage = get_sub_field('photo_booth_thumbnail_items_figure');
      ?>

        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="<?php echo $bootImage['url']; ?>" alt="<?php echo $bootImage['alt']; ?>">
            <?php echo the_sub_field('photo_booth_thumbnail_items_content'); ?>
          </div>
        </div>
      <?php endwhile; endif; ?>
       
    </div>
    <?php echo the_field('photo_booth_rental_content'); ?>      
  </div>
</div>
</main>
<div class="clearfix"></div>

<!-- //Footer -->
<?php get_footer(); ?>