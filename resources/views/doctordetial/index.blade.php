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
          <li><a class="nav-link scrollto active" href="{{url('index/')}}">الرئيـــــسية</a></li>
          <li><a class="nav-link scrollto" href="#">حولـــــنا</a></li>
          <li><a class="nav-link scrollto" href="#">الشركـــــات الطبيـــــة</a></li>
          <li><a class="nav-link scrollto" href="#">المستشفيات</a></li>
          <li><a class="nav-link scrollto" href="#">اتصـــــل بـــــنا</a></li>
          <li><a class="nav-link scrollto" href="{{url('reservations')}}"> تسجيل الدخول</a></li>
          <li><a class="getstarted scrollto" style="color: #fff;" href="{{url('reservations/')}}">أحجز الـآن</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

 <!-- doctors section starts  -->

<section class="doctors" style="padding: 150px;" id="doctors" >

  <h1 class="heading">  <span>اطباءنا</span> </h1>

    <div class="box-container" >

        <div class="box" >
          @foreach ($doctors as $item)
            <img src="./assets/img/doc-1.jpg" alt="">
            <h3>{{$item->doctor_name}}</h3>
            <span>{{$item->specialization}}</span>
            <div class="share">
              <a class="getstarted scrollto"  href="{{url('reservations/')}}">أحجز الـآن</a>
            </div>
            @endforeach
        </div>

        {{-- <div class="box">
            <img src="./assets/img/doc-2.jpg" alt="">
            <h3>محمد زايد</h3>
            <span>أخصائي أطفال</span>
            <div class="share">
              <a class="getstarted scrollto"  href="reservation.html">أحجز الـآن</a>
             
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/doc-3.jpg" alt="">
            <h3>عمر مصطفى</h3>
            <span>جراح عظام</span>
            <div class="share">
              <a class="getstarted scrollto"  href="reservation.html">أحجز الـآن</a>
              
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/doc-4.jpg" alt="">
            <h3>أحمد فيصل </h3>
            <span>أستشاري عظام</span>
            <div class="share">
              <a class="getstarted scrollto"  href="reservation.html">أحجز الـآن</a>
              
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/doc-5.jpg" alt="">
            <h3>عمر التهامي</h3>
            <span>استشاري باطنية</span>
            <div class="share">
              <a class="getstarted scrollto"  href="reservation.html" >أحجز الـآن</a>
              
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/doc-6.jpg" alt="">
            <h3>كمال إدريس</h3>
            <span>أخصائي أنف وأذن وحنجرة</span>
            <div class="share">
              <a class="getstarted scrollto"  href="reservation.html" >أحجز الـآن</a>
             
            </div>
        </div> --}}

    </div>

</section>

<!-- doctors section ends -->

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
