<?php

// add in functions.php

function exclude_pages_from_search($query) {
    if ($query->is_search) {
	if(isset($_COOKIE['yourEdition']) || $_REQUEST["ViewEdition"]){
            if($_COOKIE['yourEdition']=="US" || $_REQUEST["ViewEdition"]=="US"){
                $query->set('post__not_in', array_merge(array(), ['8236', '8237']));
            }
            elseif($_COOKIE['yourEdition']=="Global" || $_REQUEST["ViewEdition"]=="Global"){
                $query->set('post__not_in', array_merge(array(), ['8237']));
            }
        }
    }
    return $query;
}
add_filter('pre_get_posts','exclude_pages_from_search', 1);
