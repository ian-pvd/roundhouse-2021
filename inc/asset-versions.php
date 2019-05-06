<?php
/**
 * Get the version for a given asset.
 *
 * @NOTE
 * - This file is written with a node build script.
 * - Do not edit this file by hand.
 * - See: ./assets/config/asset-versions.js
 *
 * @param string $asset The asset name.
 * @return string The asset version.
 */
function pvd_get_asset_version( $asset ) {
	$assets = array(
		'post-css' => 'post.8f72bb.css',
		'post-js' => 'post.8f72bb.js',
		'site-css' => 'site.8f72bb.css',
		'site-js' => 'site.8f72bb.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
