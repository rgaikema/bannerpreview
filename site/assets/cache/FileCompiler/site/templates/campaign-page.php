<?php 

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

	$sets = $page->children("sort=title");

	if ($sets) {
		echo '<ul class="sets-list">';
		foreach ($sets as $set) {
			echo '<li class="sets-list-item"><a href="' . $set->url . '"> ' . $set->title . '</a></li>';
		}
		echo '</ul>';
	}

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

?>