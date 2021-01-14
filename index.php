<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>King of Fenix - Toram Online Guild</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/png" href="image/kof.png">
</head>
<body>
  <section>
  	<div class="circle"></div>
  	<header>
  		<a href="#"><img class="logo" src="image/kof.png"></a>
  		<div class="toggle" onclick="toggleMenu();"></div>
  		<ul class="navigation">
  			<li><a href="#">Home</a></li>
  			<li><a href="#">Menu</a></li>
  			<li><a href="#">What's New</a></li>
  			<li><a href="#">Contact</a></li>
  		</ul>
  	</header>
  	<div class="contend">
  		<div class="textBox">
  			<h2>It's not just Guild <br>It's <span>KoF</span></h2>
  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
  			<a href="#">Learn More</a>
  		</div>
  		<div class="imgBox">
  			<img src="image/mar.png" class="squad">
  		</div>
  	</div>
  	<ul class="thumb">
  		<li><img src="image/logo/mow.png" onclick="imgSlider('image/mar.png'); changeCircleColor('#53b3ef')"></li>
  		<li><img src="image/logo/dc.png" onclick="imgSlider('image/jek.png'); changeCircleColor('#bd27e1')"></li>
  		<li><img src="image/logo/zdx.png" onclick="imgSlider('image/kaj.png'); changeCircleColor('#eca952')"></li>
  		<li><img src="image/logo/cb.png" onclick="imgSlider('image/adit.png'); changeCircleColor('#ff508b')"></li>
  	</ul>
  	<ul class="sci">
  		<li><a href="https://www.facebook.com/profile.php?id=100020191526615" target="_blank"><img src="image/facebook.png"></a></li>
  		<li><a href="https://www.instagram.com/jacknight038/" target="_blank"><img src="image/instagram.png"></a></li>
  		<li><a href="https://wa.me/+6281359654622" target="_blank"><img src="image/whatsapp.png"></a></li>
  	</ul>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript">
  	function imgSlider(anything){
  		document.querySelector('.squad').src = anything;
  	}

  	function changeCircleColor(color){
  		const circle = document.querySelector('.circle');
  		circle.style.background = color;
  	}

  	function toggleMenu(){
  		var menuToggle = document.querySelector('.toggle');
  		var navigation = document.querySelector('.navigation');
  		menuToggle.classList.toggle('active');
  		navigation.classList.toggle('active');
  	}
  </script>
</body>
</html>