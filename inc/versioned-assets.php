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
		'site-js' => 'js/site.158f32c.bundle.min.js',
		'site-css' => 'css/site.7e5ae794332b93eb61e9.min.css',
		'page-js' => 'js/page.158f32c.bundle.min.js',
		'page-css' => 'css/page.7e5ae794332b93eb61e9.min.css',
		'home-js' => 'js/home.158f32c.bundle.min.js',
		'home-css' => 'css/home.7e5ae794332b93eb61e9.min.css',
		'article-js' => 'js/article.158f32c.bundle.min.js',
		'article-css' => 'css/article.7e5ae794332b93eb61e9.min.css',
		'archive-js' => 'js/archive.158f32c.bundle.min.js',
		'archive-css' => 'css/archive.7e5ae794332b93eb61e9.min.css',
		'admin-js' => 'js/admin.158f32c.bundle.min.js',
		'admin-css' => 'css/admin.7e5ae794332b93eb61e9.min.css',
		'common-js' => 'js/common.158f32c.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
