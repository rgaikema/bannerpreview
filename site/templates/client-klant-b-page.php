<?php 

	include("./header-client.inc"); 

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

	if (count($campaigns)) {

		include ("./campaign-date-filter.inc");
	}

	// Show campaigns list row
	echo '<section class="campaign-list">';

	foreach ($campaigns as $campaign) {

		// Todo remove only for testing
		$campaignDate = $campaign->campaign_date;
		$campaignYear = substr($campaignDate, -4);

		echo '<article class="campaign campaign-item" data-category="' . $campaignYear . '">';

			if($campaign->campaign_description) {
				echo '<div class="campaign-description info">';
				echo '<h2>' . $campaign->title . '</h2>';
				echo '<p>' . $campaign->campaign_description . '</p>';

				//echo '<i>' . $campaignDate . '</i>';

				echo '</div>';
			}

			$fases = $campaign->children("sort=sort");

			if (count($fases)) {
				echo '<div class="row fases">';

				if ($items > 2) {
					echo '<div class="fases-holder table">';

					foreach ($fases as $fase) {
				
						echo '<div class="fase table-cell">';

						$org_image = $fase->fase_image;
						$options = array(
						  'quality' => 90,
						  'upscaling' => true,
						  'cropping' => 'northheast'
						);

						if (count($org_image)){

							$thumb = $org_image->size(300, 250, $options);

							echo '<a class="fase-link" href="' . $fase->url . '">';

							$org_image = $fase->fase_image;
							$options = array(
							  'quality' => 90,
							  'upscaling' => true,
							  'cropping' => 'northheast'
							);

							echo '<figure>';
							echo '<img src="' . $thumb->url .'" alt="' . $org_image->description . ' | ' . $fase->title . ' fase' . '">';
							echo '<figcaption><h2>' . $fase->title . '</h2></figcaption>';
							echo '</figure>';
							echo '</a>';
						} else {

							echo 'geen image';

							echo '<a class="fase-link" href="' . $fase->url . '">';

							echo '<figure>';
							echo '<img src="' . $config->urls->templates . 'images/default-image.jpg">';
							echo '<figcaption><h2>' . $fase->title . '</h2></figcaption>';
							echo '</figure>';
							echo '</a>';

						}

						echo '</div><!-- closes table-cell multiple -->';
					}

					echo '</div><!-- closes table-holder multiple -->';


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

						if (count($org_image)){

							$thumb = $org_image->size(300, 250, $options);

								echo '<figure>';
								echo '<img src="' . $thumb->url .'" alt="' . $org_image->description . ' | ' . $fase->title . ' fase' . '">';
								echo '<figcaption><h2>' . $fase->title . '</h2></figcaption>';
								echo '</figure>';

						} else {

							echo '<a class="fase-link" href="' . $fase->url . '">';

							echo '<figure>';
							echo '<img src="' . $config->urls->templates . 'images/default-image.jpg">';
							echo '<figcaption><h2>' . $fase->title . '</h2></figcaption>';
							echo '</figure>';

						}
					echo '</a>';
					echo '</div><!-- closes fase half single -->';

					}
					echo '</div><!-- closes fase-holder single -->';
				}
				echo '</div><!-- closes row fases single -->';
			}

		echo '</article><!-- closes campaign year -->';

	}

	if (count($campaigns)) {
		include("./filter-campaigns.inc");
	}

	echo '</div><!-- closes campaign list row -->';


	include("./footer.inc"); 

?>