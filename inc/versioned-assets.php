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
		'site-js' => 'js/site.6b803d3.bundle.min.js',
		'site-css' => 'css/site.6e3da93539854a4762a4.min.css',
		'page-js' => 'js/page.6b803d3.bundle.min.js',
		'page-css' => 'css/page.6e3da93539854a4762a4.min.css',
		'home-js' => 'js/home.6b803d3.bundle.min.js',
		'home-css' => 'css/home.6e3da93539854a4762a4.min.css',
		'article-js' => 'js/article.6b803d3.bundle.min.js',
		'article-css' => 'css/article.6e3da93539854a4762a4.min.css',
		'archive-js' => 'js/archive.6b803d3.bundle.min.js',
		'archive-css' => 'css/archive.6e3da93539854a4762a4.min.css',
		'admin-js' => 'js/admin.6b803d3.bundle.min.js',
		'admin-css' => 'css/admin.6e3da93539854a4762a4.min.css',
		'common-js' => 'js/common.6b803d3.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
