<?php 
	
	include("./header.inc"); 

	$children = $page->children;

	foreach ($children as $child) {

		$smallSkyscraper = $child->banner_120x600->url;
		if (isset($smallSkyscraper)) {
			echo '<iframe class="small-skyscraper" src="'. $smallSkyscraper . '"></iframe><br><br>';
		}

		$rectangle = $child->banner_336x280->url;
		if (isset($rectangle)) {
			echo '<iframe class="rectangle" src="'. $rectangle . '"></iframe><br><br>';
		}

		$smallRectangle = $child->banner_300x250->url;
		if (isset($smallRectangle)) {
			echo '<iframe class="small-rectangle" src="'. $smallRectangle . '"></iframe><br><br>';
		}
	}

	?>

	</div> <!-- end wrapper -->

	<aside class="sidebar">
		<edit field="comments">...</edit>
		
		<?php 
			$reactions = $page->comments;

			echo '<div class="comments">';

			foreach ($reactions as $reaction) {

				if ($reaction->textarea_klant) {
					echo '<div class="comment">' . $reaction->textarea_klant . '</div>';
				}

				if ($reaction->textarea_storm) {
					echo '<div class="comment storm">' . $reaction->textarea_storm . '</div>';
				}
			}

			echo '</div>'
		?>

	</aside>

	<?php
		include("./footer.inc"); 

?>