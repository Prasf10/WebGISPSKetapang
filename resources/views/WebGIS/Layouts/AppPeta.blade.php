<!DOCTYPE html>
<html lang="en">

<head>
    @include('WebGIS.Layouts.HeadStyle')

</head>

<body>
    @yield('header')

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <!-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo/aiden.png" alt="">
                            <span>PS Ketapang</span>
                        </a>
                        <p>Website penyedia persebaran Perhutanan Sosial (HD dan HKm) di Kabupaten Ketapang..</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div> -->

                    <div class="col-lg-3 col-6 footer-links">
                        <h4>Our Service</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#hero">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#portfolio">Galery</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#team">Team</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('peta2') }}">Peta Interaktif</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Jalan.. <br>
                            Ketapang, Indonesia<br>
                            <!-- United States <br> -->
                            <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@psketapang.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('WebGIS.Layouts.Script');

</body>

</html>