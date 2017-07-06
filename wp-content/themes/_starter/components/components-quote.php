<?php 
  // @package _starter

  $quote = get_sub_field("quote");
  $author = get_sub_field("author");
  $authorInfo = get_sub_field("author_info");

?>

<div class="component component--quote">

  <?php if($quote) : ?>
    <blockquote>
      <?php echo $quote; ?>
    </blockquote>
  <?php endif; ?>

  <?php if($author) : ?>
    <p class="author">
      <?php echo $author; ?>
      <?php if($authorInfo){ echo "<span>" . $authorInfo . "</span>"; } ?>
    </p>
  <?php endif; ?>
  
</div>