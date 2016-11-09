<?php 
  // @package _starter
  // Template Name: Contact
	get_header();
?>

<main id="main-content" class="site-main" role="main">
	<?php
    while ( have_posts() ) : the_post(); ?>
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
	<?php endwhile; // End of the loop.?>
</main>

<?php
get_footer();