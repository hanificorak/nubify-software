<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="{{ $keywords }}" />
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/template/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/template/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/template/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title" content="{{ $title }}" />
    <meta property="twitter:description" content="{{ $description }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/template/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/template/assets/css/main.css" rel="stylesheet">
    <link href="/template/custom_temp.css?ver=1" rel="stylesheet">

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Nubify Software",
        "url": "https://nubifysoftware.com",
        "logo": "{{ asset('/template/assets/img/logo.png') }}",
        "description": "İşletmeler için özel yazılım çözümleri üreten teknoloji şirketi",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Avcılar, 1001. Sk. No:6A/1",
            "addressLocality": "Yenimahalle",
            "addressRegion": "Ankara",
            "postalCode": "06280",
            "addressCountry": "TR"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+90-542-671-1046",
            "contactType": "customer service",
            "email": "hanificorak@outlook.com",
            "availableLanguage": ["Turkish", "German", "English"]
        },
        "sameAs": [
            "https://twitter.com/nubifysoftware",
            "https://www.facebook.com/nubifysoftware",
            "https://www.linkedin.com/company/nubifysoftware",
            "https://www.instagram.com/nubifysoftware"
        ],
        "knowsAbout": [
            "Kurumsal Yazılım Geliştirme",
            "Özel Yazılım Çözümleri",
            "Bulut Teknolojileri",
            "Dijital Dönüşüm",
            "Sağlık Yazılımları",
            "İşletme Yazılımları"
        ]
    }
    </script>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Ana Sayfa",
            "item": "https://nubifysoftware.com"
        }]
    }
    </script>
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="/template/assets/img/logo.png" alt="Nubify Software Logo">
                <h1 class="sitename">Nubify Software</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Ana Sayfa</a></li>
                    <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">Hakkımızda</a></li>
                    <li><a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Hizmetler</a></li>
                    <li><a href="/products" class="{{ request()->is('products') ? 'active' : '' }}">Ürünlerimiz</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted flex-md-shrink-0" href="/contact">İletişim</a>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info" data-aos="fade-up" data-aos-delay="100">
                            <div class="footer-logo">
                                <h3>Nubify Software</h3>
                            </div>
                            <p class="footer-description">
                                İşletmeniz için özel yazılım çözümleri üreten teknoloji şirketi. Modern ve yenilikçi yaklaşımlarla işletmenizi geleceğe taşıyoruz.
                            </p>
                            <div class="footer-contact">
                                <div class="contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <div>
                                        <h4>Adres</h4>
                                        <p>Avcılar, 1001. Sk. No:6A/1, 06280 Yenimahalle/Ankara</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <div>
                                        <h4>Telefon</h4>
                                        <p><a href="tel:+905426711046">+90 542 671 1046</a></p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <div>
                                        <h4>E-posta</h4>
                                        <p><a href="mailto:hanificorak@outlook.com">hanificorak@outlook.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-links" data-aos="fade-up" data-aos-delay="200">
                            <h4>Hızlı Erişim</h4>
                            <ul>
                                <li><a href="/"><i class="bi bi-chevron-right"></i>Ana Sayfa</a></li>
                                <li><a href="/about"><i class="bi bi-chevron-right"></i>Hakkımızda</a></li>
                                <li><a href="/services"><i class="bi bi-chevron-right"></i>Hizmetlerimiz</a></li>
                                <li><a href="/products"><i class="bi bi-chevron-right"></i>Ürünlerimiz</a></li>
                                <li><a href="/contact"><i class="bi bi-chevron-right"></i>İletişim</a></li>
                                <li><a href="/kvkk"><i class="bi bi-chevron-right"></i>KVKK</a></li>
                                <li><a href="https://pflegeplan.online/"><i class="bi bi-chevron-right"></i>Pflege Plan | Hasta & Bakım Takibi</a></li>
                            </ul>
                        </div>
                    </div>

               

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-social" data-aos="fade-up" data-aos-delay="400">
                            <h4>Bizi Takip Edin</h4>
                            <p>Sosyal medyadan bizleri takip ederek güncel gelişmelerden haberdar olun.</p>
                            <div class="social-links">
                                <a href="https://twitter.com/nubifysoftware" target="_blank" rel="noopener" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://www.facebook.com/nubifysoftware" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/nubifysoftware" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/nubifysoftware" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <p>&copy; <span>{{ date('Y') }}</span> <strong>Nubify Software</strong>. Tüm hakları saklıdır.</p>
                    <div class="credits">
                        <a href="/kvkk">KVKK</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" aria-label="Sayfa başına dön"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/template/assets/vendor/php-email-form/validate.js"></script>
    <script src="/template/assets/vendor/aos/aos.js"></script>
    <script src="/template/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/template/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/template/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="/template/assets/js/main.js"></script>

    <!-- Cookie Consent Popup -->
    <div id="cookieConsent" class="cookie-consent">
        <div class="cookie-content">
            <p>Bu web sitesi, size en iyi deneyimi sunmak için çerezleri kullanmaktadır. Daha fazla bilgi için <a href="/kvkk">KVKK Aydınlatma Metni</a>'ni inceleyebilirsiniz.</p>
            <div class="cookie-buttons">
                <button id="acceptCookies" class="btn btn-primary">Kabul Et</button>
                <button id="rejectCookies" class="btn btn-outline-secondary">Reddet</button>
            </div>
        </div>
    </div>

    <style>
    
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cookieConsent = document.getElementById('cookieConsent');
            const acceptCookies = document.getElementById('acceptCookies');
            const rejectCookies = document.getElementById('rejectCookies');

            // Çerez tercihini kontrol et
            const cookiePreference = localStorage.getItem('cookiePreference');
            
            if (!cookiePreference) {
                // Tercih yoksa popup'ı göster
                setTimeout(() => {
                    cookieConsent.style.display = 'block';
                }, 1000);
            }

            // Kabul et butonu
            acceptCookies.addEventListener('click', function() {
                localStorage.setItem('cookiePreference', 'accepted');
                cookieConsent.style.display = 'none';
            });

            // Reddet butonu
            rejectCookies.addEventListener('click', function() {
                localStorage.setItem('cookiePreference', 'rejected');
                cookieConsent.style.display = 'none';
            });

            // Professional Navbar Functionality
            const header = document.getElementById('header');
            const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
            const navmenu = document.getElementById('navmenu');

            // Header scroll effect
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Mobile navigation toggle
            if (mobileNavToggle && navmenu) {
                const mobileNavClose = navmenu.querySelector('.mobile-nav-close');
                
                mobileNavToggle.addEventListener('click', function() {
                    navmenu.classList.add('mobile-nav-active');
                    document.body.classList.add('nav-open');
                });

                // Close mobile menu when clicking close button
                if (mobileNavClose) {
                    mobileNavClose.addEventListener('click', function() {
                        navmenu.classList.remove('mobile-nav-active');
                        document.body.classList.remove('nav-open');
                    });
                }

                // Close mobile menu when clicking on a link
                const navLinks = navmenu.querySelectorAll('a');
                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        navmenu.classList.remove('mobile-nav-active');
                        document.body.classList.remove('nav-open');
                    });
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (!navmenu.contains(event.target) && !mobileNavToggle.contains(event.target)) {
                        navmenu.classList.remove('mobile-nav-active');
                        document.body.classList.remove('nav-open');
                    }
                });
            }

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add loading animation to buttons
            const buttons = document.querySelectorAll('.btn-getstarted');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!this.href.includes('#')) {
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = '';
                        }, 150);
                    }
                });
            });
        });
    </script>
</body>
</html>
