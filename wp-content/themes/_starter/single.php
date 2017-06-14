<?php 
  // @package _starter
	get_header();
?>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display')) {bcn_display(); }?>
</div>

<?php
  while ( have_posts() ) : the_post(); ?>

  <h1 class="page-title"><?php the_title(); ?></h1>

  <div class="post-meta">
    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
    <p>
      <span class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span><br />
      <time><?php the_date('d.m.y'); ?></time> &bull; <?php the_category( ', ' ); ?>
    </p>
  </div>


  <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail();
    } 
  ?>

  <main id="main-content" class="site-main" role="main">
  			<?php the_content(); ?>
  </main>

<?php endwhile; // End of the loop. ?>

<?php
get_footer();