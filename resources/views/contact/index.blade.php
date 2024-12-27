@extends('layout.app')

@section('content')
<br/>
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>İletişim</h2>
      <p>Bize Ulaşın</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Adres</h3>
                <p></p>
                <p></p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Telefon</h3>
                <p></p>
                <p></p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>hanificorak@outlook.com</p>
              </div>
            </div><!-- End Info Item -->

      
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Adınız ve soyadınız" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="E-Mail adresiniz" required="">
              </div>

              <div class="col-12">
                <input type="text" class="form-control" name="subject" placeholder="Konu" required="">
              </div>

              <div class="col-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Mesajınız" required=""></textarea>
              </div>

              <div class="col-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button class="btn btn-primary" type="button" onclick="alert('Hazırlanıyor...')">Gönder</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->
@endsection