<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    <!-- font awesomw cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<!-- header section starts -->

<section class="header">

    <a href="home.php" class="logo"> travel.co</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"> </div>

</section>
<!-- header section ends -->



<!-- home section starts -->

<section class="home">

	<div class="swiper home-slider">

		<div class="swiper-wrapper">

			<div class="swiper-slide slide" style="background:url(./images/home-slide-1.jpeg) no-repeat">
				<div class="content">
					<span>explore, discover, travel</span>
					<h3>travel around the world</h3>
					<a href="package.php" class="btn">discover more</a>
				</div>
			</div>
			
			<div class="swiper-slide slide" style="background:url(./images/home-slide-2.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel</span>
					<h3>discover the new places</h3>
					<a href="package.php" class="btn">discover more</a>
				</div>
			</div>

			<div class="swiper-slide slide" style="background:url(./images/home-slide-2.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel</span>
					<h3>make your tour worthwhile</h3>
					<a href="package.php" class="btn">discover more</a>
				</div>
			</div>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		
	</div>

</section>

<!-- home section ends -->




<!-- services section starts  -->

<div class="services">
	<h1 class="heading-title">our services</h1>

	<div class="box-container">

		<div class="box">
			<img src="images/icon-1.png" alt="">
			<h3>adventure</h3>
		</div>

		<div class="box">
			<img src="images/icon-2.png" alt="">
			<h3>tour guide</h3>
		</div>

		<div class="box">
			<img src="images/icon-3.png" alt="">
			<h3>trekking</h3>
		</div>

		<div class="box">
			<img src="images/icon-4.png" alt="">
			<h3>camp fire</h3>
		</div>

		<div class="box">
			<img src="images/icon-5.png" alt="">
			<h3>offroad</h3>
		</div>

		<div class="box">
			<img src="images/icon-6.png" alt="">
			<h3>camping</h3>
		</div>

	</div>
</div>


<!-- services section ends  -->

<!-- home about section starts  -->

<section class="home-about">

	<div class="image">
		<img src="./images/about-img.jpeg" alt="">
	</div>

	<div class="content">
		<h3>about us</h3>
		<p>Lorem ipsum is placeholder text commonly used
		in the graphic, print, and publishing industries
		for previewing layouts and visual mockups.</p>
		<a href="about.php" class="btn">read more</a>
	</div>

</section>

<!-- home about section ends  -->

	
<!-- home packeges section starts  -->

<section class="home-packages">

	<h1 class="heading-title">our packages</h1>

	<div class="box-container">

		<div class="box">
			<div class="image">
				<img src="images/img-1.jpeg" alt="">
			</div>
			<div class="content">
				<h3>adventure & tour</h3>
				<p>Lorem ipsum  visual mockups.</p>
				<a href="book.php" class="btn">book now</a>
			</div>
		</div>

		<div class="box">
			<div class="image">
				<img src="images/img-2.jpeg" alt="">
			</div>
			<div class="content">
				<h3>adventure & tour</h3>
				<p>Lorem ipsum  visual mockups.</p>
				<a href="book.php" class="btn">book now</a>
			</div>
		</div>

		<div class="box">
			<div class="image">
				<img src="images/img-3.jpeg" alt="">
			</div>
			<div class="content">
				<h3>adventure & tour</h3>
				<p>Lorem ipsum  visual mockups.</p>
				<a href="book.php" class="btn">book now</a>
			</div>
		</div>

	</div>

	<div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packeges section ends  -->

<!-- home offer section starts  -->


<section class="home-offer">
	<div class="content">
		<h3>upto 50% off</h3>
		<p>Lorem ipsum  visual mockups.</p>
		<a href="book_form.php" class="btn">book now</a>
	</div>
</section>

<!-- home offer section ends  -->












<!-- footer section starts  -->
<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>quick links</h3>
			<a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        	<a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        	<a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        	<a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
		</div>

		<div class="box">
			<h3>extra links</h3>
			<a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
			<a href="#"><i class="fas fa-angle-right"></i>about us</a>
			<a href="#"><i class="fas fa-angle-right"></i>privacy</a>
			<a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
		</div>
		
		<div class="box">
			<h3>contact info</h3>
			<a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
			<a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
			<a href="#"><i class="fas fa-envelope"></i> querytravel.co@gmail.com</a>
			<a href="#"><i class="fas fa-map"></i> mumbai, india - 400104</a>
		</div>

		<div class="box">
			<h3>follow us</h3>
			<a href="#"><i class="fas fa-facebook-f"></i> facebook </a>
			<a href="#"><i class="fas fa-twitter"></i> twitter </a>
			<a href="#"><i class="fas fa-instagram"></i> instagram </a>
			<a href="#"><i class="fas fa-linkedin"></i> linkedin </a>
			
		</div>
	</div>

	<div class="credit"> created by <span>mr. arnav bajpai</span> | all rights reserved! </div>


</section>
<!-- footer section ends  -->












<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support// ]]>
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	
</script>
</body>
</html>