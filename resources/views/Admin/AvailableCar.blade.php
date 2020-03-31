@extends('layouts.siteST')

@section('title','Home')

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
                    <li class="active"><a href="{{ route('AdminHome') }}">Home</a></li>
                    <li><a href="{{ route('BlockUsers') }}">Block user</a></li>
                    <li><a href="{{ route('AvailableCars') }}">Available Cars</a></li>
                    <li><a href="{{ route('AddCar') }}">Add Car</a></li>
                    <li><a href="{{ route('logout') }}">logout</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->


    </main>

<!---------------------Body----------------------------->










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
                &copy; Copyright <strong><span>Ahmed Ashraf</span></strong>. All Rights Reserved
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



