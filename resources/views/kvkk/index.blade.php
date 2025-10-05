@extends('layout.app')

@section('content')
    <section class="kvkk-page py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="kvkk-content" data-aos="fade-up">
                        <h1 class="text-center mb-5">Kişisel Verilerin Korunması Kanunu Aydınlatma Metni</h1>

                        <div class="content-section mb-4">
                            <h2>1. Veri Sorumlusu</h2>
                            <p>Nubify Yazılım ("Nubify") olarak, 6698 sayılı Kişisel Verilerin Korunması Kanunu ("KVKK") kapsamında veri sorumlusu sıfatıyla, kişisel verilerinizi aşağıda açıklanan amaçlar doğrultusunda işleyebileceğimizi, kaydedebileceğimizi, sınıflandırabileceğimizi ve KVKK'da sayılan şartlara ve amaçlara uygun olarak aktarabileceğimizi sizlere bildirmek isteriz.</p>
                        </div>

                        <div class="content-section mb-4">
                            <h2>2. Kişisel Verilerin İşlenme Amacı</h2>
                            <p>Kişisel verileriniz, Nubify tarafından aşağıdaki amaçlar doğrultusunda işlenebilecektir:</p>
                            <ul>
                                <li>İletişim taleplerinize yanıt vermek</li>
                                <li>Hizmetlerimiz hakkında bilgilendirme yapmak</li>
                                <li>Yasal yükümlülüklerimizi yerine getirmek</li>
                                <li>Hizmet kalitemizi artırmak ve geliştirmek</li>
                                <li>Güvenlik ve dolandırıcılık kontrollerini gerçekleştirmek</li>
                            </ul>
                        </div>

                        <div class="content-section mb-4">
                            <h2>3. İşlenen Kişisel Veriler</h2>
                            <p>Nubify tarafından işlenen kişisel verileriniz şunlardır:</p>
                            <ul>
                                <li>Kimlik bilgileri (ad, soyad)</li>
                                <li>İletişim bilgileri (e-posta adresi, telefon numarası)</li>
                                <li>İletişim formu üzerinden paylaşılan mesaj içeriği</li>
                                <li>IP adresi ve konum bilgileri</li>
                            </ul>
                        </div>

                        <div class="content-section mb-4">
                            <h2>4. Kişisel Verilerin Aktarılması</h2>
                            <p>Kişisel verileriniz, yasal yükümlülüklerimiz kapsamında yetkili kamu kurum ve kuruluşlarına, hizmet aldığımız iş ortaklarımıza ve tedarikçilerimize, KVKK'nın 8. ve 9. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları çerçevesinde aktarılabilecektir.</p>
                        </div>

                        <div class="content-section mb-4">
                            <h2>5. Kişisel Veri Sahibinin Hakları</h2>
                            <p>KVKK'nın 11. maddesi uyarınca, kişisel verilerinizle ilgili olarak aşağıdaki haklara sahipsiniz:</p>
                            <ul>
                                <li>Kişisel verilerinizin işlenip işlenmediğini öğrenme</li>
                                <li>Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme</li>
                                <li>Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme</li>
                                <li>Yurt içinde veya yurt dışında kişisel verilerinizin aktarıldığı üçüncü kişileri bilme</li>
                                <li>Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme</li>
                                <li>KVKK'nın 7. maddesinde öngörülen şartlar çerçevesinde kişisel verilerinizin silinmesini veya yok edilmesini isteme</li>
                            </ul>
                        </div>

                        <div class="content-section mb-4">
                            <h2>6. Başvuru Hakkı</h2>
                            <p>Yukarıda belirtilen haklarınızı kullanmak için, kimliğinizi tespit edici gerekli bilgiler ile talep konunuzu içeren başvurunuzu, aşağıdaki yöntemlerden biriyle iletebilirsiniz:</p>
                            <ul>
                                <li>E-posta: hanificorak@outlook.com</li>
                                <li>Adres: Avcılar, 1001. Sk. No:6A/1, 06280 Yenimahalle/Ankara</li>
                            </ul>
                        </div>

                        <div class="content-section">
                            <h2>7. Değişiklikler</h2>
                            <p>Bu aydınlatma metni, Nubify tarafından güncellenebilir. Güncel metin, web sitemizde yayınlandığı tarihte yürürlük kazanır.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .kvkk-page {
            background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        }

        .kvkk-content {
            background: #ffffff;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .kvkk-content h1 {
            color: #1e293b;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .kvkk-content h2 {
            color: #3b82f6;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .content-section {
            margin-bottom: 2rem;
        }

        .content-section p {
            color: #475569;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .content-section ul {
            color: #475569;
            line-height: 1.8;
            padding-left: 1.5rem;
        }

        .content-section ul li {
            margin-bottom: 0.5rem;
        }

        @media (max-width: 768px) {
            .kvkk-content {
                padding: 1.5rem;
            }

            .kvkk-content h1 {
                font-size: 2rem;
            }

            .kvkk-content h2 {
                font-size: 1.3rem;
            }
        }
    </style>
@endsection 