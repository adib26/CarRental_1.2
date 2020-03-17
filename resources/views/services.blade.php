@extends('layouts.siteST')

@section('title','Our Services')

@section('body')



  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1><a><span>CarRentals</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li ><a href="{{ route('home') }}">Home</a></li>
          <li class="active"><a href="{{ route('services') }}">Our Services</a></li>
              <li class="drop-down"><a>Login/Register</a>
                <ul>
                  <li><a href="{{ route('loginn') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
              </li>


          <li><a href="{{ route('aboutus') }}">About Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->



  <main id="main">

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
  
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/bac_2.jpg" class="img-fluid" alt="car" style="height: 280px">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Rent your Dream car</h3>
            <p class="font-italic">
              you can rent your dream car without paying Thousands of dollar on buying a new one
            </p>
            <ul>
              <li><i class="icofont-check"></i>just enter our sity and register in it</li>
              <li><i class="icofont-check"></i>by entering your username ,email,password and your phone number</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/jeep_2.jpg" class="img-fluid" alt="jeep car" style="height: 280px">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Our prices are the best in the country</h3>
        
            <p>
              we offer a big collection of cars with great prices
            </p>
            <ul>
              <li><i class="icofont-check"></i>you could buy with your credit card.</li>
              <li><i class="icofont-check"></i>deliver to any place in egypt.</li>
            </ul>

          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/bac_1.png" class="img-fluid" alt="car" style="height: 280px">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Deliver to any place in Egypt</h3>
         
            <ul>
              <li><i class="icofont-check"></i>our services are avilable all across egypt</li>
              <li><i class="icofont-check"></i>rent any car you want in any time from our site.</li>
            </ul>
          </div>
        </div>


      </div>
    </section>

      </main><!-- End #main -->


 <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>              
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              Cairo, NY 535022<br>
              Egypt <br><br>
              <strong>Phone:</strong> +20 0124 7165 25<br>
              <strong>Email:</strong> adib2@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <!-- <h3>About Moderna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> -->
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Adib</span></strong>. All Rights Reserved
      </div>
      <!-- <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->

<!--         Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
 -->      
</div> 
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

@endsection
