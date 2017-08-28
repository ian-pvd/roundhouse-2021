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
		'site-js' => 'js/site.43a8afd.bundle.min.js',
		'site-css' => 'css/site.512ecb832763602b9300.min.css',
		'page-js' => 'js/page.43a8afd.bundle.min.js',
		'page-css' => 'css/page.512ecb832763602b9300.min.css',
		'home-js' => 'js/home.43a8afd.bundle.min.js',
		'home-css' => 'css/home.512ecb832763602b9300.min.css',
		'article-js' => 'js/article.43a8afd.bundle.min.js',
		'article-css' => 'css/article.512ecb832763602b9300.min.css',
		'archive-js' => 'js/archive.43a8afd.bundle.min.js',
		'archive-css' => 'css/archive.512ecb832763602b9300.min.css',
		'admin-js' => 'js/admin.43a8afd.bundle.min.js',
		'admin-css' => 'css/admin.512ecb832763602b9300.min.css',
		'common-js' => 'js/common.43a8afd.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
