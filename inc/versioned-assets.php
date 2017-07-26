<?php
/**
* Get the version for a given asset.
*
* @NOTE This file is written with a node build script. Beware of writing to it by hand.
* @param string $asset The asset name.
* @return string The asset version.
*/
function roundhouse_get_versioned_asset( $asset ) {
	$assets = array(
		'site-js' => 'js/site.899db8b.bundle.min.js',
		'site-css' => 'css/site.fee519a42f9cd245cd17.min.css',
		'page-js' => 'js/page.899db8b.bundle.min.js',
		'page-css' => 'css/page.fee519a42f9cd245cd17.min.css',
		'home-js' => 'js/home.899db8b.bundle.min.js',
		'home-css' => 'css/home.fee519a42f9cd245cd17.min.css',
		'article-js' => 'js/article.899db8b.bundle.min.js',
		'article-css' => 'css/article.fee519a42f9cd245cd17.min.css',
		'archive-js' => 'js/archive.899db8b.bundle.min.js',
		'archive-css' => 'css/archive.fee519a42f9cd245cd17.min.css',
		'admin-js' => 'js/admin.899db8b.bundle.min.js',
		'admin-css' => 'css/admin.fee519a42f9cd245cd17.min.css',
		'common-js' => 'js/common.899db8b.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
