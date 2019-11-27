<?php 

/**
 * Template Name: Faq page
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
<main class="main-wrap faq-page">
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
      <h2><?php echo the_field('faq_page_section_title'); ?> </h2>
    </div>
    <div class="faqsection">
      <div class="panel-group" id="accordion">  
         <?php
                  // check if the repeater field has rows of data
        if( have_rows('faq_items') ):

          $i = 1;
          // loop through the rows of data
          while ( have_rows('faq_items') ) : the_row();

            $dynamicClass = ($i < 2 ? 'in'  : 'out');
            //$dynamicSymble = ($dynamicClass === 'in' ? 'minus'  : 'plus');
        ?>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i; ?>"><?php echo the_sub_field('faq_question'); ?><i class="indicator fa fa-plus pull-right"></i></a> </h4>
            </div>
            <div id="<?php echo $i; ?>" class="panel-collapse collapse <?php echo $dynamicClass; ?>">
              <div class="panel-body">
                <p>
                  <?php echo the_sub_field('faq_answer'); ?>
                </p>
              </div>
            </div>
          </div> 
        
        <?php $i++; endwhile; endif; ?>                                                                     
                                                            
      </div>
    </div>
  </div>
</div>
</main>
<div class="clearfix"></div>

<!-- //Footer -->
<?php get_footer(); ?>