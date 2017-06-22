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
		'site-js' => 'js/site.fc7f735.bundle.min.js',
		'site-css' => 'css/site.fa4b799efe5e232f9ac7.min.css',
		'page-js' => 'js/page.fc7f735.bundle.min.js',
		'page-css' => 'css/page.fa4b799efe5e232f9ac7.min.css',
		'home-js' => 'js/home.fc7f735.bundle.min.js',
		'home-css' => 'css/home.fa4b799efe5e232f9ac7.min.css',
		'article-js' => 'js/article.fc7f735.bundle.min.js',
		'article-css' => 'css/article.fa4b799efe5e232f9ac7.min.css',
		'archive-js' => 'js/archive.fc7f735.bundle.min.js',
		'archive-css' => 'css/archive.fa4b799efe5e232f9ac7.min.css',
		'admin-js' => 'js/admin.fc7f735.bundle.min.js',
		'admin-css' => 'css/admin.fa4b799efe5e232f9ac7.min.css',
		'common-js' => 'js/common.fc7f735.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
