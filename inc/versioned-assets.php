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
		'site-js' => 'js/site.bundle.js',
		'site-css' => 'css/site.css',
		'article-js' => 'js/article.bundle.js',
		'article-css' => 'css/article.css',
		'archive-js' => 'js/archive.bundle.js',
		'archive-css' => 'css/archive.css',
		'admin-js' => 'js/admin.bundle.js',
		'admin-css' => 'css/admin.css',
		'common-js' => 'js/common.bundle.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
