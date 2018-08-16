<?php

if( have_rows('links_section_links') ) {

  ?><div class="wacker-links-section-loop" ><?php

  $num_rows = count(get_field('links_section_links'));

  // mobile/tablet split into rows

  ?><div class="wacker-links-section-tablet" ><?php

    $link_index = 0;
    while( have_rows('links_section_links') ) { the_row();

      if ($link_index % 2 === 0) { ?>
        <div class="row wacker-links-section-loop-row wacker-links-section-loop-row-tablet" >

          <div class="links-section-orange-background"></div>
      <?php }

          get_template_part( 'parts/acf/links-section', 'link' );


      if ($link_index % 2 === 1 || $link_index === $num_rows - 1) { ?>
        </div>
      <?php }

    $link_index++;
    }

  ?></div><?php

  // desktop split into rows

  ?><div class="wacker-links-section-desktop" ><?php

    $link_index = 0;
    while( have_rows('links_section_links') ) { the_row();

      if ($link_index % 3 === 0) { ?>
        <div class="row wacker-links-section-loop-row wacker-links-section-loop-row-desktop" >

          <div class="links-section-orange-background"></div>
      <?php }

          get_template_part( 'parts/acf/links-section', 'link' );


      if ($link_index % 3 === 2 || $link_index === $num_rows - 1) { ?>
        </div>
      <?php }

    $link_index++;
    } ?>

    </div>
  </div><?php
}
?>
