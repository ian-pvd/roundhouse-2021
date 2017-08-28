<?php
/**
* Get the version for a given asset.
*
* @NOTE This file is written with a node build script. Beware of writing to it by hand.
* @param string $asset The asset name.
* @return string The asset version.
*/
function brigada71_get_versioned_asset( $asset ) {
	$assets = array(
		'site-js' => 'js/site.d94436f.bundle.min.js',
		'site-css' => 'css/site.fa620806588a794365b6.min.css',
		'page-js' => 'js/page.d94436f.bundle.min.js',
		'page-css' => 'css/page.fa620806588a794365b6.min.css',
		'home-js' => 'js/home.d94436f.bundle.min.js',
		'home-css' => 'css/home.fa620806588a794365b6.min.css',
		'article-js' => 'js/article.d94436f.bundle.min.js',
		'article-css' => 'css/article.fa620806588a794365b6.min.css',
		'archive-js' => 'js/archive.d94436f.bundle.min.js',
		'archive-css' => 'css/archive.fa620806588a794365b6.min.css',
		'admin-js' => 'js/admin.d94436f.bundle.min.js',
		'admin-css' => 'css/admin.fa620806588a794365b6.min.css',
		'common-js' => 'js/common.d94436f.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
