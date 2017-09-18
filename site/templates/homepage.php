<?php 
	include("./header.inc"); 

	$clients = $page->children;
	if ($clients) {
		echo '<ul class="clients-list">';
		foreach ($clients as $client) {
			echo '<li class="clients-list-item"><a href="' . $client->url . '">' . $client->title . '</a></li>';
		}
		echo '</ul>';
	}

	include("./footer.inc"); 
?>