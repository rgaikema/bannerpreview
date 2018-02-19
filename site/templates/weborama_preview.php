<?php

	include("./header.inc"); 
	
	echo '<div class="iframe-holder set-view rich-media">';
	echo '<h3>' . $page->title . '</h3>';
	echo '<iframe id="creative-" class="iframe rich-media" src="'. $page->weborama_url. '"></iframe>';

	include("./footer.inc"); 

?>