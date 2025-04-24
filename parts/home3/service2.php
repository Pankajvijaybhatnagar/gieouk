<style>
  /* Golden text styles */
  .services-seven .section-title__title,
  .services-seven .section-title__tagline,
  .services-seven__text,
  .services-seven__title,
  .services-seven__single p,
  .services-seven__points p,
  .services-seven__btn,
  .services-seven__btn span,
  .services-seven__btn i {
    color: goldenrod !important;
  }

  .services-seven__icon i,
  .services-seven__points .icon i,
  .services-seven__nav i {
    color: goldenrod !important;
    font-size: 22px;
  }

  .services-seven__btn {
    border: 1px solid goldenrod;
    background-color: transparent;
    padding: 8px 20px;
    display: inline-block;
    margin-top: 10px;
    transition: 0.3s ease;
  }

  .services-seven__btn:hover {
    background-color: goldenrod;
    color: #fff !important;
  }

  /* Ensure consistent height across all slides */
  .services-seven__single {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 520px;
    height: 100%;
  }

  .swiper-slide {
    display: flex;
    height: 100%;
  }
</style>

<!-- Why Choose Two Start -->
<section class="services-seven" style="background-color:#4e151b;">
  <div class="container">
    <div class="row">
      <!-- Left Column -->
      <div class="col-xl-4 col-lg-4">
        <div class="services-seven__left">
          <div class="section-title text-left">
            <div class="section-title__tagline-box">
              <span class="section-title__tagline">Festival Highlights</span>
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
      <style>
        .btn-of-link{
          color:white;
          
        }
      </style>

      <!-- Swiper Slider -->
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

              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="services-seven__single">
                  <div class="services-seven__icon"><i class="fas fa-book-open"></i></div>
                  <h3 class="services-seven__title"><a href="#">Friday 20th June – Opening Night</a></h3>
                  <ul class="services-seven__points list-unstyled">
                    <li><p><strong>Yoga Through Culture & Science</strong></p><div class="icon"><i class="fas fa-check"></i></div></li>
                    <li><p><strong>Time:</strong> 6:00 PM – 9:00 PM</p><div class="icon"><i class="fas fa-check"></i></div></li>
                    <li><p><strong>Venue:</strong> Wythenshawe Forum, M22 5RX</p><div class="icon"><i class="fas fa-check"></i></div></li>
                  </ul>
                  <p>Keynote talks on Yoga’s origin, philosophy & science. A cultural showcase illustrating Karma, Bhakti, Dhyana & Gyan Yoga. Reflections on Gita and its impact on well-being, plus the INSIGHT UK Darshana Exhibition.</p>
                  <p><strong>🍛 Complimentary food</strong> | <strong>🎟 Booking essential</strong> | <strong>👗 Dress code:</strong> Cultural/Smart</p>
                  <a class="btn-of-link" href="day-1.php">Read more</a>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="services-seven__single">
                  <div class="services-seven__icon"><i class="fas fa-person-praying"></i></div>
                  <h3 class="services-seven__title"><a href="#">Saturday 21st June – Yoga in the Park</a></h3>
                  <ul class="services-seven__points list-unstyled">
                    <li><p><strong>Time:</strong> 9:00 AM – 2:30 PM</p><div class="icon"><i class="fas fa-check"></i></div></li>
                    <li><p><strong>Venue:</strong> Chorlton Park, Manchester M21 7HH</p><div class="icon"><i class="fas fa-check"></i></div></li>
                    <li><p><strong>Entry:</strong> Free | No Booking Needed</p><div class="icon"><i class="fas fa-check"></i></div></li>
                  </ul>
                  <p>9:30 AM–12 PM: Community Yoga Session<br>12 PM–2:30 PM: Workshops on Pranayama (Ujjayi, Kapalbhati, Bhramari, Bhastrika), Surya Namaskar, Laughter Yoga, Hatha Yoga, Chair & Teen Yoga, Sound & Yin Yoga, and Meditation.</p>
                  <p><strong>Children's Yoga Zones</strong> | <strong>Bring water & mat</strong> | <strong>Transport:</strong> Buses, Trams, Limited Parking</p>
                  <a class="btn-of-link" href="day-2.php">Read more</a>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="swiper-slide">
                <div class="services-seven__single">
                  <div class="services-seven__icon"><i class="fas fa-music"></i></div>
                  <h3 class="services-seven__title"><a href="#">Saturday 21st June – Bhakti Yoga Evening</a></h3>
                  <ul class="services-seven__points list-unstyled">
                    <li><p><strong>Time:</strong> 4:00 PM – 7:00 PM</p><div class="icon"><i class="fas fa-check"></i></div></li>
                    <li><p><strong>Venue:</strong> Gita Bhavan Hindu Temple, M16 8HX</p><div class="icon"><i class="fas fa-check"></i></div></li>
                  </ul>
                  <p>Kirtan led by renowned artists, reflections from the Gita on Bhakti Yoga, collective mantra chanting and guided meditation in a serene, spiritual setting.</p>
                  <p><strong>🍛 Prasad served to all guests</strong><br><strong>👘 Cultural attire encouraged</strong><br><strong>🚗 Parking available on-site</strong></p>
                  <a class="btn-of-link" href="day-3.php">Read more</a>
                </div>
              </div>

              <!-- Slide 4 -->
              <div class="swiper-slide">
                <div class="services-seven__single">
                  <div class="services-seven__icon"><i class="fas fa-fire"></i></div>
                  <h3 class="services-seven__title"><a href="#">Sunday 22nd June – Maha Yagna & Pravachan</a></h3>
                  <ul class="services-seven__points list-unstyled">
                    <li><p><strong>Time:</strong> 9:00 AM – 12:00 PM</p><div class="icon"><i class="fas fa-check"></i></div></li>
                    <li><p><strong>Venue:</strong> Indian Association Oldham, OL8 1QG</p><div class="icon"><i class="fas fa-check"></i></div></li>
                  </ul>
                  <p>A sacred Maha Yagna for global harmony, followed by a spiritual discourse by His Holiness Swami Gyananand Ji Maharaj on the true essence of Yoga as taught in the Bhagvad Gita.</p>
                  <p><strong>🍛 Prasad offered</strong><br><strong>🚍 Tram: Oldham Central | Bus: 81, 83, 180+</strong><br><strong>🚗 Free on-site & street parking</strong></p>
                </div>
              </div>

            </div> <!-- swiper-wrapper -->
          </div> <!-- swiper-container -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Why Choose Two End -->
