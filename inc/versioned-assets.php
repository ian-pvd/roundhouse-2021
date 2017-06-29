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
		'site-js' => 'js/site.c434498.bundle.min.js',
		'site-css' => 'css/site.98da852a9dbfceeedc34.min.css',
		'page-js' => 'js/page.c434498.bundle.min.js',
		'page-css' => 'css/page.98da852a9dbfceeedc34.min.css',
		'home-js' => 'js/home.c434498.bundle.min.js',
		'home-css' => 'css/home.98da852a9dbfceeedc34.min.css',
		'article-js' => 'js/article.c434498.bundle.min.js',
		'article-css' => 'css/article.98da852a9dbfceeedc34.min.css',
		'archive-js' => 'js/archive.c434498.bundle.min.js',
		'archive-css' => 'css/archive.98da852a9dbfceeedc34.min.css',
		'admin-js' => 'js/admin.c434498.bundle.min.js',
		'admin-css' => 'css/admin.98da852a9dbfceeedc34.min.css',
		'common-js' => 'js/common.c434498.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
