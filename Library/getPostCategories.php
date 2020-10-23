<?php

$postid = get_the_ID();
$postcats = get_the_category();

$postcatnamearr = [];
$postcatslugarr = [];
$postcatidarr = [];
$postcatfilterarr = [];

foreach($postcats as $postcat) {
  foreach ($postcat as $key => $value) {
    // create array of name
    if( $key === 'name' ) {
      $postcatnamearr[] = $value;
    }
    // create array of slug
    if( $key === 'slug' ) {
      $postcatslugarr[] = $value;
    }
    // create array of id
    if( $key === 'cat_ID' ) {
      $postcatidarr[] = $value;
    }
    // create array of filtered value
    if( $value === 'somecat' || $value === 'othercat') {
        $postcatfilterarr[] = $value;
    }
  }
}
