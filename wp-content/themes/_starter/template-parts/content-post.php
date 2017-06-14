<?php 
  // @package _starter
	get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="featured-image"><?php the_post_thumbnail(); ?></a>
  <?php endif; ?>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="post-meta">
    <p>
      <span class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> &bull;</span>
      <time><?php the_date('d.m.y'); ?></time> &bull;
      <?php the_category( ', ' ); ?>
    </p>
  </div>
	<a href="<?php the_permalink(); ?>" class="btn" title="<?php the_title(); ?>">Read More</a>
</article>