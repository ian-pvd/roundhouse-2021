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
		'site-js' => 'js/site.603512f.bundle.min.js',
		'site-css' => 'css/site.fbb87af868a2de43a6d6.min.css',
		'page-js' => 'js/page.603512f.bundle.min.js',
		'page-css' => 'css/page.fbb87af868a2de43a6d6.min.css',
		'home-js' => 'js/home.603512f.bundle.min.js',
		'home-css' => 'css/home.fbb87af868a2de43a6d6.min.css',
		'article-js' => 'js/article.603512f.bundle.min.js',
		'article-css' => 'css/article.fbb87af868a2de43a6d6.min.css',
		'archive-js' => 'js/archive.603512f.bundle.min.js',
		'archive-css' => 'css/archive.fbb87af868a2de43a6d6.min.css',
		'admin-js' => 'js/admin.603512f.bundle.min.js',
		'admin-css' => 'css/admin.fbb87af868a2de43a6d6.min.css',
		'common-js' => 'js/common.603512f.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
