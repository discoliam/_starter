<?php 
  // @package _starter
  $instagramURL = get_field('options_instagram_url', 'option');
  $twitterURL = get_field('options_twitter_url', 'option');
  $facebookURL = get_field('options_facebook_url', 'option');
?>

</div><!-- #content -->

<footer class="site-footer" role="contentinfo">
  <p class="contact">
    <a href="mailto:email@email.com" class="email">email@email.com</a>
    <?php
      if($instagramURL) {
        echo '<a href="' . $instagramURL . '" class="social instagram" title="Instagram"><i class="fa fa-instagram"></i></a>';
      }
      if($twitterURL) {
        echo '<a href="' . $twitterURL . '" class=" twitter" title="Twitter"><i class="fa fa-twitter"></i></a>';
      }
      if($facebookURL) {
        echo '<a href="' . $facebookURL . '" class="social facebook" title="Facebook"><i class="fa fa-facebook"></i></a>';
      }
    ?>
  </p>

  <p class="info">
    <span class="copy">Copyright &copy; <?php bloginfo( 'name' ); ?> <?php echo date("Y"); ?></span>
    <span class="rights">All Rights Reserved</span>
  </p>

  </div>

</footer>

<?php wp_footer(); ?>

<?php the_field('code_for_footer', 'option'); ?>

</body>
</html>