<?php $head_title= "Manchester Gita Festival 2025 – Shobha Yatra: Procession for Peace, Love & Harmony || GIEO Gita UK" 
?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header3.php'); ?>
<?php
$page_title = "21<sup>st</sup> June 2025 - Shobha Yatra";
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
                    <div class="service-details__img-one ">
                        <img src="assets/images/services/service-details-img-2.jpg" alt="GIEO Gita Uk Shobha yatra Manchaster gita festival 2025">
                    </div>
                    <div class="service-details__content-two" style="font-family: inherit;">
                        <h4 class="service-details__title-two mt-3" style="color: #4e151b; margin-top:20px">
                            <i class="fas fa-star" style="color: #4e151b; margin-right: 6px;"></i> Manchester Gita
                            Festival 2025 – Shobha Yatra 
                        </h4>
                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-dove" style="color: #4e151b; margin-right: 6px;"></i> Procession for Peace, Love & Harmony</strong><br><br>

                            <i class="fas fa-calendar-alt" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Date:</strong> Saturday 21st June 2025<br>
                            <i class="fas fa-clock" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Time:</strong> 3:00 PM – 4:00 PM (approx.)<br>
                            <i class="fas fa-map-marker-alt" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Route:</strong> From Chorlton Park to Gita Bhavan Hindu Temple, M16 8HX
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            Join us for the spiritually uplifting <strong>Shobha Yatra</strong> — a <strong>procession for peace, love, and harmony</strong>, bringing together hearts, families, and communities in joyful celebration.
                        </p>
                        
                        <p class="service-details__text-3" style="text-align: justify;">
                            This sacred walk symbolises the journey from <strong>personal yogic practice</strong> to <strong>collective devotion</strong>, echoing the timeless wisdom of the <strong>Bhagwad Gita</strong> — that unity, service, and love are the true expressions of spirituality.
                        </p>

                        <h4 class="service-details__title-two" style="margin-top: 30px; color: #4e151b;">
                            <i class="fas fa-route" style="color: #4e151b; margin-right: 6px;"></i> A Journey with Purpose
                        </h4>

                        <p class="service-details__text-3" style="text-align: justify;">
                            The route takes us from the calm of <strong>Chorlton Park</strong>, along <strong>St Werburgh's Road</strong> and <strong>Wilbraham Road</strong>, to the vibrant spiritual home of <strong>Gita Bhavan Hindu Temple</strong>. A <strong>gentle incline</strong> along the way adds to the symbolism of spiritual effort and elevation.
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            Join in with <strong>music, mantra chanting, dancing, and flags</strong> as we walk together in joy and harmony.
                        </p>

                        <h4 class="service-details__title-two" style="margin-top: 30px; color: #4e151b;">
                            <i class="fas fa-info-circle" style="color: #4e151b; margin-right: 6px;"></i> Procession Details
                        </h4>

                        <ul style="padding-left: 20px; text-align: justify; list-style-type: none;">
                            <li><i class="fas fa-map-marker-alt" style="color: #4e151b; margin-right: 10px;"></i> <strong>Start Point:</strong> Chorlton Park (assemble near the Pavilion from 2:30 PM)</li>
                            <li><i class="fas fa-clock" style="color: #4e151b; margin-right: 10px;"></i> <strong>Departure Time:</strong> <strong>3:00 PM sharp</strong></li>
                            <li><i class="fas fa-road" style="color: #4e151b; margin-right: 10px;"></i> <strong>Route:</strong> St Werburgh's Road → Wilbraham Road → Withington Road</li>
                            <li><i class="fas fa-flag-checkered" style="color: #4e151b; margin-right: 10px;"></i> <strong>End Point:</strong> Gita Bhavan Hindu Temple, 231 Withington Road, Manchester M16 8HX</li>
                            <li><i class="fas fa-hourglass-half" style="color: #4e151b; margin-right: 10px;"></i> <strong>Estimated Duration:</strong> 3:00 PM – 4:00 PM</li>
                            <li><i class="fas fa-walking" style="color: #4e151b; margin-right: 10px;"></i> <strong>Distance:</strong> Approx. <strong>1.5 km</strong> <em>(just under 1 mile)</em></li>
                            <li><i class="fas fa-users" style="color: #4e151b; margin-right: 10px;"></i> <strong>Open to all</strong> – families, elders, children, and community groups warmly welcome</li>
                            <li><i class="fas fa-drum" style="color: #4e151b; margin-right: 10px;"></i> <strong>Bring flags, instruments, and your joyous spirit!</strong></li>
                        </ul>

                        <div class="service-details__img-boxes" style="margin-top: 30px;">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="service-details__img-boxes-single">
                                        <!-- Map placeholder - replace with actual map image -->
                                        <img src="assets/images/services/shobha-yatra-route-map.jpg" alt="Shobha Yatra Route Map">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="service-details__title-two" style="margin-top: 30px; color: #4e151b;">
                            <i class="fas fa-bus" style="color: #4e151b; margin-right: 6px;"></i> Return Travel Support
                        </h4>

                        <p class="service-details__text-3" style="text-align: justify;">
                            We are working to provide a <strong>shuttlebus service</strong> for drivers to return to <strong>Chorlton Park</strong> and collect their vehicles after the procession. Final details will be confirmed here soon.
                        </p>

                        <div class="service-details__text-3" style="text-align: center; margin-top: 30px; background-color: #f9f5eb; padding: 20px; border-radius: 10px;">
                            <p style="font-weight: bold; margin-bottom: 10px;">
                                <i class="fas fa-shoe-prints" style="color: #4e151b; margin-right: 6px;"></i> <strong>Wear comfortable shoes and weather-appropriate clothing</strong>
                            </p>
                            <p style="font-weight: bold; margin-bottom: 10px;">
                                <i class="fas fa-tint" style="color: #4e151b; margin-right: 6px;"></i> <strong>Bring water and sun/rain protection</strong>
                            </p>
                            <p style="font-weight: bold;">
                                <i class="fas fa-heart" style="color: #4e151b; margin-right: 6px;"></i> <strong>Let's walk together in peace, love, and unity</strong>
                            </p>
                        </div>
                    </div>

                    <div class="service-details__service-process">
                        <h4 class="service-details__service-process-title">
                            <i class="fas fa-om" style="color: #2c3e50; margin-right: 6px;"></i> The Significance of Shobha Yatra
                        </h4>
                        <div class="row">

                            <!-- Cultural Celebration -->
                            <div class="col-xl-6">
                                <div class="service-details__service-process-single">
                                    <div class="service-details__service-process-icon">
                                        <i class="fas fa-music" style="font-size: 24px; color: #2c3e50;"></i>
                                    </div>
                                    <div class="service-details__service-process-content">
                                        <h4 class="service-details__service-process-content-title"><a href="#">Cultural Celebration</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            A vibrant showcase of traditions through music, chanting, and colorful procession.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Community Unity -->
                            <div class="col-xl-6">
                                <div class="service-details__service-process-single">
                                    <div class="service-details__service-process-icon">
                                        <i class="fas fa-hands-helping" style="font-size: 24px; color: #2c3e50;"></i>
                                    </div>
                                    <div class="service-details__service-process-content">
                                        <h4 class="service-details__service-process-content-title"><a href="#">Community Unity</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Bringing together diverse groups in a shared expression of harmony and togetherness.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Spiritual Journey -->
                            <div class="col-xl-6">
                                <div class="service-details__service-process-single">
                                    <div class="service-details__service-process-icon">
                                        <i class="fas fa-peace" style="font-size: 24px; color: #2c3e50;"></i>
                                    </div>
                                    <div class="service-details__service-process-content">
                                        <h4 class="service-details__service-process-content-title"><a href="#">Spiritual Journey</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            A physical path that mirrors our inner journey toward consciousness and peace.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Yogic Connection -->
                            <div class="col-xl-6">
                                <div class="service-details__service-process-single">
                                    <div class="service-details__service-process-icon">
                                        <i class="fas fa-om" style="font-size: 24px; color: #2c3e50;"></i>
                                    </div>
                                    <div class="service-details__service-process-content">
                                        <h4 class="service-details__service-process-content-title"><a href="#">Yogic Connection</a></h4>
                                        <p class="service-details__service-process-content-text">
                                            Embodying the Gita's teachings of devotion, action, and collective harmony.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Sliding Text Three Start -->
                            <h1 style="margin:30px; margin-left:540px">Partners</h1>
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
                            Have questions about routes, accessibility, or group registration for the Shobha Yatra? Mail us – we're here to help make your experience smooth and joyful.
                        </p>
                    </div>

                    <!-- What to Bring Box -->
                    <div class="service-details__brochure-box">
                        <h5 class="service-details__brochure-box-title"><i class="fas fa-clipboard-list" style="margin-right: 6px;"></i> What to Bring</h5>
                        <ul class="list-unstyled service-details__brochure-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-tint" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5>Water Bottle</h5>
                                    <p>Stay hydrated during the procession with your own refillable water bottle.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-sun" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5>Sun Protection</h5>
                                    <p>Sunscreen, hat, and sunglasses are recommended for sun protection.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-umbrella" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5>Rain Protection</h5>
                                    <p>A lightweight raincoat or small umbrella in case of unexpected showers.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-shoe-prints" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5>Comfortable Footwear</h5>
                                    <p>Wear comfortable walking shoes suitable for the 1.5km procession route.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-flag" style="color: #4e151b;"></i>
                                </div>
                                <div class="content">
                                    <h5>Flags & Instruments</h5>
                                    <p>Bring colorful flags, small instruments or bells to add to the festive atmosphere.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Temple Information -->
                    <div class="service-details__brochure-box">
                        <h5 class="service-details__brochure-box-title"><i class="fas fa-place-of-worship" style="margin-right: 6px;"></i> About Gita Bhavan Hindu Temple</h5>
                        <p style="padding: 0 15px;">Gita Bhavan Hindu Temple is a vibrant spiritual center serving Manchester's Hindu community since 1987. The temple offers a serene environment for worship, learning, and cultural celebrations.</p>
                        <p style="padding: 0 15px;">Address: 231 Withington Road, Manchester M16 8HX</p>
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