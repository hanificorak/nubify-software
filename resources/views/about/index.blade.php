@extends('layout.app')

@section('content')

<section id="about" class="about section">

    <div class="container" data-aos="fade-up">
        <br/>
        <br/>
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Hakkımızda</h2>
            <p>Hakkımızda<br></p>
        </div><!-- End Section Title -->
    
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
@endsection