<?php

if ( is_category('company-news') ) {
	include(TEMPLATEPATH . '/category-news.php');
} 

elseif ( is_category('company-case') ) {
	include(TEMPLATEPATH . '/category-case.php');
}

else {
	$hasTpl = false;
	for( $i = 1;$i < 11; $i++ ) {
		if ( is_category('company-news'.$i) ) {
			include(TEMPLATEPATH . '/category-news.php');
			$hasTpl = true;
			break;
		} elseif( is_category('company-product'.$i) ) {
			include(TEMPLATEPATH . '/category-product.php');
			$hasTpl = true;
			break;
		}
	}

	if(!$hasTpl)include(TEMPLATEPATH . '/category-all.php');
}

?>
