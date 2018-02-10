<?php 

	include("./header.inc"); 


	$faseInfo = $page->fase_description;
	$faseImage = $page->fase_image;
	$options = array(
	  'quality' => 90,
	  'upscaling' => true,
	  'cropping' => 'northheast'
	);
	$thumb = $faseImage->size(200, 134, $options);


	if ($faseInfo || $faseImage) {
    	echo '<div class="row fases">';
    	echo '<div class="fase-info-content">';

    	if ($faseInfo && $faseImage) {
    		
    		echo '<div class="fase-info-image left">';
    		echo '<figure>';
    		echo '<img src="' . $thumb->url .'" alt="' . $faseImage->description .'">';
    		echo '</figure>';
    		echo '</div>';
    		echo '<div class="fase-info-text right">';
    		echo '<p>' . $faseInfo . '</p>'; 
    		echo '</div>';

    	} elseif (isset($faseImage)) {

    		echo '<div class="fase-info-image only">';
    		echo '<img src="' . $thumb->url .'" alt="' . $faseImage->description .'">'; 
    		echo '</div>';

    	} elseif (isset($faseInfo)) {
    		
    		echo '<div class="fase-info-text only">';
    		echo '<p>' . $faseInfo . '</p>'; 
    		echo '</div>';
    	}

    	echo '</div>';
    	echo '</div>';
	}


	$sets = $page->children("sort=sort");


	if (count($sets)) {
		echo '<div class="sets-list">';
		echo '<div id="load-div" class="loading busy"></div>';

		foreach ($sets as $set) {
			echo '<input class="input" id="tab-" type="radio" name="tabs">';
  			echo '<label class="label" for="tab-">' . $set->title . '</label>';
		}
		foreach ($sets as $set) {
			echo '<section class="set-content" id="content-">';
  			echo '<iframe class="included-iframe" src="'. $set->url . '"></iframe>';
			echo '<script>$("iframe").load(function() {var extraHeight = 100; var totalHeight = extraHeight + this.contentWindow.document.body.offsetHeight; this.style.height = totalHeight + "px";});</script>';
  			echo '</section>';
		}
		echo '</div>';


		echo '<script> var inputs = document.getElementsByClassName("input"); var labels = document.getElementsByClassName("label"); var content = document.getElementsByClassName("set-content"); for (var i = 0; i < labels.length; i++) { inputs[i].setAttribute("id", "tab-" + i); labels[i].setAttribute("for", "tab-" + i); content[i].setAttribute("id", "content-" + i); };document.getElementById("tab-0").checked = true;';
		echo '</script>';

		echo '<script>window.onload = function()  { var loadDiv = document.getElementById("load-div"); loadDiv.classList.remove("busy")  }</script>';
		
	}

	include("./footer.inc"); 

?>