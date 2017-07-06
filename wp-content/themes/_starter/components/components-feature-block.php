<?php 
  // @package _starter

  $title = get_sub_field("title");
  $content = get_sub_field("content");
  $buttonText = get_sub_field("button_text");
  $buttonURL = get_sub_field("button_url");
  $image = get_sub_field("image");
  $imagePositon = get_sub_field("image_position");
?>

<div class="component component--feature-block <?php echo "image-" . $imagePositon; ?>">
  
    <?php if( !empty($image) ): ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>" class="image" />
    <?php endif; ?>
    <div class="text">
      <?php if($title) : ?>
        <h2><?php echo $title; ?></h2>
      <?php endif; ?>

      <?php if($content) : ?>
        <?php echo $content; ?>
      <?php endif; ?>

      <?php if($buttonText && $buttonURL)  : ?>
        <a href="<?php echo $buttonURL; ?>" title="<?php echo $buttonText; ?>" class="btn"><?php echo $buttonText; ?></a>
      <?php endif; ?>
    </div>
</div>