@extends('layout.app')

@section('content')
<section id="products" class="products section-bg ">
    <div class="container" data-aos="fade-up">
        <!-- Section Title -->
        <div class="section-title text-center mb-2">
            <h2 class="display-5 fw-bold">Ürünlerimiz</h2>
            <p class="text-muted">Sağlık sektörü için özel olarak geliştirdiğimiz yazılım çözümlerimiz</p>
        </div>


        <div class="row g-4">
          <!-- Pflege Plan Card -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="product-card h-100">
                  <div class="product-icon">
                      <i class="bi bi-activity"></i>
                  </div>
                  <div class="product-content">
                      <h3 class="product-title">Pflege Plan</h3>
                      <p class="product-description">
                          Hasta Bakım Takibi uygulamamız ile hastalarınızın genel bakım takibini yapabilir, 
                          detaylı raporlama ve analiz özellikleriyle verimliliğinizi artırabilirsiniz.
                      </p>
                      <ul class="product-features">
                          <li><i class="bi bi-check-circle-fill"></i> Hasta Takibi</li>
                          <li><i class="bi bi-check-circle-fill"></i> Detaylı Raporlama</li>
                          <li><i class="bi bi-check-circle-fill"></i> Mobil Uyumlu</li>
                      </ul>
                      <a href="https://pflegeplan.online/" target="_blank" class="product-link ">
                          Uygulamaya Git <i class="bi bi-arrow-right"></i>
                      </a>
                  </div>
              </div>
          </div>

          <!-- Coming Soon Card -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
  <article class="product-card h-100 coming-soon" itemscope itemtype="https://schema.org/SoftwareApplication">
    <meta itemprop="applicationCategory" content="BusinessApplication" />
    <meta itemprop="operatingSystem" content="Android, iOS, Web" />
    <meta itemprop="publisher" content="Nubify Software" />

    <div class="product-icon" aria-hidden="true">
      <i class="bi bi-clock-history"></i>
    </div>

    <div class="product-content">
      <h2 class="product-title" itemprop="name">Smart Bakery</h2>

      <p class="product-description" itemprop="description">
        <strong>Smart Bakery</strong>, Almanya ve Türkiye’de aktif olarak kullanılan 
        <em>üretim takip</em> ve <em>fırın yönetim yazılımıdır</em>. 
        Mobil uygulama üzerinden üretim süreçlerinizi gerçek zamanlı olarak takip edin, 
        <strong>yapay zeka destekli üretim ve satış önerileri</strong>
      </p>

      <ul class="product-features">
                          <li><i class="bi bi-check-circle-fill"></i> Gerçek zamanlı üretim takibi</li>
                          <li><i class="bi bi-check-circle-fill"></i> Yapay zeka destekli analiz</li>
                          <li><i class="bi bi-check-circle-fill"></i> Android, iOS ve web uyumlu</li>
                      </ul>
  

      <div class="coming-soon-badge">
        <a href="/contact" class="text-white"><span>Demo Talebi</span></a>
      </div>
    </div>
  </article>
</div>


          <!-- Innovation Card -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="product-card h-100 innovation">
                  <div class="product-icon">
                      <i class="bi bi-lightbulb"></i>
                  </div>
                  <div class="product-content">
                      <h3 class="product-title">Yenilikçi Çözümler</h3>
                      <p class="product-description">
                          Sağlık sektörünün ihtiyaçlarına yönelik sürekli geliştirdiğimiz yenilikçi çözümlerimizle
                          yanınızdayız.
                      </p>
                      <a href="/contact" class="product-link">
                          İletişime Geç <i class="bi bi-arrow-right"></i>
                      </a>
                  </div>
              </div>
          </div>
      </div>

        <!-- Statistics Section -->
        <div class="row stats-section mb-5" data-aos="fade-up">
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-hospital"></i>
                    </div>
                    <div class="stat-number">100+</div>
                    <div class="stat-label">Mutlu Müşteri</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="stat-number">50K+</div>
                    <div class="stat-label">Aktif Kullanıcı</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <div class="stat-number">%98</div>
                    <div class="stat-label">Müşteri Memnuniyeti</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Teknik Destek</div>
                </div>
            </div>
        </div>


        <!-- Featured Features Section -->
        <div class="featured-features mt-5" data-aos="fade-up">
            <h3 class="text-center mb-4">Öne Çıkan Özellikler</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-shield-check"></i>
                        <h4>Güvenli Altyapı</h4>
                        <p>En son güvenlik standartlarına uygun, şifrelenmiş veri transferi</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-phone"></i>
                        <h4>Mobil Uyumluluk</h4>
                        <p>Tüm cihazlarda sorunsuz çalışan responsive tasarım</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-cloud"></i>
                        <h4>Bulut Teknolojisi</h4>
                        <p>Yüksek performanslı bulut altyapısı ile kesintisiz hizmet</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="testimonials mt-5" data-aos="fade-up">
            <h3 class="text-center mb-4">Müşteri Yorumları</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <i class="bi bi-quote"></i>
                            <p>Pflege Plan ile hasta takibimiz çok daha kolay ve verimli hale geldi. Kesinlikle tavsiye ediyorum.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="https://ui-avatars.com/api/?name=Dr.+Ahmet&background=3b82f6&color=fff" alt="Dr. Ahmet">
                            <div>
                                <h5>Dr. Ahmet Yılmaz</h5>
                                <p>Özel Hastane</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <i class="bi bi-quote"></i>
                            <p>Kullanıcı dostu arayüzü ve 7/24 destek hizmeti ile beklentilerimizin üzerinde bir deneyim yaşadık.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="https://ui-avatars.com/api/?name=Ayşe+K&background=3b82f6&color=fff" alt="Ayşe K.">
                            <div>
                                <h5>Ayşe Kaya</h5>
                                <p>Hasta Bakım Merkezi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <i class="bi bi-quote"></i>
                            <p>Verimliliğimizi önemli ölçüde artıran bu yazılım için Nubify ekibine teşekkürler.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="https://ui-avatars.com/api/?name=Mehmet+S&background=3b82f6&color=fff" alt="Mehmet S.">
                            <div>
                                <h5>Mehmet Şahin</h5>
                                <p>Sağlık Danışmanı</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection