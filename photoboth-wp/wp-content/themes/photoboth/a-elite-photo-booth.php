<?php 

/**
 * Template Name: Elite photo boot page
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
  $videoThumb = get_field('elite_photo_booth_page_after_hero_video_thumb');

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
      <a class="play-btn" href="<?php echo the_field('elite_photo_booth_page_after_hero_video_link'); ?>" data-fancybox><i class="fa fa-play-circle"></i></a>        
    </div> 
    
    <?php echo the_field('elite_photo_booth_page_after_hero_content'); ?>
  <br>
  <?php
              // check if the repeater field has rows of data
    if( have_rows('elite_photo_booth_page_after_hero_buttons') ):

      // loop through the rows of data
        while ( have_rows('elite_photo_booth_page_after_hero_buttons') ) : the_row();

      $contentButton = get_sub_field('elite_photo_booth_page_after_hero_button');
      $buttonId = get_sub_field('elite_photo_booth_page_after_hero_button_id');
  ?>

  <?php if(!empty($buttonId)) : ?>
    <div><a class="btn btn-red" id ="<?php echo $buttonId; ?>"><?php echo $contentButton['title']; ?></a></div>
    <?php else : ?>
      <div><a class="btn btn-red" href="<?php echo $contentButton['url']; ?>"><?php echo $contentButton['title']; ?></a></div>
  <?php endif; ?>

  <?php endwhile; endif; ?>
  </div>
  <div class="clear"></div>
</div>
    
<!-- Photo Gallery -->
<?php  include('template-parts/photo-gallery.php'); ?>



<div class="clear"></div>

<div class=" strip-color " id="addedOptions-content">
       <div class="et_pb_text_inner">
        <h2> 
          <?php echo the_field('customize_your_photo_booth_section_title_first_line'); ?><br><strong><?php echo the_field('customize_your_photo_booth_section_title_second_line'); ?></strong>
      </h2>
    </div> <!-- .et_pb_text -->
</div> <!-- .et_pb_column -->
    
    
  </div> <!-- .et_pb_row -->
    
    <!-- <div class="et_pb_bottom_inside_divider"></div> -->
  </div>


<div class ="group-list container">

  <div class="row">
    <div class="col-sm-6"><b class="text-title"><?php echo the_field('customize_your_photo_booth_section_content_title'); ?></b></div>
    <div class="col-sm-12">
      <?php
                  // check if the repeater field has rows of data
        if( have_rows('customize_your_photo_booth_media') ):

          // loop through the rows of data
            while ( have_rows('customize_your_photo_booth_media') ) : the_row();
      ?>

        <a class="media">
          <div class="media-left">
            <i class="fa fa-<?php echo the_sub_field('customize_your_photo_media_icon_name'); ?>"></i>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><?php echo the_sub_field('customize_your_photo_media_item_title'); ?> </h4>
            <?php echo the_sub_field('customize_your_photo_media_item_content'); ?>
          </div>
        </a>
      <?php endwhile; endif; ?>
</div>
</div>
  <a class="btn"><?php echo the_field('customize_your_photo_booth_bottom_button'); ?></a>  
</div>


<div class="clearfix"></div>
<div class="vspace40"></div>	

<!-- Different Style of Photo Booths -->
<?php  include('template/different-style-photo-booths.php'); ?>
</main>
<div class="clearfix"></div>

<!-- //Footer -->
<?php get_footer(); ?>
