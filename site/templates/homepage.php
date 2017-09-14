<?php 
	include("./header.inc"); 

	$clients = $page->children;
	foreach ($clients as $client) {
		echo "<li><a href='$client->url'>$client->title</a></li>";
	}

	include("./footer.inc"); 
?>