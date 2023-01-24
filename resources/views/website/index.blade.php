
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>دليل المستشفيات</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hospital.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/hospital.png" alt="">

      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الرئيـــــسية</a></li>
          <li><a class="nav-link scrollto" href="#about">حولـــــنا</a></li>
          <li><a class="nav-link scrollto" href="#services">الشركـــــات الطبيـــــة</a></li>
          <li><a class="nav-link scrollto" href="#pricing">المستشفيات</a></li>
          <li><a class="nav-link scrollto" href="#contact">اتصـــــل بـــــنا</a></li>
          <li><a class="nav-link scrollto" href="login.html"> تسجيل الدخول</a></li>
          <li><a class="getstarted scrollto" href="reservation.html">أحجز الـآن</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">دليل المستشفيات </h1>
          <h2 data-aos="fade-up" data-aos-delay="400"> بوابة معلومات للمستشفيات يقدم لك دليل المستشفيات خيارات مرنة لايجاد ومقارنة المستشفيات المناسبة في منطقتك مع وظائف البحث الشاملة</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-right text-lg-start">
              <a href="reservation.html" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>أحجز الآن</span>
                <i class="bi bi-arrow-left"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h1>من نحن...</h1>
              <h2> نقدم العروض المتنوعة والخدمات الفردية للمستشفيات والشركات الطبية..اساس المعلومات للمحادثة الموثوقة بين الطبيب والمريض</h2>
              <!--<p>
                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
              </p>-->
              <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>
    <!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">

          <p>الشركات الطبية</p>
        </header>
                <div class="row">
                  @foreach ($companies as $item)
                  <div class="col-4" data-aos="fade-up" data-aos-delay="10">
                    <div class="service-box blue">
                      <img src="{{$item->photo}}" class="img-fluid" alt="">
                      <h3 >{{$item->company_name}}</h3>
                      <p>للأجهزة والمعدات الطبية بالجملة والتجزئة</p>
                      <a href="{{url('detail/'.$item->id)}}" class="read-more"><span> تفاصيل</span> <i class="bi bi-arrow-left"></i></a>
                    </div>
                  </div>
                  @endforeach 
                </div>
        </div>
    </section>
    <!-- End Services Section -->


    <!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">

  <div class="container" data-aos="fade-up">

    <header class="section-header">

      <p>المستشفيات</p>
    </header>
        <div class="row">
          @foreach ($hospitals as $item)
          <div class="col-3" data-aos="zoom-in" data-aos-delay="10">
            <div class="box">
              <img src="/img/rc.png" class="img-fluid" alt="">
              <ul>
                <li>{{$item->hospital_name}}</li>
                <li>{{$item->hospital_address}}</li>
                <li>{{$item->phone}}</li>
              </ul>
              <a href="hospitals details.html" class="btn-buy">تفاصيل</a>
            </div>
          </div>
          @endforeach 
        </div>
</section>
<!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" >

      <div class="container" data-aos="fade-up">

        <header class="section-header">

          <p>تواصل معنا</p>
        </header>

        <div class="row gy-4" style="align-items: center;">

          <div class="col-lg">
            <form action="forms/contact.php" method="post" class="php-email-form" >
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" الاسم="الاسم" class="form-control" placeholder="الاسم" required>
                </div>

                <div class="col-md-6 ">
                  <input type="البريد الالكتروني" class="form-control" name="البريد الالكتروني" placeholder="البريد الالكتروني" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="رسالة" rows="6" placeholder="رسالة" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">تحميل</div>
                  <div class="error-message"></div>
                  <div class="sent-message">تم ارسال رسالتك شكرا</div>

                  <button type="submit">ارسال</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>دليل المستشفيات</span>
            </a>
            <p>للتواصل معناعبر مواقع التواصل الاجتماع</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter" style="margin-right:20px;"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>روابط سريعة </h4>
            <ul>
              <li><i class="bi bi-chevron-left"></i> <a href="index.html">الرئيـــــسية</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">حولـــــنا</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">الشركات الطبية</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">المستشفيات</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">اتصـــــل بـــــنا</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>خدماتنا</h4>
            <ul>
              <li><i class="bi bi-chevron-left"></i> <a href="#">تشخيص طبي</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">طلب تحويل</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">طلب استشارة</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">حجز موعد مع طبيب</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">البحث عن طبيب معين</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>اتصـــــل بـــــنا</h4>
            <p>
              بحري <br>
              الخرطوم<br>
              السودان <br><br>
              <strong>هاتف: </strong>6753<br>
              <strong>البريد الالكتروني: </strong>n4am@info.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        All Rights Reserved To N4AM &copy;2022<strong><span></span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>






{{-- 
<main id="main">


  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details" style="padding: 150px;">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/mr2.jpg" alt="" width="200px">
              </div>

             
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>{{$companies['company_name']}}</h3>
            <ul>
              <li>شركة خدمات طبية</li>
              <li>لدينا جميع المستلزمات الطبية وبأفضل الاسعار</li>
              <li>هاتف: 2860</li>
              <li>الموقع: الخرطوم بحري</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2></h2>
            <p>
              تأسست ام ار ميديكال  في عام 2008 بهدف ورؤية أن تصبح أول مركز للتجارة الإلكترونية لجميع المستلزمات الصحية وتوفر للمشتري فرصة أفضل للحصول على جميع المتطلبات في مجال الصحة بالإضافة إلى تسهيل فرصة المقارنة والاختيار بين العديد من المنتجات بأسعار معقولة دون عناء وفي أسرع وقت ممكن. 
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main>

<!-- End #main -->
 <!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing" style="margin-bottom:100px;">

<div class="container" data-aos="fade-up">

  <header class="section-header">
   
    <p>المنتجات</p>
  </header>

  <div class="row gy-4" data-aos="fade-left">

    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="10">
      <div class="box">
        
        <img src="assets/img/h.jpg" class="img-fluid" alt="">
        <ul>
          <li>أجهزة تخطيط القلب</li>
        
        </ul>
      </div>
    </div>

    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="10">
      <div class="box">
        
        <img src="assets/img/j.jpg" class="img-fluid" alt="">
        <ul>
          <li>مجاهر طبية</li>
          
        </ul>
      </div>
    </div>

     <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="10">
      <div class="box">
        
        <img src="assets/img/k.jpg" class="img-fluid" alt="">
        <ul>
          <li> أسرة عملبات الأسنان</li>
         
        </ul>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="10">
      <div class="box">
        
        <img src="assets/img/l.jpg" class="img-fluid" alt="">
        <ul>
          <li>الأسرة الطبية ومستلزماتها</li>
         
        </ul>
      </div>
    </div>
    
  </div>
</div>
</section> --}}