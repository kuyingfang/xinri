<?php
if ( in_category('company-news') ) {
	include(TEMPLATEPATH . '/single-news.php');
}

elseif ( in_category('company-vido') ) {
	include(TEMPLATEPATH . '/single-video.php');
}

elseif ( in_category('company-product') ) {
	include(TEMPLATEPATH . '/single-product.php');
}

else {
	include(TEMPLATEPATH . '/single-all.php');
}
?>