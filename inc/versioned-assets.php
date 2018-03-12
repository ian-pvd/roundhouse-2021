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
		'site-js' => 'js/site.316e8f8.bundle.min.js',
		'site-css' => 'css/site.b1dde401692cee75cacd.min.css',
		'page-js' => 'js/page.316e8f8.bundle.min.js',
		'page-css' => 'css/page.b1dde401692cee75cacd.min.css',
		'home-js' => 'js/home.316e8f8.bundle.min.js',
		'home-css' => 'css/home.b1dde401692cee75cacd.min.css',
		'article-js' => 'js/article.316e8f8.bundle.min.js',
		'article-css' => 'css/article.b1dde401692cee75cacd.min.css',
		'archive-js' => 'js/archive.316e8f8.bundle.min.js',
		'archive-css' => 'css/archive.b1dde401692cee75cacd.min.css',
		'admin-js' => 'js/admin.316e8f8.bundle.min.js',
		'admin-css' => 'css/admin.b1dde401692cee75cacd.min.css',
		'common-js' => 'js/common.316e8f8.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
