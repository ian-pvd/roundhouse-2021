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
		'site-js' => 'js/site.942e588.bundle.min.js',
		'site-css' => 'css/site.fe2d2e8539985d498a49.min.css',
		'page-js' => 'js/page.942e588.bundle.min.js',
		'page-css' => 'css/page.fe2d2e8539985d498a49.min.css',
		'home-js' => 'js/home.942e588.bundle.min.js',
		'home-css' => 'css/home.fe2d2e8539985d498a49.min.css',
		'article-js' => 'js/article.942e588.bundle.min.js',
		'article-css' => 'css/article.fe2d2e8539985d498a49.min.css',
		'archive-js' => 'js/archive.942e588.bundle.min.js',
		'archive-css' => 'css/archive.fe2d2e8539985d498a49.min.css',
		'admin-js' => 'js/admin.942e588.bundle.min.js',
		'admin-css' => 'css/admin.fe2d2e8539985d498a49.min.css',
		'common-js' => 'js/common.942e588.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
