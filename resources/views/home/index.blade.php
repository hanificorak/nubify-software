@extends('layout.app')

@section('content')
    <section id="hero" class="hero section">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Modern Bulut Teknolojileri ile yazılım çözümleri üretiyoruz.</h1>
                    <p data-aos="fade-up" data-aos-delay="100">Nubify Software 2024 yılında global sağlık yazılımları, bulut
                        sistemler üzerine çalışan bir firmadır. Yoğunlukla Almanya ve Türkiye çapında sağlık alanında
                        gelişmelere imza atmış bir bulut yazılım şirketidir.</p>
                    <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                        <a href="/contact" class="btn-get-started">Bize Ulaşın <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <section id="about" class="about section">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Biz Kimiz ?</h3>
                        <h2>Nubify Software</h2>
                        <p>
                            Nubify Software 2024 yılında sağlık ve kurumsal alanda yazılım çözümleri üretmek için kurulmuş
                            bir yazılım/teknoloji firmasıdır.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="/about"
                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Hakkımızda</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="/template/assets/img/about.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section>

    <section id="values" class="values section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Hizmetlerimiz</h2>
            <p>Hizmetlerimiz<br></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="/template/assets/img/values-1.png" class="img-fluid" alt="">
                        <h3>Sağlık Yazılım Çözümleri</h3>
                        <p>Hasta bakım merkezleri, özel klinikler için hasta takip/yönetim sistemi uygulamalarımız ile
                            sağlık alanında önde gelen yazılım çözümleri üretiyoruz.</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="/template/assets/img/values-2.png" class="img-fluid" alt="">
                        <h3>Kurumsal Yazılım Çözümleri</h3>
                        <p>Kurumsal firmalar için personel yönetim sistemleri gibi özel yazılım çözümleri üretiyoruz.</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="/template/assets/img/values-3.png" class="img-fluid" alt="">
                        <h3>Özel Yazılım Çözümleri</h3>
                        <p>İsteklerinize özel yazılım/uygulama üretiyoruz. Özel yazılım taleplerinizi bizlere ulaşarak talep
                            oluşturabilirsiniz edebilirsiniz.</p>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>

    </section>

    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="549" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Memnun Kullanıcı</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="140" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Uygulama</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="841" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Saat Destek</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-people color-pink flex-shrink-0" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Ekip</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section>

    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kullandığımız Teknolojiler</h2>
            <p>Kullandığımız Teknolojiler<br></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
                    <img src="/template/assets/img/features.png" class="img-fluid" alt="">
                </div>

                <div class="col-xl-6 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Laravel</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Vue JS</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>PostgreSQL</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>MySQL</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Node JS</h3>
                            </div>
                        </div><!-- End Feature Item -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>JavaScript</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Linux System</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>React Native</h3>
                            </div>
                        </div><!-- End Feature Item -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Swift</h3>
                            </div>
                        </div><!-- End Feature Item -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Java</h3>
                            </div>
                        </div><!-- End Feature Item -->
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="alt-features" class="alt-features section">

        <div class="container">
  
          <div class="row gy-5">
  
            <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">
  
              <div class="row align-self-center gy-5">
  
                <div class="col-md-6 icon-box">
                  <i class="bi bi-award"></i>
                  <div>
                    <h4>Sağlık Çözümleri</h4>
                    <p>Hasta bakım takibi, özel klinikler gibi alanındaki yazılım çözümleri üretiyoruz.</p>
                  </div>
                </div><!-- End Feature Item -->
  
                <div class="col-md-6 icon-box">
                  <i class="bi bi-card-checklist"></i>
                  <div>
                    <h4>Kurumsal Yazılım Çözümleri</h4>
                    <p>Kurumsal firmaların ihtiyaçlarına göre yazılım çözümleri üretiyoruz.</p>
                  </div>
                </div><!-- End Feature Item -->
  
                <div class="col-md-6 icon-box">
                  <i class="bi bi-dribbble"></i>
                  <div>
                    <h4>Mobil Uygulama Çözümleri</h4>
                    <p>IOS, MacOS, Android alanında çözümlerimiz ile bir çok platforma özel uygulamalar geliştiriyoruz.</p>
                  </div>
                </div><!-- End Feature Item -->
  
                <div class="col-md-6 icon-box">
                  <i class="bi bi-filter-circle"></i>
                  <div>
                    <h4>Özel Yazılım Çözümleri</h4>
                    <p>İhtiyaçlara özel uygulamalar geliştirip sizlerin hizmetine sunuyoruz.</p>
                  </div>
                </div><!-- End Feature Item -->
  
                <div class="col-md-6 icon-box">
                  <i class="bi bi-lightning-charge"></i>
                  <div>
                    <h4>Çoklu Dil Desteği</h4>
                    <p>Geliştirdiğimiz tüm uygulamaların çoklu dil desteği mevcuttur.</p>
                  </div>
                </div><!-- End Feature Item -->
  
                <div class="col-md-6 icon-box">
                  <i class="bi bi-patch-check"></i>
                  <div>
                    <h4>Geliştirme Sonrası Destek</h4>
                    <p>Geliştirdiğimiz tüm uygulamalarda yayın sonrasından itibaren 1 yıl boyunca ücretsiz teknik destek sağlıyoruz.</p>
                  </div>
                </div><!-- End Feature Item -->
  
              </div>
  
            </div>
  
            <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
              <img src="/template/assets/img/alt-features.png" class="img-fluid" alt="">
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /Alt Features Section -->

      <section id="clients" class="clients section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>İş Ortaklarımız</h2>
          <p>İş Ortaklarımız<br></p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="/images/vuejs.webp" class="img-fluid" alt="nubify-vuejs"></div>
              <div class="swiper-slide"><img src="/images/javascript.webp" class="img-fluid" alt="nubify-javascript"></div>
              <div class="swiper-slide"><img src="/images/laravel.jpg" class="img-fluid" alt="nubify-laravel"></div>
              <div class="swiper-slide"><img src="/images/mysql.png" class="img-fluid" alt="nubify-mysql"></div>
              <div class="swiper-slide"><img src="/images/pendc.png" class="img-fluid" alt="nubify-pendc"></div>
              <div class="swiper-slide"><img src="/images/php.png" class="img-fluid" alt="nubify-php"></div>
              <div class="swiper-slide"><img src="/images/reactnative.png" class="img-fluid" alt="nubify-reactnative"></div>
              <div class="swiper-slide"><img src="/images/ubuntu.svg" class="img-fluid" alt="nubify-ubuntu"></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
  
      </section><!-- /Clients Section -->
@endsection

