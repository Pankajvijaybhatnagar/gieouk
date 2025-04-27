<?php $head_title="Manchester Gita Festival 2025 – Day 2: Shobha Yatra & Bhakti Yoga Evening || GIEO Gita UK "
?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header3.php'); ?>
<?php
$page_title = "Manchester Gita Festival 2025";
require_once('parts/page-title.php');
?>
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

        <!--Service Details Start-->
        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__left">
                            <div class="service-details__img-one">
                                <img src="assets/images/services/service-details-img-2.jpg" alt="">
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
        <i class="fas fa-flag" style="color: #4e151b; margin-right: 6px;"></i> Manchester Gita Festival 2025 – Shobha Yatra
    </h4>
    <p class="service-details__text-3" style="text-align: justify;">
        <strong><i class="fas fa-hand-holding-heart" style="color: #4e151b; margin-right: 6px;"></i> Procession for Peace, Love & Harmony</strong><br><br>
        <i class="fas fa-calendar-alt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Date:</strong> Saturday 21st June 2025<br>
        <i class="fas fa-clock" style="color: #4e151b; margin-right: 6px;"></i> <strong>Time:</strong> 3:00 PM – 4:00 PM (approx.)<br>
        <i class="fas fa-map-marker-alt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Route:</strong> From Chorlton Park to Gita Bhavan Hindu Temple, M16 8HX
    </p>

    <p class="service-details__text-3" style="text-align: justify;">
        Join us for the spiritually uplifting Shobha Yatra — a procession for peace, love, and harmony, bringing together hearts, families, and communities in joyful celebration.
        <br><br>
        This sacred walk symbolises the journey from personal yogic practice to collective devotion, echoing the timeless wisdom of the Bhagwad Gita — that unity, service, and love are the true expressions of spirituality.
    </p>

    <hr style="border-top: 1px solid #ccc;">

    <h4 class="service-details__title-two" style="color: #4e151b;">
        <i class="fas fa-dove" style="color: #4e151b; margin-right: 6px;"></i> A Journey with Purpose
    </h4>
    <p class="service-details__text-3" style="text-align: justify;">
        The route takes us from the calm of Chorlton Park, along St Werburgh’s Road and Wilbraham Road, to the vibrant spiritual home of Gita Bhavan Hindu Temple.
        A gentle incline along the way adds to the symbolism of spiritual effort and elevation.<br><br>
        Join in with music, mantra chanting, dancing, and flags as we walk together in joy and harmony.
    </p>

    <hr style="border-top: 1px solid #ccc;">

    <h4 class="service-details__title-two" style="color: #4e151b;">
        <i class="fas fa-shoe-prints" style="color: #4e151b; margin-right: 6px;"></i> Procession Details
    </h4>
    <ul style="padding-left: 20px; text-align: justify; list-style-type: disc;">
        <li><strong>Start Point:</strong> Chorlton Park (assemble near the Pavilion from 2:30 PM)</li>
        <li><strong>Departure Time:</strong> 3:00 PM sharp</li>
        <li><strong>Route:</strong> St Werburgh’s Road → Wilbraham Road → Withington Road</li>
        <li><strong>End Point:</strong> Gita Bhavan Hindu Temple, 231 Withington Road, Manchester M16 8HX</li>
        <li><strong>Estimated Duration:</strong> 3:00 PM – 4:00 PM</li>
        <li><strong>Distance:</strong> Approx. 1.5 km (just under 1 mile)</li>
        <li>Open to all – families, elders, children, and community groups warmly welcome</li>
        <li>Bring flags, instruments, and your joyous spirit!</li>
    </ul>

    <hr style="border-top: 1px solid #ccc;">

    <h4 class="service-details__title-two" style="color: #4e151b;">
        <i class="fas fa-shuttle-van" style="color: #4e151b; margin-right: 6px;"></i> Return Travel Support
    </h4>
    <p class="service-details__text-3" style="text-align: justify;">
        We are working to provide a shuttlebus service for drivers to return to Chorlton Park and collect their vehicles after the procession.
        Final details will be confirmed here soon.
    </p>

    <hr style="border-top: 1px solid #ccc;">

    <p class="service-details__text-3" style="text-align: justify;">
        <i class="fas fa-shoe-prints" style="color: #4e151b; margin-right: 6px;"></i> Wear comfortable shoes and weather-appropriate clothing<br>
        <i class="fas fa-water" style="color: #4e151b; margin-right: 6px;"></i> Bring water and sun/rain protection<br>
        <i class="fas fa-dove" style="color: #4e151b; margin-right: 6px;"></i> Let’s walk together in peace, love, and unity
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
    <i class="fas fa-praying-hands" style="color: #2c3e50; margin-right: 6px;"></i> Shobha Yatra Highlights – A Journey of Unity & Devotion
