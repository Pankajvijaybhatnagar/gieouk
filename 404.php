<?php $head_title="404 || topfool || topfool PHP Template"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header4.php'); ?>
<?php
$page_title = "404";
require_once('parts/page-title.php');
?>

        <!--Error Page Start-->
        <section class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <div class="error-page__title-box">
                                <h2 class="error-page__title">404</h2>
                            </div>
                            <h3 class="error-page__tagline">Sorry we can't find that page!</h3>
                            <p class="error-page__text">The page you are looking for was never existed.</p>
                            <form class="error-page__form">
                                <div class="error-page__form-input">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                            <a href="index.php" class="thm-btn error-page__btn">Back to home <span
                                    class="icon-arrow-left"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->

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

        <?php require_once('parts/footer/footer4.php'); ?>
        <?php require_once('parts/layout/bottom-layout.php'); ?> 