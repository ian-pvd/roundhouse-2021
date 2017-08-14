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
		'site-js' => 'js/site.dc2ef69.bundle.min.js',
		'site-css' => 'css/site.9e90b73008fbb64f4044.min.css',
		'page-js' => 'js/page.dc2ef69.bundle.min.js',
		'page-css' => 'css/page.9e90b73008fbb64f4044.min.css',
		'home-js' => 'js/home.dc2ef69.bundle.min.js',
		'home-css' => 'css/home.9e90b73008fbb64f4044.min.css',
		'article-js' => 'js/article.dc2ef69.bundle.min.js',
		'article-css' => 'css/article.9e90b73008fbb64f4044.min.css',
		'archive-js' => 'js/archive.dc2ef69.bundle.min.js',
		'archive-css' => 'css/archive.9e90b73008fbb64f4044.min.css',
		'admin-js' => 'js/admin.dc2ef69.bundle.min.js',
		'admin-css' => 'css/admin.9e90b73008fbb64f4044.min.css',
		'common-js' => 'js/common.dc2ef69.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
