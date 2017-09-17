<?php 

	include("./header.inc"); 

	$sets = $page->children("sort=title");

	foreach ($sets as $set) {
		echo "<li><a href='$set->url'>$set->title</a></li>";
	}

	include("./footer.inc"); 

?>