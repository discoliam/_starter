<?php 
  // @package _starter

  $title = get_sub_field("title");
  $content = get_sub_field("content");
  $buttonText = get_sub_field("button_text");
  $buttonURL = get_sub_field("button_url");
?>

<div class="component component--call-to-action">

  <div class='text-wrapper'>
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