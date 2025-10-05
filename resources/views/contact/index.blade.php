@extends('layout.app')

@section('content')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <!-- Section Title -->
            <div class="section-title text-center mb-5">
                <h2 class="display-5 fw-bold">İletişim</h2>
                <p class="text-muted">Bizimle iletişime geçin, size yardımcı olmaktan mutluluk duyarız.</p>
            </div>

            <!-- Contact Info Cards -->
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Adres</h4>
                            <p>Avcılar, 1001. Sk. No:6A/1, 06280 Yenimahalle/Ankara</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="info-content">
                            <h4>Telefon</h4>
                            <p>+90 542 671 1046</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="info-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Email</h4>
                            <p>hanificorak@outlook.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <form id="contactForm" class="contact-form">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Adınız ve soyadınız" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="E-Mail adresiniz" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Konu"
                                            required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" rows="6" placeholder="Mesajınız" required></textarea>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="kvkkConsent" name="kvkk_consent" required>
                                        <label class="form-check-label" for="kvkkConsent">
                                            <small>
                                                Kişisel verilerimin, 6698 sayılı Kişisel Verilerin Korunması Kanunu kapsamında, Nubify tarafından işlenmesine ve saklanmasına, bu kapsamda kişisel verilerimin Nubify tarafından işlenmesine ve üçüncü kişilerle paylaşılmasına, kişisel verilerimin işlenme amacı ve bu kapsamda kişisel verilerimin işlenmesine ilişkin detaylı bilgilere <a href="/kvkk" target="_blank">KVKK Aydınlatma Metni</a> üzerinden ulaşabileceğimi, okuduğumu ve anladığımı kabul ediyorum.
                                            </small>
                                        </label>
                                        <div class="invalid-feedback">
                                            Devam edebilmek için KVKK metnini okumanız ve onaylamanız gerekmektedir.
                                        </div>
                                    </div>
                                </div>
                                <div class="g-recaptcha mb-3" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" id="submitButton">
                                        <i class="bi bi-send me-2"></i>Gönder
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Alert Messages -->
                        <div class="alert alert-success mt-3" style="display: none;" id="successAlert">
                            Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.
                        </div>
                        <div class="alert alert-danger mt-3" style="display: none;" id="errorAlert">
                            Mesajınız gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.
                        </div>
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="col-lg-4">
                    <div class="additional-info" data-aos="fade-up" data-aos-delay="200">
                        <!-- Working Hours -->
                        <div class="info-section mb-4">
                            <h4 class="section-title-small">Çalışma Saatleri</h4>
                            <div class="working-hours">
                                <div class="time-item">
                                    <span class="day">Pazartesi - Cuma:</span>
                                    <span class="hours">09:00 - 18:00</span>
                                </div>
                                <div class="time-item">
                                    <span class="day">Cumartesi:</span>
                                    <span class="hours">10:00 - 14:00</span>
                                </div>
                                <div class="time-item">
                                    <span class="day">Pazar:</span>
                                    <span class="hours">Kapalı</span>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="info-section mb-4">
                            <h4 class="section-title-small">Sosyal Medya</h4>
                            <div class="social-links">
                                <a href="https://www.linkedin.com/company/nubifysoftware" target="_blank" rel="noopener"
                                    class="social-link"><i class="bi bi-linkedin"></i></a>
                                <a href="https://twitter.com/nubifysoftware" target="_blank" rel="noopener"
                                    class="social-link"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://www.facebook.com/nubifysoftware" target="_blank" rel="noopener"
                                    class="social-link"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/nubifysoftware" target="_blank" rel="noopener"
                                    class="social-link"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>

                        <!-- Quick Contact -->
                        <div class="info-section">
                            <h4 class="section-title-small">Hızlı İletişim</h4>
                            <p class="quick-contact-text">
                                Acil durumlar için bize direkt telefon numaramızdan ulaşabilirsiniz.
                                <br>
                                <a href="tel:+905426711046" class="quick-contact-link">
                                    <i class="bi bi-telephone-fill me-2"></i>+90 542 671 1046
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .contact {
            padding: 100px 0;
            background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        }

        .info-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .info-icon i {
            font-size: 1.5rem;
            color: #ffffff;
        }

        .info-content h4 {
            font-size: 1.1rem;
            color: #1e293b;
            margin: 0 0 0.5rem 0;
        }

        .info-content p {
            color: #64748b;
            margin: 0;
        }

        .additional-info {
            background: #ffffff;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .section-title-small {
            font-size: 1.2rem;
            color: #1e293b;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .working-hours {
            background: #f8fafc;
            border-radius: 10px;
            padding: 1rem;
        }

        .time-item {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .time-item:last-child {
            border-bottom: none;
        }

        .time-item .day {
            color: #475569;
            font-weight: 500;
        }

        .time-item .hours {
            color: #64748b;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3b82f6;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #3b82f6;
            color: #ffffff;
            transform: translateY(-3px);
        }

        .quick-contact-text {
            color: #64748b;
            margin: 0;
            line-height: 1.6;
        }

        .quick-contact-link {
            display: inline-flex;
            align-items: center;
            color: #3b82f6;
            text-decoration: none;
            font-weight: 600;
            margin-top: 0.5rem;
            transition: color 0.3s ease;
        }

        .quick-contact-link:hover {
            color: #2563eb;
        }

        .contact-form-wrapper {
            background: #ffffff;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .btn-primary {
            padding: 0.75rem 2rem;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
        }

        .btn-primary:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        @media (max-width: 768px) {
            .contact {
                padding: 60px 0;
            }

            .contact-form-wrapper,
            .additional-info {
                padding: 1.5rem;
            }

            .info-card {
                margin-bottom: 1rem;
            }
        }
    </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('contactForm');
                const submitButton = document.getElementById('submitButton');
                const successAlert = document.getElementById('successAlert');
                const errorAlert = document.getElementById('errorAlert');

                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Reset alerts
                    successAlert.style.display = 'none';
                    errorAlert.style.display = 'none';

                    // Reset form validation
                    form.querySelectorAll('.is-invalid').forEach(element => {
                        element.classList.remove('is-invalid');
                    });

                    // Disable submit button
                    submitButton.disabled = true;
                    submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Gönderiliyor...';

                    // Get form data
                    const formData = new FormData(form);

                    // Send AJAX request
                    fetch('/contact', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                // Show success message
                                successAlert.style.display = 'block';
                                form.reset();
                            } else {
                                // Show error message
                                errorAlert.textContent = data.message;
                                errorAlert.style.display = 'block';

                                // Show validation errors if any
                                if (data.errors) {
                                    Object.keys(data.errors).forEach(field => {
                                        const input = form.querySelector(`[name="${field}"]`);
                                        if (input) {
                                            input.classList.add('is-invalid');
                                            const feedback = input.nextElementSibling;
                                            if (feedback) {
                                                feedback.textContent = data.errors[field][0];
                                            }
                                        }
                                    });
                                }
                            }
                        })
                        .catch(error => {
                            // Show error message
                            errorAlert.textContent = 'Bir hata oluştu. Lütfen daha sonra tekrar deneyin.';
                            errorAlert.style.display = 'block';
                        })
                        .finally(() => {
                            // Re-enable submit button
                            submitButton.disabled = false;
                            submitButton.innerHTML = '<i class="bi bi-send me-2"></i>Gönder';
                        });
                });
            });
        </script>
@endsection
