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
		'site-js' => 'js/site.8ad34f1.bundle.min.js',
		'site-css' => 'css/site.401f4a5cdd825c19c518.min.css',
		'page-js' => 'js/page.8ad34f1.bundle.min.js',
		'page-css' => 'css/page.401f4a5cdd825c19c518.min.css',
		'home-js' => 'js/home.8ad34f1.bundle.min.js',
		'home-css' => 'css/home.401f4a5cdd825c19c518.min.css',
		'article-js' => 'js/article.8ad34f1.bundle.min.js',
		'article-css' => 'css/article.401f4a5cdd825c19c518.min.css',
		'archive-js' => 'js/archive.8ad34f1.bundle.min.js',
		'archive-css' => 'css/archive.401f4a5cdd825c19c518.min.css',
		'admin-js' => 'js/admin.8ad34f1.bundle.min.js',
		'admin-css' => 'css/admin.401f4a5cdd825c19c518.min.css',
		'common-js' => 'js/common.8ad34f1.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
