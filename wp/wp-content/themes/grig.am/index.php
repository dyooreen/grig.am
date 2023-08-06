<!doctype html>

<html lang="hy">

<head>

	<title>Գրիգոր Ղազարյան</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Գրիգոր Ղազարյան" />
	<meta name="keywords" content="Գրիգոր Ղազարյան" />

	<link rel="shortcut icon" type="image/x-icon" href="https://grig.am/favicon.ico">




	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<!-- START MENU  -->

	<div class="sticky-nav" style='background-color: rgba(47, 49, 53, 0.5); width:100%; right:0; z-index:100; position:fixed; text-align:center'>

		<a id="mobile-nav" class="menu-nav" href="index.html#menu-nav"></a>

		<nav id="menu">

			<a href="index.php"><img src="<?php echo get_template_directory_uri() ?>/assets/img/grig.png" alt="Գրիգ" class="logo"></a>
			<?php wp_nav_menu(array('theme_location' => 'new-menu', 'menu_id' => 'topmenu')); ?>

		</nav>

	</div>

	<!-- END MENU  -->


	<script>
		$(function() {
			$('#topmenu li a').first().addClass("active")
			$('#topmenu li a').bind('click', function(event) {
				$('#topmenu li a').removeClass('active');
				$(this).toggleClass('active');
			});
		});

		$(document).ready(function() {
			$(".fancybox-button").fancybox({

				closeBtn: false,
				helpers: {
					title: {
						type: 'inside'
					},
					buttons: {}
				}
			});
		});

		$(document).ready(function() {
			var touch = $('#mobile-nav');
			var menu = $('#menu');

			$(touch).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});


		});
	</script>


	<!-- START BACKGROUND  -->

	<div id="tf_loading" class="tf_loading"></div>
	<div id="tf_bg" class="tf_bg">
		<?php
		$pages = get_pages(array(
			'sort_column' => 'menu_order'
		));

		foreach ($pages as $page) {
			$wallpaper = get_field('wallpaper', $page->ID);
			if ($wallpaper) {
		?>
				<img src="<?php echo $wallpaper ?>" alt="Image 1">
		<?php
			}
		}
		?>

		<div class="tf_pattern"></div>
	</div>

	<!-- END BACKGROUND  -->

	<!-- START PAGE 1  -->

	<div id="tf_content_wrapper" class="tf_content_wrapper">
		<div class="tf_content" id="content1" style="display:block;">
			<div class="container">
				<?php
				$id = get_id_by_slug("main");
				$post = get_page($id);
				$content = apply_filters('the_content', $post->post_content);
				?>



				<div style="text-align:center; margin-top: 220px; ">

					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" width=300px style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select: none; user-select: none;">


					<h2 style="font-size:26px;  font-weight:normal; text-align: center; color:#dec699; margin-top: 20px; margin-bottom: 10px;">Գրիգոր Ղազարյան</h2>
					<h2 style="font-size:18px;  font-weight:normal; margin-top: 10px; color:#d6dae1;">20.01.2001 - 28.09.2020</h2>

					<?php echo $content; ?>

					<br>


				</div>



			</div>
		</div>

		<!-- END  PAGE 1  -->



		<!-- START PAGE 2  -->

		<div class="tf_content" id="content2">
			<div class="container" style="max-width:900px">
				<?php
				$id = get_id_by_slug("biography");
				$post = get_page($id);
				$content = apply_filters('the_content', $post->post_content);
				$title = apply_filters('the_title', $post->post_title);
				?>

				<h2><?php echo $title ?></h2>

				<div class="mr1">


					<!-- Portfolio Projects -->

					<div id="code-box-2">


						<!-- START TAB 1  -->

						<div class="tabcontent rules2" id="n01b">
							<?php
							$id = get_id_by_slug("biography");
							$post = get_page($id);
							$content = apply_filters('the_content', $post->post_content);
							echo $content;
							?>
						</div>

						<!-- END TAB 1 -->






					</div>
				</div>
				<br>
				<br>
			</div>
		</div>

		<!-- END  PAGE 2  -->


		<!-- START PAGE 3  -->

		<div class="tf_content" id="content2">
			<div class="container" style="max-width:900px">
				<?php
				$id = get_id_by_slug("awards");
				$post = get_page($id);
				$content = apply_filters('the_content', $post->post_content);
				$title = apply_filters('the_title', $post->post_title);
				?>

				<h2><?php echo $title ?></h2>

				<div class="mr1">

					<div id="code-box-2">
						<?php echo $content ?>
					</div>
				</div>
				<br>
				<br>
			</div>
		</div>

		<!-- END  PAGE 3  -->


		<!-- START PAGE 4 -->

		<div class="tf_content" id="content3">
			<div class="container">
				<?php
				$id = get_id_by_slug("photolib");
				$post = get_page($id);
				$content = apply_filters('the_content', $post->post_content);
				$title = apply_filters('the_title', $post->post_title);
				?>
				<h2><?php echo $title ?></h2>

				<div class="mr1" style="display:table; padding:0;">
					<?php include('components/gallery/index.php') ?>
				</div>
			</div>
		</div>

		<!-- END  PAGE 4  -->




		<!-- START PAGE 5 -->

		<div class="tf_content" id="content4">
			<div class="container">
				<?php
				$id = get_id_by_slug("feedback");
				$post = get_page($id);
				$content = apply_filters('the_content', $post->post_content);
				$title = apply_filters('the_title', $post->post_title);
				?>
				<h2><?php echo $title ?></h2>

				<div class="mr1">

					<div style="width:400px; height:421px; background: #ebecee; border-radius:5px; float:left; font-size: 14px; padding: 20px;margin-right: 30px;" class="cont">

						<br>
						<p><b>Հասցե</b></p>
						<p style="text-align: left;">ՀՀ, ք.Երևան,
							<br>
						<p><b>Հեռախոս՝</b></p>
						<p>+374 </p>
						<br>
						<p><b>Էլ-փոստ</b></p>
						<p><a href="mailto:____@mail.ru">____@mail.ru</a></p>
					</div>


					<!-- START FORMA MAIL -->

					<?php the_content() ?>

					<!-- END FORMA MAIL -->

				</div>

			</div>
		</div>


		<!-- END  PAGE 5  -->



	</div>






	<!-- The JavaScript -->


	<!-- The JavaScript -->


	<script>
		/*
			the images preload plugin
			*/
		(function($) {
			$.fn.preload = function(options) {
				var opts = $.extend({}, $.fn.preload.defaults, options);
				o = $.meta ? $.extend({}, opts, this.data()) : opts;
				var c = this.length,
					l = 0;
				return this.each(function() {
					var $i = $(this);
					$('<img/>').load(function(i) {
						++l;
						if (l == c) o.onComplete();
					}).attr('src', $i.attr('src'));
				});
			};
			$.fn.preload.defaults = {
				onComplete: function() {
					return false;
				}
			};
		})(jQuery);
	</script>
	<script>
		var index1 = 0;
		$(function() {
			var $tf_bg = $('#tf_bg'),
				$tf_bg_images = $tf_bg.find('img'),
				$tf_bg_img = $tf_bg_images.eq(0),
				$tf_thumbs = $('#tf_thumbs'),
				total = $tf_bg_images.length,
				current = 0,
				$tf_content_wrapper = $('#tf_content_wrapper'),
				$tf_next = $('#tf_next'),
				$tf_prev = $('#tf_prev'),
				$tf_loading = $('#tf_loading');

			//preload the images				
			$tf_bg_images.preload({
				onComplete: function() {
					$tf_loading.hide();
					init();
				}
			});

			//shows the first image and initializes events
			function init() {
				//get dimentions for the image, based on the windows size
				var dim = getImageDim($tf_bg_img);
				//set the returned values and show the image
				$tf_bg_img.css({
					width: dim.width,
					height: dim.height,
					left: dim.left,
					top: dim.top
				}).fadeIn();

				//resizing the window resizes the $tf_bg_img
				$(window).bind('resize', function() {
					var dim = getImageDim($tf_bg_img);
					$tf_bg_img.css({
						width: dim.width,
						height: dim.height,
						left: dim.left,
						top: dim.top
					});
				});

				//expand and fit the image to the screen
				$('#tf_zoom').live('click',
					function() {
						if ($tf_bg_img.is(':animated'))
							return false;

						var $this = $(this);
						if ($this.hasClass('tf_zoom')) {
							resize($tf_bg_img);
							$this.addClass('tf_fullscreen')
								.removeClass('tf_zoom');
						} else {
							var dim = getImageDim($tf_bg_img);
							$tf_bg_img.animate({
								width: dim.width,
								height: dim.height,
								top: dim.top,
								left: dim.left
							}, 350);
							$this.addClass('tf_zoom')
								.removeClass('tf_fullscreen');
						}
					}
				);

				//click the arrow down, scrolls down
				$tf_next.bind('click', function() {
					if ($tf_bg_img.is(':animated'))
						return false;
					scroll('tb');
				});

				//click the arrow up, scrolls up
				$tf_prev.bind('click', function() {
					if ($tf_bg_img.is(':animated'))
						return false;
					scroll('bt');
				});

				//mousewheel events - down / up button trigger the scroll down / up
				$(document).mousewheel(function(e, delta) {
					if ($tf_bg_img.is(':animated'))
						return false;

					if (delta > 0)
						scroll('bt');
					else
						scroll('tb');
					return false;
				});

				//key events - down / up button trigger the scroll down / up
				$(document).keydown(function(e) {
					if ($tf_bg_img.is(':animated'))
						return false;

					switch (e.which) {
						case 38:
							scroll('bt');
							break;

						case 40:
							scroll('tb');
							break;
					}
				});
			}
			$("#topmenu li a").click(function() {
				var index = $("#topmenu a").index($(this));
				if (index != index1) {
					if (index > index1) {
						scroll("tb", index);
					} else {
						scroll("bt", index);
					}
					index1 = index;
				}
				return false;
			});
			//show next / prev image
			function scroll(dir, current1) {
				//if dir is "tb" (top -> bottom) increment current, 
				//else if "bt" decrement it
				current = (dir == 'tb') ? current + 1 : current - 1;

				//we want a circular slideshow, 
				//so we need to check the limits of current
				if (current == total) current = 0;
				else if (current < 0) current = total - 1;
				if (current1 != undefined) {
					current = current1;
				}

				//we get the next image
				var $tf_bg_img_next = $tf_bg_images.eq(current),
					//its dimentions
					dim = getImageDim($tf_bg_img_next),
					//the top should be one that makes the image out of the viewport
					//the image should be positioned up or down depending on the direction
					top = (dir == 'tb') ? $(window).height() + 'px' : -parseFloat(dim.height, 10) + 'px';

				//set the returned values and show the next image	
				$tf_bg_img_next.css({
					width: dim.width,
					height: dim.height,
					left: dim.left,
					top: top
				}).show();

				//now slide it to the viewport
				$tf_bg_img_next.stop().animate({
					top: dim.top
				}, 1000);

				//we want the old image to slide in the same direction, out of the viewport
				var slideTo = (dir == 'tb') ? -$tf_bg_img.height() + 'px' : $(window).height() + 'px';
				$tf_bg_img.stop().animate({
					top: slideTo
				}, 1000, function() {
					//hide it
					$(this).hide();
					//the $tf_bg_img is now the shown image
					$tf_bg_img = $tf_bg_img_next;
					//show the description for the new image
					$tf_content_wrapper.children()
						.eq(current)
						.show();
				});
				//hide the current description	
				$tf_content_wrapper.children(':visible')
					.hide()

			}

			//animate the image to fit in the viewport
			function resize($img) {
				var w_w = $(window).width(),
					w_h = $(window).height(),
					i_w = $img.width(),
					i_h = $img.height(),
					r_i = i_h / i_w,
					new_w, new_h;

				if (i_w > i_h) {
					new_w = w_w;
					new_h = w_w * r_i;

					if (new_h > w_h) {
						new_h = w_h;
						new_w = w_h / r_i;
					}
				} else {
					new_h = w_w * r_i;
					new_w = w_w;
				}

				$img.animate({
					width: new_w + 'px',
					height: new_h + 'px',
					top: '0px',
					left: '0px'
				}, 350);
			}

			//get dimentions of the image, 
			//in order to make it full size and centered
			function getImageDim($img) {
				var w_w = $(window).width(),
					w_h = $(window).height(),
					r_w = w_h / w_w,
					i_w = $img.width(),
					i_h = $img.height(),
					r_i = i_h / i_w,
					new_w, new_h,
					new_left, new_top;

				if (r_w > r_i) {
					new_h = w_h;
					new_w = w_h / r_i;
				} else {
					new_h = w_w * r_i;
					new_w = w_w;
				}


				return {
					width: new_w + 'px',
					height: new_h + 'px',
					left: (w_w - new_w) / 2 + 'px',
					top: (w_h - new_h) / 2 + 'px'
				};
			}
		});
	</script>




	<!-- START TAB SCRIPT -->

	<script>
		function openTab(evt, tabName, boxName) {
			var i, tabcontent, tablinks;

			var box = document.getElementById(boxName)

			tabcontent = box.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			tablinks = box.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active2", "");
			}

			document.getElementById(tabName).style.display = "block";
			evt.currentTarget.className += " active2";
		}

		document.getElementsByClassName("tablinks")[0].click();
	</script>

	<!-- END TAB SCRIPT -->



	<?php wp_footer(); ?>
</body>

</html>