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
		'site-js' => 'js/site.91e57df.bundle.min.js',
		'site-css' => 'css/site.6a1dee15fbf3ae3b2ee9.min.css',
		'page-js' => 'js/page.91e57df.bundle.min.js',
		'page-css' => 'css/page.6a1dee15fbf3ae3b2ee9.min.css',
		'home-js' => 'js/home.91e57df.bundle.min.js',
		'home-css' => 'css/home.6a1dee15fbf3ae3b2ee9.min.css',
		'article-js' => 'js/article.91e57df.bundle.min.js',
		'article-css' => 'css/article.6a1dee15fbf3ae3b2ee9.min.css',
		'archive-js' => 'js/archive.91e57df.bundle.min.js',
		'archive-css' => 'css/archive.6a1dee15fbf3ae3b2ee9.min.css',
		'admin-js' => 'js/admin.91e57df.bundle.min.js',
		'admin-css' => 'css/admin.6a1dee15fbf3ae3b2ee9.min.css',
		'common-js' => 'js/common.91e57df.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
