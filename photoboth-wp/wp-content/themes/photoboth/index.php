<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Photoboth
 */

// Get Feature image link
$bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

// Header
get_header();
?>

<!-- Section -->
<div class="inner-content blog-content">

	<div class="wrapper">
		<div class="row">
			<div class="col-sm-8">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
			<div class="col-sm-4">
			 <?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- .wrapper -->
</div>
<div class="clearfix"></div>

<?php

//Footer
get_footer(); ?>