</h4>

<div class="row">

<!-- Unity in Community -->
<div class="col-xl-6">
    <div class="service-details__service-process-single">
        <div class="service-details__service-process-icon">
            <i class="fas fa-users" style="font-size: 24px; color: #2c3e50;"></i>
        </div>
        <div class="service-details__service-process-content">
            <h4 class="service-details__service-process-content-title"><a href="#">Unity in Community</a></h4>
            <p class="service-details__service-process-content-text">
                Walk together in harmony — bringing together families, friends, and faith groups in one joyous spirit.
            </p>
        </div>
    </div>
</div>

<!-- Spirit of Devotion -->
<div class="col-xl-6">
    <div class="service-details__service-process-single">
        <div class="service-details__service-process-icon">
            <i class="fas fa-drum" style="font-size: 24px; color: #2c3e50;"></i>
        </div>
        <div class="service-details__service-process-content">
            <h4 class="service-details__service-process-content-title"><a href="#">Spirit of Devotion</a></h4>
            <p class="service-details__service-process-content-text">
                Chant, drum, and dance with joy as we express bhakti — heartfelt devotion through celebration.
            </p>
        </div>
    </div>
</div>

<!-- Symbolic Journey -->
<div class="col-xl-6">
    <div class="service-details__service-process-single">
        <div class="service-details__service-process-icon">
            <i class="fas fa-route" style="font-size: 24px; color: #2c3e50;"></i>
        </div>
        <div class="service-details__service-process-content">
            <h4 class="service-details__service-process-content-title"><a href="#">Symbolic Journey</a></h4>
            <p class="service-details__service-process-content-text">
                A sacred walk from the calm of Chorlton Park to the spiritual heart of Gita Bhavan — each step a reflection of inner elevation.
            </p>
        </div>
    </div>
</div>

<!-- Seva & Togetherness -->
<div class="col-xl-6">
    <div class="service-details__service-process-single">
        <div class="service-details__service-process-icon">
            <i class="fas fa-hand-holding-heart" style="font-size: 24px; color: #2c3e50;"></i>
        </div>
        <div class="service-details__service-process-content">
            <h4 class="service-details__service-process-content-title"><a href="#">Seva & Togetherness</a></h4>
            <p class="service-details__service-process-content-text">
                Practice selfless service, carry flags, support others — every moment reflects unity, seva, and shared purpose.
            </p>
        </div>
    </div>
</div>
<div class="service-details__content-two" style="font-family: inherit;">
    <h4 class="service-details__title-one" style="color: #4e151b;">
        <i class="fas fa-music" style="color: #4e151b; margin-right: 6px;"></i> Manchester Gita Festival 2025 – Bhakti Yoga Evening
    </h4>
    <p class="service-details__text-3" style="text-align: justify;">
        <strong><i class="fas fa-heart" style="color: #4e151b; margin-right: 6px;"></i> An Evening of Devotion through Music, Mantra & Meditation</strong><br><br>
        <i class="fas fa-calendar-alt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Date:</strong> Saturday 21st June 2025<br>
        <i class="fas fa-clock" style="color: #4e151b; margin-right: 6px;"></i> <strong>Time:</strong> 4:00 PM – 7:00 PM<br>
        <i class="fas fa-map-marker-alt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Venue:</strong> Gita Bhavan Hindu Temple, 231 Withington Road, Manchester M16 8HX
    </p>

    <p class="service-details__text-3" style="text-align: justify;">
        Conclude your day with an immersive Bhakti Yoga Evening — a heart-opening celebration of devotion through music, mantra, and meditation, held at the serene Gita Bhavan Hindu Temple.
        <br><br>
        This special event embodies the Path of Bhakti Yoga — devotion and surrender to the Divine through love, chanting, and heartfelt expression, as taught in the Bhagwad Gita.
    </p>

    <hr style="border-top: 1px solid #ccc;">

    <h4 class="service-details__title-two" style="color: #4e151b;">
        <i class="fas fa-star" style="color: #4e151b; margin-right: 6px;"></i> Evening Highlights
    </h4>
    <ul style="padding-left: 20px; text-align: justify; list-style-type: disc;">
        <li>Soul-stirring kirtan (devotional singing) led by renowned local and visiting artists</li>
        <li>Reflections and readings from the Bhagwad Gita on the essence of Bhakti</li>
        <li>Collective chanting, meditation, and quiet contemplation</li>
        <li>A spiritually uplifting atmosphere to connect deeply with yourself and the Divine</li>
    </ul>

    <hr style="border-top: 1px solid #ccc;">

    <h4 class="service-details__title-two" style="color: #4e151b;">
        <i class="fas fa-utensils" style="color: #4e151b; margin-right: 6px;"></i> Prasad & Hospitality
    </h4>
    <p class="service-details__text-3" style="text-align: justify;">
        After the programme, Prasad (sanctified vegetarian food) will be lovingly served to all guests — an opportunity to share food and fellowship in the spirit of Bhakti.
    </p>

    <hr style="border-top: 1px solid #ccc;">

    <h4 class="service-details__title-two" style="color: #4e151b;">
        <i class="fas fa-parking" style="color: #4e151b; margin-right: 6px;"></i> Parking Information
    </h4>
    <p class="service-details__text-3" style="text-align: justify;">
        On-site parking is available at the temple and on surrounding residential roads. We recommend arriving early to ensure easy access and a good seat for the programme.
    </p>

    <hr style="border-top: 1px solid #ccc;">

    <p class="service-details__text-3" style="text-align: justify;">
        <i class="fas fa-tshirt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Dress Code:</strong> Traditional/Cultural attire encouraged<br>
        <i class="fas fa-microphone-alt" style="color: #4e151b; margin-right: 6px;"></i> Bring your voice, your heart, and your presence<br>
        <i class="fas fa-dove" style="color: #4e151b; margin-right: 6px;"></i> Open to all – come as you are
    </p>
