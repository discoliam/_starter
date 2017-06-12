<?php 
  // @package _starter
  // Template Name: 2 Column
	get_header();
?>

<main id="main-content" class="site-main" role="main">
  <?php
    while ( have_posts() ) : the_post(); ?>
      <h1 class="page-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
  <?php endwhile; // End of the loop.?>
</main>

<aside id="supporting-content" class="site-secondary" role="complementary">
  <h2>Secondary Content</h2>
</aside>

<?php
get_footer();