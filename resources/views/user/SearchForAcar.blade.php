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

  .w {background: rgba(211,211,211,0.9);overflow: auto;margin: 40px 20px 10px 20px;}
  .w img {height: 150px;width:220px; float: left;
      padding: 10px}
  .w h3{font-family: sans-serif ;color: #562D2D;font-size: 24px;float: left;padding-top:10px}
  .w button {float: right ;margin-right: 55px;height: 45px;width:100px;text-decoration: none;background: #BC0000;color: white ;}

  .w button:hover{text-decoration: none;background: #700007;color: white; padding: 10px ;}

  .e{font-size: 15px}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
</head>

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



      <body>
      <div class="container">
          <br />
          <br />
          <br />
          <div class="row input-daterange">
              <div class="col-md-3">
                  <input type="date" name="from_date" id="from_date" class="form-control" placeholder="From Date"  />
              </div>
              <div class="col-md-3">
                  <input type="date" name="to_date" id="to_date" class="form-control" placeholder="To Date"  />
              </div>
              <div class="col-md-0">
              <select name="location" value="{{old('loc')}}" class="form-control">
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
              <form method="POST" class="col-md-4" action="{{ url('filterCar') }}">
                  {{ csrf_field() }}
                  <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>

              </form>

          </div>
          <br />

      </div>
      </body>



  @foreach($car_table as $car)

      @php

          $carimg = Storage::url('');

      @endphp -->

          <div class="w">



              <img src="{{ url('/images/'.$car->id.'.png' ) }}" alt="{{$car->id}}">


              <h3 style="font-family: Arial">{{$car->name}}</h3>
              <h3 style="font-family: Arial">{{$car->price}}$</h3>
              <h3 style="font-family: Arial">:{{$car->start}}</h3>
              <h3 style="font-family: Arial">{{$car->end}}</h3>
              <h3 style="font-family: Arial">{{$car->carLocation}}</h3>
              <h3 style="font-family: Arial">{{$car->placeOfRecipt}}</h3>



          </div>

      @endforeach



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

  <!-- scripts of filter -->


</body>


</html>



@endsection
