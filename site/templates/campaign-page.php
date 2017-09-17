<?php 

	include("./header.inc"); 

	$sets = $page->children("sort=title");

	if ($sets) {
		echo '<ul class="sets-list">';
		foreach ($sets as $set) {
			echo '<li class="sets-list-item"><a href="' . $set->url . '"> ' . $set->title . '</a></li>';
		}
		echo '</ul>';
	}

	include("./footer.inc"); 

?>