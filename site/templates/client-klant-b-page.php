<?php 

	include("./header.inc"); 

	$campaigns = $page->children("sort=title");

	foreach ($campaigns as $campaign) {
		echo "<li><a href='$campaign->url'>$campaign->title</a></li>";
	}

	include("./footer.inc"); 

?>