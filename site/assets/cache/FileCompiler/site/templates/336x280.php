
<?php 
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/header.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 

	echo '<iframe class="rectangle" src="'. $page->banner_336x280->url . '"></iframe><br><br>';
?>

<?php

	// See all the uploaded files
	// foreach ($page->banner_336x280 as $file) {
	// 	echo "<a href='$file->url'>$file->name</a><br>";
	// }

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/footer.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); 
?>
	
