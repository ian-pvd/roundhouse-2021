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
		'site-js' => 'js/site.616e18e.bundle.min.js',
		'site-css' => 'css/site.f68defa00b31022de4d3.min.css',
		'page-js' => 'js/page.616e18e.bundle.min.js',
		'page-css' => 'css/page.f68defa00b31022de4d3.min.css',
		'home-js' => 'js/home.616e18e.bundle.min.js',
		'home-css' => 'css/home.f68defa00b31022de4d3.min.css',
		'article-js' => 'js/article.616e18e.bundle.min.js',
		'article-css' => 'css/article.f68defa00b31022de4d3.min.css',
		'archive-js' => 'js/archive.616e18e.bundle.min.js',
		'archive-css' => 'css/archive.f68defa00b31022de4d3.min.css',
		'admin-js' => 'js/admin.616e18e.bundle.min.js',
		'admin-css' => 'css/admin.f68defa00b31022de4d3.min.css',
		'common-js' => 'js/common.616e18e.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
