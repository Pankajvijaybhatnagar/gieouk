<?php $head_title= "Manchester Gita Festival 2025 – Day 2: Yoga in the Park & Workshops || GIEO Gita UK" 
?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header3.php'); ?>
<?php
$page_title = "21<sup>st</sup> June 2025 - Yoga in the park";
require_once('parts/page-title.php');
?>
<!-- Sliding Text Three Start -->
<h1 style="text-align: center; margin: 30px;">ASSOCIATION WITH</h1>
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
                        <img src="assets/images/services/yoga.jpg" alt="">
                    </div>
                    <div class="service-details__content-two" style="font-family: inherit;">
                        <h4 class="service-details__title-two mt-3" style="color: #4e151b;">
                            <i class="fas fa-star" style="color: #4e151b; margin-right: 6px;"></i> Manchester Gita
                            Festival 2025 – Day 2
                        </h4>
                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-dove" style="color: #4e151b; margin-right: 6px;"></i> Yoga in the Park & Workshops</strong><br><br>

                            <i class="fas fa-calendar-alt" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Date:</strong> Saturday 21st June 2025<br>
                            <i class="fas fa-clock" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Time:</strong> 9:00 AM – 2:30 PM<br>
                            <i class="fas fa-map-marker-alt" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Venue:</strong> Chorlton Park, Manchester M21 7HH
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            Start your weekend with <strong>movement, mindfulness, and meaning</strong> as we celebrate <strong>International Day of Yoga</strong> with a vibrant morning of <strong>communal yoga and enriching workshops</strong> at <strong>Chorlton Park</strong>.
                        </p>
                        
                        <p class="service-details__text-3" style="text-align: justify;">
                            Open to <strong>all ages and experience levels</strong>, this welcoming session brings together the local community to honour Yoga in its truest form — as a path to <strong>harmony, strength, and inner balance</strong>.
                        </p>

                        <h4 class="service-details__title-two" style="margin-top: 30px; color: #4e151b;">
                            <i class="fas fa-clock" style="color: #4e151b; margin-right: 6px;"></i> Morning Schedule
                        </h4>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-yoga" style="color: #4e151b; margin-right: 6px;"></i> 9:30 AM – 12:00 PM – Communal Yoga Session</strong><br>
                            A calming, inclusive yoga session suitable for beginners and seasoned yogis alike, guided by experienced instructors. <em>Please bring your own mat or towel and dress comfortably.</em>
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-chalkboard-teacher" style="color: #4e151b; margin-right: 6px;"></i> 12:00 PM – 2:30 PM – Yoga Workshops</strong><br>
                            Explore a diverse line-up of workshops showcasing the many dimensions and benefits of Yoga — from dynamic styles and breathwork to meditative practices and yogic wisdom for daily living. Each workshop connects with the <em>Bhagwad Gita's Four Yogic Paths</em> — <strong>Karma, Bhakti, Dhyana, and Gyan</strong> — offering something for the body, mind, and soul.
                        </p>

                        <p class="service-details__text-3" style="text-align: center; font-weight: bold;">
                            <i class="fas fa-users" style="color: #4e151b; margin-right: 6px;"></i> Family-friendly | Free to attend | No booking required<br>
                            <i class="fas fa-tint" style="color: #4e151b; margin-right: 6px;"></i> Bring water and a yoga mat | Arrive early for the best spot
                        </p>

                        <hr style="border-top: 1px solid #ccc;">

                        <h4 class="service-details__title-two" style="margin-top: 30px; color: #4e151b;">
                            <i class="fas fa-car-side" style="color: #4e151b; margin-right: 6px;"></i> Getting There: Public Transport & Parking
                        </h4>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-bus" style="color: #4e151b; margin-right: 6px;"></i> By Bus:</strong><br>
                            Chorlton Park is well connected by local bus services including routes <strong>85, 86, 168, and 276</strong>, with stops just a short walk from the park entrance.
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-subway" style="color: #4e151b; margin-right: 6px;"></i> By Tram:</strong><br>
                            The nearest Metrolink tram stops are:
                            <ul style="padding-left: 20px; text-align: justify; list-style-type: disc;">
                                <li><strong>St Werburgh's Road</strong> <em>(approx. 7–10 minutes' walk)</em></li>
                                <li><strong>Chorlton</strong> <em>(approx. 10–15 minutes' walk via Wilbraham Road)</em></li>
                                <li><strong>Barlow Moor Road</strong> <em>(approx. 7 minutes' walk via Nell Lane entrance)</em></li>
                            </ul>
                            These stops are on the <strong>Airport</strong> and <strong>East Didsbury lines</strong>, making travel from across Greater Manchester quick and convenient.
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-parking" style="color: #4e151b; margin-right: 6px;"></i> By Car:</strong><br>
                            Limited <strong>on-site parking</strong> is available via the <strong>Nell Lane entrance</strong>, with additional free parking on <strong>surrounding residential streets</strong> (please park considerately). We recommend arriving early to secure a space. We are also working to secure additional parking at nearby locations and this will be updated once confirmed.
                        </p>

                        <hr style="border-top: 1px solid #ccc;">

                        <h4 class="service-details__title-two" style="margin-top: 30px; color: #4e151b;">
                            <i class="fas fa-calendar-check" style="color: #4e151b; margin-right: 6px;"></i> Workshop Schedule
                        </h4>

                        <p class="service-details__text-3" style="text-align: center; font-weight: bold; margin-bottom: 20px;">
                            <i class="fas fa-om" style="color: #4e151b; margin-right: 6px;"></i> Communal Yoga Stage from 10am<br>
                            <i class="fas fa-chalkboard-teacher" style="color: #4e151b; margin-right: 6px;"></i> Workshops from 12pm
                        </p>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead style="background-color: #f3f3f3;">
                                    <tr>
                                        <th>Time</th>
                                        <th>Area 1</th>
                                        <th>Area 2</th>
                                        <th>Area 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>10:20 AM</strong></td>
                                        <td>Pranayama - Ujjayi - Kapalbhati - Bhramari - Nadi Shuddhi - Bhastrika</td>
                                        <td>Healthy Living and Nutrition</td>
                                        <td>Laughter Yoga</td>
                                    </tr>
                                    <tr>
                                        <td><strong>10:50 AM</strong></td>
                                        <td>Surya Namaskar</td>
                                        <td>Children's Yoga Zone under 8</td>
                                        <td>Yoga for Common health problems</td>
                                    </tr>
                                    <tr>
                                        <td><strong>11:10 AM</strong></td>
                                        <td>Hatha Yoga</td>
                                        <td>Children's Yoga Zone under 8 - 12</td>
                                        <td>Hatha Yoga</td>
                                    </tr>
                                    <tr>
                                        <td><strong>11:30 AM</strong></td>
                                        <td>Relaxation</td>
                                        <td>Teen Yoga</td>
                                        <td>Chair Yoga</td>
                                    </tr>
                                    <tr>
                                        <td><strong>11:40 AM</strong></td>
                                        <td>Meditation</td>
                                        <td>Yoga for Menopause</td>
                                        <td>Vinyasa - Strength Yoga</td>
                                    </tr>
                                    <tr>
                                        <td><strong>11:50 AM</strong></td>
                                        <td>Mantra Chanting</td>
                                        <td>Sound and Yin Yoga</td>
                                        <td>Meditation</td>
                                    </tr>
                                    <tr>
                                        <td><strong>12:00 PM+</strong></td>
                                        <td colspan="2"></td>
                                        <td>Yoga for Back Pain</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                            <i class="fas fa-praying-hands" style="color: #2c3e50; margin-right: 6px;"></i> Yogic Paths Explored Through Workshops
                        </h4>
                        <div class="row">

                            <!-- Karma Yoga -->
                            <div class="col-xl-6">
                                <div class="service-details__service-process-single">
                                    <div class="service-details__service-process-icon">
                                        <i class="fas fa-hands-helping" style="font-size: 24px; color: #2c3e50;"></i>
                                    </div>
                                    <div class="service-details__service-process-content">
                                        <h4 class="service-details__service-process-content-title"><a href="#">Karma Yoga</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Workshops on yoga for service, mindful action, and bringing practice into daily life.
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
                                        <h4 class="service-details__service-process-content-title"><a href="#">Bhakti Yoga</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Experience devotional practices through mantra, sound healing, and heart-centered movement.
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
                                        <h4 class="service-details__service-process-content-title"><a href="#">Dhyana Yoga</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Dive into meditation practices, breathwork, and mindfulness techniques for inner peace.
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
                                        <h4 class="service-details__service-process-content-title"><a href="#">Gyan Yoga</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Explore yogic philosophy, health education, and the science behind yoga's benefits.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Sliding Text Three Start -->
                            <h1 style="margin-top:30px; margin-left:540px">Partners</h1>
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
                    <?php include 'parts/festival-navigation.php'  ?>

                    <!-- Help Box -->
                    <div class="service-details__need-help">
                        <div class="service-details__need-help-icon">
                            <i class="fas fa-mail" style="font-size: 20px; color: #4e151b;"></i>
                        </div>
                        <p class="service-details__need-help-sub-title">Need Assistance?</p>
                        <h5 class="service-details__need-help-number">
                            <a href="mail:info@gieogita.org.uk">Email:- info@gieogita.org.uk</a>
                        </h5>
                        <p class="service-details__need-help-text">
                            Have questions about the Yoga in the Park event, workshops, or accessibility? Mail us – we're here to help make your experience smooth and joyful.
                        </p>
                    </div>

                    <!-- What to Bring Box -->
                    <div class="service-details__brochure-box">
                        <h5 class="service-details__brochure-box-title"><i class="fas fa-clipboard-list" style="margin-right: 6px;"></i> What to Bring</h5>
                        <ul class="list-unstyled service-details__brochure-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-spa" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5>Yoga Mat</h5>
                                    <p>Bring your own yoga mat or towel for the communal yoga session.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-tint" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5>Water Bottle</h5>
                                    <p>Stay hydrated during the practice with your own refillable water bottle.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-sun" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5>Sun Protection</h5>
                                    <p>Sunscreen, hat, and sunglasses are recommended for the outdoor session.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-tshirt" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5>Comfortable Clothing</h5>
                                    <p>Wear loose, comfortable clothing suitable for movement and meditation.</p>
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

<?php require_once('parts/home3/cta.php'); ?>

<!--Site Footer Start-->

<?php require_once('parts/footer/footer3.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>