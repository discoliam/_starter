<?php 
  // @package _starter
?>

<aside id="supporting-content" class="site-secondary" role="complementary">
  <h3>Categories</h3>
  <ul>
      <?php wp_list_categories( array(
          'orderby' => 'name',
          'title_li' => "",
      ) ); ?> 
  </ul>

  <h3>Tags</h3>
  <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>

  <h3>Popular Posts</h3>
  <?php
    $args = array(
        'range' => 'all'
    );

    wpp_get_mostpopular( $args );
  ?>

</aside>