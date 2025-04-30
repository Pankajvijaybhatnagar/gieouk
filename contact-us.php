<?php $head_title="Contact || topfool || topfool PHP Template"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header3.php'); ?>
<?php
$page_title = "Contact";
require_once('parts/page-title.php');
?>

        <!--Contact Two Start-->
        <section class="contact-two">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">STAY CONNECTED </span>
                    </div>
                    <h2 class="section-title__title">Request A Quote </h2>
                </div>
                <div class="contact-two__inner">
                    <form class="contact-form-validated contact-two__form" action="assets/inc/sendemail.php"
                        method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-two__input-box">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-two__input-box">
                                    <input type="email" name="email" placeholder="Email Address" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-two__input-box">
                                    <input type="text" name="Phone" placeholder="Phone Number" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-two__input-box">
                                    <div class="select-box">
                                        <select class="selectmenu wide">
                                            <option selected="selected">Choose a Option</option>
                                            <option>Type Of Service 01</option>
                                            <option>Type Of Service 02</option>
                                            <option>Type Of Service 03</option>
                                            <option>Type Of Service 04</option>
                                            <option>Type Of Service 05</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-two__input-box text-message-box">
                                    <textarea name="message" placeholder="Message here.."></textarea>
                                </div>
                                <div class="contact-two__btn-box">
                                    <button type="submit" class="thm-btn contact-two__btn">Appointment Now<span
                                            class="icon-paper-plan"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        <!--Contact Two End-->

        <!--Contact Three End-->
        <section class="contact-three">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <!--Contact Three Single Start-->
                    <!-- <div class="col-xl-4 col-lg-2">
                        <div class="contact-three__single">
                            <div class="contact-three__icon">
                                <span class="icon-location"></span>
                            </div>
                            <h3 class="contact-three__title">Address</h3>
                            <p class="contact-three__text">Gieo Gita UK Manchester</p>
                        </div>
                    </div> -->
                    <!--Contact Three Single End-->
                    <!--Contact Three Single Start-->
                    <div class="col-xl-4 col-lg-2">
                        <div class="contact-three__single">
                            <div class="contact-three__icon">
                                <span class="icon-location"></span>
                            </div>
                            <h3 class="contact-three__title">Address</h3>
                            <p class="contact-three__text">Gieo Gita UK Manchester</p>
                        </div>
                    </div>
                    <!--Contact Three Single End-->
                    <!--Contact Three Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-three__single">
                            <div class="contact-three__icon">
                                <span class="icon-email"></span>
                            </div>
                            <h3 class="contact-three__title">E-mail</h3>
                            <p class="contact-three__text"><a
                                    href="mailto:michael.mitc@example.com">
                                    info@gieogita.org.uk</a></p>
                        </div>
                    </div>
                    <!--Contact Three Single End-->
                </div>
            </div>
        </section>
        <!--Contact Three End-->

        <!--Google Map Start-->
        <!-- <section class="google-map-one">
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                    class="google-map__one" allowfullscreen></iframe>
            </div>
        </section> -->
        <!--Google Map End-->

        <!--CTA Two Start-->
        <!-- <section class="cta-two">
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
        </section> -->
        <!--CTA Two End-->

        <?php require_once('parts/footer/footer3.php'); ?>
        <?php require_once('parts/layout/bottom-layout.php'); ?> 