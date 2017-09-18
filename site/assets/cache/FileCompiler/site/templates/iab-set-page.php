<?php 
	
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

	$children = $page->children;

	foreach ($children as $child) {

		$smallSkyscraper = $child->banner_120x600->url;
		if (isset($smallSkyscraper)) {
			echo '<iframe class="small-skyscraper" src="'. $smallSkyscraper . '"></iframe><br><br>';
		}

		$rectangle = $child->banner_336x280->url;
		if (isset($rectangle)) {
			echo '<div class="iframe-holder"><iframe id="iframe-1" class="rectangle" src="'. $rectangle . '"></iframe>';
			echo '<div class="button-holder"><button type="button" id="button-1" class="replay">replay<i class="fa fa-play-circle"></i></button></div></div>';
		}

		$smallRectangle = $child->banner_300x250->url;
		if (isset($smallRectangle)) {
			echo '<iframe class="small-rectangle" src="'. $smallRectangle . '"></iframe><br><br>';
		}
	}

	?>

		<!-- Reload banners -->
		<script>
			var iframe1 = $('#iframe-1');

			$('#button-1').click(function() {
				document.getElementById('iframe-1').src = document.getElementById('iframe-1').src;
			});

		</script>


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
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

?>