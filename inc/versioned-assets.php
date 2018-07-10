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
		'site-js' => 'js/site.0fdd82b.bundle.min.js',
		'site-css' => 'css/site.5a185efa6f6162698996.min.css',
		'page-js' => 'js/page.0fdd82b.bundle.min.js',
		'page-css' => 'css/page.5a185efa6f6162698996.min.css',
		'home-js' => 'js/home.0fdd82b.bundle.min.js',
		'home-css' => 'css/home.5a185efa6f6162698996.min.css',
		'article-js' => 'js/article.0fdd82b.bundle.min.js',
		'article-css' => 'css/article.5a185efa6f6162698996.min.css',
		'archive-js' => 'js/archive.0fdd82b.bundle.min.js',
		'archive-css' => 'css/archive.5a185efa6f6162698996.min.css',
		'admin-js' => 'js/admin.0fdd82b.bundle.min.js',
		'admin-css' => 'css/admin.5a185efa6f6162698996.min.css',
		'common-js' => 'js/common.0fdd82b.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
