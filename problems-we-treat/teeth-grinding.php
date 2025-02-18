<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../component/head.php' ?>
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
    <?php include '../component/topbar.php' ?>
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
                <h1 class="display-3 text-white animated zoomIn">Teeth Grinding</h1>
                <a href="../index.html" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Problems We Treat</a>
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
                <div class="col-lg-8">
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
                        <h4 class="display-5 mb-0 ">Do you grind your teeth while you sleep or during the day?
                        </h4>
                        <p class=" mb-4">Chronic tooth grinding and clenching (bruxism) affects about 13% of
                            adults and is also prevalent in children and teens. If you’ve noticed soreness in your jaw
                            or neck, dull headaches, tooth pain or sensitivity, or worn enamel, you may be grinding your
                            teeth and clenching your jaw while you sleep or absentmindedly while you’re awake.
                        </p>
                        <p class=" mb-4">
                            At Bhayani Dental Clinic, we provide patient-centered, advanced dental treatments and
                            solutions to people of all ages and walks of life. If you think you may have bruxism, our
                            Greenwood Village teeth-grinding dentists can diagnose the problem and recommend effective
                            treatments to help alleviate the symptoms and restore your oral health.</p>
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
                        <h2 class="mt-5 mb-0 ">Treatments for teeth grinding</h2>
                        <!-- <h6 class="mt-5 mb-0 ">At Bhayani Dental Clinic, we’re dedicated to providing quality
                            care for all patients. If you’re missing a tooth or multiple teeth, we can provide you with
                            long-lasting, high-quality restorations to improve your smile and your confidence.</h6> -->
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>general/night-guards.php">Night
                                    Guards</a></h4>
                            <h4 class="text-body">If you grind your teeth during sleep, we can make you a custom night
                                guard to alleviate bruxism and treat and prevent negative symptoms. Our night guards are
                                designed to be resistant yet flexible so you can be perfectly comfortable while you
                                sleep. Learn more.</h4>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>general/crowns.php">Crowns</a>
                            </h4>
                            <h4 class="text-body">Crowns are protective dental replacements usually made out of ceramic
                                or porcelain that are placed over the damaged tooth. They look just like your natural
                                teeth and are an excellent treatment option for damage caused by excessive grinding.
                                Learn more.
                            </h4>
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