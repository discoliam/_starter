<?php 
  // @package _starter

  $instagramURL = get_field('options_instagram_url', 'option');
  $twitterURL = get_field('options_twitter_url', 'option');
  $facebookURL = get_field('options_facebook_url', 'option');
  $googleplusURL = get_field('options_googleplus_url', 'option');
  $pinterestURL = get_field('options_pinterest_url', 'option');

  $email = get_field('options_email_address', 'option');

  $address1 = get_field('options_address_line_one', 'option');
  $address2 = get_field('options_address_line_two', 'option');
  $address3 = get_field('options_address_line_three', 'option');
  $address4 = get_field('options_address_line_four', 'option');
  $addressPostCode = get_field('options_address_postcode', 'option');

?>

</div><!-- #content -->

<footer class="site-footer" role="contentinfo">
  
  <div class="container">
   
    <div class="contact">
      <?php if($email) {echo '<p><a href="mailto:'.$email.'" class="email">'.$email.'</a></p>';} ?>

      <?php
        if( have_rows('options_telephone', 'option') ):
          while ( have_rows('options_telephone', 'option') ) : the_row();
            echo '<p class="tel">'.get_sub_field("heading").'<br />'.get_sub_field("number").'</p>';
          endwhile;
        endif;
      ?>

      <?php if($address1 || $address2 || $address3 || $address4 || $addressPostCode) : ?>
        <p class="address">
          <?php 
            if($address1) {echo $address1 . "<br />";}
            if($address2) {echo $address2 . "<br />";}
            if($address3) {echo $address3 . "<br />";}
            if($address4) {echo $address4 . "<br />";}
            if($addressPostCode) {echo '<a href="https://www.google.co.uk/maps/place/'.urlencode($addressPostCode).'">'.$addressPostCode.'</a>';}
          ?>
        </p>
      <?php endif; ?>


    </div>

    <?php if($instagramURL || $twitterURL || $facebookURL) : ?>
    <div class="social">
      <?php
        if($instagramURL) {
          echo '<a href="' . $instagramURL . '" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a>';
        }
        if($twitterURL) {
          echo '<a href="' . $twitterURL . '" class=" twitter" title="Twitter"><i class="fa fa-twitter"></i></a>';
        }
        if($facebookURL) {
          echo '<a href="' . $facebookURL . '" class="facebook" title="Facebook"><i class="fa fa-facebook"></i></a>';
        }
        if($googleplusURL) {
          echo '<a href="' . $googleplusURL . '" class="googleplus" title="Google Plus"><i class="fa fa-google-plus"></i></a>';
        }
        if($pinterestURL) {
          echo '<a href="' . $pinterestURL . '" class="pinterest" title="Pinterest"><i class="fa fa-pinterest"></i></a>';
        }
      ?>
    </div>
    <?php endif; ?>


    <p class="info">
      <span class="copy">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></span>
    </p>

  </div>

</footer>

<?php wp_footer(); ?>

<?php the_field('code_for_footer', 'option'); ?>

</body>
</html>