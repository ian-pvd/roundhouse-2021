<?php
/**
* Get the version for a given asset.
*
* @NOTE This file is written with a node build script. Beware of writing to it by hand.
* @param string $asset The asset name.
* @return string The asset version.
*/
function brigada71_get_versioned_asset( $asset ) {
	$assets = array(
		'site-js' => 'js/site.8313298.bundle.min.js',
		'site-css' => 'css/site.a7c98e13facd94fa3eaa.min.css',
		'page-js' => 'js/page.8313298.bundle.min.js',
		'page-css' => 'css/page.a7c98e13facd94fa3eaa.min.css',
		'home-js' => 'js/home.8313298.bundle.min.js',
		'home-css' => 'css/home.a7c98e13facd94fa3eaa.min.css',
		'article-js' => 'js/article.8313298.bundle.min.js',
		'article-css' => 'css/article.a7c98e13facd94fa3eaa.min.css',
		'archive-js' => 'js/archive.8313298.bundle.min.js',
		'archive-css' => 'css/archive.a7c98e13facd94fa3eaa.min.css',
		'admin-js' => 'js/admin.8313298.bundle.min.js',
		'admin-css' => 'css/admin.a7c98e13facd94fa3eaa.min.css',
		'common-js' => 'js/common.8313298.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
