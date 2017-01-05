<?php 
  // @package _starter
	get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="post-meta">
		<p>Categories: <?php the_category( ', ' ); ?></p>
    <p> <?php the_tags( 'Tags: ', ', ', '' ); ?></p>
	  <p class="posted-on">
	    <time>Posted on <?php the_date('jS F Y'); ?></time> by <span><?php the_author(); ?></span>
	  </p>
	</div>
	<?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>" class="btn">Read More</a>
</article>