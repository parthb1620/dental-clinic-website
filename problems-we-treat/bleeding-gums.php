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
                <h1 class="display-3 text-white animated zoomIn">Bleeding Gums</h1>
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
                        <h4 class="display-5 mb-0 ">Treat bleeding, swollen, or irritated gums and prevent
                            future issues
                        </h4>
                        <p class=" mb-4">Do your gums bleed when you eat or while brushing or flossing your
                            teeth? Bleeding or inflamed gums can be a sign of gingivitis (gum disease). Caused by a
                            buildup of plaque around your gum line, gingivitis can worsen over time if the issue isn’t
                            addressed. Fortunately, treating gum disease in its early stages is relatively simple and
                            easy.
                        </p>
                        <p class=" mb-4">
                            If you have bleeding, swollen, or sensitive gums, we’re here to help. Our knowledgeable,
                            compassionate dentists will examine your smile to diagnose the source of the problem and
                            help get your oral health back on track!</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5 g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <h2 class="mt-5 mb-0 ">How to stop bleeding gums</h2>
                        <!-- <h6 class="mt-5 mb-0 ">At Bhayani Dental Clinic, we’re dedicated to providing quality
                            care for all patients. If you’re missing a tooth or multiple teeth, we can provide you with
                            long-lasting, high-quality restorations to improve your smile and your confidence.</h6> -->
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 ">Brush your teeth twice per day</h4>
                            <h4 class="text-body">Taking good care of your teeth with daily oral hygiene is necessary to
                                treat bleeding gums and to prevent the issue in the future. We recommend brushing at
                                least twice each day (morning and night) for at least two minutes. Make sure you don’t
                                miss harder-to-reach areas of your mouth.</h4>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 ">Floss your teeth daily</h4>
                            <h4 class="text-body">Taking the time to floss your teeth every day is one of the best ways
                                to stop bleeding gums and restore the health of your entire smile. Flossing helps remove
                                plaque that’s hiding just under your gum line.
                            </h4>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 ">Maintain a healthy lifestyle</h4>
                            <h4 class="text-body">Eating a nutritious diet and taking care of your overall health can
                                prevent bleeding gums and other oral health issues. When possible, stay away from acidic
                                or sugary foods and drinks and always avoid tobacco.
                            </h4>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 ">Get regular dental cleanings and exams</h4>
                            <h4 class="text-body">Left untreated, bleeding gums and gingivitis can lead to other issues,
                                such as tooth decay and tooth loss. At Village Dental, we offer comprehensive dental
                                care to patients of all ages and backgrounds, including routine cleanings, exams, and
                                x-rays. Learn more.
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