<?php 

/**
 * Template Name: Contact page
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
    <div class="container">
      
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="enquiry-form">
          <div class="title">
            <h3><?php echo the_field('contact_form_title'); ?></h3>
          </div>
          <?php echo do_shortcode('[contact-form-7 id="345" title="Contact page contact form"]'); ?>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="title">
        <h3><?php echo the_field('contact_details_title'); ?></h3>
      </div>
      <div class="contact-page-detail">
        <?php echo the_field('contact_details_content'); ?>
      </div>
      <div class="clear"></div>
      <div id="map" ></div>
    </div>
    
  </div>
</div>
</main>
<div class="clearfix"></div>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyClvvU9RMvzAW5n3ehGrB8vaC1nKTppK0M" type="text/javascript"></script>
<script type="text/javascript">
  var locations = [
    ['ISH Events LLC, 26 Cain Dr , Plainview NY 11803', 40.785100, -73.451096, 4],
    ['ISH Events Queens NY 84-64 169th Street Suite 1 Jamaica NY 11432', 40.690201, -73.780421, 5],
    ['ISH Events Long Island NY 26 Cain Dr Plainview NY 11803', 40.787552, -73.453488, 3],
    ['ISH Events Stamford CT 36 Cerretta St Stamford CT 06907', 41.095690, -73.515107, 2],
  ];

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: new google.maps.LatLng(40.787552, -73.453488),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });

    google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }
</script>

<!-- //Footer -->
<?php get_footer(); ?>