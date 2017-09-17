
<?php 
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

	echo '<iframe id="iframe-1" class="rectangle" src="'. $page->banner_336x280->url . '"></iframe><br><br>';
?>
	<button type="button" id="button-0" class="replay">replay<i class="fa fa-play-circle"></i></button> 

	<script>

		$(function() {  
		    var $iframe = $('#iframe-1');
		    $iframe.ready(function() {
		        $iframe.contents().find("body").append('test');
		    });
		});


		// var iframes = $('iframe');
		// var iframe1 = $('#iframe-1');


		// $('#button-0').click(function() {
		// 	document.getElementById('iframe-1').src = document.getElementById('iframe-1').src;
		// });



	</script>

<?php

	// See all the uploaded files
	// foreach ($page->banner_336x280 as $file) {
	// 	echo "<a href='$file->url'>$file->name</a><br>";
	// }

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 
?>
	
