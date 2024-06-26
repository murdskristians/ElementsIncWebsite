<?php
session_start();
$lang = $_SESSION['lang'] ?? 'en';

include $_SERVER['DOCUMENT_ROOT'] . '/translations/translations.php';
global $main_page_translations;

// Decode the JSON string into a PHP associative array
$translations = json_decode($main_page_translations, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elements Inc</title>
	<link rel="stylesheet"
	      href="/styles/styles.css?<?php echo microtime(); ?>">
	<meta name="viewport"
	      content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
</head>
<body>

<div class="header__languages" style="overflow-x: hidden !important;">
	<a class="header__inner-lang"
	   id="en_btn">
		<img src="/images/flag-GBR.png"
		     alt="English">
		EN
		<svg xmlns="http://www.w3.org/2000/svg"
		     viewBox="0 0 9.283 4.898">
			<path d="M4.641 4.898a.5.5 0 0 1-.343-.136L.158.864A.5.5 0 0 1 .842.136L4.64 3.712 8.44.136a.5.5 0 0 1 .686.729L4.984 4.762a.5.5 0 0 1-.343.136Z"></path>
		</svg>
	</a>
	<a class="header__inner-lang"
	   id="pl_btn">
		<img src="/images/flag-POL.png"
		     alt="Polski">
		PL
		<svg xmlns="http://www.w3.org/2000/svg"
		     viewBox="0 0 9.283 4.898">
			<path d="M4.641 4.898a.5.5 0 0 1-.343-.136L.158.864A.5.5 0 0 1 .842.136L4.64 3.712 8.44.136a.5.5 0 0 1 .686.729L4.984 4.762a.5.5 0 0 1-.343.136Z"></path>
		</svg>
	</a>
</div>

<div class="row-1-header"
     id="row-1-header" style="overflow-x: hidden !important;">
	<div class="row-1-header-text-container">
		<h1 class="rellax"
		    data-rellax-speed="1"><?php echo $translations[$lang]['header_title']; ?></h1>
		<h2 class="rellax"
		    data-rellax-speed="1"><?php echo $translations[$lang]['header_subtitle']; ?></h2>
		<h3 class="est_text">Est. 2011</h3>
	</div>
</div>

<div class="row_container_t1">
	<div class="row-2-col-1-text">
		<p id="row-2-col-1-text-1">
        <?php echo $translations[$lang]['row_2_text_1']; ?>
		</p>
		<p id="row-2-col-1-text-2">
        <?php echo $translations[$lang]['row_2_text_2']; ?>
		</p>
	</div>
	<div class="row-2-col-2-picture"
	     id="row-2-col-2-slideshow"></div>
</div>

<div class="row-3-text">
	<video autoplay
	       loop
	       muted>
		<source src="/images/row-3-background.mp4"
		        type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<h2>
      <?php echo $translations[$lang]['row_3_text']; ?>
	</h2>
</div>

<div class="row_container_t2"
     style="position:relative; background:white;">
	<div class="row-4-col-1-text"
	     style="background:white;">
		<div style="width:80%; margin:auto;">
			<h1 id="row-4-col-1-text-1">
          <?php echo $translations[$lang]['row_4_text_1']; ?>
			</h1>
			<h2 id="row-4-col-1-text-2">
				<strong><?php echo $translations[$lang]['row_4_text_2_1']; ?></strong>
          <?php echo $translations[$lang]['row_4_text_2_2']; ?>
				<strong><?php echo $translations[$lang]['row_4_text_2_3']; ?></strong>
          <?php echo $translations[$lang]['row_4_text_2_4']; ?>
			</h2>
			<p id="row-4-col-1-text-3">
          <?php echo $translations[$lang]['row_4_text_3']; ?>
			</p>
		</div>
	</div>
	<div class="row-4-col-2-picture"></div>
</div>

<div class="row_container_t2 reverse">
	<div class="row-5-col-1-picture"
	     id="row-5-col-1-slideshow"></div>
	<div class="row-5-col-2-text">
		<div class="row-5-col-2-text-background rellax"
		     data-rellax-speed="-10"></div>
		<h2>
        <?php echo $translations[$lang]['row_5_text']; ?>
		</h2>
		<p>
        <?php echo $translations[$lang]['row_5_text_2']; ?>
		</p>
	</div>
</div>

<div class="row-6-text">
	<video autoplay
	       loop
	       muted>
		<source src="/images/row-6-background.mp4"
		        type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<h2>
      <?php echo $translations[$lang]['row_6_text']; ?>
	</h2>
	<ul class="three-column-list">
		<li><?php echo $translations[$lang]['row_6_list_1']; ?></li>
		<li><?php echo $translations[$lang]['row_6_list_2']; ?></li>
		<li><?php echo $translations[$lang]['row_6_list_3']; ?></li>
	</ul>
</div>

<div class="row_container_t2 row-7">
	<div class="row-7-col-1">
		<h2 id="row-7-col-1-text"><?php echo $translations[$lang]['row_7_text']; ?></h2>
	</div>
	<div class="row-7-col-2">
		<ul id="row-7-col-2-list">
			<li><?php echo $translations[$lang]['row_7_list_1']; ?></li>
			<li><?php echo $translations[$lang]['row_7_list_2']; ?></li>
			<li><?php echo $translations[$lang]['row_7_list_3']; ?></li>
			<li><?php echo $translations[$lang]['row_7_list_4']; ?></li>
		</ul>
	</div>
</div>

<div class="row_container_t2 row-8">
	<div class="row-8-col-1-picture rellax"
	     data-rellax-speed="-10"></div>
	<div class="row-8-col-2-text">
		<h3>
        <?php echo $translations[$lang]['row_8_text']; ?>
		</h3>
		<div id="row-8-col-2-tab-container">
			<div class="row-8-col-2-tabs">
				<h5><?php echo $translations[$lang]['row_8_tab_1']; ?></h5>
				<hr class="thin-line">
				<hr class="fat-line">
				<p><?php echo $translations[$lang]['row_8_tab_1_text']; ?></p>
			</div>
			<div class="row-8-col-2-tabs">
				<h5><?php echo $translations[$lang]['row_8_tab_2']; ?></h5>
				<hr class="thin-line">
				<hr class="fat-line">
				<p><?php echo $translations[$lang]['row_8_tab_2_text']; ?></p>
			</div>
			<div class="row-8-col-2-tabs">
				<h5><?php echo $translations[$lang]['row_8_tab_3']; ?></h5>
				<hr class="thin-line">
				<hr class="fat-line">
				<p><?php echo $translations[$lang]['row_8_tab_3_text']; ?></p>
			</div>
			<div class="row-8-col-2-tabs">
				<h5><?php echo $translations[$lang]['row_8_tab_4']; ?></h5>
				<hr class="thin-line">
				<hr class="fat-line">
				<p><?php echo $translations[$lang]['row_8_tab_4_text']; ?></p>
			</div>
		</div>
	</div>
</div>


<!--<div class="row-6-text drones2">-->
<!---->
<!--</div>-->


<div class="row_container_t2 row-7 drones">
	<div class="row-7-col-1 drones"></div>

	<div class="row-5-col-2-text drones">
		<div class="row-5-col-2-text-background rellax drones"
		     data-rellax-speed="-10"></div>
		<h2>
        <?php echo $translations[$lang]['elements1_text1']; ?>
		</h2>
		<p>
        <?php echo $translations[$lang]['elements1_text2']; ?>
		</p>
	</div>
</div>


<div class="element_section2">
	<div class="element_section2_block_image"></div>
	<div class="element_section2_block_text">
		<ul class="list_items_wrap">
			<li>
          <?php echo $translations[$lang]['elements2_text1']; ?>
			</li>
			<li>
          <?php echo $translations[$lang]['elements2_text2']; ?>
			</li>
			<li>
					<?php echo $translations[$lang]['elements2_text3']; ?>
			</li>
			<li>
					<?php echo $translations[$lang]['elements2_text4']; ?>
			</li>
		</ul>
	</div>

</div>

<div class="element_section3">
	<div class="element_section3_block_text">
		<ul class="list_items_wrap">
			<li>
          <?php echo $translations[$lang]['elements2_text5']; ?>
			</li>
			<li>
          <?php echo $translations[$lang]['elements2_text6']; ?>
			</li>
		</ul>
	</div>
	<div class="element_section3_block_image"></div>
</div>

<div class="row-9-footer"
     style="padding-bottom:35px;">
	<p id="footer-text-1"><?php echo $translations[$lang]['row_9_text_1']; ?> </p>
	<a id="footer-text-2"
	   href="mailto:<?php echo $translations[$lang]['row_9_email']; ?>"><?php echo $translations[$lang]['row_9_email']; ?></a>
	<p id="footer-text-3"><?php echo $translations[$lang]['footer_text']; ?></p>
</div>


<script src="js/languageChange.js?<?php echo microtime(); ?>"></script>
<script src="js/scripts.js?<?php echo microtime(); ?>"></script>

<script src="rellax.min.js?<?php echo microtime(); ?>"></script>
<script>

    var rellax = new Rellax('.rellax', {
        speed: -5,
        center: true,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false
    });

    rellax.refresh();
</script>
</body>