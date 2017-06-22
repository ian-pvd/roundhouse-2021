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
		'site-js' => 'js/site.89ac9e1.bundle.min.js',
		'site-css' => 'css/site.db822f1c73953948c02b.min.css',
		'article-js' => 'js/article.89ac9e1.bundle.min.js',
		'article-css' => 'css/article.db822f1c73953948c02b.min.css',
		'archive-js' => 'js/archive.89ac9e1.bundle.min.js',
		'archive-css' => 'css/archive.db822f1c73953948c02b.min.css',
		'admin-js' => 'js/admin.89ac9e1.bundle.min.js',
		'admin-css' => 'css/admin.db822f1c73953948c02b.min.css',
		'common-js' => 'js/common.89ac9e1.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
