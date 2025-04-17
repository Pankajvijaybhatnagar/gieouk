<?php $head_title="Coming Soon || topfool || topfool PHP Template"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header4.php'); ?>
<?php
$page_title = "Coming Soon";
require_once('parts/page-title.php');
?>

        <!--Start Coming Soon page-->
        <section class="coming-soon-page full-height">
            <div class="coming-soon-page__bg"
                style="background-image: url(assets/images/backgrounds/coming-soon-page-bg.jpg);"></div>
            <div class="coming-soon-page__content">
                <div class="inner">
                    <div class="big-title">We're Coming Soon...</div>
                    <div class="timer-box clearfix">
                        <div class="countdown-timer">
                            <div class="default-coundown">
                                <div class="box">
                                    <div class="countdown coming-soon-countdown" data-countdown-time="2024/08/28"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <p>
                            Website is under construction. We'll be here soon with new<br>
                            awesome site, Subscribe to be notified.
                        </p>
                    </div>
                    <div class="coming-soon-page__subscribe-box">
                        <form class="subscribe-form" action="#">
                            <input placeholder="Enter your email address" type="email">
                            <button type="submit" class="thm-btn coming-soon-page__btn">send massage</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--End Coming Soon page-->
    </div><!-- /.page-wrapper -->

    <?php require_once('parts/footer/footer4.php'); ?>
    <?php require_once('parts/layout/bottom-layout.php'); ?> 
   