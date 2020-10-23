<?php

$postid = get_the_ID();
$posttags = get_the_tags( $postid );

$posttagnamearr = [];
$posttagslugarr = [];
$posttagidarr = [];
$posttagfilterarr = []

foreach($posttags as $posttag) {
  foreach ($posttag as $key => $value) {
    // create array of name
    if( $key === 'name' ) {
      $posttagnamearr[] = $value;
    }
    // create array of slug

    if( $key === 'slug' ) {
      $posttagslugarr[] = $value;
    }
    // create array of id
    if( $key === 'term_taxonomy_id' ) {
      $posttagidarr[] = $value;
    }

    // create array of filtered value
    if( $value === 'sometag' || $value === 'othertag') {
        $posttagfilterarr[] = $value;
    }
  }
}
