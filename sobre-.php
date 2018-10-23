<html>
	<head>
		<title></title>
		<style>
		.ruanFazLogo{
			filter: hue-rotate(0);
			animation: paraDeLerEFaz 120s infinite;
		}
		@keyframes paraDeLerEFaz{
			0% {filter: hue-rotate(0DEG) invert(0%) saturate(1) sepia(0%) contrast(100%) brightness(100%) grayscale(0%);}
			15% {filter: hue-rotate(360DEG) invert(0%) saturate(1) sepia(0%) contrast(100%) brightness(100%) grayscale(0%);}
			30% {filter: hue-rotate(0DEG) invert(100%) saturate(1) sepia(0%) contrast(100%) brightness(100%) grayscale(0%);}
			45% {filter: hue-rotate(0DEG) invert(0%) saturate(10) sepia(0%) contrast(100%) brightness(100%) grayscale(0%);}
			60% {filter: hue-rotate(0DEG) invert(0%) saturate(1) sepia(100%) contrast(100%) brightness(100%) grayscale(0%);}
			75% {filter: hue-rotate(0DEG) invert(0%) saturate(1) sepia(0%) contrast(200%) brightness(150%) grayscale(0%);}
			90% {filter: hue-rotate(0DEG) invert(0%) saturate(1) sepia(0%) contrast(100%) brightness(100%) grayscale(100%);}
			100% {filter: hue-rotate(0DEG) invert(0%) saturate(1) sepia(0%) contrast(100%) brightness(100%) grayscale(0%);}
		}
		</style>
	</head>
	<body>
	<?php require('rdd/head.php') ?>
	<img src="img/WhatsApp-Image-2018-09-24-at 16.52.25.jpeg" style="width:100vw;height:100vh;" class="ruanFazLogo" alt="RuanDemorado"/>
	</body>
</html>
