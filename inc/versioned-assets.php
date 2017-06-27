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
		'site-js' => 'js/site.1aa75cd.bundle.min.js',
		'site-css' => 'css/site.7f5eceda79c1e12f5c2f.min.css',
		'page-js' => 'js/page.1aa75cd.bundle.min.js',
		'page-css' => 'css/page.7f5eceda79c1e12f5c2f.min.css',
		'home-js' => 'js/home.1aa75cd.bundle.min.js',
		'home-css' => 'css/home.7f5eceda79c1e12f5c2f.min.css',
		'article-js' => 'js/article.1aa75cd.bundle.min.js',
		'article-css' => 'css/article.7f5eceda79c1e12f5c2f.min.css',
		'archive-js' => 'js/archive.1aa75cd.bundle.min.js',
		'archive-css' => 'css/archive.7f5eceda79c1e12f5c2f.min.css',
		'admin-js' => 'js/admin.1aa75cd.bundle.min.js',
		'admin-css' => 'css/admin.7f5eceda79c1e12f5c2f.min.css',
		'common-js' => 'js/common.1aa75cd.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
