@extends('layouts.siteST')

@section('title','Block user')

@section('body')

<style>
  body{ background: url("assets/img/back.jpg")fixed;background-size: 100%;}  </style>

 <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1><a><span>CarRentals</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li ><a href="{{ route('AdminHome') }}">Home</a></li>
          <li class="active"><a href="{{ route('BlockUsers') }}">Block user</a></li>
            <li><a href="{{ route('AvailableCars') }}">Available Cars</a></li>
          <li><a href="{{ route('AddCar') }}">Add Car</a></li>
          <li><a href="{{ route('logout') }}">logout</a></li>


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->



<form class="container" style="height:330px;width:700px;margin-top:150px;margin-bottom:180px;background-color:rgba(211,211,211,0.9);border-radius:20px" method="post" action="{{ url('block') }}">
  @csrf

      <div>
         <label class="UserName" style="color:black;margin-top:100px;margin-left:165px;font-size:25px">UserName</label>
         <input type="text" class="username" name="username"
         style="border:1px solid;border-left:2px solid;border-right:2px solid;border-top:2px solid;margin-left:10px;height:25px">
      </div>

      <div style="margin-top:60px;margin-left:230px">
         <button class="btn btn-primary" style="height:40px;width:100px;margin-bottom:" name="submit" value="b">Block</button>
         <button class="btn btn-secondary" style="height:40px;width:100px;margin-left:px" name="submit" value="un">Unblock</button>

<br><br>
<div class="wrap-input100" style="color: #fff">

@php

 $message = Session::get('error')


@endphp
{{$message}}

</div>

      </div>

  </form>





<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('AdminHome') }}">HomePage</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('BlockUsers') }}">BlockUsers</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('AvailableCars') }}">AvailableCars</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('AddCar') }}">AddCar</a></li>
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
        &copy; Copyright <strong><span>SW2</span></strong>. All Rights Reserved
      </div>

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





<!--main id="main">

    <section class="BlockUser" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
             <img src="assets/img/Car.jpg" class="img-fluid" alt="Responsive image">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 pb-10">

            <form class="form-inline">
              <div class="form-group mb-4">
                <label class="wrap-input100 validate-input">User name</label>
              </div>

              <div class="form-group mx-sm-4 mb-4">
                <input type="text" class="wrap-input100 validate-input" placeholder="UserName">
              </div>

            </form>
            <div>
             <button type="button" class="btn btn-primary mb-2 ">Block</button>
             <button type="button" class="btn btn-secondary mb-2">Unblock</button>
            </div>


          </div>
        </div>

      </div>
    </section>
  </main>
      -->
