<?php
/**
 * The Template for displaying all single posts.
 *
 * @package unite
 *  Template Name: Шаблон фильмов
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">
		<?php 
			$args = array(
		           'post_type' => 'films',
		           'publish' => true,
		           'paged' => get_query_var('paged'),
               		);
            		query_posts($args);
			if ( have_posts() ) : 
		?>
		
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'content-films', get_post_format() ); ?>
			<?php the_meta(); ?>
			<?php unite_post_nav(); ?>
			
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
