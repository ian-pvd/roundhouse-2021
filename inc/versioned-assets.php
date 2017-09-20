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
		'site-js' => 'js/site.8e29496.bundle.min.js',
		'site-css' => 'css/site.8c9242d4a8e5c4569245.min.css',
		'page-js' => 'js/page.8e29496.bundle.min.js',
		'page-css' => 'css/page.8c9242d4a8e5c4569245.min.css',
		'home-js' => 'js/home.8e29496.bundle.min.js',
		'home-css' => 'css/home.8c9242d4a8e5c4569245.min.css',
		'article-js' => 'js/article.8e29496.bundle.min.js',
		'article-css' => 'css/article.8c9242d4a8e5c4569245.min.css',
		'archive-js' => 'js/archive.8e29496.bundle.min.js',
		'archive-css' => 'css/archive.8c9242d4a8e5c4569245.min.css',
		'admin-js' => 'js/admin.8e29496.bundle.min.js',
		'admin-css' => 'css/admin.8c9242d4a8e5c4569245.min.css',
		'common-js' => 'js/common.8e29496.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
