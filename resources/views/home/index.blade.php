@extends('layout.app')

@section('content')
    <section id="hero" class="hero section position-relative overflow-hidden">
        <!-- Background Elements -->
        <div class="hero-bg-elements">
            <div class="hero-shape-1"></div>
            <div class="hero-shape-2"></div>
            <div class="hero-shape-3"></div>
        </div>

        <div class="container position-relative">
            <div class="row gy-4 align-items-center min-vh-100">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <div class="hero-content" data-aos="fade-up">
                        <div class="hero-badge mb-4">
                            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                                <i class="bi bi-stars me-2"></i>Yenilikçi Teknoloji Çözümleri
                            </span>
                        </div>
                        <h1 class="hero-title display-4 fw-bold mb-4">
                            Sağlık ve Kurumsal Yazılım Çözümleri
                            <span class="text-gradient">Nubify Software</span>
                        </h1>
                        <div class="hero-divider mb-4">
                            <div class="divider-line"></div>
                        </div>
                        <p class="hero-description lead mb-5" data-aos="fade-up" data-aos-delay="100">
                            Nubify Software, 2024 yılında kurulmuş, sağlık sektörü ve kurumsal firmalar için özel yazılım
                            çözümleri üreten bir teknoloji şirketidir.
                            Almanya ve Türkiye'de bulut tabanlı sağlık yazılımları, hasta takip sistemleri ve kurumsal
                            yönetim yazılımları ile sektörde öncü çözümler sunuyoruz.
                        </p>
                        <div class="hero-cta d-flex flex-column flex-md-row gap-3" data-aos="fade-up" data-aos-delay="200">
                            <a href="/contact" class="btn btn-primary btn-lg px-4 py-3 d-inline-flex align-items-center"
                                title="Nubify Software ile İletişime Geçin">
                                <span>Ücretsiz Danışmanlık</span>
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <a href="/services"
                                class="btn btn-outline-primary btn-lg px-4 py-3 d-inline-flex align-items-center"
                                title="Nubify Software Hizmetleri">
                                <span>Hizmetlerimiz</span>
                                <i class="bi bi-chevron-right ms-2"></i>
                            </a>
                        </div>
                        <div class="hero-features mt-5" data-aos="fade-up" data-aos-delay="300">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="feature-card p-3 rounded-4 bg-white shadow-sm">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="feature-icon bg-primary-subtle rounded-3 p-2">
                                                <i class="bi bi-cloud-check text-primary"></i>
                                            </div>
                                            <span class="fw-medium">Bulut Tabanlı Çözümler</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-card p-3 rounded-4 bg-white shadow-sm">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="feature-icon bg-primary-subtle rounded-3 p-2">
                                                <i class="bi bi-headset text-primary"></i>
                                            </div>
                                            <span class="fw-medium">7/24 Teknik Destek</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-card p-3 rounded-4 bg-white shadow-sm">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="feature-icon bg-primary-subtle rounded-3 p-2">
                                                <i class="bi bi-phone text-primary"></i>
                                            </div>
                                            <span class="fw-medium">Web/Mobil Uygulama</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <div class="hero-image-wrapper position-relative">
                        <img src="/template/assets/img/hero-img.png" class="img-fluid animated ms-5"
                            alt="Nubify Software Sağlık ve Kurumsal Yazılım Çözümleri" loading="eager">
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="floating-elements">
            <div class="floating-element-1"></div>
            <div class="floating-element-2"></div>
            <div class="floating-element-3"></div>
        </div>
    </section>



    @include('components.about')

  @include('components.services')

    <section id="stats" class="stats section position-relative overflow-hidden">
        <!-- Background Elements -->
        <div class="stats-bg-elements">
            <div class="stats-shape-1"></div>
            <div class="stats-shape-2"></div>
        </div>

        <div class="container position-relative">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stats-card">
                        <div class="stats-icon-wrapper">
                            <div class="stats-icon">
                                <i class="bi bi-emoji-smile"></i>
                            </div>
                        </div>
                        <div class="stats-content">
                            <div class="stats-number">
                                <span class="counter" data-purecounter-start="0" data-purecounter-end="549"
                                    data-purecounter-duration="2">0</span>
                                <span class="plus">+</span>
                            </div>
                            <h4>Memnun Kullanıcı</h4>
                            <div class="stats-progress">
                                <div class="progress-bar" style="width: 95%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stats-card">
                        <div class="stats-icon-wrapper">
                            <div class="stats-icon">
                                <i class="bi bi-journal-richtext"></i>
                            </div>
                        </div>
                        <div class="stats-content">
                            <div class="stats-number">
                                <span class="counter" data-purecounter-start="0" data-purecounter-end="140"
                                    data-purecounter-duration="2">0</span>
                                <span class="plus">+</span>
                            </div>
                            <h4>Uygulama</h4>
                            <div class="stats-progress">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stats-card">
                        <div class="stats-icon-wrapper">
                            <div class="stats-icon">
                                <i class="bi bi-headset"></i>
                            </div>
                        </div>
                        <div class="stats-content">
                            <div class="stats-number">
                                <span class="counter" data-purecounter-start="0" data-purecounter-end="841"
                                    data-purecounter-duration="2">0</span>
                                <span class="plus">+</span>
                            </div>
                            <h4>Saat Destek</h4>
                            <div class="stats-progress">
                                <div class="progress-bar" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stats-card">
                        <div class="stats-icon-wrapper">
                            <div class="stats-icon">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>
                        <div class="stats-content">
                            <div class="stats-number">
                                <span class="counter" data-purecounter-start="0" data-purecounter-end="15"
                                    data-purecounter-duration="2">0</span>
                                <span class="plus">+</span>
                            </div>
                            <h4>Ekip</h4>
                            <div class="stats-progress">
                                <div class="progress-bar" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    @include('components.features')

    <section id="alt-features" class="alt-features section">
        <div class="container">
            <div class="row gy-5">
                <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">
                    <div class="row align-self-center gy-5">
                        <div class="col-md-6 icon-box">
                            <i class="bi bi-award"></i>
                            <div>
                                <h4>Sağlık Teknolojileri</h4>
                                <p>Hasta takip sistemleri, klinik yönetim yazılımları ve sağlık kurumları için özel dijital
                                    çözümler geliştiriyoruz.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <div>
                                <h4>Kurumsal Dijital Dönüşüm</h4>
                                <p>İşletmenizin ihtiyaçlarına özel, ölçeklenebilir ve güvenli kurumsal yazılım çözümleri
                                    sunuyoruz.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-dribbble"></i>
                            <div>
                                <h4>Mobil Uygulama Geliştirme</h4>
                                <p>iOS, Android ve macOS platformları için native ve hibrit mobil uygulamalar geliştirerek
                                    işletmenizi dijital dünyaya taşıyoruz.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-filter-circle"></i>
                            <div>
                                <h4>Özel Yazılım Projeleri</h4>
                                <p>Modern teknolojiler kullanarak, işletmenizin ihtiyaçlarına özel, sürdürülebilir ve
                                    yenilikçi yazılım çözümleri üretiyoruz.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-lightning-charge"></i>
                            <div>
                                <h4>Çok Dilli Sistem Entegrasyonu</h4>
                                <p>Tüm uygulamalarımızda çoklu dil desteği ve yerelleştirme özellikleri ile global pazarlara
                                    açılmanızı sağlıyoruz.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-patch-check"></i>
                            <div>
                                <h4>7/24 Teknik Destek</h4>
                                <p>Geliştirdiğimiz tüm uygulamalarda yayın sonrası 1 yıl boyunca ücretsiz teknik destek ve
                                    bakım hizmeti sunuyoruz.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up"
                    data-aos-delay="100">
                    <img src="/template/assets/img/alt-features.png" class="img-fluid"
                        alt="Nubify Software Dijital Çözümler">
                </div>
            </div>
        </div>
    </section><!-- /Alt Features Section -->

    <section id="clients" class="clients section position-relative overflow-hidden">
        <!-- Background Elements -->
        <div class="clients-bg-elements">
            <div class="clients-shape-1"></div>
            <div class="clients-shape-2"></div>
        </div>

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="section-badge mb-3">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                    <i class="bi bi-handshake me-2"></i>İş Ortaklarımız
                </span>
            </div>
            <h2 class="display-5 fw-bold mb-3">Teknoloji Ortaklarımız</h2>
            <p class="lead text-muted">En son teknolojileri kullanarak en iyi çözümleri sunuyoruz</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="clients-wrapper">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 1000,
                            "autoplay": {
                                "delay": 3000,
                                "disableOnInteraction": false
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
                        <div class="swiper-slide">
                            <div class="client-card">
                                <img src="/images/vuejs.webp" class="img-fluid"
                                    alt="Vue.js - Nubify Software Teknoloji Ortağı">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-card">
                                <img src="/images/javascript.webp" class="img-fluid"
                                    alt="JavaScript - Nubify Software Teknoloji Ortağı">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-card">
                                <img src="/images/laravel.jpg" class="img-fluid"
                                    alt="Laravel - Nubify Software Teknoloji Ortağı">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-card">
                                <img src="/images/mysql.png" class="img-fluid"
                                    alt="MySQL - Nubify Software Teknoloji Ortağı">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-card">
                                <img src="/images/pendc.png" class="img-fluid"
                                    alt="Pendc - Nubify Software Teknoloji Ortağı">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-card">
                                <img src="/images/php.png" class="img-fluid"
                                    alt="PHP - Nubify Software Teknoloji Ortağı">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-card">
                                <img src="/images/reactnative.png" class="img-fluid"
                                    alt="React Native - Nubify Software Teknoloji Ortağı">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-card">
                                <img src="/images/ubuntu.svg" class="img-fluid"
                                    alt="Ubuntu - Nubify Software Teknoloji Ortağı">
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5 mb-5" />
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.getAttribute('data-purecounter-end'));
                        let count = 0;
                        const duration = 2000; // 2 seconds
                        const increment = target / (duration / 16); // 60fps

                        const updateCount = () => {
                            count += increment;
                            if (count < target) {
                                counter.textContent = Math.floor(count);
                                requestAnimationFrame(updateCount);
                            } else {
                                counter.textContent = target;
                            }
                        };

                        updateCount();
                        observer.unobserve(counter);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>
@endsection
