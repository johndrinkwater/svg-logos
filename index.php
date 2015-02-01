<!DOCTYPE html>
<html>
<style>

body { color: black; background: white; }
img { padding: 1em; color: brown; }
svg { width: 256px; height: 256px; }
svg, svg .inverted { transition: color .25s, background .25s; }
svg:hover { background: transparent; border: 1px solid #999; }
svg:not(:hover) { color: white !important; }
/*svg:not(:hover) path[fill] { fill: white; }
svg:not(:hover) path[fill].inverted { fill: #999; }*/
svg:not(:hover) .inverted { color: #999 !important; }
svg { box-sizing: content-box; border: 1px solid #777; background: #999; }
svg { border-radius: 50%; padding: 1em; } 
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
