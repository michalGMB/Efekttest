<?php $title = 'Contact Us'; $home='Home'; $subtitle='Contact Us'; ?>

<!-- Layout Top -->
<?php include './layouts/layoutTop.php'?>
<!-- Header -->
<?php include './partials/header/header-default.php'?>
<!-- Breadcrumb -->
<?php include './partials/breadcrumb.php'?>

    <!-- Contact Area Start -->
    <div class="contact__area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 lg-mb-25">
                    <div class="contact__area-left mr-40 xl-mr-0">
                        <div class="title">
                            <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Contact Us</span>
                            <h2 class="title_split_anim mb-25">Get In Touch</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">We’re here to assist you! Please reach out with any questions, feedback, or project inquiries.</p>
                        </div>
                        <div class="contact__area-left-contact wow fadeInUp" data-wow-delay=".7s">
                            <div class="contact__area-left-contact-item">
                                <div class="contact__area-left-contact-item-icon">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="contact__area-left-contact-item-content">
                                    <span>Phone:</span>
                                    <h6><a href="tel:+123 (256) 568 58">+123 (256) 568 58</a></h6>
                                </div>
                            </div>
                            <div class="contact__area-left-contact-item">
                                <div class="contact__area-left-contact-item-icon">
                                    <i class="flaticon-email-3"></i>
                                </div>
                                <div class="contact__area-left-contact-item-content">
                                    <span>Email Address:</span>
                                    <h6><a href="mailto:needhelp@gmail.com">needhelp@gmail.com</a></h6>
                                </div>
                            </div>
                            <div class="contact__area-left-contact-item">
                                <div class="contact__area-left-contact-item-icon">
                                    <i class="flaticon-location-1"></i>
                                </div>
                                <div class="contact__area-left-contact-item-content">
                                    <span>Location:</span>
                                    <h6><a href="https://google.com/maps" target="_blank">2464 Royal Ln. Mesa, New Jersey 45463</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay=".4s">
                    <div class="contact__area-form">
                        <h4>Send Message</h4>
                        <form id="contact-form" action="mail.php" method="POST">
							<div class="row">
								<div class="col-md-6 mb-25">
									<div class="contact__form-area-item">
										<input type="text" name="name" placeholder="Full Name" required="required">
									</div>
								</div>
								<div class="col-md-6 md-mb-25">
									<div class="contact__form-area-item">
										<input type="email" name="email" placeholder="Email Address" required="required">
									</div>
								</div>
								<div class="col-md-12 mb-25">
									<div class="contact__form-area-item">
										<input type="text" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="col-md-12 mb-25">
									<div class="contact__form-area-item">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="contact__form-area-item">
										<button class="build_button" type="submit">Submit Message <i class="flaticon-right-up"></i></button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

    <!-- Map Area Start -->
    <div class="map section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="map-area">
                        <iframe loading="lazy" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Area End -->

<!-- Footer -->
<?php include './partials/footer/footer-one.php'?>
<!-- Layout Bottom -->
<?php include './layouts/layoutBottom.php'?>