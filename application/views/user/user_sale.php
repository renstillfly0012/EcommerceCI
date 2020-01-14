
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Aditii Website Template | Sale :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/new/css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="<?= base_url() ?>assets/new/js/jquery.min.js"></script> 
	<!-- start gallery_sale -->
	<script type="text/javascript" src="<?= base_url() ?>assets/new/js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="<?= base_url() ?>assets/new/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
<!-- start top_js_button -->
<script type="text/javascript" src="<?= base_url() ?>assets/new/js/move-top.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/new/js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start gallery_sale  -->
			<div class="gallery1">
					<div class="container">
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web">All</span></li>
						<li><span class="filter" data-filter="app card web">men</span></li>
						<li><span class="filter" data-filter="icon web card">women</span></li>
						<li><span class="filter" data-filter="web app icon card">Watches</span></li>
						<li><span class="filter" data-filter="icon app web logo">Accessories</span></li>
					</ul>
			<div id="portfoliolist">
			<div class="portfolio logo1 mix_all" data-cat="logo" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">				
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic1.jpg" alt="Image 2" style="top: 0px;">
					</a>
					<div class="label" style="bottom: -40px;">
						<div class="label-text">
							<a class="text-title">ethnic fashion guide: sarees</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				
			<div class="portfolio app mix_all" data-cat="app" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">			
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic2.jpg" alt="Image 2" style="top: 0px;">
					</a>
					<div class="label" style="bottom: -40px;">
						<div class="label-text">
							<a class="text-title">fasttrack: watches</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>		
			<div class="portfolio web mix_all" data-cat="web" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">						
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic3.jpg" alt="Image 2" style="top: 0px;">
					</a>
					<div class="label" style="bottom: -40px;">
						<div class="label-text">
							<a class="text-title">ethnic fashion guide: dresses</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">			
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic4.jpg" alt="Image 2">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">ethnic fashion guide: tees</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
			<div class="portfolio app mix_all" data-cat="app" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic5.jpg" alt="Image 2">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">ethnic fashion guide: tees</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>			
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">			
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic6.jpg" alt="Image 2">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">fasttrack: watches</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
			<div class="portfolio web mix_all" data-cat="web" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">						
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic7.jpg" alt="Image 2">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Sonor's Design</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">			
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic8.jpg" alt="Image 2">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Typography Company</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
			<div class="portfolio app mix_all" data-cat="app" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic9.jpg" alt="Image 2">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Weatherette</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>			
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">			
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic10.jpg" alt="Image 2">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">BMF</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
					
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">			
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic11.jpg" alt="Image 2">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Techlion</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
			
			<div class="portfolio logo1 mix_all" data-cat="logo" style="display: inline-block;  opacity: 1;">
				<div class="portfolio-wrapper">			
					<a href="details.html">
						<img src="<?= base_url() ?>assets/new/images/sale_pic12.jpg" alt="Image 2">
					</a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">KittyPic</a>
							<span class="text-category">indulge</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																																							
		</div>
	</div><!-- container -->
	<script type="text/javascript" src="<?= base_url() ?>assets/new/js/fliplightbox.min.js"></script>
	<script type="text/javascript">$('body').flipLightBox()</script>
	<div class="clear"> </div>
	</div>
<!---End-gallery----->
    </div>
    
    
</div>
</div>		
