<?php 

/**
 * Template Name: Photo boot style
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
<main class="main-wrap photo-booth-style-page">
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
      <?php
                  // check if the repeater field has rows of data
        if( have_rows('photo_booth_style_pages_figure') ):

          // loop through the rows of data
            while ( have_rows('photo_booth_style_pages_figure') ) : the_row();
            $contentFigure = get_sub_field('photo_booth_style_pages_figure_image');
      ?>
        <img src="<?php echo $contentFigure['url']; ?>" alt="<?php echo $contentFigure['alt']; ?>" class="inner-right-img img-thumbnail">
      <?php endwhile; endif; ?>
      
      <?php echo the_field('photo_booth_style_content'); ?>
    </div>
    </div>

</main>
<div class="clearfix"></div>

<!-- //Footer -->
<?php get_footer(); ?>
