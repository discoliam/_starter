<?php 
  // @package _starter
  // Template Name: Home
	get_header();
?>

<main id="main-content" class="site-main" role="main">
	<?php
    while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile; // End of the loop.?>
</main>

<?php
get_footer();