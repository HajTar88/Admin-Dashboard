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
  <link rel="icon" href="{{ URL::asset('/public/img/AdminLTELogo.png') }}">

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
          <li><a class="nav-link scrollto active" href="{{url('index')}}" >الرئيـــــسية</a></li>
          <li><a class="nav-link scrollto" >حولـــــنا</a></li>
          <li><a class="nav-link scrollto" >الشركـــــات الطبيـــــة</a></li>
          <li><a class="nav-link scrollto" >المستشفيات</a></li>
          <li><a class="nav-link scrollto" >اتصـــــل بـــــنا</a></li>
          <li><a class="nav-link scrollto" href="login.html"> تسجيل الدخول</a></li>
          <li><a class="getstarted scrollto" href="reservation.html">أحجز الـآن</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

 <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container" style="padding: 100px;">
        <div class="row justify-content-center" >
          <div class="col-lg" >
            <form  action="{{route('reservations.store')}}"  method="POST">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="first_name" class="form-control" placeholder="الاسم الأول" >
                </div>

                <div class="col-md-6 ">
                  <input type=" text"  name="family_name" class="form-control"  placeholder="  اسم العائلة " >
                </div>
                <div class="col-md-6">
                  <input type="text"  name="address" class="form-control"  placeholder="العنوان" >
                </div>

                <div class="col-md-6 ">

                  <input type=" text" class="form-control" name="phone" placeholder="   رقم الهاتف "  >
                </div>
                <div class="col-md-6">
                  <label for="hospitalName">أختر طبيب </label>
                  <select name="hospital_address"  class="form-control"  id="hospital_address">
                      <option value="علي" >علي</option>
                      <option value="خالد" >خالد</option>
                      <option value="محمد" >محمد</option>
                  </select>                                                     
              </div>
              <div class="col-md-6">
                <label for="hospitalName">أختر المواعيد </label>
                <select name="hospital_address"  class="form-control"  id="hospital_address">
                    <option value="الأحد" >الأحد</option>
                    <option value="الأثنين" >الأثنين</option>
                    <option value="الثلاثاء" >الثلاثاء</option>
                </select>                                                    
            </div>

                <div class="col-md-12 text-center" style="padding: 20px;">
                 <button type="submit" class="btn btn-primary" style="margin-left: 70px;">حجز الأن </button>
                 <button type="submit" class="btn btn-primary" style="margin-left: 70px;">الغاء</button>

                </div>
              </div>
            </form>

          </div>

        </div>
      </div>
    </div>

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
              <li><i class="bi bi-chevron-left"></i> <a href="{{url('index')}}">الرئيـــــسية</a></li>
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
              <strong>البريد الالكتروني: </strong>info@n4amsoft.sd<br>
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
