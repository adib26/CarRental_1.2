<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Car</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="addCar_style/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="addCar_style/css/style.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


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
          <li><a href="{{ route('BlockUsers') }}">Block user</a></li>
            <li><a href="{{ route('AvailableCars') }}">Available Cars</a></li>
          <li class="active"><a href="{{ route('AddCar') }}">Add Car</a></li>
          <li><a href="{{ route('logout') }}">logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


<div class="wrapper"> <!--style="background-image:url('') ;> -->
      <div class="inner">
        <form  class="login100-form validate-form" method="post" action="{{ url('add_car') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <!--  <h3>Offer cars</h3>  -->
  
            <div class="form-wrapper">
              <label for="">Car name</label>
              <input type="text" name="name" class="form-control" value="{{old('name')}}">
            </div>
            <div class="form-wrapper">
              <label for="">Car specification</label>
              <input type="text" name="specification" class="form-control" value="{{old('specification')}}">
          
          </div>

          <div class="form-wrapper">
              <label>Location</label>
              <select name="loc" value="{{old('loc')}}">
                <option value="Cairo">Cairo</option>
                <option value="Alexandria">Alexandria</option>
                <option value="Aswan">Aswan</option>
                <option value="Giza">Giza</option>
                <option value="Beheira">Beheira</option>
                <option value="Dakahlia">Dakahlia</option>
                <option value="Faiyum">Faiyum</option>
                <option value="Luxor">Luxor</option>
                <option value="Minya">Minya</option>
                <option value="Monufia">Monufia</option>
                <option value="South Sinai">South Sinai</option>

              </select>
          
          </div>
          
          <div class="form-wrapper">
            <label for="">Car photo</label>
              <input type="file" name="img">
    
          </div>
        
          <div class="form-group">
            
            <div class="form-wrapper">
              <label for="">Start day</label>
              <input type="date"name="start" class="form-control" value="{{old('start')}}">
            </div>
            <div class="form-wrapper">
              <label for="">End day</label>
              <input type="date" name="end" class="form-control" value="{{old('end')}}">
            </div>
          
          </div>
            <div class="form-group">
            
          
          
          </div>
        <div class="form-wrapper">
            <label for="">Price per day</label>
            <input type="text" name="price" class="form-control" value="{{old('price')}}">
          </div>
        <div class="form-wrapper">
            <label for="">Place for receipt</label>
            <input type="text" name="place" class="form-control" value="{{old('place')}}">
          </div>
        <button >Submit</button>
          <br>
           @if (count($errors) > 0)
     <div class="alert alert-danger">
         <ul>
             @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
 @if(session('response'))
      <div class="col-md-8 alert alert-success">
             {{@session('success')}}
      </div>
@endif
        
          
        </form>
        </div>
      </div>





<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Services</a></li>              
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('aboutus') }}">About us</a></li>
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
<!--    </div>
 -->  </footer><!-- End Footer -->


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
