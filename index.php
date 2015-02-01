<!DOCTYPE html>
<html>
<style>

body { color: black; background: #ddd; }
img { padding: 1em; color: brown; }
svg { width: 64px; height: 64px; }
svg, svg path, svg .inverted { transition: color .35s, background .35s, fill .35s, stroke .35s; }
svg:hover { background: transparent; }
svg:not(:hover) path[fill] { fill: #ddd; }
svg:not(:hover) path[fill].inverted { fill: #999; stroke: #ddd; }
svg { box-sizing: content-box; background: #999; }
svg { border-radius: 50%; padding: 0.5em; }
</style>
<body>
<?php

foreach ( scandir( '.', 1) as $image ) {

//	if ($image === '.' or $image === '..' or $image === '.git')
//		continue;
	if ( substr( $image, -3 , 3 ) === 'svg' ) {
		// print '<img width="128" height="128" src="' . $image . '">';
		print file_get_contents( $image ) ;
	}

// TODO: fix aspect
// TODO: branding
}
