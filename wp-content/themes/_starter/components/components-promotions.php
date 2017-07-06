<?php 
  // @package _starter
?>

<div class="component component--promotions">

  <?php if( have_rows('promo') ): ?>

    <div class="promo-row">

    <?php while( have_rows('promo') ): the_row(); 

      $title = get_sub_field("title");
      $image = get_sub_field("image");
      $buttonText = get_sub_field("button_text");
      $buttonURL = get_sub_field("button_url");
      ?>

      <div class="promo">
        <?php if( $buttonURL && $image): ?>
          <a href="<?php echo $buttonURL; ?>" class="image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $title ?>" />
          </a>
        <?php endif; ?>

        <?php if( $buttonURL && $title): ?>
          <h2><a href="<?php echo $buttonURL; ?>"><?php echo $title ?></a></h2>
        <?php endif; ?>

        <?php if( $buttonURL && $buttonText): ?>
          <a href="<?php echo $buttonURL; ?>" class="btn"><?php echo $buttonText ?></a>
        <?php endif; ?>

      </div>

    <?php endwhile; ?>

    </div>

  <?php endif; ?>

</div>