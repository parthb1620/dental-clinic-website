<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../component/head.php'; ?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include '../component/topbar.php'; ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include '../component/nav.php' ?>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Night Guards</h1>
                <a href="../index.html" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">General Treatments</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" style="min-height: 300px;">
                    <div class="h-200 rounded overflow-hidden">
                        <!-- <img class="position-absolute w-200 h-200" src="../img/general-tratments/bridges-before.jpeg"
                            style="object-fit: cover;">
                        <img class="position-absolute w-200 h-200" src="../img/general-tratments/bridges-after.jpeg"
                            style="object-fit: cover;"> -->
                        <img class="img-fluid" src="../img/general-tratments/night-guard-1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Treatments</h5>
                        <h1 class="display-5 mb-0  text-uppercase">Do you need a night guard?</h1>
                        <h4 class="text-body fst-italic mb-4">Do you grind your teeth? Do you find yourself clenching
                            your jaw? If so, night guards could be a great option to help combat these issues and
                            improve your dental health.
                        </h4>
                        <p class=" mb-4">
                            But not to worry! We’ve got you covered! Contact us today to understand the pros and cons of
                            night guards to help you make the best decision possible.
                        </p>
                    </div>
                    <!-- <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/service-1.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Cosmetic Dentistry</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/service-2.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dental Implants</h5>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-7 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="display-5 mb-0 ">Who can benefit from custom night guards?</h4>
                            <ul>
                                <li>
                                    <h4 class="text-body">Many patients can benefit from mouth guards including patients
                                        who…</h4>
                                </li>
                                <!-- <h4 class="text-body">If left untreated, a missing tooth will cause all of the teeth
                                        in your mouth to shift and fill in the empty space. This can cause larger dental
                                        issues like:</h4> -->
                                <ul>
                                    <li>
                                        <h5 class="text-body">Clench or grind their teeth at night</h5>
                                    </li>
                                    <li>
                                        <h5 class="text-body">Are experiencing bite issues</h5>
                                    </li>
                                    <li>
                                        <h5 class="text-body">Regularly play contact sports</h5>
                                    </li>
                                    <li>
                                        <h5 class="text-body">Suffer from TMJ issues</h5>
                                    </li>
                                </ul>

                                <!-- <p class="text-body mb-1">This is everything dental care should be.</p> -->
                        </div>
                        <div class="col-md-5 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../img/general-tratments/night-guard-2.jpg" alt="">
                            </div>
                            <!-- <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Teeth Whitening</h5>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- why bhayani clinic -->
                <div class="row g-5 wow fadeInUp my-4" data-wow-delay="0.1s">
                    <div class="col-lg-12">
                        <div class="row g-5">
                            <div class="col-md-5 service-item wow zoomIn" data-wow-delay="0.3s">
                                <div class="rounded-top overflow-hidden image-container-x">
                                    <img class="img-fluid" src="../img/service-4.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 service-item wow zoomIn" data-wow-delay="0.6s">
                                <h4 class="display-5 mb-0 ">Why Bhayani Dental Clinic ?</h4>
                                <p class="text-body mb-4">At Bhayani Dental Clinic, Dr. Kalpesh Bhayani specializes in
                                    providing custom-fitted night guards to protect your teeth from grinding and
                                    clenching during sleep. These night guards are designed for maximum comfort and
                                    effectively prevent damage caused by bruxism, ensuring better oral health and a
                                    peaceful night's sleep.
                                </p>

                                <p class="text-body mb-4">
                                    Our personalized approach ensures that each night guard is tailored to your unique
                                    dental needs, offering superior protection and long-term benefits. Trust Bhayani
                                    Dental Clinic to prioritize your comfort, prevent dental complications, and help you
                                    maintain a healthy, beautiful smile.
                                </p>

                                <!-- <p class="text-body mb-1">Choose Bhayani Dental Clinic for reliable, high-quality dental
                                    bridge solutions that help you regain confidence and enjoy a healthier, more
                                    complete
                                    smile.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <?php include '../component/footer.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../lib/twentytwenty/jquery.event.move.js"></script>
    <script src="../lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>