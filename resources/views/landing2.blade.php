<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Puwan - Ragam Kreasi Wanita Indonesia</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
				<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon2.ico" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<!-- Global CSS for the page and tiles -->
		<link rel="stylesheet" href="css/main.css">
		<!-- //Global CSS for the page and tiles -->
		<link rel="stylesheet" href="lib/semantic-ui/semantic.min.css">
		<link rel="application/font-woff2" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.6/themes/default/assets/fonts/icons.woff2">
		<!---start-click-drop-down-menu-->
		<script src="js/jquery.min.js"></script>
        <!--start-dropdown-->
         <script type="text/javascript">
			var $ = jQuery.noConflict();

				$(document).ready(function(){
				//Hide (Collapse) the toggle containers on load
				$(".toggle_container").hide();
				//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
				$(".trigger").click(function(){
					$(this).toggleClass("active").next().slideToggle("slow");
						return false; //Prevent the browser jump to the link anchor
				});

			});
		</script>
        <!--//End-dropdown->
		<!-//End-click-drop-down-menu->
	</head>
	<body>
		<!-start-wrap-->
			<!---start-header-->
			<div class="row">
			<div class="col-md-12">
			<div class="header-top">
				<div class="wrap">
				<div class="logo">
					<a href="/"><img src="images/puwan.png" title="puwan" /></a>
				</div>

				<nav class="pull-right">
									<ul>
										<li><a href="#"><span>Beranda</span></a></li>
										<li><a href="/jelajah"><span>Jelajah UKM</span></a></li>
										<li><a href="/belanja"><span>Belanja</span></a></li>
										<li><a href="/login"><span>Masuk</span></a></li>


									</ul>
									</nav>



			</div>
		</div>
		</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="main-container">
				<div class="user-catch">
					<div class="tagline">
						<h2 class="thick">RAGAM KREASI WANITA INDONESIA</h2>
						<h4 class="thin">Temukan UKM Karya Wanita Indonesia di sini</h4>
					</div>
					<div class="search-box">
							<input type="search" id="search" placeholder="Ketik Nama UKM"/>
							<button class="btn btn-submit" type="submit">CARI UKM</button>
					</div>
				</div>
				</div>
			</div>
		</div>

		<!---//End-header---->
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			 <div id="main" role="main">
			 		<h1 align="center">Jelajah UKM</h1>
			 		<h2 align="center">UKM (Usaha Kecil Menengah) merupakan salah satu penyokong perekonomian Indonesia</h2>

			    <div class="ui special cards ukm-card">


    @foreach ($ukms as $ukm)

            <div class="card">
              <div class="blurring dimmable image">
                <div class="ui dimmer">
                  <div class="content">
                    <div class="center">
                      <a href="/login"><div class="ui success button">Ikuti</div></a>
                      <a href="/belanja"><div class="ui inverted button">Belanja</div></a>
                    </div>
                  </div>
                </div>
                <img src="{{ $ukm->profile_picture or 'images/ukm1.jpg'}}">
              </div>
              <div class="content">
                <div class="header">{{ $ukm->name }}</div>
                <div class="meta">{{ $ukm->category }}</div>
                <div class="description">{{ $ukm->long_description }}</div>
              </div>
              <div class="extra content">
                <span class="right floated">
                  <i class="user icon"></i>
                  {{ $ukm->follower_number }} Follower
                </span>
              </div>
            </div>

    @endforeach




          </div> <!-- End card -->

    <div class="footer-container-top">

    <div class="container">
        <ul class="row nav nav-pills nav-stacked-mobile">
            <li class="col-sm-3 nav-col">
                <h4 status="0" class="footer-title hidden-xs">PUWAN</h4>
                <div class="footer-collapse">
                    <a href='#'>Apa itu Puwan?</a>
                    <a href='#'>Informasi Perusahaan</a>
                    <a href='#'>Karir di Puwan</a>
                    <a href="#">Hubungi Kami</a>
                </div>
            </li>
            <li class="col-sm-3 nav-col">
                <h4 status="0" class="footer-title hidden-xs">JUAL</h4>
                <div class="footer-collapse">
                    <a href='#'>Berjualan di Puwan</a>
                    <a href="#">Panduan Penjual</a>
                    <a href="#">Ketentuan Produk</a>
                    <a href="#">Cairkan Hasil Jualan</a>
                </div>
            </li>
            <li class="col-sm-3 nav-col">
                <h4 status="0" class="footer-title hidden-xs">BELI</h4>
                <div class="footer-collapse">
                    <a href="#">Belanja di Puwan</a>
                    <a href="#">Proses Pembayaran</a>
                    <a href="#" class="open-browse hidden-xs">Jelajahi Produk</a>
                    <a href="#" class="open-browse-mobile visible-xs">Jelajahi Produk</a>
                    <a href="#">Penukaran Produk</a>
                </div>
            </li>
	        </ul>
	    </div>

</div>
</div>
</div>





		<!---//End-content---->
		<!----wookmark-scripts---->
		  <script src="js/jquery.imagesloaded.js"></script>
		  <script src="js/jquery.wookmark.js"></script>
		  <script src="lib/semantic-ui/semantic.min.js"></script>
		  <script type="text/javascript">
		  $(document).ready(function() {
					$('.special.cards .image').dimmer({
						on: 'hover'
					});
		  });
		    (function ($){
		      var $tiles = $('#tiles'),
		          $handler = $('li', $tiles),
		          $main = $('#main'),
		          $window = $(window),
		          $document = $(document),
		          options = {
		            autoResize: true, // This will auto-update the layout when the browser window is resized.
		            container: $main, // Optional, used for some extra CSS styling
		            offset: 20, // Optional, the distance between grid items
		            itemWidth:280 // Optional, the width of a grid item
		          };
		      /**
		       * Reinitializes the wookmark handler after all images have loaded
		       */
		      function applyLayout() {
		        $tiles.imagesLoaded(function() {
		          // Destroy the old handler
		          if ($handler.wookmarkInstance) {
		            $handler.wookmarkInstance.clear();
		          }

		          // Create a new layout handler.
		          $handler = $('li', $tiles);
		          $handler.wookmark(options);
		        });
		      }
		      /**
		       * When scrolled all the way to the bottom, add more tiles
		       */
		      function onScroll() {
		        // Check if we're within 100 pixels of the bottom edge of the broser window.

		        if (closeToBottom) {
		          // Get the first then items from the grid, clone them, and add them to the bottom of the grid
		          var $items = $('li', $tiles),
		              $firstTen = $items.slice(0, 2);
		          $tiles.append($firstTen.clone());

		          applyLayout();
		        }
		      };

		    $(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  > 200) {
        $('.header-top').css('background-color','#ff8f0a');
    } else{
    	        $('.header-top').css('background-color','transparent');

    }
});
		       $('#tiles').find("li").hover(function(){
        $('.btn-tiles').css("display","table");
                $('.btn-tiles').css("position","relative");
                        $('.btn-tiles').css("top","10%");


    },function(){
$('.btn-tiles').css("display","none");
    })

		      // Call the layout function for the first time
		      applyLayout();

		      // Capture scroll event.
		      $window.bind('scroll.wookmark', onScroll);


		    })(jQuery);
		  </script>
		<!---/wookmark-scripts---->
		<!--start-footer--->

		<!----//End-footer--->
		<!---//End-wrap---->
	</body>
</html>

