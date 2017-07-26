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
		'site-js' => 'js/site.deebcd5.bundle.min.js',
		'site-css' => 'css/site.6e18b12d58b74061960f.min.css',
		'page-js' => 'js/page.deebcd5.bundle.min.js',
		'page-css' => 'css/page.6e18b12d58b74061960f.min.css',
		'home-js' => 'js/home.deebcd5.bundle.min.js',
		'home-css' => 'css/home.6e18b12d58b74061960f.min.css',
		'article-js' => 'js/article.deebcd5.bundle.min.js',
		'article-css' => 'css/article.6e18b12d58b74061960f.min.css',
		'archive-js' => 'js/archive.deebcd5.bundle.min.js',
		'archive-css' => 'css/archive.6e18b12d58b74061960f.min.css',
		'admin-js' => 'js/admin.deebcd5.bundle.min.js',
		'admin-css' => 'css/admin.6e18b12d58b74061960f.min.css',
		'common-js' => 'js/common.deebcd5.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
