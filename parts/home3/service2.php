<?php
$slides = [
  [
    'icon' => 'fas fa-sun',
    'title' => 'Friday 20th June – Opening Night',
    'link' => 'day-1.php',
    'points' => [
      'Yoga Through Culture & Science',
      'Time: 6:00 PM – 9:00 PM',
      'Venue: Wythenshawe Forum, M22 5RX'
    ],
    'description' => 'Keynote talks on Yoga’s origin, philosophy & science. A cultural showcase illustrating Karma, Bhakti, Dhyana & Gyan Yoga. Reflections on Gita and its impact on well-being, plus the INSIGHT UK Darshana Exhibition.',
    'extras' => '🍛 Complimentary food | 🎟 Booking essential | 👗 Dress code: Cultural/Smart'
  ],
  [
    'icon' => 'fas fa-sunrise',
    'title' => 'Saturday 21st June – Yoga in the Park',
    'link' => 'day-2-yoga-in-the-park',
    'points' => [
      'Time: 9:00 AM – 2:30 PM',
      'Venue: Chorlton Park, Manchester M21 7HH',
      'Entry: Free | No Booking Needed'
    ],
    'description' => '9:30 AM–12 PM: Community Yoga Session<br>12 PM–2:30 PM: Workshops on Pranayama (Ujjayi, Kapalbhati, Bhramari, Bhastrika), Surya Namaskar, Laughter Yoga, Hatha Yoga, Chair & Teen Yoga, Sound & Yin Yoga, and Meditation.',
    'extras' => "Children's Yoga Zones | Bring water & mat | Transport: Buses, Trams, Limited Parking"
  ],
  [
    'icon' => 'fas fa-person-praying',
    'title' => 'Saturday 21st June – Shobha Yatra',
    'link' => 'day-2-shobha-yatra',
    'points' => [
      'Time: 3:00 PM – 4:00 PM',
      'Route: From Chorlton Park to Gita Bhavan Hindu Temple, M16 8HX',
      'Entry: Free | No Booking Needed'
    ],
    'description' => 'Join us for the spiritually uplifting Shobha Yatra — a procession for peace, love, and harmony, bringing together hearts, families, and communities in joyful celebration.',
    'extras' => " Bring flags, instruments, and your joyous spirit!"
  ],
  [
    'icon' => 'fas fa-person-praying',
    'title' => 'Saturday 21st June – Bhakti Yoga evening',
    'link' => 'day-2-bhakti-yoga-evening',
    'points' => [
      'Time: 4:00 PM – 7:00 PM',
      'Venue: Gita Bhavan Hindu Temple, 231 Withington Road, Manchester M16 8HX',
      'Open to all – come as you are | Bring your voice, your heart, and your presence '
    ],
    'description' => 'Conclude your day with an immersive Bhakti Yoga Evening — a heart-opening celebration of devotion through music, mantra, and meditation, held at the serene Gita Bhavan Hindu Temple.',
    'extras' => "  Dress Code: Traditional/Cultural attire encouraged
 Bring your voice, your heart, and your presence
 Open to all – come as you are"
  ],

  [
    'icon' => 'fas fa-fire',
    'title' => 'Sunday 22nd June – Maha Yagna & Pravachan',
    'link' => 'day-3.php',
    'points' => [
      'Time: 9:00 AM – 12:00 PM',
      'Venue: Indian Association Oldham, OL8 1QG'
    ],
    'description' => 'A sacred Maha Yagna for global harmony, followed by a spiritual discourse by His Holiness Swami Gyananand Ji Maharaj on the true essence of Yoga as taught in the Bhagvad Gita.',
    'extras' => '🍛 Prasad offered<br>🚍 Tram: Oldham Central | Bus: 81, 83, 180+<br>🚗 Free on-site & street parking'
  ],
];
?>

<!-- Why Choose Two Start -->
<section class="services-seven" style="background-color:#4e151b;">
  <div class="container">
    <div class="row">
      <!-- Left Column -->
      <div class="col-xl-4 col-lg-4">
        <div class="services-seven__left">
          <div class="section-title text-left">
            <div class="section-title__tagline-box">
              <span style="color:white" class="section-title__tagline">Festival Highlights</span>
            </div>
            <h2 class="section-title__title">Manchester Gita Festival 2025<br> Full 3-Day Experience</h2>
          </div>
          <p class="services-seven__text">From yoga in the park to spiritual discourses and kirtans, experience the timeless teachings of the Bhagvad Gita in a vibrant, community-led celebration across Manchester.</p>
          <div class="services-seven__nav">
            <div class="swiper-button-next1"><i class="fas fa-chevron-left"></i></div>
            <div class="swiper-button-prev1"><i class="fas fa-chevron-right"></i></div>
          </div>
        </div>
      </div>

      <!-- Right Column with Swiper -->
      <div class="col-xl-8 col-lg-8">
        <div class="services-seven__right">
          <div class="thm-swiper__slider swiper-container" data-swiper-options='{
            "slidesPerView": 1,
            "spaceBetween": 0,
            "speed": 1000,
            "loop": true,
            "pagination": {
              "el": ".swiper-dot-style1",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": ".swiper-button-prev1",
              "prevEl": ".swiper-button-next1"
            },
            "autoplay": { "delay": 10000 },
            "breakpoints": {
              "768": { "spaceBetween": 30, "slidesPerView": 2 },
              "992": { "spaceBetween": 30, "slidesPerView": 2 }
            }
          }'>
            <div class="swiper-wrapper">
              <?php foreach ($slides as $slide): ?>
              <div class="swiper-slide">
                <div class="services-seven__single">
                  <div class="services-seven__icon"><i class="<?= $slide['icon']; ?>"></i></div>
                  <h3 class="services-seven__title"><a href="#"><?= $slide['title']; ?></a></h3>
                  <ul class="services-seven__points list-unstyled">
                    <?php foreach ($slide['points'] as $point): ?>
                      <li>
                        <p><strong><?= $point; ?></strong></p>
                        <div class="icon"><i class="fas fa-check"></i></div>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                  <p><?= $slide['description']; ?></p>
                  <p><strong><?= $slide['extras']; ?></strong></p>
                  <a class="btn-of-link" href="<?= $slide['link']; ?>">Read more</a>
                </div>
              </div>
              <?php endforeach; ?>
            </div> <!-- swiper-wrapper -->
          </div> <!-- swiper-container -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Why Choose Two End -->

<style>
  /* Your existing styles here including golden text, swiper height, etc. */
  .btn-of-link {
    color: white;
  }
  .btn-of-link:hover {
    color: white !important;
  }
</style>
