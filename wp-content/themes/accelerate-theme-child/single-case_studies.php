<?php
/**
 * The template for displaying all case studies.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
			$size = "full";
			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('site_link');
			$image = get_field('image');
			$image2 = get_field('image_2');
			$image3 = get_field('image_3');
			?>
			    
			<aside class="case-study-sidebar">

				<h2><?php the_title(); ?></h2>
				<h5><?php echo $services; ?></h5>
				<h6>Client: <?php echo $client; ?></h6>

				<?php the_content(); ?>
				
				<p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>

			</aside>

			<div class="case-study-images">
			
				<?php if($image) { ?>
				     <img src="<?php echo wp_get_attachment_image( $image, $size ); ?>" />
				
				<?php } ?> 

				<?php if($image2) { ?>
				     <img src="<?php echo wp_get_attachment_image( $image2, $size ); ?>" />
				
				<?php } ?> 
				
				<?php if($image3) { ?>
				     <img src="<?php echo wp_get_attachment_image( $image3, $size ); ?>" />
				
				<?php } ?> 
				
			</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>