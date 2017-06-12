<?php 
  // @package _starter
	get_header();
?>


<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display')) {bcn_display(); }?>
</div>

<h1 class="page-title"><?php the_title(); ?></h1>

<main id="main-content" class="site-main" role="main">
	<?php
		while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile; // End of the loop.?>
</main>

<?php
get_footer();