<?php 
  // @package _starter
	get_header();
?>

<main id="main-content" class="site-main" role="main">
	<?php
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'post' );
			endwhile;
			the_posts_navigation();
		}else{
			get_template_part( 'template-parts/content', 'none' );
		}
	?>
</main>

<?php #get_sidebar(); ?>

<?php
get_footer();
