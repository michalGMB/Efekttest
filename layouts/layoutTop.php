<!DOCTYPE html>
<html lang="en">

    <?php include './partials/head.php'?>
    
<body>
	<!-- Preloader Start -->
	<div class="theme-loader">
		<div class="spinner">
			<div class="spinner-bounce one"></div>
			<div class="spinner-bounce two"></div>
			<div class="spinner-bounce three"></div>
		</div>
	</div>
	<!-- Preloader End -->
	<!-- Cursor Start -->
	<div class="cursor">
		<div class="hide"><div id="cursor-ball"></div></div>
        <div id="cursor-text"></div>
    </div>
	<!-- Cursor End -->
	<!-- Dark Light Start -->
	<div class="switch__tab">
		<div class="switch__tab-icon">
		  <div class="switch__tab-open"><i class="fa-sharp fa-light fa-gear"></i></div>
		  <div class="switch__tab-close"><i class="fal fa-times"></i></div>
		</div>	
		<div class="switch__tab-area">	
			<div class="switch__tab-area-item">
				<h5>Mode</h5>
				<div class="switch__tab-area-item-button type-dark-mode">
					<button class="active" data-mode="light">light</button>
					<button data-mode="dark-mode">dark</button>
				</div>
			</div>
			<div class="switch__tab-area-item">
				<h5>Custom Cursor</h5>
				<div class="switch__tab-area-item-buttons" id="cursor_style">
					<button data-cursor="1" class="active">Yes</button>
					<button data-cursor="2">No</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Dark Light End -->