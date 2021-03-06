<?php 

/**
 * Template Name: Gallery page
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
<main class="main-wrap gallery-page">
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
    <div class="gallery"> 
        <?php
                      // check if the repeater field has rows of data
            if( have_rows('gallery_items') ):

              // loop through the rows of data
                while ( have_rows('gallery_items') ) : the_row();
                $galleryImage = get_sub_field('gallery_item');
          ?>

            <a href="<?php echo $galleryImage['url']; ?>" data-fancybox="gallery" data-caption="<?php echo $galleryImage['caption']; ?>"> 
            <img class="example-image img-thumbnail" src="<?php echo $galleryImage['url']; ?>" alt="<?php echo $galleryImage['alt']; ?>"/></a>
          <?php endwhile; endif; ?>   
     </div>
  </div>
</div>
</main>
<div class="clearfix"></div>

<!-- //Footer -->
<?php get_footer(); ?>