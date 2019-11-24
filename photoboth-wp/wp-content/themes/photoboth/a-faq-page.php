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


        


        <!-- <div class="panel panel-default">
                                                                               <div class="panel-heading">
                                                                                 <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#2">Can your photo booth fit into an elevator or through doors?<i class="indicator fa fa-plus pull-right"></i></a> </h4>
                                                                               </div>
                                                                               <div id="2" class="panel-collapse collapse out">
                                                                                 <div class="panel-body">
                                                                                   <p>
                                                                                     Yes, our booths will fit in any standard sized elevator or through doors. We have designed it so it can come apart. Therefore we can go up stairs, through single doors and even into elevators.
                                                                                   </p>
                                                                                 </div>
                                                                               </div>
                                                                             </div>   
                                                                              <div class="panel panel-default">
                                                                               <div class="panel-heading">
                                                                                 <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#3"> How many people can fit in the booth?<i class="indicator fa fa-plus pull-right"></i></a> </h4>
                                                                               </div>
                                                                               <div id="3" class="panel-collapse collapse out">
                                                                                 <div class="panel-body">
                                                                                   <p>
                                                                                     We have fit 6 adult men into the booth. Up to 4 can fit comfortable. 5 or over would need to squeeze.
                                                                                   </p>
                                                                                 </div>
                                                                               </div>
                                                                             </div>
                                                                               <div class="panel panel-default">
                                                                               <div class="panel-heading">
                                                                                 <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#4">Is there an attendant with the photo booth for the entire time?<i class="indicator fa fa-plus pull-right"></i></a> </h4>
                                                                               </div>
                                                                               <div id="4" class="panel-collapse collapse out">
                                                                                 <div class="panel-body">
                                                                                   <p>
                                                                                     Yes. Our professional and friendly attendants stay with the photo booth to ensure it works properly and help guests with any questions.
                                                                                   </p>
                                                                                 </div>
                                                                               </div>
                                                                             </div> 
                                                                              <div class="panel panel-default">
                                                                               <div class="panel-heading">
                                                                                 <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#5">Do you provide props for users?<i class="indicator fa fa-plus pull-right"></i></a> </h4>
                                                                               </div>
                                                                               <div id="5" class="panel-collapse collapse out">
                                                                                 <div class="panel-body">
                                                                                   <p>
                                                                                     At your request, we can provide props to make your guests’ photo booth experience fun and entertaining!
                                                                                   </p>
                                                                                 </div>
                                                                               </div>
                                                                             </div> 
                                                                             <div class="panel panel-default">
                                                                               <div class="panel-heading">
                                                                                 <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#6">What kind of picture layouts do you offer?<i class="indicator fa fa-plus pull-right"></i></a> </h4>
                                                                               </div>
                                                                               <div id="6" class="panel-collapse collapse out">
                                                                                 <div class="panel-body">
                                                                                   <p>
                                                                                    We can do strips or 4x6 traditional picture layouts. In addition, we can customize your prints with your event information and colors. Our designer will create a “logo” for your event and send it to you prior to the event for your approval.
                                                                                   </p>
                                                                                 </div>
                                                                               </div>
                                                                             </div> 
                                                                              <div class="panel panel-default">
                                                                               <div class="panel-heading">
                                                                                 <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#7">How long is the wait for the pictures?<i class="indicator fa fa-plus pull-right"></i></a> </h4>
                                                                               </div>
                                                                               <div id="7" class="panel-collapse collapse out">
                                                                                 <div class="panel-body">
                                                                                   <p>
                                                                                    Once a picture is taken, the prints are typically processed within 10 seconds, allowing your guests to return to your event quickly. This is the fastest in the business. However, our booths are usually a party hit so don’t be surprised if a line of users develops!
                                                                                   </p>
                                                                                 </div>
                                                                               </div>
                                                                             </div>  
                                                                              <div class="panel panel-default">
                                                                               <div class="panel-heading">
                                                                                 <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#8">Does the package include set-up time?<i class="indicator fa fa-plus pull-right"></i></a> </h4>
                                                                               </div>
                                                                               <div id="8" class="panel-collapse collapse out">
                                                                                 <div class="panel-body">
                                                                                   <p>
                                                                                    Our rates are based on the time that booth is fully built. We do not charge set up or tear down fees.
                                                                                   </p>
                                                                                 </div>
                                                                               </div>
                                                                             </div>
                                                                              <div class="panel panel-default">
                                                                               <div class="panel-heading">
                                                                                 <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#9">Are there any hidden charges?<i class="indicator fa fa-plus pull-right"></i></a> </h4>
                                                                               </div>
                                                                               <div id="9" class="panel-collapse collapse out">
                                                                                 <div class="panel-body">
                                                                                   <p>
                                                                                    There are no hidden charges – there are additional options and services that we offer at additional cost. These items will be discussed prior to booking and outlined in the contract.
                                                                                   </p>
                                                                                 </div>
                                                                               </div>
                                                                             </div>
                                                                              <div class="panel panel-default">
                                                                               <div class="panel-heading">
                                                                                 <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#10">Will I receive a digital copy of the pictures?<i class="indicator fa fa-plus pull-right"></i></a> </h4>
                                                                               </div>
                                                                               <div id="10" class="panel-collapse collapse out">
                                                                                 <div class="panel-body">
                                                                                   <p>
                                                                                    Once your event has taken place, we upload all of the photos to a password protected web gallery that from any internet connection. We also provide you with a CD of all of the pictures taken as well. This is a free service that is included will all of our rentals.
                                                                                   </p>
                                                                                 </div>
                                                                               </div>
                                                                             </div> -->                                                                     
                                                            
      </div>
    </div>
  </div>
</div>
</main>
<div class="clearfix"></div>

<!-- //Footer -->
<?php get_footer(); ?>