<?php $head_title="Manchester Gita Festival 2025 – Day 2: Shobha Yatra & Bhakti Yoga Evening || GIEO Gita UK"; ?>
<?php require_once('parts/layout/top-layout.php'); ?>

<!-- Header -->
<?php require_once('parts/header/header3.php'); ?>

<?php
$page_title = "21<sup>st</sup> June 2025 - Bhakti Yoga evening ";
require_once('parts/page-title.php');
?>

<h1 style="text-align: center; margin:30px">ASSOCIATION WITH</h1>

<section class="sliding-text-three">
    <div class="sliding-text-three__wrap">
        <ul class="sliding-text-three__list list-unstyled marquee_mode">
            <?php
            $logoDir = 'assets/images/assosiation/';
            $logoFiles = glob($logoDir . '*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);

            if (!empty($logoFiles)) {
                foreach ($logoFiles as $logo) {
                    $fileName = pathinfo($logo, PATHINFO_FILENAME);
                    echo '<li><img style="height:80px" src="' . $logo . '" alt="' . htmlspecialchars($fileName) . ' Logo"></li>';
                }
            } else {
                echo '<li><h2 class="sliding-text-three__title">No Partner Logos Found</h2></li>';
            }
            ?>
        </ul>
    </div>
</section>

<!-- Service Details Start -->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="service-details__left">

                    <div class="service-details__img-one">
                        <img src="assets/images/services/banner.jpg" alt="Manchester Gita Festival 2025 – Bhakti Yoga Evening">
                    </div>

                    <!-- Bhakti Yoga Evening -->
                    <div class="service-details__content-two" style="font-family: inherit;">
                        <h4 class="service-details__title-one mt-3" style="color: #4e151b;">
                            <i class="fas fa-music" style="color: #4e151b; margin-right: 6px;"></i> Manchester Gita Festival 2025 – Bhakti Yoga Evening
                        </h4>
                        <p class="service-details__text-3" style="text-align: justify;">
                            <strong><i class="fas fa-heart" style="color: #4e151b; margin-right: 6px;"></i> An Evening of Devotion through Music, Mantra & Meditation</strong><br><br>
                            <i class="fas fa-calendar-alt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Date:</strong> Saturday 21st June 2025<br>
                            <i class="fas fa-clock" style="color: #4e151b; margin-right: 6px;"></i> <strong>Time:</strong> 4:00 PM – 7:00 PM<br>
                            <i class="fas fa-map-marker-alt" style="color: #4e151b; margin-right: 6px;"></i> <strong>Venue:</strong> Gita Bhavan Hindu Temple, 231 Withington Road, Manchester M16 8HX
                        </p>

                        <p class="service-details__text-3" style="text-align: justify;">
                            Conclude your day with an immersive Bhakti Yoga Evening — a heart-opening celebration of devotion through music, mantra, and meditation, held at the serene Gita Bhavan Hindu Temple.<br><br>
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

                    <h1 style="margin-top:30px; margin-left:540px">Partners</h1>

                    <section class="sliding-text-three">
                        <div class="sliding-text-three__wrap">
                            <ul class="sliding-text-three__list list-unstyled marquee_mode-two">
                                <?php
                                $partnerDir = 'assets/images/partners/';
                                $partnerLogos = glob($partnerDir . '*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);

                                if (!empty($partnerLogos)) {
                                    foreach ($partnerLogos as $logo) {
                                        $fileName = pathinfo($logo, PATHINFO_FILENAME);
                                        echo '<li><img style="height:80px" src="' . $logo . '" alt="' . htmlspecialchars($fileName) . ' Logo"></li>';
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

            <!-- Right Sidebar -->
            <div class="col-xl-4 col-lg-5">
                <div class="service-details__sidebar">

                    <!-- Festival Navigation -->
                    <?php include 'parts/festival-navigation.php'; ?>

                    <!-- Help Box -->
                    <div class="service-details__need-help">
                        <div class="service-details__need-help-icon">
                            <i class="fas fa-envelope" style="font-size: 20px; color: #4e151b;"></i>
                        </div>
                        <p class="service-details__need-help-sub-title">Need Assistance?</p>
                        <h5 class="service-details__need-help-number">
                            <a href="mailto:info@gieogita.org.uk">Email: info@gieogita.org.uk</a>
                        </h5>
                        <p class="service-details__need-help-text">
                            Have questions about the Bhakti Evening, accessibility, or group attendance? Reach out — we’re here to help.
                        </p>
                    </div>

                    <!-- Downloads -->
                    <div class="service-details__brochure-box">
                        <h5 class="service-details__brochure-box-title">
                            <i class="fas fa-file-alt" style="margin-right: 6px;"></i> Downloads & Info
                        </h5>
                        <ul class="list-unstyled service-details__brochure-list">
                            <li>
                                <div class="icon"><i class="fas fa-file-pdf" style="color: #4e151b;"></i></div>
                                <div class="content">
                                    <h5><a href="downloads/bhakti-evening-flyer.pdf" target="_blank">Event Flyer PDF</a></h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php require_once('parts/layout/bottom-layout.php'); ?>
