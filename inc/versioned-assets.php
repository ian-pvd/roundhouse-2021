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
		'site-js' => 'js/site.7428ab0.bundle.min.js',
		'site-css' => 'css/site.e68a53d570e2a5b9677a.min.css',
		'page-js' => 'js/page.7428ab0.bundle.min.js',
		'page-css' => 'css/page.e68a53d570e2a5b9677a.min.css',
		'home-js' => 'js/home.7428ab0.bundle.min.js',
		'home-css' => 'css/home.e68a53d570e2a5b9677a.min.css',
		'article-js' => 'js/article.7428ab0.bundle.min.js',
		'article-css' => 'css/article.e68a53d570e2a5b9677a.min.css',
		'archive-js' => 'js/archive.7428ab0.bundle.min.js',
		'archive-css' => 'css/archive.e68a53d570e2a5b9677a.min.css',
		'admin-js' => 'js/admin.7428ab0.bundle.min.js',
		'admin-css' => 'css/admin.e68a53d570e2a5b9677a.min.css',
		'common-js' => 'js/common.7428ab0.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
