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
		'site-js' => 'js/site.627f0c6.bundle.min.js',
		'site-css' => 'css/site.dcb7ebb496e40763edbc.min.css',
		'page-js' => 'js/page.627f0c6.bundle.min.js',
		'page-css' => 'css/page.dcb7ebb496e40763edbc.min.css',
		'home-js' => 'js/home.627f0c6.bundle.min.js',
		'home-css' => 'css/home.dcb7ebb496e40763edbc.min.css',
		'article-js' => 'js/article.627f0c6.bundle.min.js',
		'article-css' => 'css/article.dcb7ebb496e40763edbc.min.css',
		'archive-js' => 'js/archive.627f0c6.bundle.min.js',
		'archive-css' => 'css/archive.dcb7ebb496e40763edbc.min.css',
		'admin-js' => 'js/admin.627f0c6.bundle.min.js',
		'admin-css' => 'css/admin.dcb7ebb496e40763edbc.min.css',
		'common-js' => 'js/common.627f0c6.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
