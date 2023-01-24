<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>دليل المستشفيات</title>
  <link href="/any/hospital.jpg" rel="icon">
  <link href="" rel="apple-touch-icon">
  {{-- <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hospital.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
  <link rel="stylesheet" href="./assets/css/style2.css">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/> --}}
  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/any/css/style.css" rel="stylesheet">
  <link href="/any/css/style2.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/any/image/hospital.png">
        
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('index/')}}">الرئيـــــسية</a></li>
          <li><a class="nav-link scrollto" href="#">حولـــــنا</a></li>
          <li><a class="nav-link scrollto" href="#">الشركـــــات الطبيـــــة</a></li>
          <li><a class="nav-link scrollto" href="#">المستشفيات</a></li>
          <li><a class="nav-link scrollto" href="#">اتصـــــل بـــــنا</a></li>
          <li><a class="nav-link scrollto" href="login.html"> تسجيل الدخول</a></li>
          <li><a class="getstarted scrollto" style="color: #fff;" href="reservation.html">أحجز الـآن</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <main id="main">


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="padding: 150px;">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{$companies['photo']}}" alt="" style="width: 500px">
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
          
          {{-- <img src="assets/img/h.jpg" class="img-fluid" alt=""> --}}
          <ul>
            <li>أجهزة تخطيط القلب</li>
          
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="10">
        <div class="box">
          
          {{-- <img src="assets/img/j.jpg" class="img-fluid" alt=""> --}}
          <ul>
            <li>مجاهر طبية</li>
            
          </ul>
        </div>
      </div>

       <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="10">
        <div class="box">
          
          {{-- <img src="assets/img/k.jpg" class="img-fluid" alt=""> --}}
          <ul>
            <li> أسرة عملبات الأسنان</li>
           
          </ul>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="10">
        <div class="box">
          
          {{-- <img src="assets/img/l.jpg" class="img-fluid" alt=""> --}}
          <ul>
            <li>الأسرة الطبية ومستلزماتها</li>
           
          </ul>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- End Pricing Section -->




  <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

   
  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            {{-- <img src="assets/img/logo.png" alt=""> --}}
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
            <li><i class="bi bi-chevron-left"></i> <a href="{{url('index/')}}">الرئيـــــسية</a></li>
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
{{-- <script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script> --}}


</body>

</html>