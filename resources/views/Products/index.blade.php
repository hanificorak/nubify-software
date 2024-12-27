@extends('layout.app')

@section('content')
<br/>
<section id="services" class="services section">
<br/>
<br/>
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Ürünlerimiz</h2>
      <p>Ürünlerimiz<br></p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4 ">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item item-cyan position-relative">
            <i class="bi bi-activity icon"></i>
            <h3>Pflege Plan</h3>
            <p>Hasta Bakım Takibi uygulamamız ile hastalarınızın genel bakım takibini yapabilir, raporlama yapabilirsiniz.</p>
            <a target="_blank" href="https://pflegeplan.online/" class=" btn btn-primary read-more stretched-link"><span style="color:white">Uygulamaya Git</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

       

      </div>

    </div>

  </section><!-- /Services Section -->

@endsection