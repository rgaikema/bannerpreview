<?php 
	include("./header.inc"); 

?>

	<div class="screen" id="canvas_screen">
			      
	    <?php  

			foreach($page->canvas_items as $canvas_item) {

				if ($canvas_item->canvas_type_check == 1) {

					$img = $canvas_item->canvas_image_file;

					var_dump($canvas_item->canvas_image_kind);

					if ($canvas_item->canvas_image_kind == 1) {

					echo '<img class="c_img landscape" src="' . $img->url . '" alt="' . $img->description . '">'; 

					}elseif ($canvas_item->canvas_image_kind == 2) {
						echo "panorama";
					}
				}
				elseif ($canvas_item->canvas_type_check == 2){
					echo "video";
				}
				elseif ($canvas_item->canvas_type_check == 3){
					echo "button";
				}
				else {
					echo "onbekend item";
				}
			} 
		?>
	</div>

	<script>
		$(function(o){	
			o = $("#canvas_screen").overscroll({

			});

		});
    </script>

<?php
	include("./footer.inc"); 
?>