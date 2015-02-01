<!DOCTYPE html>
<html>
<style>
body { color: black; background: #ddd; }
img { padding: 1em; color: brown; }
svg { width: 64px; height: 64px; }
svg, svg path, svg .inverted { transition: color .35s, background .35s, fill .35s, stroke .35s; }
svg { box-sizing: content-box; background: #999; }
svg { border-radius: 50%; padding: 0.5em; }
svg:hover { background: transparent; }
svg:not(:hover) path[fill] { fill: #ddd; }
svg:not(:hover) path[fill].inverted { fill: #999; stroke: #ddd; }
</style>
<body>
<?php
foreach ( scandir( '.', 1) as $image ) {

	if ( substr( $image, -3 , 3 ) === 'svg' ) {
		print file_get_contents( $image ) ;
	}
}
