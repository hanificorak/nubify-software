<?php

namespace App\Http\Controllers;

class PageController
{
    public function index()
    {
        view()->share('title', "Nubify - Modern Yazılım Çözümleri");
        view()->share('description', 'Nubify, işletmeler için özel olarak geliştirilmiş bulut tabanlı yazılım çözümleri sunar. Sağlık sektörü, kurumsal firmalar ve diğer sektörler için profesyonel yazılım hizmetleri.');
        view()->share('keywords', 'yazılım çözümleri, bulut yazılım, kurumsal yazılım, sağlık yazılımı, işletme yazılımları, özel yazılım geliştirme');
        return view('home.index');
    }

    public function about()
    {
        view()->share('title', "Hakkımızda - Nubify Yazılım Teknolojileri");
        view()->share('description', 'Nubify olarak 10 yılı aşkın deneyimimizle, işletmelere özel yenilikçi ve güvenilir yazılım çözümleri sunuyoruz. Misyonumuz ve vizyonumuz hakkında detaylı bilgi edinin.');
        view()->share('keywords', 'nubify hakkında, yazılım teknolojileri şirketi, özel yazılım geliştirme, kurumsal yazılım çözümleri, işletme yazılımları');
        return view('about.index');
    }

    public function services()
    {
        view()->share('title', "Hizmetlerimiz - Nubify Yazılım Çözümleri");
        view()->share('description', 'İşletmeler için özel olarak geliştirdiğimiz yazılım çözümlerimiz: Kurumsal yazılımlar, özel yazılım geliştirme, bulut çözümleri ve dijital dönüşüm hizmetleri. Detaylı hizmet bilgilerimiz için tıklayın.');
        view()->share('keywords', 'yazılım hizmetleri, kurumsal yazılım, özel yazılım geliştirme, bulut çözümleri, dijital dönüşüm, işletme yazılımları');
        return view('services.index');
    }

    public function contact()
    {
        view()->share('title', "İletişim - Nubify Yazılım Teknolojileri");
        view()->share('description', 'Nubify ile iletişime geçin. Ankara ofisimizden bize ulaşabilir, yazılım çözümlerimiz hakkında detaylı bilgi alabilirsiniz. 7/24 teknik destek hizmetimiz mevcuttur.');
        view()->share('keywords', 'nubify iletişim, yazılım şirketi iletişim, kurumsal yazılım destek, özel yazılım geliştirme iletişim, yazılım teknolojileri iletişim');
        return view('contact.index');
    }

    public function products()
    {
        return view('products.index', [
            'title' => 'Ürünlerimiz - Nubify Yazılım Çözümleri',
            'description' => 'Nubify\'ın sunduğu yazılım çözümleri ve ürünleri hakkında detaylı bilgi edinin.',
            'keywords' => 'yazılım çözümleri, kurumsal yazılım, özel yazılım, bulut teknolojileri, dijital dönüşüm'
        ]);
    }

    public function kvkk()
    {
        return view('kvkk.index', [
            'title' => 'KVKK Aydınlatma Metni - Nubify',
            'description' => 'Nubify Kişisel Verilerin Korunması Kanunu (KVKK) kapsamında kişisel verilerinizin işlenmesi hakkında aydınlatma metni.',
            'keywords' => 'kvkk, kişisel verilerin korunması, veri güvenliği, gizlilik politikası, aydınlatma metni'
        ]);
    }
}
