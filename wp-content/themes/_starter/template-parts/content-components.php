<?php
/**
* @package _starter
 */
?>

<div class="components">
<?php
  if( have_rows('components') ):
    while ( have_rows('components') ) : the_row();

      if( get_row_layout() == 'component_text_block' ):

        get_template_part( 'components/components', 'text-block' );

      elseif( get_row_layout() == 'component_hero' ): 

        get_template_part( 'components/components', 'hero' );

      endif;

    endwhile;

  endif;
?>
</div>
