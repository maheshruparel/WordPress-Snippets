<?php 
function exclude_category_from_search($query) {
    if ($query->is_search) {
		if(isset($_COOKIE['yourEdition']) || $_REQUEST["ViewEdition"]){
            if($_COOKIE['yourEdition']=="US" || $_REQUEST["ViewEdition"]=="US"){
                // $query->set('cat', '-158');
                // $query->set('cat', '+157');
            }
            elseif($_COOKIE['yourEdition']=="Global" || $_REQUEST["ViewEdition"]=="Global"){
                // $query->set('cat', '-157');
                // $query->set('cat', '+158');
            }
        }
    }
    return $query;
}
add_filter('pre_get_posts','exclude_category_from_search', 1);

