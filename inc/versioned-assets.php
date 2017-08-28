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
		'site-js' => 'js/site.136313c.bundle.min.js',
		'site-css' => 'css/site.c019f1446b7578941686.min.css',
		'page-js' => 'js/page.136313c.bundle.min.js',
		'page-css' => 'css/page.c019f1446b7578941686.min.css',
		'home-js' => 'js/home.136313c.bundle.min.js',
		'home-css' => 'css/home.c019f1446b7578941686.min.css',
		'article-js' => 'js/article.136313c.bundle.min.js',
		'article-css' => 'css/article.c019f1446b7578941686.min.css',
		'archive-js' => 'js/archive.136313c.bundle.min.js',
		'archive-css' => 'css/archive.c019f1446b7578941686.min.css',
		'admin-js' => 'js/admin.136313c.bundle.min.js',
		'admin-css' => 'css/admin.c019f1446b7578941686.min.css',
		'common-js' => 'js/common.136313c.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
