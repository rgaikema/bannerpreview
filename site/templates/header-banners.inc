<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width">
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
	<body class="<?php echo $modules->get('BodyClass')->bodyclass() ?>">

		<section class="">

			<div class="">