@extends('layouts.siteST')

@section('title','AvailableCars')

@section('body')


<style>
  body{ background: url("assets/img/avca.jpg")fixed;background-size: 100%;}

        .w {background: rgba(211,211,211,0.9);overflow: auto;margin: 40px 20px 10px 20px;}
      .w img {height: 150px;width:220px; float: left;
           padding: 10px}
            .w h3{font-family: sans-serif ;color: #562D2D;font-size: 24px;float: left;padding-top:10px}  
            .w button {float: right ;margin-right: 55px;height: 45px;width:100px;text-decoration: none;background: #BC0000;color: white ;}
       /* .ul1{margin: 0;    
    position: sticky;
    top: 0;
        padding: 0px;
        background:#960000;
        height: 10% ;
        overflow: hidden;  }
   .ul1   li{list-style-type:none;
      float: left;}
    .ul1  li button{text-decoration:none;
      display: block;
      color: lightgrey;
      padding: 14px 98px;
      text-align: center;
      }*/
     /* img{max-width: 100%;}
      .q4{width:50px;height: 50px;margin-left: 5px; }
  .ul1 li button:hover {color: white;
    background-color:#7C0000;}*/

  .w button:hover{text-decoration: none;background: #700007;color: white; padding: 10px ;}
/*.q{text-align: center;color: #FFFFFF;margin-top: 50px;margin-bottom: 50px;font-size: 40px}
*/
.e{font-size: 15px}
</style>

 <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1><a><span>CarRentals</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('AdminHome') }}">Home</a></li>
          <li><a href="{{ route('BlockUsers') }}">Block user</a></li>
          <li><a href="{{ route('AddCar') }}">Add Car</a></li>
          <li><a href="{{ route('AvailableCars') }}">Available Cars</a></li>          
          <li><a href="{{ route('logout') }}">logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


    
  </main>



<div class="w">    



    <img src="" alt="Mountains">
    
    <h3>Car id:</h3>
    <br><br>
    <h3>Car State:</h3>
    <br><br>
    <h3>Renter id:</h3>
    <button type="button">Remove</button>
    
</div>


<div class="w">    



    <img src="" alt="Mountains">
    
    <h3>Car id:</h3>
    <br><br>
    <h3>Car State:</h3>
    <br><br>
    <h3>Renter id:</h3>
    <button type="button">Remove</button>
    
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
        &copy; Copyright <strong><span>Adib</span></strong>. All Rights Reserved
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
