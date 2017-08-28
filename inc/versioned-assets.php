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
		'site-js' => 'js/site.a463bd4.bundle.min.js',
		'site-css' => 'css/site.b5ea227fa59d8431eb63.min.css',
		'page-js' => 'js/page.a463bd4.bundle.min.js',
		'page-css' => 'css/page.b5ea227fa59d8431eb63.min.css',
		'home-js' => 'js/home.a463bd4.bundle.min.js',
		'home-css' => 'css/home.b5ea227fa59d8431eb63.min.css',
		'article-js' => 'js/article.a463bd4.bundle.min.js',
		'article-css' => 'css/article.b5ea227fa59d8431eb63.min.css',
		'archive-js' => 'js/archive.a463bd4.bundle.min.js',
		'archive-css' => 'css/archive.b5ea227fa59d8431eb63.min.css',
		'admin-js' => 'js/admin.a463bd4.bundle.min.js',
		'admin-css' => 'css/admin.b5ea227fa59d8431eb63.min.css',
		'common-js' => 'js/common.a463bd4.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
