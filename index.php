<html>
<head>
	<title>OVERHS</title>
	<!-- Add to homescreen for Chrome on Android -->
   <meta name="mobile-web-app-capable" content="yes">
   <meta name="application-name" content="Web Starter Kit">
   <link rel="icon" sizes="192x192" href="img.jpg">

   <!-- Add to homescreen for Safari on iOS -->
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="apple-mobile-web-app-status-bar-style" content="black">
   <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
   <link rel="apple-touch-icon" href="img.jpg">

   <!-- Tile icon for Win8 (144x144 + tile color) -->
   <meta name="msapplication-TileImage" content="img.jpg">
   <meta name="msapplication-TileColor" content="#3372DF">

   <meta name="theme-color" content="#3372DF">
   
	<meta charset="X-UA-Compatible" content="IE-edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta charset="utf-8">


	<link href="recursos/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="recursos/bootstrap/css/default.css" rel="stylesheet"/>

</head>
<body>
	<div class="container">
		<div class="row">
			<header id="cabecalho">
				<?php
				include ("topo.php");
				?>
			</header>
		</div>


		<div class="row">
			<nav id="menu">
				<?php
				include ("menu.php");
				?>
			</nav>
		</div>
	<div class="row">
		<section id="corpo">
			<?php
			include ("corpo.php");
			?>
		</section>
	</div>
<div class="row">
	<footer id="rodape">
		<?php
		include ("rodape.php");
		?>
	</footer>
	</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="recursos/bootstrap/js/bootstrap.min.js"></script>
<script>
	$('.carousel').carousel({
		interval: 5000 
	})
</script>
</body>
</html>