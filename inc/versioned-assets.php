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
		'site-js' => 'js/site.781ee83.bundle.min.js',
		'site-css' => 'css/site.e1deaa835df4ffd18e75.min.css',
		'page-js' => 'js/page.781ee83.bundle.min.js',
		'page-css' => 'css/page.e1deaa835df4ffd18e75.min.css',
		'home-js' => 'js/home.781ee83.bundle.min.js',
		'home-css' => 'css/home.e1deaa835df4ffd18e75.min.css',
		'article-js' => 'js/article.781ee83.bundle.min.js',
		'article-css' => 'css/article.e1deaa835df4ffd18e75.min.css',
		'archive-js' => 'js/archive.781ee83.bundle.min.js',
		'archive-css' => 'css/archive.e1deaa835df4ffd18e75.min.css',
		'admin-js' => 'js/admin.781ee83.bundle.min.js',
		'admin-css' => 'css/admin.e1deaa835df4ffd18e75.min.css',
		'common-js' => 'js/common.781ee83.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
