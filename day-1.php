<?php $head_title="20<sup>th</sup> June 2025 ||  Day 1 || Manchester Gita Festivel 2025"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header4.php'); ?>
<?php
$page_title = "20<sup>th</sup> June 2025 - Day 1";
require_once('parts/page-title.php');
?>
        <!-- Sliding Text Three Start -->
<h1 style="text-align: center; margin-top:15px"  >ASSOCIATION WITH</h1>
<section class="sliding-text-three">
    <div class="sliding-text-three__wrap">
        <ul class="sliding-text-three__list list-unstyled marquee_mode">
            <?php
            $logoDir = 'assets/images/assosiation/'; // Folder containing partner logos
            $logoFiles = glob($logoDir . '*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);

            if (!empty($logoFiles)) {
                foreach ($logoFiles as $logo) {
                    $fileName = pathinfo($logo, PATHINFO_FILENAME); // Extract name without extension
                    echo '<li>';
                    // echo '<h2 data-hover="' . htmlspecialchars($fileName) . '" class="sliding-text-three__title">';
                    // echo htmlspecialchars($fileName);
                    echo ' <img style="height:80px" src="' . $logo . '" alt="' . htmlspecialchars($fileName) . ' Logo"></h2>';
                    echo '</li>';
                }
            } else {
                echo '<li><h2 class="sliding-text-three__title">No Partner Logos Found</h2></li>';
            }
            ?>
        </ul>
    </div>
</section>
<!-- Sliding Text Three End -->

<!--Service Details Start-->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="service-details__left">
                    <div class="service-details__img-one">
                        <img src="assets/images/services/service-details-img-1.jpg" alt="">
                    </div>
                    <div class="service-details__content-one" style="font-family: inherit;">
                        <!-- <h4 class="service-details__title-one" style="color: #4e151b;">
        <i class="fas fa-star" style="color: #4e151b; margin-right: 6px;"></i> Manchester Gita Festival 2025 – Opening Night
    </h4> -->

                        <!-- <p class="service-details__text-1" style="text-align: justify;">
        <strong><i class="fas fa-dove" style="color: #4e151b; margin-right: 6px;"></i> Yoga Through Culture & Science</strong><br><br>
        <i class="fas fa-calendar-alt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Date:</strong> Friday 20th June 2025<br>
        <i class="fas fa-clock" style="color: #4e151b; margin-right: 6px;"></i> <strong>Time:</strong> 6:00 PM – 9:00 PM<br>
        <i class="fas fa-map-marker-alt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Venue:</strong> Wythenshawe Forum, M22 5RX
    </p> -->
                        <!-- 
    <p class="service-details__text-2" style="text-align: justify;">
        Join us for the Opening Night of the Manchester Gita Festival 2025 — an inspiring evening that unites science, spirituality, and culture to explore the timeless wisdom of Yoga as revealed in the Bhagwad Gita.<br><br>
        This special ticketed event opens the International Yoga Weekend and offers a unique opportunity to experience Yoga beyond the mat — through wisdom, devotion, meditation, and selfless action.
    </p> -->

                        <!-- <ul class="list-unstyled service-details__points">
        <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
            <div class="circle" style="margin-right: 10px;"><i class="fas fa-microphone-alt" style="color: #4e151b;"></i></div>
            <div class="text" style="text-align: justify;">
                <p>Keynote talks from leading thinkers on the origins, philosophy, and scientific relevance of Yoga</p>
            </div>
        </li>
        <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
            <div class="circle" style="margin-right: 10px;"><i class="fas fa-theater-masks" style="color: #4e151b;"></i></div>
            <div class="text" style="text-align: justify;">
                <p>A stunning cultural showcase combining music, dance, and narration to depict the four Yogic paths:</p>
                <ul style="padding-left: 20px; list-style-type: disc; text-align: justify;">
                    <li>Karma Yoga – Path of Action</li>
                    <li>Bhakti Yoga – Path of Devotion</li>
                    <li>Dhyana Yoga – Path of Meditation</li>
                    <li>Gyan Yoga – Path of Knowledge</li>
                </ul>
            </div>
        </li>
        <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
            <div class="circle" style="margin-right: 10px;"><i class="fas fa-leaf" style="color: #4e151b;"></i></div>
            <div class="text" style="text-align: justify;">
                <p>Reflections on how the teachings of the Gita align with well-being, purpose, and global harmony</p>
            </div>
        </li>
        <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
            <div class="circle" style="margin-right: 10px;"><i class="fas fa-landmark" style="color: #4e151b;"></i></div>
            <div class="text" style="text-align: justify;">
                <p>INSIGHT UK Darshana "Hindu Civilisation" Exhibition highlighting profound contributions of Hindu culture</p>
            </div>
        </li>
        <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
            <div class="circle" style="margin-right: 10px;"><i class="fas fa-utensils" style="color: #4e151b;"></i></div>
            <div class="text" style="text-align: justify;">
                <p>Complimentary food served after the programme — relax, connect, and enjoy a nourishing meal</p>
            </div>
        </li>
        <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
            <div class="circle" style="margin-right: 10px;"><i class="fas fa-user-tie" style="color: #4e151b;"></i></div>
            <div class="text" style="text-align: justify;">
                <p>Dress Code: Smart or Cultural Attire Encouraged</p>
            </div>
        </li>
        <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
            <div class="circle" style="margin-right: 10px;"><i class="fas fa-ticket-alt" style="color: #4e151b;"></i></div>
            <div class="text" style="text-align: justify;">
                <p>Limited seats available – early booking strongly recommended</p>
            </div>
        </li>
        <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
            <div class="circle" style="margin-right: 10px;"><i class="fas fa-lightbulb" style="color: #4e151b;"></i></div>
            <div class="text" style="text-align: justify;">
                <p>An evening of insight, inspiration, and cultural richness — not to be missed</p>
            </div>
        </li>
    </ul> -->
    
                    </div>

                    <div class="service-details__content-two" style="font-family: inherit;">
                        <h4 class="service-details__title-two" style="color: #4e151b;">
                            <i class="fas fa-star" style="color: #4e151b; margin-right: 6px;"></i> Manchester Gita
                            Festival 2025 – Opening Night
                        </h4>
                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-dove" style="color: #4e151b; margin-right: 6px;"></i> Yoga Through
                                Culture & Science</strong><br><br>

                            <i class="fas fa-calendar-alt" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Date:</strong> Friday 20th June 2025<br>
                            <i class="fas fa-clock" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Time:</strong> 6:00 PM – 9:00 PM<br>
                            <i class="fas fa-map-marker-alt" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Venue:</strong> Wythenshawe Forum, M22 5RX
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            Join us for the Opening Night of the Manchester Gita Festival 2025 — an inspiring evening
                            that unites science, spirituality, and culture to explore the timeless wisdom of Yoga as
                            revealed in the Bhagwad Gita.<br><br>
                            This special ticketed event opens the International Yoga Weekend and offers a unique
                            opportunity to experience Yoga beyond the mat — through wisdom, devotion, meditation, and
                            selfless action.
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-bullhorn" style="color: #4e151b; margin-right: 6px;"></i> Evening
                                Highlights:</strong><br>
                        <ul style="padding-left: 20px; text-align: justify; list-style-type: disc;">
                            <li>Keynote talks from leading thinkers on the origins, philosophy, and scientific relevance
                                of Yoga</li>
                            <li>A stunning cultural showcase combining music, dance, and narration to depict the four
                                Yogic paths:</li>
                            <ul style="list-style-type: circle; padding-left: 20px;">
                                <li>Karma Yoga (Path of Action)</li>
                                <li>Bhakti Yoga (Path of Devotion)</li>
                                <li>Dhyana Yoga (Path of Meditation)</li>
                                <li>Gyan Yoga (Path of Knowledge)</li>
                            </ul>
                            <li>Reflections on how the ancient teachings of the Gita align with modern well-being,
                                clarity of purpose, and global harmony</li>
                            <li>A special display of the INSIGHT UK Darshana "Hindu Civilisation" Exhibition,
                                highlighting the profound contributions of Hindu culture to the world</li>
                        </ul>
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <i class="fas fa-utensils" style="color: #4e151b; margin-right: 6px;"></i> Complimentary
                            food will be served after the programme — a chance to relax, connect, and continue the
                            conversation over a nourishing meal.<br>
                            <i class="fas fa-user-tie" style="color: #4e151b; margin-right: 6px;"></i> Dress Code: Smart
                            or Cultural Attire Encouraged<br>
                            <i class="fas fa-ticket-alt" style="color: #4e151b; margin-right: 6px;"></i> Limited seats
                            available – early booking strongly recommended
                        </p>

                        <hr style="border-top: 1px solid #ccc;">

                        <h4 class="service-details__title-two" style="margin-top: 30px; color: #4e151b;">
                            <i class="fas fa-car-side" style="color: #4e151b; margin-right: 6px;"></i> Getting There:
                            Parking & Public Transport
                        </h4>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-parking" style="color: #4e151b; margin-right: 6px;"></i>
                                Parking:</strong><br>
                            Wythenshawe Forum has ample free parking on-site, including accessible parking bays near the
                            main entrance. Arrive early to secure the most convenient spaces.
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-subway" style="color: #4e151b; margin-right: 6px;"></i> By
                                Tram:</strong><br>
                            Take the Metrolink to Wythenshawe Town Centre. The Forum is just a 2-minute walk from the
                            tram stop, making it an easy and eco-friendly option.
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-bus" style="color: #4e151b; margin-right: 6px;"></i> By
                                Bus:</strong><br>
                            Wythenshawe Forum is well served by buses including routes 11, 18, 19, 103, 368, 378, and
                            419. Get off at Wythenshawe Bus Station, which is right next to the venue.
                        </p>

                        <hr style="border-top: 1px solid #ccc;">

                        <p class="service-details__text-3" style="text-align: justify;">
                            <i class="fas fa-lightbulb" style="color: #4e151b; margin-right: 6px;"></i> An evening of
                            insight, inspiration, and cultural richness — not to be missed.
                        </p>
                    </div>

                    <div class="service-details__img-boxes">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="service-details__img-boxes-single">
                                    <img src="assets/images/services/service-details-img-boxes-1-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="service-details__img-boxes-single">
                                    <img src="assets/images/services/service-details-img-boxes-1-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-details__service-process">
                        <h4 class="service-details__service-process-title">
                            <i class="fas fa-praying-hands" style="color: #2c3e50; margin-right: 6px;"></i> Evening
                            Highlights – Yogic Paths
                        </h4>
                        <div class="row">

                            <!-- Karma Yoga -->
                            <div class="col-xl-6">
                                <div class="service-details__service-process-single">
                                    <div class="service-details__service-process-icon">
                                        <i class="fas fa-hands-helping" style="font-size: 24px; color: #2c3e50;"></i>
                                    </div>
                                    <div class="service-details__service-process-content">
                                        <h4 class="service-details__service-process-content-title"><a href="#">Karma
                                                Yoga</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Discover the path of selfless action – living with purpose through serving
                                            others.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Bhakti Yoga -->
                            <div class="col-xl-6">
                                <div class="service-details__service-process-single">
                                    <div class="service-details__service-process-icon">
                                        <i class="fas fa-heart" style="font-size: 24px; color: #2c3e50;"></i>
                                    </div>
                                    <div class="service-details__service-process-content">
                                        <h4 class="service-details__service-process-content-title"><a href="#">Bhakti
                                                Yoga</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Experience the beauty of devotion through heartfelt music, dance, and
                                            prayer.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Dhyana Yoga -->
                            <div class="col-xl-6">
                                <div class="service-details__service-process-single">
                                    <div class="service-details__service-process-icon">
                                        <i class="fas fa-spa" style="font-size: 24px; color: #2c3e50;"></i>
                                    </div>
                                    <div class="service-details__service-process-content">
                                        <h4 class="service-details__service-process-content-title"><a href="#">Dhyana
                                                Yoga</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Embrace inner stillness and mindfulness through guided meditative sessions.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Gyan Yoga -->
                            <div class="col-xl-6">
                                <div class="service-details__service-process-single">
                                    <div class="service-details__service-process-icon">
                                        <i class="fas fa-book-reader" style="font-size: 24px; color: #2c3e50;"></i>
                                    </div>
                                    <div class="service-details__service-process-content">
                                        <h4 class="service-details__service-process-content-title"><a href="#">Gyan
                                                Yoga</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Pursue the path of knowledge and wisdom through inquiry, discussion, and
                                            study.
                                        </p>
                                    </div>
                                </div>
                            </div>
<!-- Sliding Text Three Start -->
 <h1 style=" margin-top:30px; margin-left:540px"  >Partners</h1>
<section class="sliding-text-three">
    <div class="sliding-text-three__wrap">
        <ul class="sliding-text-three__list list-unstyled marquee_mode-two">
            <?php
            $logoDir = 'assets/images/partners/'; // Folder containing partner logos
            $logoFiles = glob($logoDir . '*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);

            if (!empty($logoFiles)) {
                foreach ($logoFiles as $logo) {
                    $fileName = pathinfo($logo, PATHINFO_FILENAME); // Extract name without extension
                    echo '<li>';
                    // echo '<h2 data-hover="' . htmlspecialchars($fileName) . '" class="sliding-text-three__title">';
                    // echo htmlspecialchars($fileName);
                    echo ' <img style="height:80px" src="' . $logo . '" alt="' . htmlspecialchars($fileName) . ' Logo"></h2>';
                    echo '</li>';
                }
            } else {
                echo '<li><h2 class="sliding-text-three__title">No Partner Logos Found</h2></li>';
            }
            ?>
        </ul>
    </div>
</section>
<!-- Sliding Text Three End -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="service-details__sidebar">

                    <!-- Festival Navigation Links -->
                    <div class="service-details__service-list-box">
                        <h4 class="service-details__sidebar-title"><i class="fas fa-list-ul"
                                style="margin-right: 6px;"></i> Explore Festival Events</h4>
                        <ul class="service-details__service-list list-unstyled">
                            <li><a href="#">Opening Night<span class="fas fa-arrow-right"></span></a></li>
                            <li><a href="#">Workshops & Seminars<span class="fas fa-arrow-right"></span></a></li>
                            <li><a href="#">Cultural Performances<span class="fas fa-arrow-right"></span></a></li>
                            <li class="active"><a href="#">Darshana Exhibition<span
                                        class="fas fa-arrow-right"></span></a></li>
                            <li><a href="#">Youth & Family Sessions<span class="fas fa-arrow-right"></span></a></li>
                            <li><a href="#">Volunteer Opportunities<span class="fas fa-arrow-right"></span></a></li>
                        </ul>
                    </div>

                    <!-- Help Box -->
                    <div class="service-details__need-help">
                        <div class="service-details__need-help-icon">
                            <i class="fas fa-phone-alt" style="font-size: 20px; color: #4e151b;"></i>
                        </div>
                        <p class="service-details__need-help-sub-title">Need Help?</p>
                        <h5 class="service-details__need-help-number">
                            <a href="tel:+448085550111">+44 808 555 0111</a>
                        </h5>
                        <p class="service-details__need-help-text">
                            Have questions about the Gita Festival or ticket bookings? Our dedicated team is happy to
                            assist with all your queries.
                        </p>
                    </div>

                    <!-- Brochure Downloads -->
                    <div class="service-details__brochure-box">
                        <h5 class="service-details__brochure-box-title"><i class="fas fa-file-alt"
                                style="margin-right: 6px;"></i> Festival Brochures</h5>
                        <ul class="list-unstyled service-details__brochure-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-file-pdf" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="#">Download Festival Brochure (PDF)</a></h5>
                                    <p>Includes schedule, speakers, events, and venue details for the Manchester Gita
                                        Festival 2025.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-building" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="#">About Insight UK</a></h5>
                                    <p>Learn more about the association, their mission, and the broader Gieo Gita UK initiative</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--Service Details End-->

<!--CTA Two Start-->
<section class="cta-two">
    <div class="cta-two__img-1" style="background-image: url(assets/images/resources/cta-two-img-1.jpg);"></div>
    <div class="cta-two__shape-1 float-bob-x">
        <img src="assets/images/shapes/cta-two-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-4"></div>
            <div class="col-xl-6 col-lg-8">
                <div class="cta-two__right">
                    <h3 class="cta-two__title">Subscribe to our newsletter</h3>
                    <p class="cta-two__text">It is a long established fact that a reader will be distracted by
                        the readable<br> content of a page when looking at its layout.</p>
                    <form class="cta-two__contact-form">
                        <div class="cta-two__contact-input-box">
                            <input type="email" placeholder="Enter Your Email" name="email">
                            <button type="submit" class="cta-two__contact-btn thm-btn">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA Two End-->

<!--Site Footer Start-->
<footer class="site-footer site-footer-four">
    <div class="site-footer__shape-1">
        <img src="assets/images/shapes/site-footer-shape-1.png" alt="">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="index.php"><img src="assets/images/resources/footer-logo-1.png" alt=""></a>
                            </div>
                            <ul class="footer-widget__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-envolop"></span>
                                    </div>
                                    <a href="mailto:info@gieogita.org.uk">info@gieogita.org.uk</a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <p>3891 Ranchview Dr. Richardson,<br> California 62639</p>
                                </li>
                            </ul>
                            <div class="footer-widget__social">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-linkin"></span></a>
                                <a href="#"><span class="icon-pinterest"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__services">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Services</h3>
                            </div>
                            <ul class="footer-widget__services-list list-unstyled">
                                <li>
                                    <a href="elite-roof-installations.php"><span class="icon-arrow-left"></span>Roof
                                        inspection</a>
                                </li>
                                <li>
                                    <a href="sky-shield-roofing.php"><span class="icon-arrow-left"></span>Moss
                                        removal</a>
                                </li>
                                <li>
                                    <a href="horizon-guard-roofing.php"><span class="icon-arrow-left"></span>Attic
                                        ventilation</a>
                                </li>
                                <li>
                                    <a href="sky-shield-roofing.php"><span class="icon-arrow-left"></span>Roof
                                        cleaning</a>
                                </li>
                                <li>
                                    <a href="elite-roof-installations.php"><span class="icon-arrow-left"></span>Eaves
                                        cleaning</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__useful-link">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Useful Links</h3>
                            </div>
                            <ul class="footer-widget__services-list list-unstyled">
                                <li>
                                    <a href="about.php"><span class="icon-arrow-left"></span>About Us</a>
                                </li>
                                <li>
                                    <a href="team.php"><span class="icon-arrow-left"></span>Our Team</a>
                                </li>
                                <li>
                                    <a href="blog.php"><span class="icon-arrow-left"></span>Recent News </a>
                                </li>
                                <li>
                                    <a href="projects.php"><span class="icon-arrow-left"></span>Projects</a>
                                </li>
                                <li>
                                    <a href="services.php"><span class="icon-arrow-left"></span>Our All
                                        Services
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__contact">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Newsletter</h3>
                            </div>
                            <p class="footer-widget__about-text">Lorem ipsum dolor amet, consectetur<br> sell
                                adipis
                                elit phase nibh ellentes</p>
                            <form class="footer-widget__contact-form">
                                <div class="footer-widget__contact-input-box">
                                    <input type="email" placeholder="Your e-mail" name="email">
                                    <button type="submit" class="footer-widget__contact-btn"><i
                                            class="icon-paper-plan"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="site-footer__bottom-inner">
                <p class="site-footer__bottom-text">© Starplate 2025 | All Rights Reserved</p>
                <ul class="list-unstyled site-footer__bottom-menu">
                    <li><a href="about.php">Trams & Condition</a></li>
                    <li><a href="about.php">Privacy Policy</a></li>
                    <li><a href="about.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php require_once('parts/footer/footer4.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>