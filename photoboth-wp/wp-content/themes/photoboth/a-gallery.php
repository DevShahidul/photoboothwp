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
          <?php endwhile; endif; ?><!-- 
            <a href="img/_MG_2655.jpg" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/_MG_2655.jpg" alt=""/></a>
             
            <a href="img/_MG_2673.jpg" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/_MG_2673.jpg" alt=""/></a>
            
             <a href="img/_MG_2679.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_2679.jpg" alt=""/></a> 
             
             <a href="img/_MG_3405.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3405.JPG" alt=""/></a> 
             
             <a href="img/_MG_3413.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3413.JPG" alt=""/></a> 
             
             <a href="img/_MG_3414.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3414.jpg" alt=""/></a> 
             
             <a href="img/_MG_3811.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3811.JPG" alt=""/></a> 
             
             <a href="img/_MG_3813.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3813.JPG" alt=""/></a> 
             
             
             
             <a href="img/_MG_3814.JPG" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/_MG_3814.JPG" alt=""/></a>
             
            <a href="img/_MG_3818.JPG" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/_MG_3818.JPG" alt=""/></a>
            
             <a href="img/_MG_3870.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3870.JPG" alt=""/></a> 
             
             <a href="img/_MG_3871.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3871.JPG" alt=""/></a> 
             
             <a href="img/_MG_3872.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3872.JPG" alt=""/></a> 
             
             <a href="img/_MG_3873.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3873.JPG" alt=""/></a> 
             
             <a href="img/_MG_3874.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3874.JPG" alt=""/></a> 
             
             <a href="img/_MG_3917.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3917.JPG" alt=""/></a>
             
             
              <a href="img/_MG_3921.JPG" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/_MG_3921.JPG" alt=""/></a>
             
            <a href="img/_MG_3920.JPG" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/_MG_3920.JPG" alt=""/></a>
            
             <a href="img/_MG_3919.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3919.JPG" alt=""/></a> 
             
             <a href="img/_MG_3918.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/_MG_3918.JPG" alt=""/></a> 
             
             <a href="img/2011_02_26_21_41_27_274.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/2011_02_26_21_41_27_274.JPG" alt=""/></a> 
             
             <a href="img/2011_02_26_21_41_19_66.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/2011_02_26_21_41_19_66.JPG" alt=""/></a> 
             
             <a href="img/2011_02_26_21_39_24_257.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/2011_02_26_21_39_24_257.JPG" alt=""/></a> 
             
             <a href="img/2011-10-22_20-31-28_480.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/2011-10-22_20-31-28_480.JPG" alt=""/></a>
             
             
             <a href="img/2011-10-29_21-37-11_541.JPG" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/2011-10-29_21-37-11_541.JPG" alt=""/></a>
             
            <a href="img/img_0478.JPG" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/img_0478.JPG" alt=""/></a>
            
             <a href="img/img_0484.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/img_0484.jpg" alt=""/></a> 
             
             <a href="img/img_0485.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/img_0485.JPG" alt=""/></a> 
             
             <a href="img/img_0487.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/img_0487.jpg" alt=""/></a> 
             
             <a href="img/img_0493.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/img_0493.jpg" alt=""/></a> 
             
             <a href="img/img_0494.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/img_0494.jpg" alt=""/></a> 
             
             <a href="img/2011-10-29_21-37-11_541.JPG" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/2011-10-29_21-37-11_541.JPG" alt=""/></a>
             
             
              <a href="img/img_0499.jpg" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/img_0499.jpg" alt=""/></a>
             
            <a href="img/img_0812.jpg" data-fancybox="gallery" data-caption=""> 
            <img class="example-image img-thumbnail" src="img/img_0812.jpg" alt=""/></a>
            
             <a href="img/IMG_1493.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/IMG_1493.jpg" alt=""/></a> 
             
             <a href="img/IMG_1504.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/IMG_1504.jpg" alt=""/></a> 
             
             <a href="img/IMG_1509.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/IMG_1509.jpg" alt=""/></a> 
             
             <a href="img/IMG_20111112_212256.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/IMG_20111112_212256.jpg" alt=""/></a> 
             
             <a href="img/ishphotobooth3.jpg" data-fancybox="gallery" data-caption=""> 
             <img class="example-image img-thumbnail" src="img/ishphotobooth3.jpg" alt=""/></a>  -->
   
     </div>
  </div>
</div>
</main>
<div class="clearfix"></div>

<!-- //Footer -->
<?php get_footer(); ?>