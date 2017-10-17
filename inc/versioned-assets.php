<?php
/**
* Get the version for a given asset.
*
* @NOTE This file is written with a node build script. Beware of writing to it by hand.
* @param string $asset The asset name.
* @return string The asset version.
*/
function antifainfo_get_versioned_asset( $asset ) {
	$assets = array(
		'site-js' => 'js/site.fab33fa.bundle.min.js',
		'site-css' => 'css/site.b988a4112e32cff3265a.min.css',
		'page-js' => 'js/page.fab33fa.bundle.min.js',
		'page-css' => 'css/page.b988a4112e32cff3265a.min.css',
		'home-js' => 'js/home.fab33fa.bundle.min.js',
		'home-css' => 'css/home.b988a4112e32cff3265a.min.css',
		'article-js' => 'js/article.fab33fa.bundle.min.js',
		'article-css' => 'css/article.b988a4112e32cff3265a.min.css',
		'archive-js' => 'js/archive.fab33fa.bundle.min.js',
		'archive-css' => 'css/archive.b988a4112e32cff3265a.min.css',
		'admin-js' => 'js/admin.fab33fa.bundle.min.js',
		'admin-css' => 'css/admin.b988a4112e32cff3265a.min.css',
		'common-js' => 'js/common.fab33fa.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
