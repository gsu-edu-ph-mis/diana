<?php
/**
 * Template Name: Countdown U-Week 2023
 *
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */

//get_header(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/rubik/css/style.css">
	<style>
		html {
			margin-top: 0;
		}
		body {
			background: #117e99;
			font-weight: normal;
			font-family: Poppins;
		}
		.header {
			background: white;
			padding: 15px 0;
			line-height: 1.2;
			margin-bottom: 15px;
		}
		.box {
			padding: 5px;
			background: #f5efe0;
			border-radius: 20px;
			border: 10px solid #f5c115;
		}
		h1 {
			font-family: Poppins;
			font-size: 40px;
			text-transform: uppercase;
			color: #117e99;
			font-weight: bold;
			padding-top: 60px;
		}
		.timer {
			padding: 20px 0 60px 0;
		}
		.btns {
			padding-bottom: 50px;
		}
		.btn-warning {
			box-shadow: 0 0 5px #fff;
			border: 5px solid #117e99;
			color: #117e99;
			padding: 5px 15px;
		}
		.slot {
			color: #117e99;
			background: #f7f3e9;
			border: 5px solid #f5c115;
			font-size: 24px;
			margin: 0 10px;
			min-width: 200px;
		}
		.slot .time {
			font-size: 80px;
		}
		.slot .line {
			height: 3px;
			background: #117e99;
			margin: 0 10%;
		}
		.waves {
			position: fixed;
			bottom: 0;
			right: 0;
			width: 100%;
		}
		.waves img.guitarist{
			position: absolute;
			right: 0;
			bottom: 3px;
			z-index: 1;
			cursor: pointer;
		}

		.fx-noticemesenpai {
			display: inline-block;
			animation: noticemesenpai 4s infinite;
		}

		@keyframes noticemesenpai {
			0% { transform:translate(0,0);}
			25% { transform:translate(0,20px); }
			50% { transform:translate(0,0px); }
			75% { transform:translate(0,20px); }
			100% { transform:translate(0,0);}
		}

		.fx-sway {
			display: inline-block;
			animation: swaymesenpai 4s infinite;
		}

		@keyframes swaymesenpai {
			0% { transform: rotate(0deg); }
			25% { transform: rotate(10deg); }
			75% { transform: rotate(-10deg); }
			100% { transform: rotate(0deg); }
		}
		/* Breakpoints */
		/* ≥1200px Extra large */
		@media (max-width:1200px){

		}

		/* ≥992px	Large */
		@media (max-width:992px){
			.slot {
				min-width: 150px;
			}
			
		}

		/* ≥768px	Medium */
		@media (max-width:768px){
			h1 {
				font-size: 30px;
			}
			.slot .time {
				font-size: 40px;
			}
			.slot {
				min-width: 100px;
				font-size: 16px;
			}
		}

		/* ≥576px	Small */
		@media (max-width:576px){
			h1 {
				padding-top: 30px;
			}
			.slot {
				margin: 0 5px;
				min-width: 66px;
				font-size: 12px;
			}
			
			.btn-warning {
				border: 3px solid #117e99;
				color: #117e99;
				padding: 5px 10px;
				font-size: 12px;
			}
		}

		/* <576px Extra Small */
		@media (max-width:575px){
			
		}
	</style>
    <title>Countdown U-Week 2024</title>
  </head>
  <body>
    <div class="container-fluid">
		<div class="row header">
			<div class="col-6">
				<div class="d-flex align-items-center">
					<img src="<?= get_stylesheet_directory_uri(); ?>/images/logo-gsu.png" width="70" alt="GSU" class="mr-3">
					<div class="d-md-block d-none">
						<strong>GUIMARAS STATE UNIVERSITY</strong> <br>
						McLain, Buenavista, Guimaras, Philippines
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="text-right">
					<img src="<?= get_stylesheet_directory_uri(); ?>/images/socotec-pab.png" width="110" alt="Socotec Pab">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="box text-center">

					<h1>University Week 2024 Countdown</h1>
					<div class="timer d-flex justify-content-center">
						<div class="slot">
							<div class="time">
								<span class="dayOnly"></span>
							</div>
							<div class="line"></div>
							<div class="name">
								Days
							</div>
						</div>
						<div class="slot">
							<div class="time">
								<span class="hoursOnly"></span>
							</div>
							<div class="line"></div>
							<div class="name">
								Hours
							</div>
						</div>
						<div class="slot">
							<div class="time">
								<span class="minutesOnly"></span>
							</div>
							<div class="line"></div>
							<div class="name">
								Minutes
							</div>
						</div>
						<div class="slot">
							<div class="time">
								<span class="secondsOnly"></span>
							</div>
							<div class="line"></div>
							<div class="name">
								Seconds
							</div>
						</div>
					</div>
					<div class="text-center pb-5">
						<p class="mb-4">
							<span class="alert alert-warning">See you on June 3!</span>
						</p>
						<p>For the meantime, you can play with the Rubiks Cube</p>
					</div>
					<div id="cube" style="min-height: 400px; max-width: 400px; margin: auto; margin-bottom: 200px; background: #e7e1d3; border-radius: 10px;"></div>
				</div>			
			</div>
		</div>
	</div>
	<div class="waves">
		<!-- <img class="guitarist fx-sway" id="guitarist" src="<?= get_stylesheet_directory_uri(); ?>/images/uweek/GSU-Excels-as-One.png" width="300"  alt="GSU-Excels-as-One"> -->
		<img class="fx-noticemesenpai" src="<?= get_stylesheet_directory_uri(); ?>/images/uweek/waves.png" alt="Waves">
	</div>
    <script src="<?= get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/js/moment.min.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/rubik/js/oz.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/rubik/js/css3.oz.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/rubik/js/rubik.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/rubik/js/quaternion.js"></script>

	<!-- <script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.9.3/tsparticles.confetti.bundle.min.js"></script> -->
	<script>
		var timer = null;
		var mTarget = moment('2024-06-03').hours(1).minutes(0).seconds(0)
		// var mTarget = moment('2023-06-25').hours(14).minutes(8).seconds(0)
		var audio = new Audio('<?= get_stylesheet_directory_uri(); ?>/images/uweek/tick.mp3');
		window.clicked = false;
		$(document).on('click', function(){
			window.clicked = true
		})
		$(document).ready(function($){
			new Rubik()
		})
		var countdown = function(){
			var mNow = moment()

			var duration = moment.duration(mTarget.diff(mNow))
			var days = duration.as('days')
			var dayOnly = Math.floor(days)
			var hours = (days - dayOnly) * 24
			var hoursOnly = Math.floor(hours)
			var minutes = (hours - hoursOnly) * 60
			var minutesOnly = Math.floor(minutes)
			var seconds = (minutes - minutesOnly) * 60
			var secondsOnly = Math.floor(seconds)

			if(days <= 0 && timer){
				$('.dayOnly').text(0)
				$('.hoursOnly').text(0)
				$('.minutesOnly').text(0)
				$('.secondsOnly').text(0)
				clearInterval(timer)
			} else {
				// if(window.clicked) audio.play()
				
				$('.dayOnly').text(dayOnly)
				$('.hoursOnly').text(hoursOnly)
				$('.minutesOnly').text(minutesOnly)
				$('.secondsOnly').text(secondsOnly)
			}
			// console.log(days, dayOnly, hoursOnly, minutesOnly, secondsOnly)
		}
		countdown()
		timer = setInterval(countdown, 1000)
		// $('.dayOnly').text(0)
		// $('.hoursOnly').text(0)
		// $('.minutesOnly').text(0)
		// $('.secondsOnly').text(0)

		// 

		const duration = 1 * 2000,
  		animationEnd = Date.now() + duration;

		let skew = 1;

		function randomInRange(min, max) {
		return Math.random() * (max - min) + min;
		}

		
	</script>
  </body>
</html>
<?php //get_footer(); ?>
