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
		'site-js' => 'js/site.c7d2347.bundle.min.js',
		'site-css' => 'css/site.56927ddd83b9395767ea.min.css',
		'page-js' => 'js/page.c7d2347.bundle.min.js',
		'page-css' => 'css/page.56927ddd83b9395767ea.min.css',
		'home-js' => 'js/home.c7d2347.bundle.min.js',
		'home-css' => 'css/home.56927ddd83b9395767ea.min.css',
		'article-js' => 'js/article.c7d2347.bundle.min.js',
		'article-css' => 'css/article.56927ddd83b9395767ea.min.css',
		'archive-js' => 'js/archive.c7d2347.bundle.min.js',
		'archive-css' => 'css/archive.56927ddd83b9395767ea.min.css',
		'admin-js' => 'js/admin.c7d2347.bundle.min.js',
		'admin-css' => 'css/admin.56927ddd83b9395767ea.min.css',
		'common-js' => 'js/common.c7d2347.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
