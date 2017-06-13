<?php 
  // @package _starter
?>


<div class="component component--hero">
  <?php if( have_rows('slides') ): ?>
    
    <div class="slides">
    <?php while( have_rows('slides') ): the_row(); 

      // vars
      $title = get_sub_field('title');
      $image = get_sub_field('image');
      $url = get_sub_field('url');
      $buttonText = get_sub_field('button_text');
      ?>

      <div class="slide">
        <?php if( $url && $image): ?>
          <a href="<?php echo $url; ?>" class="image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
          </a>
        <?php endif; ?>

        <?php if( $title ): ?>
          <div class="content">
            <p><?php echo $title; ?></p>
            <?php if( $url && $buttonText ): ?>
              <a class="btn" href="<?php echo $url; ?>" title="<?php echo $buttonText; ?>"><?php echo $buttonText; ?></a>
            <?php endif; ?>
          </div>
        <?php endif; ?>

      </div>

    <?php endwhile; ?>

    </div>

  <?php endif; ?>
</div>
