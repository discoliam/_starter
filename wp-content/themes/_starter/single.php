<?php 
  // @package _starter
	get_header();
?>

<main id="main-content" class="site-main" role="main">
	<?php
		while ( have_posts() ) : the_post(); ?>
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} 
			?>
			<?php the_content(); ?>
	<?php endwhile; // End of the loop.?>
</main>

<?php
get_footer();