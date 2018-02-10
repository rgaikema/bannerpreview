<?php 

	include("./header.inc"); 

	if($page->campaign_description) {
		echo '<div class="campaign-description">';
		echo '<p>' . $page->campaign_description . '</p>';
		echo '</div>';
	}

	$fases = $page->children("sort=sort");
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

	include("./footer.inc"); 

?>