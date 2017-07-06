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

      elseif( get_row_layout() == 'component_call_to_action' ): 

        get_template_part( 'components/components', 'call-to-action' );

      elseif( get_row_layout() == 'component_feature_block' ): 

        get_template_part( 'components/components', 'feature-block' );

      elseif( get_row_layout() == 'component_promotions' ): 

        get_template_part( 'components/components', 'promotions' );

      elseif( get_row_layout() == 'component_concertina' ): 

        get_template_part( 'components/components', 'concertina' );

      elseif( get_row_layout() == 'component_quote' ): 

        get_template_part( 'components/components', 'quote' );

      elseif( get_row_layout() == 'component_downloads' ): 

        get_template_part( 'components/components', 'downloads' );

      endif;

    endwhile;

  endif;
?>
</div>