</div>
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

</div>

</div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                    <div class="service-details__sidebar">

<!-- Festival Navigation Links -->
<div class="service-details__service-list-box">
    <h4 class="service-details__sidebar-title">
        <i class="fas fa-list-ul" style="margin-right: 6px;"></i> Gita Festival Highlights
    </h4>
    <ul class="service-details__service-list list-unstyled">
        <li><a href="#">Opening Night Programme <span class="fas fa-arrow-right"></span></a></li>
        <li><a href="#">Shobha Yatra Procession <span class="fas fa-arrow-right"></span></a></li>
        <li><a href="#">Insight Darshana Exhibition <span class="fas fa-arrow-right"></span></a></li>
        <li class="active"><a href="#">Spiritual Talks & Seminars <span class="fas fa-arrow-right"></span></a></li>
        <li><a href="#">Youth & Family Activities <span class="fas fa-arrow-right"></span></a></li>
        <li><a href="#">Community Volunteering <span class="fas fa-arrow-right"></span></a></li>
    </ul>
</div>

<!-- Help Box -->
<div class="service-details__need-help">
    <div class="service-details__need-help-icon">
        <i class="fas fa-phone-alt" style="font-size: 20px; color: #4e151b;"></i>
    </div>
    <p class="service-details__need-help-sub-title">Need Assistance?</p>
    <h5 class="service-details__need-help-number">
        <a href="tel:+448085550111"></a>
    </h5>
    <p class="service-details__need-help-text">
        Have questions about routes, accessibility, or group registration for the Shobha Yatra? Call us – we're here to help make your experience smooth and joyful.
    </p>
</div>

<!-- Brochure Downloads -->
<div class="service-details__brochure-box">
    <h5 class="service-details__brochure-box-title">
        <i class="fas fa-file-alt" style="margin-right: 6px;"></i> Downloads & Info
    </h5>
    <ul class="list-unstyled service-details__brochure-list">
        <li>
            <div class="icon">
                <i class="fas fa-file-pdf" style="color: #4e151b;"></i>
            </div>
            <div class="content">
                <h5><a href="#">Shobha Yatra Info Pack</a></h5>
                <p>All the details for participants including the route map, meeting points, and travel tips.</p>
            </div>
        </li>
        <li>
            <div class="icon">
                <i class="fas fa-info-circle" style="color: #4e151b;"></i>
            </div>
            <div class="content">
                <h5><a href="#">Gita Festival Overview</a></h5>
                <p>Discover the vision, values, and key themes of this year’s Manchester Gita Festival.</p>
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
        <?php require_once('parts/home3/cta.php'); ?>
        <!--CTA Two End-->

  
        <?php require_once('parts/footer/footer3.php'); ?>
        <?php require_once('parts/layout/bottom-layout.php'); ?> 