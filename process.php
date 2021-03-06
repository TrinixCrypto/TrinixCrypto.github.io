<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sneakzrs | Thank You </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="theme-color" content="#157878">
			<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
			<link rel="stylesheet" href="cayman.css">
			<style>
				#fader {
					position: fixed;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					z-index: 999999;
					pointer-events: none;
					background: white;
					animation-duration: 300ms;
					animation-timing-function: ease-in-out;
				}
				@keyframes fade-out {
					from { opacity: 1 }
					  to { opacity: 0 }
				}

				@keyframes fade-in {
					from { opacity: 0 }
					  to { opacity: 1 }
				}

				#fader.fade-out {
					opacity: 0;
					animation-name: fade-out;
				}

				#fader.fade-in {
					opacity: 1;
					animation-name: fade-in;
				}
			</style>
	</head>

	<body>
		<svg id="fader"></svg>
		<script>
			fadeInPage();
			function fadeInPage() {
			if (!window.AnimationEvent) { return; }
			var fader = document.getElementById('fader');
			fader.classList.add('fade-out');
	}
		</script>
		
		<div class="page-header">
			<h1>Thank You <?php echo $_POST["fname"]?>.</h1>
			<div class="project-tagline"><h2>Sneakzrs</h2></div>
			<a href="index.html" class="btn">Home</a>
		</div>
		
		<div class="main-content">
			<p>Your Feedback is greatly Appreciated.<br>
			We will keep in contact at: <?php echo $_POST["email"]?><br>
			<hr>
			<br>
			Your Message:<br> <?php echo $_POST["msg"]?><br>
			</p>
		
		</div>
	</body>
</html>
