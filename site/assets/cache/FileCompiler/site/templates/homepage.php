<?php 
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

	$clients = $page->children;
	if ($clients) {
		echo '<ul class="clients-list">';
		foreach ($clients as $client) {
			echo '<li class="clients-list-item"><a href="' . $client->url . '">' . $client->title . '</a></li>';
		}
		echo '</ul>';
	}

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 
?>