<?php $head_title= "Manchester Gita Festival 2025 – Day 3: Sunday Morning Programme || GIEO Gita UK "
?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header3.php'); ?>
<?php
$page_title = "22<sup>nd</sup> June 2025 - Maha Yagna & Pravachan";
require_once('parts/page-title.php');
?>
<h1 style="text-align: center; margin:30px">ASSOCIATION WITH</h1>
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
                        <img src="assets/images/services/yagya.jpg" alt="">
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
                            <i class="fas fa-om" style="color: #4e151b; margin-right: 6px;"></i> Manchester Gita
                            Festival 2025 – Sunday Morning Programme
                        </h4>

                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-fire" style="color: #4e151b; margin-right: 6px;"></i> Maha Yagna &
                                Pravachan with His Holiness Gita Manishi Swami Gyananand Ji Maharaj</strong><br><br>

                            <i class="fas fa-calendar-alt" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Date:</strong> Sunday 22nd June 2025<br>
                            <i class="fas fa-clock" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Time:</strong> 9:00 AM – 12:00 PM<br>
                            <i class="fas fa-map-marker-alt" style="color: #4e151b; margin-right: 6px;"></i>
                            <strong>Venue:</strong> Indian Association Oldham, Schofield Street, Oldham OL8 1QG
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            The grand finale of the Manchester Gita Festival 2025 takes place on Sunday morning at the
                            Indian Association Oldham — a spiritually elevating gathering of prayer, wisdom, and
                            community.
                            <br><br>
                            The programme opens with a <strong>Maha Yagna</strong>, a sacred Vedic fire ceremony to
                            invoke divine blessings and inner peace. This is followed by a soul-stirring
                            <strong>pravachan</strong> (spiritual discourse) by His Holiness Gita Manishi Swami
                            Gyananand Ji Maharaj, exploring the deep connection between Yoga and the Bhagwad Gita.
                            <br><br>
                            This session will bring clarity and insight into how the Gita presents Yoga not just as
                            physical practice, but as a complete path of inner growth, spiritual discipline, and
                            selfless action for everyday life.
                        </p>

                        <hr style="border-top: 1px solid #ccc;">

                        <h4 class="service-details__title-two" style="color: #4e151b;">
                            <i class="fas fa-calendar-check" style="color: #4e151b; margin-right: 6px;"></i> 🔥
                            Programme Schedule
                        </h4>

                        <ul style="padding-left: 20px; text-align: justify; list-style-type: disc;">
                            <li><strong>9:00 AM – Maha Yagna</strong><br>
                                A powerful Vedic fire ceremony for purification, harmony, and global peace</li>
                            <li><strong>Followed by – Pravachan: "Yoga and the Bhagwad Gita"</strong><br>
                                A profound talk by His Holiness Gita Manishi Swami Gyananand Ji Maharaj<br>
                                Discover how the Bhagwad Gita defines Yoga as a way of living — integrating knowledge,
                                devotion, action, and meditation into one holistic path</li>
                        </ul>

                        <hr style="border-top: 1px solid #ccc;">

                        <h4 class="service-details__title-two" style="color: #4e151b;">
                            <i class="fas fa-utensils" style="color: #4e151b; margin-right: 6px;"></i> 🍛 Prasad &
                            Hospitality
                        </h4>

                        <p class="service-details__text-3" style="text-align: justify;">
                            At the close of the programme, <strong>Prasad</strong> (sanctified vegetarian food) will be
                            lovingly served to all attendees as a token of divine blessing and hospitality.
                        </p>

                        <hr style="border-top: 1px solid #ccc;">

                        <h4 class="service-details__title-two" style="color: #4e151b;">
                            <i class="fas fa-parking" style="color: #4e151b; margin-right: 6px;"></i> 🚗 Parking
                            Information
                        </h4>

                        <p class="service-details__text-3" style="text-align: justify;">
                            Free on-site parking is available at Indian Association Oldham on Schofield Street, with
                            additional parking available on nearby streets. Please arrive early to park easily.
                        </p>

                        <hr style="border-top: 1px solid #ccc;">

                        <h4 class="service-details__title-two" style="color: #4e151b;">
                            <i class="fas fa-bus-alt" style="color: #4e151b; margin-right: 6px;"></i> 🚍 Public
                            Transport
                        </h4>

                        <ul style="padding-left: 20px; text-align: justify; list-style-type: disc;">
                            <li><strong>By Tram:</strong> Nearest Metrolink stop: <em>Oldham Central</em> – approx.
                                10–12 minutes’ walk</li>
                            <li><strong>By Bus:</strong> Frequent local buses including routes 81, 83, 180, 184, 350
                                serve the area with stops close to Schofield Street</li>
                            <li><strong>By Train:</strong> Accessible via <em>Manchester Victoria</em> with onward
                                travel by tram or bus into Oldham town centre</li>
                        </ul>

                        <hr style="border-top: 1px solid #ccc;">

                        <p class="service-details__text-3" style="text-align: justify;">
                            <i class="fas fa-tshirt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Dress
                                Code:</strong> Traditional or cultural attire is warmly encouraged<br>
                            <i class="fas fa-dove" style="color: #4e151b; margin-right: 6px;"></i> <strong>All are
                                welcome – come with devotion, leave with blessings</strong>
                        </p>

                    </div>



                    <div class="service-details__img-boxes">
                        <div class="row">
                            <!-- Image 1: Maha Yagna Ceremony -->
                            <div class="col-xl-6">
                                <div class="service-details__img-boxes-single">
                                    <img src="assets/images/services/gita-maha-yagna.jpg"
                                        alt="Maha Yagna ceremony during Manchester Gita Festival 2025">
                                </div>
                            </div>

                            <!-- Image 2: Devotional Singing Bhakti Yoga Evening -->
                            <div class="col-xl-6">
                                <div class="service-details__img-boxes-single">
                                    <img src="assets/images/services/gita-bhakti-evening.jpg"
                                        alt="Devotees engaged in Bhakti Yoga - music, mantra, and meditation">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 style=" margin-top:30px; margin-left:540px">Partners</h1>
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

                    <div class="service-details__service-process">
                        <!-- <h4 class="service-details__service-process-title">
        <i class="fas fa-praying-hands" style="color: #2c3e50; margin-right: 6px;"></i> Evening Highlights – Yogic Paths
    </h4> -->
                        <div class="row">

                            <!-- Karma Yoga -->
                            <!-- <div class="col-xl-6">
            <div class="service-details__service-process-single">
                <div class="service-details__service-process-icon">
                    <i class="fas fa-hands-helping" style="font-size: 24px; color: #2c3e50;"></i>
                </div>
                <div class="service-details__service-process-content">
                    <h4 class="service-details__service-process-content-title"><a href="#">Karma Yoga</a></h4>
                    <p class="service-details__service-process-content-text">
                        Discover the path of selfless action – living with purpose through serving others.
                    </p>
                </div>
            </div>
        </div> -->

                            <!-- Bhakti Yoga -->
                            <!-- <div class="col-xl-6">
            <div class="service-details__service-process-single">
                <div class="service-details__service-process-icon">
                    <i class="fas fa-heart" style="font-size: 24px; color: #2c3e50;"></i>
                </div>
                <div class="service-details__service-process-content">
                    <h4 class="service-details__service-process-content-title"><a href="#">Bhakti Yoga</a></h4>
                    <p class="service-details__service-process-content-text">
                        Experience the beauty of devotion through heartfelt music, dance, and prayer.
                    </p>
                </div>
            </div>
        </div> -->

                            <!-- Dhyana Yoga -->
                            <!-- <div class="col-xl-6">
            <div class="service-details__service-process-single">
                <div class="service-details__service-process-icon">
                    <i class="fas fa-spa" style="font-size: 24px; color: #2c3e50;"></i>
                </div>
                <div class="service-details__service-process-content">
                    <h4 class="service-details__service-process-content-title"><a href="#">Dhyana Yoga</a></h4>
                    <p class="service-details__service-process-content-text">
                        Embrace inner stillness and mindfulness through guided meditative sessions.
                    </p>
                </div>
            </div>
        </div> -->

                            <!-- Gyan Yoga -->
                            <!-- <div class="col-xl-6">
            <div class="service-details__service-process-single">
                <div class="service-details__service-process-icon">
                    <i class="fas fa-book-reader" style="font-size: 24px; color: #2c3e50;"></i>
                </div>
                <div class="service-details__service-process-content">
                    <h4 class="service-details__service-process-content-title"><a href="#">Gyan Yoga</a></h4>
                    <p class="service-details__service-process-content-text">
                        Pursue the path of knowledge and wisdom through inquiry, discussion, and study.
                    </p>
                </div>
            </div>
        </div> -->

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
                            Have questions about routes, accessibility, or group registration for the Shobha Yatra? Mail
                            us – we're here to help make your experience smooth and joyful.
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
                                    <p>Learn more about the association, their mission, and the broader Gieo Gita UK
                                        initiative</p>
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