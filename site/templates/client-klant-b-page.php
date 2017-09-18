<?php 

	include("./header.inc"); 

	$campaigns = $page->children("sort=title");

	if ($campaigns) {
		echo '<ul class="campaigns-list">';
		foreach ($campaigns as $campaign) {
			echo '<li class="campaigns-list-item"><a href="' . $campaign->url . '">' . $campaign->title . '</a></li>';
		}
		echo '</ul>';
	}

	include("./footer.inc"); 

?>