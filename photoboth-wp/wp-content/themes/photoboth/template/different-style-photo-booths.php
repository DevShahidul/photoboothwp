<?php
/*
 * Template Name: Photo booth
 * Template Post Type: post, page, product
 */
  
 ?>

<div class="photo-booth-list grypattern" id="ourphotobooth">
  <div class="title">
    <h2><?php echo the_field('different_style_of_photo_booths_section_title', 'Options'); ?></h2>
  </div>
  <div class="wrapper">

    <?php 
      $args = array( 'post_type' => 'photo_booths', 'order' => 'ASC', 'posts_per_page' => 10 );
      $the_query = new WP_Query( $args ); 

      if ( $the_query->have_posts() ) :
    ?>
    <ul>
      <?php 
        while ( $the_query->have_posts() ) : $the_query->the_post(); 
        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
      ?>
      <li> <span class="tag">
        <?php the_title(); ?>
        <?php the_content(); ?> 
        </span> 
        <div class="box-image" style="background-image:url('<?php echo $backgroundImg[0]; ?>">
        </div>
      </li>
      <?php endwhile; wp_reset_postdata(); ?>
    </ul>
    <?php endif; ?>

    <div class="clear"></div>
  </div>
</div>
