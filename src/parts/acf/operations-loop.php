<?php

$i = 0;
if( have_rows('operations') ) { while( have_rows('operations') ) { the_row();

  include( locate_template( 'parts/acf/operations-operation.php', false, false ) );

  $i++;
} }

?>
