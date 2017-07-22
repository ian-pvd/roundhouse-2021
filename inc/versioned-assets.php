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
		'site-js' => 'js/site.35529c1.bundle.min.js',
		'site-css' => 'css/site.1aa5cac08d159d2b4b84.min.css',
		'page-js' => 'js/page.35529c1.bundle.min.js',
		'page-css' => 'css/page.1aa5cac08d159d2b4b84.min.css',
		'home-js' => 'js/home.35529c1.bundle.min.js',
		'home-css' => 'css/home.1aa5cac08d159d2b4b84.min.css',
		'article-js' => 'js/article.35529c1.bundle.min.js',
		'article-css' => 'css/article.1aa5cac08d159d2b4b84.min.css',
		'archive-js' => 'js/archive.35529c1.bundle.min.js',
		'archive-css' => 'css/archive.1aa5cac08d159d2b4b84.min.css',
		'admin-js' => 'js/admin.35529c1.bundle.min.js',
		'admin-css' => 'css/admin.1aa5cac08d159d2b4b84.min.css',
		'common-js' => 'js/common.35529c1.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
