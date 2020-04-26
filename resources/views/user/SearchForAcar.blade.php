@extends('layouts.siteST')

@section('title','RentACar')

@section('body')

<style>




  body{background: url("assets/img/search.jpg")fixed;background-size: 100%;margin: 0; }

select{margin-top: 5px;margin-left: 26px;border-radius: 5px;border: none;padding: 5px 8px;font-size: 15px}

.h3{ text-align: center;color:#E2E2E2; margin-bottom: 5px}

form{margin: 0px auto;}
 fieldset{border-radius: 15px;background: #303030;padding: 20px;margin: 0px auto;width: 450px ;    border: none;margin-bottom: 20px}
 input{color: #160042;margin-bottom: 15px;margin-top:5px;margin-left: 5px;border-radius: 5px;border: none;padding: 5px 8px;font-size: 15px}
 label{color: #FFFFFF;margin-right:  5px; }


.b{margin: 0 auto;margin-top: 15px;margin-left: 165px;border-radius: 10px; }
.z{margin: 0 auto;height: 300px }

</style>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1><a><span>CarRentals</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="{{ route('userhome') }}">Home</a></li>
          <li class="active"><a href="{{ route('rentAcar') }}">Rent A Car</a></li>
          <li><a href="{{ route('userhome') }}">Your Cars</a></li>          
          <li><a href="{{ route('logout') }}">logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <main id="main">
 


<br><br><br><br><br>

 
<form>
<fieldset>

<br>
 <div class="z">
<label>Location</label>
              <select name="location" value="{{old('loc')}}">
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
<br> <br> 

      <div class="form-group">
            
            <div class="form-wrapper">
              <label for="">Pick up date </label>
              <input type="date"name="start" class="form-control">
            </div>
            <div class="form-wrapper">
              <label for="" >Return date&nbsp;  </label>
              <input type="date" name="end" class="form-control">

                </div>
          </div>

<button class="b"  name="submit" value="search">Search</button>
</fieldset>
</form>
    </div>

        
<!--
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/bac_2.jpg" class="img-fluid" alt="" style="height: 280px">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/jeep_2.jpg" class="img-fluid" alt="" style="height: 280px">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/bac_1.png" class="img-fluid" alt="" style="height: 280px">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>


      </div>
    </section> End Features Section 
  -->


  </main>

  <!-- ======= Footer ======= -->
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

<!--           <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rent A Car</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rent Your Car</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Buy A New Car</a></li>
            </ul>
          </div> -->

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
