<?php
/**
 * The template for displaying About page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $slug = get_post_field( 'post_name', get_post() ); ?>
			<div class="slug-<?php echo $slug; ?>">
			
			<?php	
			$size = "full";
			$about = get_field('about');
			$services = get_field('our_services');
			$content_strategy = get_field('content_strategy');
			$image1 = get_field('image_1');
			$influencer_mapping = get_field('influencer_mapping');
			$image2 = get_field('image_2');
			$social_media = get_field('social_media');
			$image3 = get_field('image_3');
			$design = get_field('design');
			$image4 = get_field('image_4');
			?>
			    
				<div class="aboutpage">
					<p><?php echo $about; ?></p>

				</div>
			
				<div class="ourservices">
					<h6>OUR SERVICES</h6>
					<p><?php echo $services; ?></p>
			
			
				</div>
				
				<div class="content-strategy">
				    <div>
  					  <?php if($image1) { ?>
				        <?php echo wp_get_attachment_image( $image1, $size ); ?>
					  <?php } ?> 
					</div>
					<div>
  					  <h5>Content Strategy</h5>
			    	  <p><?php echo $content_strategy; ?></p>
			    	</div>
				</div>
				
				<div class="influencer-mapping">
				   <div>
					  <h5>Influencer Mapping</h5>
			    	  <p><?php echo $influencer_mapping; ?></p>
				   </div>
				   <div>
					  <?php if($image2) { ?>
				      <?php echo wp_get_attachment_image( $image2, $size ); ?>
					<?php } ?>
				   </div> 
				</div>
				
				<div class="social-media">
					<div>
						<?php if($image3) { ?>
				    	<?php echo wp_get_attachment_image( $image3, $size ); ?>
						<?php } ?> 
					</div>
					<div> 
						<h5>Social Media Strategy</h5>
			    		<p><?php echo $social_media; ?></p>
			    	</div>
				</div>
				
				<div class="design">
					<div>
						<h5>Design and Development</h5>
			    		<p><?php echo $design; ?></p>
					</div>
					<div>
						<?php if($image4) { ?>
				    	<?php echo wp_get_attachment_image( $image4, $size ); ?>
				
						<?php } ?> 
					</div>
				</div>
				<div class="belowtext">
				   		<h5>Interested in working with us?</h5>
				   		<div class="cubutton">
				        <h5><a href='/contact-us'>Contact Us</a></h5>
				   </div>
				</div>
				
			</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>