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
		'site-js' => 'js/site.ae0b963.bundle.min.js',
		'site-css' => 'css/site.8fb5d0fe18278a78d7cb.min.css',
		'article-js' => 'js/article.ae0b963.bundle.min.js',
		'article-css' => 'css/article.8fb5d0fe18278a78d7cb.min.css',
		'archive-js' => 'js/archive.ae0b963.bundle.min.js',
		'archive-css' => 'css/archive.8fb5d0fe18278a78d7cb.min.css',
		'admin-js' => 'js/admin.ae0b963.bundle.min.js',
		'admin-css' => 'css/admin.8fb5d0fe18278a78d7cb.min.css',
		'common-js' => 'js/common.ae0b963.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
