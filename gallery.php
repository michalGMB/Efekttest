<?php $title = 'Filterable Gallery'; $home='Home'; $subtitle='Filterable Gallery'; ?>

<!-- Layout Top -->
<?php include './layouts/layoutTop.php'?>
<!-- Header -->
<?php include './partials/header/header-default.php'?>
<!-- Breadcrumb -->
<?php include './partials/breadcrumb.php'?>

    <!-- Gallery Area Start -->
    <div class="gallery__area four__columns section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-40 wow fadeInUp" data-wow-delay=".3s">
                    <div class="gallery__area-button t-center">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".corporate">Corporate</button>
                        <button data-filter=".finance">Finance</button>
                        <button data-filter=".marketing">Marketing</button>
                    </div>					  
                </div>
            </div>
            <div class="row gallery__area-active">
                <div class="col-xl-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay=".4s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.php"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/page/portfolio-3.jpg" alt="image">
						<div class="portfolio__four-item-content">
							<span>Public Spaces</span>
							<h5><a href="portfolio-details.php">Community Center</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 finance wow fadeInUp" data-wow-delay=".7s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.php"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/page/portfolio-1.jpg" alt="image">
						<div class="portfolio__four-item-content">
							<span>Healthcare</span>
							<h5><a href="portfolio-details.php">Healthcare Facility</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 corporate wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.php"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/page/portfolio-6.jpg" alt="image">
						<div class="portfolio__four-item-content">
                            <span>Hospitality</span>
                            <h5><a href="portfolio-details.php">Seaside Resort Expansion</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 marketing wow fadeInUp" data-wow-delay=".4s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.php"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/page/portfolio-2.jpg" alt="image">
						<div class="portfolio__four-item-content">
                            <span>Retail</span>
                            <h5><a href="portfolio-details.php">Urban Mall Development</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 corporate wow fadeInUp" data-wow-delay=".7s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.php"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/page/portfolio-8.jpg" alt="image">
						<div class="portfolio__four-item-content">
                            <span>Modern</span>
                            <h5><a href="portfolio-details.php">Modern Architecture</a></h5>
						</div>
					</div>
                </div>
                <div class="col-xl-4 col-md-6 mt-25 finance wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio__four-item">
						<a href="portfolio-details.php"><i class="flaticon flaticon-right-up"></i></a>
						<img src="assets/img/page/portfolio-7.jpg" alt="image">
						<div class="portfolio__four-item-content">
							<span>Industrial</span>
							<h5><a href="portfolio-details.php">Industrial Warehouse</a></h5>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->  

<!-- Footer -->
<?php include './partials/footer/footer-one.php'?>
<!-- Layout Bottom -->
<?php include './layouts/layoutBottom.php'?>