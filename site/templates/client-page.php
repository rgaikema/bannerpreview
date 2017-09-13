<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page->title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
	</head>
	<body>
		<div class="breadcrumbs">
		<?php
			foreach($page->parents() as $parent) {
			    echo "<a href='{$parent->url}'>{$parent->title}</a> ";
			} 
		?>
		</div>
		<h1><?php echo $page->title; ?></h1>
		<?php //if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>

		<?php 

			$campaigns = $page->children("sort=title");

			foreach ($campaigns as $campaign) {
				echo "<li><a href='$campaign->url'>$campaign->title</a></li>";
			}

		?>
	
	</body>
</html>
