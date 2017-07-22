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
		'site-js' => 'js/site.5daf82c.bundle.min.js',
		'site-css' => 'css/site.b57ae9559a7b18b97700.min.css',
		'page-js' => 'js/page.5daf82c.bundle.min.js',
		'page-css' => 'css/page.b57ae9559a7b18b97700.min.css',
		'home-js' => 'js/home.5daf82c.bundle.min.js',
		'home-css' => 'css/home.b57ae9559a7b18b97700.min.css',
		'article-js' => 'js/article.5daf82c.bundle.min.js',
		'article-css' => 'css/article.b57ae9559a7b18b97700.min.css',
		'archive-js' => 'js/archive.5daf82c.bundle.min.js',
		'archive-css' => 'css/archive.b57ae9559a7b18b97700.min.css',
		'admin-js' => 'js/admin.5daf82c.bundle.min.js',
		'admin-css' => 'css/admin.b57ae9559a7b18b97700.min.css',
		'common-js' => 'js/common.5daf82c.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
