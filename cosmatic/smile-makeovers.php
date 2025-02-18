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
                <h1 class="display-3 text-white animated zoomIn">Smile Makeovers</h1>
                <a href="../index.html" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Cosmetic Treatments</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <!-- <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" style="min-height: 300px;">
                    <div class="twentytwenty-container position-relative h-200 rounded overflow-hidden">
                        <img class="position-absolute w-200 h-200" src="../img/surgical/implant-before.jpeg"
                            style="object-fit: cover;">
                        <img class="position-absolute w-200 h-200" src="../img/surgical/implant-after.jpeg"
                            style="object-fit: cover;">
                    </div>
                </div> -->
                <div class="col-lg-10">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Treatments</h5>
                        <!-- <h1 class="display-5 mb-0  text-uppercase">A practical solution to restoring your
                            smile</h1>
                        <h4 class="text-body fst-italic mb-4">Dental bridges for better oral health and more confidence
                        </h4>
                        <p class=" mb-4">
                            A missing tooth (or multiple missing teeth) can certainly be embarrassing, and it can often
                            impact your confidence. You want to be able to speak, smile, and laugh freely, and a dental
                            bridge can help. A tooth bridge addresses the cosmetic and aesthetic issues with having a
                            missing tooth, but it also aids in maintaining your oral health.
                        </p> -->
                        <h4 class="display-5 mb-0 ">What is a complete smile makeover?</h4>
                        <p class=" mb-4">A complete smile makeover is a dental treatment process for patients
                            with multiple cosmetic issues that are affecting their smiles. The process often involves a
                            single treatment or multiple treatments to reach the patient’s goals and improve
                            self-confidence.</p>
                        <p class=" mb-4">
                            Your smile is beautiful whether or not it’s perfectly straight, white, or flawless. What
                            matters is how you feel about it. If you’re unhappy with your smile due to discoloration,
                            gaps, or some other issue, our smile makeover dentists can create a treatment plan to help
                            you regain your smile confidence.</p>
                        <!-- <h3 class="mt-5 mb-0 ">What can professional teeth whitening do for you?</h3>
                        <ul>
                            <li>
                                <h4 class="text-body">Remove surface stains from your teeth</h4>
                            </li>
                            <li>
                                <h4 class="text-body">Brighten your smile without causing sensitivity</h4>
                            </li>
                            <li>
                                <h4 class="text-body">Create a natural, confident smile</h4>
                            </li>
                        </ul> -->
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
            <div class="row mb-5 g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-7 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 display-6">What issues does a dental makeover address?
                            </h4>
                            <h5 class="text-body">When it comes to strategic smile design, a smile makeover aims to
                                correct any cosmetic issues that are making the patient dissatisfied with their smile.
                                The most common issues we correct during the process are:</h5>
                        </div>
                        <div class="col-md-5 service-item wow zoomIn" data-wow-delay="0.3s">
                            <ul>
                                <li>
                                    <h5 class="text-body">Tooth discoloration</h5>
                                </li>
                                <li>
                                    <h5 class="text-body">Alignment issues</h5>
                                </li>
                                <li>
                                    <h5 class="text-body">Tooth gaps</h5>
                                </li>
                                <li>
                                    <h5 class="text-body">Chipped or cracked teeth</h5>
                                </li>
                                <li>
                                    <h5 class="text-body">Missing teeth</h5>
                                </li>
                                <li>
                                    <h5 class="text-body">Gummy smiles</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-12 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="display-5 mb-0 ">How is a smile makeover done?</h4>
                            <h5 class="text-body">Your smile makeover dentist will work with you to evaluate your
                                specific goals and vision for your smile. Often, the most common dental treatments
                                included in a smile makeover plan include:</h5>
                            <ul>
                                <li>
                                    <h5 class="text-body"><a
                                            href="<?php echo BASE_URL; ?>cosmatic/teeth-whitening.php">Teeth
                                            whitening</a> to address yellow or discolored teeth</h5>
                                </li>
                                <li>
                                    <h5 class="text-body"><a href="<?php echo BASE_URL; ?>cosmatic/bonding.php">Cosmetic
                                            bonding</a> to lengthen teeth or repair
                                        chipped teeth</h5>
                                </li>
                                <li>
                                    <h5 class="text-body"><a
                                            href="<?php echo BASE_URL; ?>cosmatic/braces-aligners.php">Braces</a> to
                                        realign
                                        crooked teeth, correct crowding, or
                                        close gaps</h5>
                                </li>
                            </ul>
                            <h5 class="text-body">A complete smile makeover at our office is first and foremost
                                focused on your overall oral health. We take a cohesive approach, making sure we’re
                                building your smile on a strong foundation. We also ensure your teeth makeover
                                treatment will balance and bring harmony to the structure of your face overall.</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5 mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-7 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="display-5 mb-6 ">Why Bhayani Dental Clinic? </h4>

                            <h6 class="text-body mb-6">Are you looking for a brand new smile? At Bhayani Dental
                                Clinic, we believe our work should improve both your health and your quality of
                                life. </h6>

                            <h6 class="text-body mb-6">We aim to help our patients thrive in their daily life through
                                great oral health and a beautiful smile. By creating a custom treatment plan and
                                completing a smile makeover, you can turn your dream smile into a reality. Your
                                Tucson smile makeover dentist is committed to giving you a healthy and happy
                                smile so you can live your best life.</h6>
                        </div>
                        <div class="col-md-5 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../img/service-4.jpg" alt="">
                            </div>
                            <!-- <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Teeth Whitening</h5>
                            </div> -->
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