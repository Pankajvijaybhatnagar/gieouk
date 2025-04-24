
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2><?php if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="./">Home</a></li>
                            <li><span class="icon-arrow-left"></span></li>
                            <li><?php //if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->