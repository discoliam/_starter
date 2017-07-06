<?php 
  // @package _starter
?>

<div class="component component--concertina">
  <?php if( have_rows('items') ): ?>
    <div class="concertina">
      <?php while( have_rows('items') ): the_row(); 
        $title = get_sub_field("title");
        $desc = get_sub_field("description");
        $linkURL = get_sub_field("link_url");
        $linkText = get_sub_field("link_text"); ?>
        
        <div class="concertina-item">
          <?php if($title){echo "<p>" . $title . "</p>";} ?>
          <div class="concertina-item__desc">
            <?php echo $desc; ?>
            <?php if( $linkURL && $linkText): ?>
              <a href="<?php echo $linkURL; ?>" class="btn"><?php echo $linkText ?></a>
            <?php endif; ?>
          </div>
        </div>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>