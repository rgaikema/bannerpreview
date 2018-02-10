<?php 

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header-client.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

	// Client info
	if($page->client_logo || $page->client_description ) {
		echo '<div class="client-description info">';
		if ($page->client_logo){
			echo '<figure class="image">';
			echo '<img src="' . $page->client_logo->url .'" alt="' . $page->client_logo->description .'">';
			echo '</figure>';
		}
		if ($page->client_description){
			echo '<p>' . $page->client_description . '</p>';
		}
		echo '</div>';
	}



	$campaigns = $page->children("sort=sort");

	foreach ($campaigns as $campaign) {

		if($campaign->campaign_description) {
			echo '<div class="campaign-description info">';
			echo '<h2>' . $campaign->title . '</h2>';
			echo '<p>' . $campaign->campaign_description . '</p>';
			echo '</div>';
		}

		$fases = $campaign->children("sort=sort");
		$items = (count($fases));

		if ($fases) {
			echo '<div class="row fases">';

			if ($items > 2) {
				echo '<div class="fases-holder table">';

				foreach ($fases as $fase) {
			
					echo '<div class="fase table-cell">';
					echo '<a class="fase-link" href="' . $fase->url . '">';

					$org_image = $fase->fase_image;
					$options = array(
					  'quality' => 90,
					  'upscaling' => true,
					  'cropping' => 'northheast'
					);
					$thumb = $org_image->size(300, 250, $options);
					

					if ($org_image){
						echo '<figure>';
						echo '<img src="' . $thumb->url .'" alt="' . $org_image->description . ' | ' . $fase->title . ' fase' . '">';
						echo '<figcaption><h2>' . $fase->title . '</h2></figcaption>';
						echo '</figure>';
					}
					echo '</a>';
					echo '</div>';
				}

				echo '</div>';


			} elseif ($items <= 2) {
				
				echo '<div class="fases-holder for-float">';

				foreach ($fases as $fase) {
			
					echo '<div class="fase half">';
					echo '<a class="fase-link" href="' . $fase->url . '">';

					$org_image = $fase->fase_image;
					$options = array(
					  'quality' => 90,
					  'upscaling' => true,
					  'cropping' => 'northheast'
					);
					$thumb = $org_image->size(300, 250, $options);

					if ($org_image){
						echo '<figure>';
						echo '<img src="' . $thumb->url .'" alt="' . $org_image->description . ' | ' . $fase->title . ' fase' . '">';
						echo '<figcaption><h2>' . $fase->title . '</h2></figcaption>';
						echo '</figure>';
					}
					echo '</a>';
					echo '</div>';
				}

				echo '</div>';
			}


			echo '</div><!-- row fases -->';
	
		}

	}



 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

?>