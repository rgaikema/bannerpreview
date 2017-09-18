<?php 
	
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

	$campaigns = $page->children("sort=title");
	if ($campaigns) {
		echo '<ul class="campaigns-list">';
		foreach ($campaigns as $campaign) {
			echo '<li class="campaigns-list-item"><a href="' . $campaign->url . '">' . $campaign->title . '</a></li>';
		}
		echo '</ul>';
	}

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

?>