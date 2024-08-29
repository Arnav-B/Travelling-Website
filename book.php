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

<div class="heading" style="background:url(images/header-bg-1.png) no repeat">
    <h1>book now</h1>
</div>



<!-- booking section starts -->

<section class="booking">

	<h1 class="heading-title">book your trip!</h1>

	<form action="book_form.php" method="post" class="book-form">

		<div class="flex">
			<div class="inputBox">
				<span>name :</span>
				<input type="text" placeholder="enter your name" name="name">
			</div>
			<div class="inputBox">
				<span>email :</span>
				<input type="email" placeholder="enter your email" name="email">
			</div>
			<div class="inputBox">
				<span>phone :</span>
				<input type="number" placeholder="enter your number" name="phone">
			</div>
			<div class="inputBox">
				<span>address :</span>
				<input type="" placeholder="enter your address" name="address">
			</div>
			<div class="inputBox">
				<span>where to :</span>
				<input type="text" placeholder="place you want to visit" name="location">
			</div>
			<div class="inputBox">
				<span>how many :</span>
				<input type="number" placeholder="number of guests" name="guests">
			</div>
			<div class="inputBox">
				<span>arrivals :</span>
				<input type="date" name="arrivals">
			</div>
			<div class="inputBox">
				<span>leaving :</span>
				<input type="date" name="leaving">
			</div>
		</div>

		<input type="submit" value="submit" class="btn" name="send">

	</form>

</section>

<!-- booking section ends -->












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
	// <![CDATA[  <-- For SVG support
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
	// ]]>
</script>
</body>
</html>