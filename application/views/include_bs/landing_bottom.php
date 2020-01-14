	<!-- start footer -->
	<div class="footer_bg">
		<div class="wrap">
			<div class="footer">
				<!-- start grids_of_4 -->
				<div class="grids_of_4">
					<div class="grid1_of_4">
						<h4>featured sale</h4>
						<ul class="f_nav">
							<li><a href="#">alexis Hudson</a></li>
							<li><a href="#">american apparel</a></li>
							<li><a href="#">ben sherman</a></li>
							<li><a href="#">big buddha</a></li>
							<li><a href="#">channel</a></li>
							<li><a href="#">christian audigier</a></li>
							<li><a href="#">coach</a></li>
							<li><a href="#">cole haan</a></li>
						</ul>
					</div>
					<div class="grid1_of_4">
						<h4>mens store</h4>
						<ul class="f_nav">
							<li><a href="#">alexis Hudson</a></li>
							<li><a href="#">american apparel</a></li>
							<li><a href="#">ben sherman</a></li>
							<li><a href="#">big buddha</a></li>
							<li><a href="#">channel</a></li>
							<li><a href="#">christian audigier</a></li>
							<li><a href="#">coach</a></li>
							<li><a href="#">cole haan</a></li>
						</ul>
					</div>
					<div class="grid1_of_4">
						<h4>women store</h4>
						<ul class="f_nav">
							<li><a href="#">alexis Hudson</a></li>
							<li><a href="#">american apparel</a></li>
							<li><a href="#">ben sherman</a></li>
							<li><a href="#">big buddha</a></li>
							<li><a href="#">channel</a></li>
							<li><a href="#">christian audigier</a></li>
							<li><a href="#">coach</a></li>
							<li><a href="#">cole haan</a></li>
						</ul>
					</div>
					<div class="grid1_of_4">
						<h4>quick links</h4>
						<ul class="f_nav">
							<li><a href="#">alexis Hudson</a></li>
							<li><a href="#">american apparel</a></li>
							<li><a href="#">ben sherman</a></li>
							<li><a href="#">big buddha</a></li>
							<li><a href="#">channel</a></li>
							<li><a href="#">christian audigier</a></li>
							<li><a href="#">coach</a></li>
							<li><a href="#">cole haan</a></li>
						</ul>
					</div>
					<div class="clear"></div>

				</div>
			</div>
			<a href="#" id="toTop" style="display: block;"><span id="toTopHover"></span><span id="toTopHover" style="opacity: 1;"></span></a>
		</div>



	</div>


		<script src="<?= base_url() ?>assets/new/js/responsive.menu.js"></script>

		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/cloud-zoom.1.0.3.min.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/jquery.fancybox-buttons.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/jquery.fancybox-thumbs.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/productviewgallery.js"></script>




		<!-- carousel start slider -->
		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#da-slider').cslider();
			});
		</script>
		<!-- Owl Carousel Assets -->

		<!-- Owl Carousel Assets -->
		<!-- Prettify -->
		<script src="<?= base_url() ?>assets/new/js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items: 3,
					lazyLoad: true,
					autoPlay: true,
					navigation: true,
					navigationText: ["", ""],
					rewindNav: false,
					scrollPerPage: false,
					pagination: false,
					paginationNumbers: false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
		<!-- start top_js_button -->
		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/move-top.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assets/new/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1200);
				});
			});
		</script>

		<script type="text/javascript" src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
		<script type="text/javascript">
			$(".remove").click(function() {
				//var id = $(this).parents("tr").attr("id");

				swal({
						title: "Are you sure?",
						text: "you want to log out?",
						type: "warning",
						showCancelButton: true,
						confirmButtonClass: "btn-danger",
						confirmButtonText: "Yes",
						cancelButtonText: "No, cancel ",
						closeOnConfirm: false,
						closeOnCancel: false
					},
					function(isConfirm) {
						// $(document).ready(function(){
						// 	$('.rlate_id').click(function(){
						// 		$late_id = $(this).attr('name');
						// 		$('.remove_id').click(function(){
						// 			window.location = 'delete_c101.php?late_id=' + $late_id;
						// 		});
						// 	});
						// });
						if (isConfirm) {
							swal("Action", "Successfully Log Out", "success");
							// window.location = "<?= base_url() ?>user/editProfile/" + id;
							window.location = "<?= base_url() ?>home/logout";
							// $.ajax({
							//     url: '/item-list/' + id,
							//     type: 'DELETE',
							//     error: function() {
							//         alert('Something is wrong' + id);
							//     },
							//     success: function(data) {
							//         $("#" + id).remove();
							//         swal("Deleted!", "Your product has been deleted.", "success");
							//     }
							// });
						} else {
							swal("Cancelled", "", "error");
						}
					});

			});


			$(".editConfirm").click(function() {
				// var id = $(this).parents("tr").attr("id");

				swal({
						title: "Are you sure?",
						text: "you want to continue?",
						type: "warning",
						showCancelButton: true,
						confirmButtonClass: "btn-danger",
						confirmButtonText: "Yes",
						cancelButtonText: "No, cancel ",
						closeOnConfirm: false,
						closeOnCancel: false
					},
					function(isConfirm) {
						// $(document).ready(function(){
						// 	$('.rlate_id').click(function(){
						// 		$late_id = $(this).attr('name');
						// 		$('.remove_id').click(function(){
						// 			window.location = 'delete_c101.php?late_id=' + $late_id;
						// 		});
						// 	});
						// });
						if (isConfirm) {
							swal("Action", "Successfully Log Out", "success");
							window.location = "<?= base_url() ?>user/viewEditProfile/" + id;
				
							// $.ajax({
							//     url: '/item-list/' + id,
							//     type: 'DELETE',
							//     error: function() {
							//         alert('Something is wrong' + id);
							//     },
							//     success: function(data) {
							//         $("#" + id).remove();
							//         swal("Deleted!", "Your product has been deleted.", "success");
							//     }
							// });
						} else {
							swal("Cancelled", "", "error");
						}
					});

			});
		</script>


		<script type="text/javascript">
			$(document).ready(function() {

				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
				};


				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>







		</body>

		</html>