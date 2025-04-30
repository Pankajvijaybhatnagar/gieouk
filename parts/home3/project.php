<?php
$slides = [
    [
        'link' => 'day-1.php',
        'img' => 'assets/images/services/first-day.jpg',
        'alt' => 'Gita Seminar',
        'title' => 'Opening Night (20th June)'
    ],
    [
        'link' => 'day-2-yoga-in-the-park',
        'img' => 'assets\images\resources\day2yogapark.png',
        'alt' => 'Yoga in the Park',
        'title' => 'Yoga in the park (21st June Morning)'
    ],
    [
        'link' => 'day-2-shobha-yatra',
        'img' => 'assets/images/backgrounds/11th.jpeg',
        'alt' => 'Cultural Performance',
        'title' => 'Shobha Yatra (21st June Afternoon)'
    ],
    [
        'link' => 'day-2-bhakti-yoga-evening',
        'img' => 'assets/images/resources/bhaktiyoga.png',
        'alt' => 'Closing Ceremony',
        'title' => 'Bhakti Yoga evening (21st Evening)'
    ],
    [
        'link' => 'day-3',
        'img' => 'assets/images/backgrounds/pic.jpg',
        'alt' => 'Bhakti Evening',
        'title' => 'Maha Yagna & Pravachan(22nd June)'
    ]
];
?>


<!--Project Three Start-->
<section class="project-three">
  <div class="container">
    <div class="project-three__inner">
      <div class="project-three__top">
        <div class="section-title text-left">
          <div class="section-title__tagline-box">
            <span class="section-title__tagline">Events</span>
          </div>
          <h2 class="section-title__title">Moments from Manchester's Gita Festival Celebrations</h2>
        </div>
      </div>

      <!-- Swiper Carousel Start -->
      <div class="swiper project-three-swiper">


<div class="swiper-wrapper">
    <?php foreach ($slides as $slide): ?>
        <div class="swiper-slide">
            <a href="<?= htmlspecialchars($slide['link']) ?>">
                <div class="project-three__single">
                    <div class="project-three__img">
                        <img style="aspect-ratio: 16/9; object-fit: cover;" src="<?= htmlspecialchars($slide['img']) ?>" alt="<?= htmlspecialchars($slide['alt']) ?>">
                    </div>
                    <h3><?= htmlspecialchars($slide['title']) ?></h3>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>


        <!-- Navigation buttons -->
        <div class="swiper-button-prev custom-arrow"></div>
        <div class="swiper-button-next custom-arrow"></div>
      </div>
      <!-- Swiper Carousel End -->

    </div>
  </div>
</section>
<!--Project Three End-->

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- 
<style>
  .project-three {
    padding: 60px 0;
  }

  .section-title__tagline {
    font-size: 14px;
    color: #888;
  }

  .section-title__title {
    font-size: 28px;
    font-weight: bold;
  }

  .project-three-swiper {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px 0;
    position: relative;
  }

  .swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .project-three__single {
    background-color: #f9f9f9;
    border-radius: 10px;
    overflow: hidden;
    text-align: center;
    padding: 15px;
    width: 100%;
    max-width: 350px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .project-three__single:hover {
    transform: translateY(-5px);
  }

  .project-three__img img {
    width: 100%;
    height: auto;
    aspect-ratio: 410 / 299;
    object-fit: cover;
    border-radius: 8px;
  }

  .project-three__single h3 {
    margin-top: 15px;
    font-size: 18px;
    color: #333;
  }

  /* Custom arrow styles */
  .custom-arrow {
    position: absolute;
    top: 50%;
    z-index: 10;
    width: 44px;
    height: 44px;
    background-color: #fff;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transform: translateY(-50%);
    cursor: pointer;
  }

  .swiper-button-prev.custom-arrow {
    left: -60px;
  }

  .swiper-button-next.custom-arrow {
    right: -60px;
  }

  .swiper-button-prev::after,
  .swiper-button-next::after {
    font-size: 20px;
    color: #000;
    font-weight: bold;
  }

  @media (max-width: 992px) {
    .swiper-button-prev.custom-arrow {
      left: -40px;
    }

    .swiper-button-next.custom-arrow {
      right: -40px;
    }
  }

  @media (max-width: 576px) {
    .swiper-button-prev.custom-arrow,
    .swiper-button-next.custom-arrow {
      display: none;
    }
  }
</style> -->

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper Initialization -->
<script>
  const swiper = new Swiper('.project-three-swiper', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,
    speed: 700,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3
      }
    }
  });
</script>
