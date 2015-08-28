<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mm
 */

get_header(); ?>

	<div id="home" class="content-area">
		<main id="main" class="site-main container" role="main">
			<div class="row">
					<div class="col-md-12 top-header" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/header-01.jpg) center;">
					</div>
			</div> <!-- #row -->

			<!-- top grid -->
			<div class="row latest">
				<!-- thumbnail url -->
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb-home-sticky' );
				$url = $thumb['0']; ?>
				<!-- #thumbnail url -->

				<!-- sticky post -->
				<div class="col-md-6 col-sm-12 grid-lg" style="background:url(<?php echo $url ?>);">
					<?php $args = array(
					    'posts_per_page' => 1,
					    'post__in'  => get_option( 'sticky_posts' ),
					    'ignore_sticky_posts' => 1
						);
						$my_query = new WP_Query( $args );

						$do_not_duplicate = array();
						while ( $my_query->have_posts() ) : $my_query->the_post();
						    $do_not_duplicate[] = $post->ID; ?>
							
							<div id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> >
						            <div class="home-post first" >
						            	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>    
						            </div>
				        	</div>
					  <?php endwhile; ?>
					  <?php wp_reset_postdata(); ?>
				</div>
				<!-- #sticky post -->
				
				<!-- latest posts row 1 -->
				<div class="col-md-6 col-sm-12">
					
					<!-- nested row -->
					<div class="row">
						<?php
						 	global $post;
						 	$myposts = get_posts('numberposts=2');
							foreach($myposts as $post) :
							setup_postdata($post);
						 ?>
					 	<!-- thumbnail url 2 -->
					 	<?php $thumb2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb-home-small' );
					    $url2 = $thumb2['0']; ?>
					    <!-- #thumbnail url 2 -->
					    
					    <div class="col-lg-6 col-sm-12 col-xs-12 col-sm-12 home-post grid-sm" style="background:url(<?php echo $url2 ?>);">
					    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					    </div>	
			    			<?php endforeach; ?>	
					</div>

					<!-- latest posts row 2 -->
					<div class="row">
					<?php
						 global $post;
						 $myposts = get_posts('numberposts=2&offset=2');
						 foreach($myposts as $post) :
						   setup_postdata($post);
					 ?>
						 <!-- thumbnail url 3 -->
						 <?php $thumb3 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb-home-small' );
					    $url3 = $thumb3['0']; ?>
					    <!-- #thumbnail url 3 -->

					    <div class="col-lg-6 hidden-md-down col-xs-12 home-post grid-sm" style="background:url(<?php echo $url3 ?>);">
					    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					    </div>	
					    	<?php endforeach; ?>
					</div>
				</div> <!-- #col-md-6 #col-sm-12 -->
			</div> <!-- #row #latest -->
				
			<!-- category 1 -->
			<div class="row category">
				<hr>
					<h2>Inspiracje</h2>
				<hr>
				<?php
				$catquery = new WP_Query( 'cat=2&posts_per_page=4' );
				while($catquery->have_posts()) : $catquery->the_post();
				?>
				<!-- thumbnail url 4 -->
				<?php $thumb4 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb-home-small' );
		    	$url4 = $thumb4['0']; ?>
				<!-- #thumbnail url 4 -->	    
			
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 home-post" style="background:url(<?php echo $url4 ?>);">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<!-- ?php the_excerpt(); ? -->
				</div>
				<?php endwhile; ?>
			</div> <!-- #row #category 1 -->

			<!-- category 2 -->
			<div class="row category">
				<hr>
					<h2>Planowanie i organizacja</h2>
				<hr>
				<?php
				$catquery = new WP_Query( 'cat=25&posts_per_page=4' );
				while($catquery->have_posts()) : $catquery->the_post();
				?>
				<!-- thumbnail url 5 -->
				<?php $thumb5 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb-home-small' );
			    	$url5 = $thumb5['0']; ?>
			    <!-- #thumbnail url 5 -->	
				
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 home-post" style="background:url(<?php echo $url5 ?>);">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<!-- ?php the_excerpt(); ? -->
				</div>
				<?php endwhile; ?>
			</div> <!-- #row #category 2 -->

			<div class="row category">
				<hr>
					<h2>Moda ślubna</h2>
				<hr>
					<?php
					$catquery = new WP_Query( 'cat=3&posts_per_page=4' );
					while($catquery->have_posts()) : $catquery->the_post();
					?>
					<!-- thumbnail url 6 -->
					<?php $thumb6 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb-home-small' );
				    	$url6 = $thumb6['0']; ?>
					<!-- #thumbnail url 6 -->			    	
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 home-post" style="background:url(<?php echo $url6 ?>);">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<!-- ?php the_excerpt(); ? -->
					</div>
					<?php endwhile; ?>
			</div> <!-- #row #category-3 -->

			<div class="row category">
				<hr>
					<h2>Moda</h2>
				<hr>
					<?php
					$catquery = new WP_Query( 'cat=23&posts_per_page=4' );
					while($catquery->have_posts()) : $catquery->the_post();
					?>
					<!-- thumbnail url 7 -->
					<?php $thumb7 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb-home-small' );
			    	$url7 = $thumb7['0']; ?>
			    	<!-- #thumbnail url 7 -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 home-post" style="background:url(<?php echo $url7 ?>);">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<!-- ?php the_excerpt(); ? -->
					</div>
					<?php endwhile; ?>
			</div> <!-- #row #category-4 -->
				


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
