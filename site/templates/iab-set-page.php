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
		
		<?php 

			foreach($page->comments as $comment) {
			    if($comment->status < 1) continue; // skip unapproved or spam comments
			    $cite = htmlentities($comment->cite); // make sure output is entity encoded
			    $text = htmlentities($comment->text);
			    $date = date('m/d/y g:ia', $comment->created); // format the date

			    //Check stormvogel names
			    $stormvogels = $users->find("email$=stormdigital.nl");
			    $stormvogelNames = [];

				foreach ($stormvogels as $stormvogel) {

					$stormvogelName = $stormvogel->name;
					array_push($stormvogelNames, $stormvogelName);

				}

				//Output comments
			    echo '<div class="CommentHeader">' . $date . '</div>';

			    //Check if comment is places by Stormvogel
				if (in_array($cite, $stormvogelNames)) {
					echo '<div class="CommentText stormvogel"><p>' . $text . '</p></div>';
				} else {
					echo '<div class="CommentText"><p>' . $text . '</p></div>';
				}

			    echo '<div class="CommentFooter">' . $cite . '</div>';
			}

			//Commentform
			echo $page->comments->renderForm(array(
			    'headline' => '<h2>Laat een reactie achter:</h2>',
			    'successMessage' => "<p class='success'>Bedankt, je reactie is geplaatst.</p>",
    			'errorMessage' => "<p class='error'>Helaas, je reactie kon niet worden geplaatst. Check of je alle velden hebt ingevuld en probeer het nog een keer.</p>",
    			'labels' => array(
			        'cite' => 'Naam',
			        'email' => 'Email',
			        'text' => 'Reactie',
			        'submit' => 'Plaats',
			    ),
			));

		?>

	</aside>

	<?php
		include("./footer.inc"); 

?>