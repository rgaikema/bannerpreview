<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page->title; ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
		<!-- <link rel='stylesheet' type='text/css' href='<?=$config->urls->FieldtypeComments?>comments.css' /> -->
		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
<!-- 		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/devices.css" /> -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script src="<?php echo $config->urls->templates?>scripts/jquery.overscroll.js"></script>
		<script type='text/javascript' src='<?=$config->urls->FieldtypeComments?>comments.min.js'></script>
		<script type="text/javascript">
		  WebFontConfig = {
		    google: { families: [  'Titillium+Web:400,700:latin', 'Open+Sans:400,600:latin' ] }
		  };
		  (function() {
		    var wf = document.createElement('script');
		    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		    wf.type = 'text/javascript';
		    wf.async = 'true';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(wf, s);
		  })(); 
		</script>
	</head>
	<body>
		<header class="header clear">
			<div class="container">
			  	<div class="logo">
				  	<a href="/bannertool"><img src="<?php echo $config->urls->templates?>images/logo-storm.svg" alt="Storm Digital logo"></a>
			  	</div>
			</div>
		</header>

		<section class="container page clearfix">
			<?php //if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
			<div class="breadcrumbs">
				<?php
					foreach($page->parents() as $parent) {
					    echo "<a href='{$parent->url}'>{$parent->title}</a> » ";
					} 
				?>
			</div>
			<div class="wrapper">
				<h1><?php echo $page->title; ?></h1>