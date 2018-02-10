		<?php 
			
			include("./header-set-page.inc"); 

			$children = $page->children;

			$boards = $page->children("template=970x250|728x90");
			$scrapers = $page->children("template=300x600|160x600|120x600");
			$rectangles = $page->children("template=336x280|300x250");

			// Get Boards
			if ($boards) {

				echo '<div class="row creatives boards">';

				foreach ($boards as $board) {


					if ($board->template == "970x250") {
						echo '<div class="iframe-holder set-view billboard">';
						echo '<iframe id="creative-" class="iframe billboard" src="'. $board->url. '"></iframe>';
						echo '<script>$("iframe").load(function() {var extraHeight = 60; var totalHeight = extraHeight + this.contentWindow.document.body.offsetHeight; this.style.height = totalHeight + "px";});</script>';
						echo '<div class="button-holder"><button type="button" id="button-" class="replay">replay<i class="fa fa-play-circle"></i></button></div>';
						echo '</div>';
					}

					if ($board->template == '728x90') {
						echo '<div class="iframe-holder set-view leaderboard">';
						echo '<iframe id="creative-" class="iframe leaderboard" src="'. $board->url . '"></iframe>';
						echo '<script>$("iframe").load(function() {var extraHeight = 60; var totalHeight = extraHeight + this.contentWindow.document.body.offsetHeight; this.style.height = totalHeight + "px";});</script>';
						echo '<div class="button-holder"><button type="button" id="button-" class="replay">replay<i class="fa fa-play-circle"></i></button></div>';
						echo '</div>';
					}

				}

				echo '</div>';
			}

			// Get scrapers
			if ($scrapers) {

				echo '<div class="row creatives scrapers">';

				foreach ($scrapers as $scraper) {

					if ($scraper->template == "300x600") {
						echo '<div class="iframe-holder set-view halfpage">';
						echo '<iframe id="creative-" class="iframe halfpage" src="'. $scraper->url. '"></iframe>';
						echo '<script>$("iframe").load(function() {var extraHeight = 60; var totalHeight = extraHeight + this.contentWindow.document.body.offsetHeight; this.style.height = totalHeight + "px";});</script>';
						echo '<div class="button-holder"><button type="button" id="button-" class="replay">replay<i class="fa fa-play-circle"></i></button></div>';
						echo '</div>';
					}

					if ($scraper->template == '160x600') {
						echo '<div class="iframe-holder set-view wide-skyscraper">';
						echo '<iframe id="creative-" class="iframe wide-skyscraper" src="'. $scraper->url . '"></iframe>';
						echo '<script>$("iframe").load(function() {var extraHeight = 60; var totalHeight = extraHeight + this.contentWindow.document.body.offsetHeight; this.style.height = totalHeight + "px";});</script>';
						echo '<div class="button-holder"><button type="button" id="button-" class="replay">replay<i class="fa fa-play-circle"></i></button></div>';
						echo '</div>';
					}

					if ($scraper->template == '120x600') {
						echo '<div class="iframe-holder set-view skyscraper">';
						echo '<iframe id="creative-" class="iframe skyscraper" src="'. $scraper->url . '"></iframe>';
						echo '<script>$("iframe").load(function() {var extraHeight = 60; var totalHeight = extraHeight + this.contentWindow.document.body.offsetHeight; this.style.height = totalHeight + "px";});</script>';
						echo '<div class="button-holder"><button type="button" id="button-" class="replay">replay<i class="fa fa-play-circle"></i></button></div>';
						echo '</div>';
					}

				}

				echo '</div>';
			}


			// Get Rectangles
			if ($rectangles) {

				echo '<div class="row creatives rectangles">';

				foreach ($rectangles as $rectangle) {

					if ($rectangle->template == "336x280") {
						echo '<div class="iframe-holder set-view rectangle">';
						echo '<iframe id="creative-" class="iframe rectangle" src="'. $rectangle->url. '"></iframe>';
						echo '<script>$("iframe").load(function() {var extraHeight = 60; var totalHeight = extraHeight + this.contentWindow.document.body.offsetHeight; this.style.height = totalHeight + "px";});</script>';
						echo '<div class="button-holder"><button type="button" id="button-" class="replay">replay<i class="fa fa-play-circle"></i></button></div>';
						echo '</div>';
					}

					if ($rectangle->template == '300x250') {
						echo '<div class="iframe-holder set-view medium-rectangle">';
						echo '<iframe id="creative-" class="iframe medium-rectangle" src="'. $rectangle->url . '"></iframe>';
						echo '<script>$("iframe").load(function() {var extraHeight = 60; var totalHeight = extraHeight + this.contentWindow.document.body.offsetHeight; this.style.height = totalHeight + "px";});</script>';
						echo '<div class="button-holder"><button type="button" id="button-" class="replay">replay<i class="fa fa-play-circle"></i></button></div>';
						echo '</div>';
					}

				}

				echo '</div>';
			}
			
		?>

		<!-- Reload banners -->
		<script>

			// Set unique id numbers for iframes
			var iframeList = document.getElementsByClassName("iframe");
			for (var i = 0; i < iframeList.length; i++) {
			   iframeList[i].setAttribute("id", "creative-" + i);
			}

			// Set unique id numbers for reload buttons
			var btnList = document.getElementsByClassName("replay");
			for (var i = 0; i < btnList.length; i++) {
			   btnList[i].setAttribute("id", "button-" + i);
			   // Reload the creative on click
			   btnList[i].addEventListener("click", reloadCreative);
			}

			function reloadCreative(){
				var btnIDfull = this.id;
				var btnIDArray = btnIDfull.split('-');
				var iframeIndex = btnIDArray[1];
				var iframeIDfull = 'creative-' + iframeIndex;
				document.getElementById(iframeIDfull).src = document.getElementById(iframeIDfull).src;
			}

		</script>


	</div> <!-- end wrapper -->

	<?php
		include("./footer-stripped.inc"); 
	?>