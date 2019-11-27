<?php 

/**
 * Template Name: Props page
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
<main class="main-wrap props-page">
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
    <?php echo the_field('props_page_content'); ?>
  </div>
  <div class="clear"></div>
</div>

<!-- Photo Gallery -->
<div class="section text-center" id="movePhotoGalary">
  <div class="wrapper">
    <div class="title">
        <h2><?php echo the_field('props_page_slider_section_title'); ?></h2>
    </div>
    <p><?php echo the_field('props_page_slider_text'); ?></p>

    <!--photo gallery-->
    <div class="props-slider">
        <div class="image-container" >
            <div class="owl-carousel"  id ="props">
              <?php
                  // check if the repeater field has rows of data
                if( have_rows('props_page_slider') ):

                  // loop through the rows of data
                    while ( have_rows('props_page_slider') ) : the_row();
                    $slideImage = get_sub_field('props_page_slide_item_figure');
              ?>
                <div class="item" style="background-image:url('<?php echo $slideImage['url']; ?>')"> </div>
              <?php endwhile; endif; ?>
            </div>
        </div>
        <div class ="slider-left" id="propsThumb">
            <ul>
              <?php
                $i=0;
                $c=0;
                if( have_rows('props_page_slider_title') ):

                  // loop through the rows of data
                  while ( have_rows('props_page_slider_title') ) : the_row();
                  $c++;

                  $class = ($c == 1) ? 'active' : '';
              ?>
                <li data-index ="<?php echo $i; ?>" class ="<?php echo $class; ?>"> <a> <?php echo the_sub_field('props_page_slide_item_title_text'); ?> </a>  <i class="fa fa-caret-right"></i></li>
              <?php $i++; endwhile; endif; ?>
            </ul>
        </div>
    </div>

  </div>
</div>
</main>
<div class="clear"></div>

<!-- //Footer -->
<?php get_footer(); ?>

<script>
  (function($){


    var $sync1 = $("#props");

    $('#propsThumb ul li').click( function() {
        $('#propsThumb ul li').removeClass('active');
        let ele =$(this);
        ele.addClass('active');
        let index  =ele.data('index');

        $sync1.trigger('to.owl.carousel', parseInt(index));
    })
  

    $sync1.on('changed.owl.carousel', function(event) {
        let index = event.item.index;
        $('#propsThumb ul li').each( function(e) {
            let eleIndex = $(this).data('index');
     
            if( index  === +eleIndex) {
                $('#propsThumb ul li').removeClass('active');
                $(this).addClass('active');
            }
        })
    });

    $sync1
    .owlCarousel({
        items: 1,
        margin: 10,
        nav: false,
        dots: true,
    });
  })(jQuery)
</script>
