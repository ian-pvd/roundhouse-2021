<?php
/**
* Get the version for a given asset.
*
* @NOTE This file is written with a node build script. Beware of writing to it by hand.
* @param string $asset The asset name.
* @return string The asset version.
*/
function ai_get_versioned_asset( $asset ) {
	$assets = array(
		'site-js' => 'js/site.c594583.bundle.min.js',
		'site-css' => 'css/site.1a6a8b2e24b37d429b60.min.css',
		'article-js' => 'js/article.c594583.bundle.min.js',
		'article-css' => 'css/article.1a6a8b2e24b37d429b60.min.css',
		'archive-js' => 'js/archive.c594583.bundle.min.js',
		'archive-css' => 'css/archive.1a6a8b2e24b37d429b60.min.css',
		'admin-js' => 'js/admin.c594583.bundle.min.js',
		'admin-css' => 'css/admin.1a6a8b2e24b37d429b60.min.css',
		'common-js' => 'js/common.c594583.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
