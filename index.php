<?php
$title = 'Kenzo Panel';
$description = 'Hosting dan Web Phising Harga Murah Terbaik di Indonesia';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $description?> - <?php echo $title?></title>
  <meta content="<?php echo $title?>" name="description">
  <meta content="<?php echo $title?>" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><?php echo $title;?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#features">Fitur</a></li>
          <li><a href="#gallery">Tampilan</a></li>
          <li><a href="#pricing">Harga</a></li>
          <li style="display: none;"><a href="#faq">F.A.Q</a></li>
          <li><a href="#contact">Kontak</a></li>

          <li class="get-started"><a href="#features">Mulai</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1><?php echo $title;?></h1>
            <h2>Hosting dan Web Phising Harga Murah Terbaik di Indonesia</h2>
            <a href="produk" class="download-btn"><i class="fas fa-list"></i></i> Daftar Produk</a>
            <a href="demo" class="download-btn"><i class="fas fa-eye"></i> Demo Web</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Fitur</h2>
          <p>Layanan yang akan anda dapatkan ketika membeli produk Kami.</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>Produk Bervariasi</h4>
                  <p>Anda bisa memilih produk yang sesuai dengan kebutuhan dan budget Anda</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-atom"></i>
                  <h4>Layanan Berkualitas</h4>
                  <p>Kami menyediakan berbagai produk terbaik dan berkualitas untuk kebutuhan Anda.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>Desain Menarik</h4>
                  <p>Template yang Kami sediakan merupakan template original buatan Kami dan Redesign dari template lain yang dibuat semenarik mungkin.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-money"></i>
                  <h4>Harga Bersaing</h4>
                  <p>Harga produk Kami bersaing dengan harga pasar</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Keamanan</h4>
                  <p>Produk yang Kami jual aman dari virus, malware, keylogger, iklan dan Double Email.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Bantuan</h4>
                  <p>Kami siap membantu Anda jika Anda mengalami kesulitan atau tidak mengerti terkait produk yang kami sediakan.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/features.svg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Tampilan Game Free Fire, Pubg Mobile, Clash of Clans, dll.</h3>
            <p class="font-italic">
              Kalian bisa memilih template game seperti Free Fire, Pubg Mobile, Clash of Clans, dll.<br>Dengan berbagai fitur:
            </p>
            <ul>
              <li><i class="icofont-check"></i> Tampilan sangat mirip dengan aslinya.</li>
              <li><i class="icofont-check"></i> Pengunjung menjadi mudah tertipu oleh tampilan.</li>
              <li><i class="icofont-check"></i> Template aman dari virus, malware, iklan.</li>
              <li><i class="icofont-check"></i> Tidak akan double email, result hanya dikirim ke email anda sendiri.</li>
            </ul>
            <p>
              Tunggu apalagi ayo buruan order WHM, cPanel, Script Template dan Web Phising sekarang juga hanya di <?php echo $title;?>.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Tampilan Sosial Media Facebook, Instagram, dll.</h3>
            <p class="font-italic">
              Kalian bisa memilih template sosial media seperti Facebook, Instagram, Google Mail, dll.<br>Dengan berbagai fitur:
            </p>
            <ul>
              <li><i class="icofont-check"></i> Tampilan sangat mirip dengan aslinya.</li>
              <li><i class="icofont-check"></i> Pengunjung menjadi mudah tertipu oleh tampilan.</li>
              <li><i class="icofont-check"></i> Template aman dari virus, malware, iklan.</li>
              <li><i class="icofont-check"></i> Tidak akan double email, result hanya dikirim ke email anda sendiri.</li>
            </ul>
            <p>
              Tunggu apalagi ayo buruan order WHM, cPanel, Script Template dan Web Phising sekarang juga hanya di <?php echo $title;?>.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Tampilan Booking Hotel.</h3>
            <p class="font-italic">
              Kalian bisa menggunakan template booking hotel. Template ini sangat berguna bagi Anda yang suka ngehode di MiChat, dijamin victim anda akan percaya. Dengan berbagai fitur:
            </p>
            <ul>
              <li><i class="icofont-check"></i> Tampilan sangat mirip dengan aslinya.</li>
              <li><i class="icofont-check"></i> Pengunjung menjadi mudah tertipu oleh tampilan.</li>
              <li><i class="icofont-check"></i> Template aman dari virus, malware, iklan.</li>
              <li><i class="icofont-check"></i> Tidak akan double email, result hanya dikirim ke email anda sendiri.</li>
            </ul>
            <p>
              Tunggu apalagi ayo buruan order WHM, cPanel, Script Template dan Web Phising sekarang juga hanya di <?php echo $title;?>.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Tampilan Custom Sesuai Keinginan.</h3>
            <p class="font-italic">
              Kalian bisa custom tampilan Web P anda sesuai keinginan, tetapi akan memakan waktu yang lebih lama dari template yang sudah disediakan. Dengan berbagai fitur:
            </p>
            <ul>
              <li><i class="icofont-check"></i> Tampilan sangat mirip dengan aslinya.</li>
              <li><i class="icofont-check"></i> Pengunjung menjadi mudah tertipu oleh tampilan.</li>
              <li><i class="icofont-check"></i> Template aman dari virus, malware, iklan.</li>
              <li><i class="icofont-check"></i> Tidak akan double email, result hanya dikirim ke email anda sendiri.</li>
            </ul>
            <p>
              Tunggu apalagi ayo buruan order WHM, cPanel, Script Template dan Web Phising sekarang juga hanya di <?php echo $title;?>.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Tampilan</h2>
          <p>Berikut adalah tampilan produk yang ada di <?php echo $title;?>.</p>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up">
          <a href="assets/img/gallery/gallery-1.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-1.png" alt=""></a>
          <a href="assets/img/gallery/gallery-2.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-2.png" alt=""></a>
          <a href="assets/img/gallery/gallery-3.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-3.png" alt=""></a>
          <a href="assets/img/gallery/gallery-4.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-4.png" alt=""></a>
          <a href="assets/img/gallery/gallery-5.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-5.png" alt=""></a>
          <a href="assets/img/gallery/gallery-6.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-6.png" alt=""></a>
          <a href="assets/img/gallery/gallery-7.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-7.png" alt=""></a>
          <a href="assets/img/gallery/gallery-8.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-8.png" alt=""></a>
          <a href="assets/img/gallery/gallery-9.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-9.png" alt=""></a>
          <a href="assets/img/gallery/gallery-10.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-10.png" alt=""></a>
          <a href="assets/img/gallery/gallery-11.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-11.png" alt=""></a>
          <a href="assets/img/gallery/gallery-12.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-12.png" alt=""></a>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimoni</h2>
          <p>Testimoni yang ditampilkan disini hanyalah beberapa, sudah banyak pembeli yang membeli WHM,cPanel, Script Web P, Web P di <?php echo $title;?>. Tetapi Kami tidak dapat memperlihatkan semuanya karena tidak akan cukup :).</p>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up">
          <a href="assets/img/gallery/gallery-1.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-1.png" alt=""></a>
          <a href="assets/img/gallery/gallery-2.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-2.png" alt=""></a>
          <a href="assets/img/gallery/gallery-3.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-3.png" alt=""></a>
          <a href="assets/img/gallery/gallery-4.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-4.png" alt=""></a>
          <a href="assets/img/gallery/gallery-5.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-5.png" alt=""></a>
          <a href="assets/img/gallery/gallery-6.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-6.png" alt=""></a>
          <a href="assets/img/gallery/gallery-7.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-7.png" alt=""></a>
          <a href="assets/img/gallery/gallery-8.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-8.png" alt=""></a>
          <a href="assets/img/gallery/gallery-9.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-9.png" alt=""></a>
          <a href="assets/img/gallery/gallery-10.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-10.png" alt=""></a>
          <a href="assets/img/gallery/gallery-11.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-11.png" alt=""></a>
          <a href="assets/img/gallery/gallery-12.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-12.png" alt=""></a>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Harga</h2>
          <p>Untuk harga produk di <?php echo $title;?> sesuai dengan permintaan pasar. Untuk script tampilan custom harga bisa negosiasi dengan Owner <?php echo $title;?>.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="fade-right">
            <h3>Web Phising</h3>
            <h4>10K - 30K<span>Aktif 1 bulan</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Support</li>
              <li><i class="bx bx-check"></i> Garansi (khusus 20k-30k)</li>
              <li><i class="bx bx-check"></i> Gratis 1 script</li>
              <li><i class="bx bx-check"></i> Gratis 1 subdomain (pilih)</li>
              <li>-</li>
            </ul>
            <a href="produk" class="get-started-btn">Beli</a>
          </div>

          <div class="col-lg-4 box" data-aos="fade-left">
            <h3>WHM</h3>
            <h4>30K - 60K<span>Aktif 1 bulan</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Support</li>
              <li><i class="bx bx-check"></i> WHM Mini</li>
              <li><i class="bx bx-check"></i> WHM Medium</li>
              <li><i class="bx bx-check"></i> WHM Extra</li>
              <li><i class="bx bx-check"></i> WHM Super</li>
            </ul>
            <a href="produk" class="get-started-btn">Beli</a>
          </div>

          <div class="col-lg-4 box" data-aos="fade-left">
            <h3>Cpanel</h3>
            <h4>10K - 30K<span>Aktif 1 bulan</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Support</li>
              <li><i class="bx bx-check"></i> cPanel Mini</li>
              <li><i class="bx bx-check"></i> cPanel Medium</li>
              <li><i class="bx bx-check"></i> cPanel Extra</li>
              <li><i class="bx bx-check"></i> cPanel Super</li>
            </ul>
            <a href="produk" class="get-started-btn">Beli</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg" style="display: none;">
      <div class="container">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info" data-aos="fade-up">
                <i class="bx bxl-telegram"></i>
                <h4>Telegram</h4>
                <p>@kenzo_id,<br><a href="https://t.me/kenzo_id" target="_blank">https://t.me/kenzo_id</a></p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bxl-whatsapp"></i>
                <h4>Whatsapp</h4>
                <p>+62895358575613<br><a href="https://bit.ly/39dHoEv" target="_blank">https://bit.ly/39dHoEv</a></p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-envelope"></i>
                <h4>Email</h4>
                <p>pankiller257@gmail.com<br></p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-time-five"></i>
                <h4>Jam Kerja</h4>
                <p>Sen - Jum: 8 Pagi - 9 Malam<br>Sab - Min: 9 Pagi - 11 Malam</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Nama" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea placeholder="Pesan" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Kamu telah terkirim. Terimakasih</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3><?php echo $title;?></h3>
            <p>
              Menyediakan kebutuhan <br>
              hosting dan Web P anda <br><br>
              <strong>Telegram:</strong> @kenzo_id<br>
              <strong>Email:</strong> pankiller257@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Halaman</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Produk</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Phising</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">WHM</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">cPanel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Script Web Phising</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Sosial Media</h4>
            <p>Ikuti sosial media kami untuk mengetahui informasi terkini</p>
            <div class="social-links mt-3">
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="telegram"><i class="bx bxl-telegram"></i></a>
              <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $title;?></span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>