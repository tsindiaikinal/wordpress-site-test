<?php
/**
 * The Template for displaying all single posts.
 *
 *
 *  Template Name: Шаблон фильмов
 * Template Post Type: cinema, page, post
 */	
	get_header(); ?>
	
	<div id="primary" class="content-area col-sm-12 col-md-12">
	<main id="main" class="site-main" role="main">
	
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
	  <?php the_post_thumbnail(); ?>
      <div class="caption">
        <h3>Text head</h3>
        <p>text</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
	<?php get_template_part( 'content', 'sinema' ); ?>
	<?php unite_post_nav(); ?>
	<?php
	// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
	endif;
	?>
	<?php unite_paging_nav(); ?>
	<?php endwhile; // end of the loop. ?>
	</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>