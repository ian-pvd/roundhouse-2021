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
		'site-js' => 'js/site.bf21826.bundle.min.js',
		'site-css' => 'css/site.9af810fc6c6ccd8b5172.min.css',
		'page-js' => 'js/page.bf21826.bundle.min.js',
		'page-css' => 'css/page.9af810fc6c6ccd8b5172.min.css',
		'home-js' => 'js/home.bf21826.bundle.min.js',
		'home-css' => 'css/home.9af810fc6c6ccd8b5172.min.css',
		'article-js' => 'js/article.bf21826.bundle.min.js',
		'article-css' => 'css/article.9af810fc6c6ccd8b5172.min.css',
		'archive-js' => 'js/archive.bf21826.bundle.min.js',
		'archive-css' => 'css/archive.9af810fc6c6ccd8b5172.min.css',
		'admin-js' => 'js/admin.bf21826.bundle.min.js',
		'admin-css' => 'css/admin.9af810fc6c6ccd8b5172.min.css',
		'common-js' => 'js/common.bf21826.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
