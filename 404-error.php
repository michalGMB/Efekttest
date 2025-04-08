<?php $title = 'Page Not Found'; $home='Home'; $subtitle='404'; ?>

<!-- Layout Top -->
<?php include './layouts/layoutTop.php'?>
<!-- Header -->
<?php include './partials/header/header-default.php'?>
<!-- Breadcrumb -->
<?php include './partials/breadcrumb.php'?>

    <!-- Error Area Start -->
    <div class="error section-padding-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-page">
                        <h1>4<span>0</span>4</h1>
                        <h2>Oops! Page not found.</h2>
                        <p>The page you are looking for is not available or doesn’t belong to this website!</p>						
                        <a class="build_button" href="index.php">Back to Home <i class="flaticon-right-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Area End -->
    <!-- Map Area End -->

<!-- Footer -->
<?php include './partials/footer/footer-one.php'?>
<!-- Layout Bottom -->
<?php include './layouts/layoutBottom.php'?>