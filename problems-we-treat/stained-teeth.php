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
                <h1 class="display-3 text-white animated zoomIn">Stained Teeth</h1>
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
                        <h4 class="display-5 mb-0 ">Do you have yellow teeth or noticeable stains?
                        </h4>
                        <p class=" mb-4">Like other cosmetic dental issues, stained teeth can take a toll on
                            your self-confidence. In some cases, they may even start to impact how you speak and smile.
                            Fortunately, there are a variety of effective treatments that are safe and work quickly to
                            whiten discoloration and fix stained teeth.
                        </p>
                        <p class=" mb-4">
                            At Bhayani Dental Clinic, we offer both in-office teeth whitening procedures and take-home
                            whitening trays and gel. Both treatment options are safe, non-invasive, and comfortable. In
                            just one office visit or a few weeks of consistently using our custom take-home trays, you
                            can remove visible surface stains from your teeth and brighten your entire smile without
                            causing sensitivity!</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5 g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <h2 class="mt-5 mb-0 ">Treatment for stained teeth</h2>
                        <!-- <h6 class="mt-5 mb-0 ">At Bhayani Dental Clinic, we’re dedicated to providing quality
                            care for all patients. If you’re missing a tooth or multiple teeth, we can provide you with
                            long-lasting, high-quality restorations to improve your smile and your confidence.</h6> -->
                        <!-- <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a
                                    href="<?php echo BASE_URL; ?>cosmatic/braces-aligners.php">Invisalign</a></h4>
                            <h4 class="text-body">We can provide you with invisible custom-made aligners that will fix
                                crooked teeth by straightening them over time without the need for traditional wire
                                braces. With regular check-ins every 6 weeks, we’ll make sure your aligners are
                                comfortable and effective. Learn more.</h4>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>cosmatic/vaneers.php">Veneers</a></h4>
                            <h4 class="text-body">We can completely transform your smile with veneers designed
                                specifically for your individual goals. Veneers work by removing some of your existing
                                enamel and securing custom shells over top. Veneers are beautiful, long-lasting, and
                                look just like natural teeth. Learn more.
                            </h4>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>cosmatic/bonding.php">Bonding</a></h4>
                            <h4 class="text-body">If you have small gaps in your teeth, composite bonding material can
                                be used to fill in the empty space, creating a more symmetrical appearance and
                                preventing bacteria from accumulating. It can even be completed in just one visit. Learn
                                more.
                            </h4>
                        </div> -->
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 ">In-office whitening
                                treatments</h4>
                            <h4 class="text-body">Our professional in-office teeth whitening treatments can fix stained
                                teeth and dramatically brighten your smile in just a single visit. The procedure is
                                non-invasive and comfortable, even for patients who deal with tooth sensitivity. The
                                whole process only takes about two hours and is completely customizable – we’ll
                                formulate the whitening treatment to achieve your desired result.
                            </h4>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 ">
                                <!-- <a href="<?php echo BASE_URL; ?>cosmatic/bonding.php"> -->
                                Take-home whitening trays
                                <!-- </a> -->
                            </h4>
                            <h4 class="text-body">Our custom-made, take-home teeth whitening trays are a convenient and
                                affordable alternative to in-office whitening treatments. They can also be used in
                                conjunction with professional whitening, as a way to maintain your bright smile between
                                visits! We offer FREE take-home whitening for life to our dedicated patients. Just take
                                the custom trays and gel home with you and whiten your teeth from the comfort of your
                                own home.
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