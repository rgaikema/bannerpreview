<?php

	if (count($campaigns)) {

		// Store unique Years
		$arr = array();
		foreach ($campaigns as $campaign) {
			$campaignDate = $campaign->campaign_date;
			$campaignYear = substr($campaignDate, -4);
		    $arr[] = $campaignYear;
		}
		$unique_years = array_unique($arr);

		if (count($unique_years) > 1) {

			echo '<div class="filters">';
			//echo '<h3 class="title">Date Filters</h3>';
			echo '<div class="date-select-holder">';

			// Show dropdown with unique years
			echo '<select name="campaign-date-select" id="campaign-date-select">';
			echo '<option value="All">All campaigns</option>';

			foreach($unique_years as $year) {
			        echo '<option value="' . $year . '">' . $year . '</option>';
			}
			echo '</select>';

			echo '</div>';
			echo '</div>';
		}
	}

?>

