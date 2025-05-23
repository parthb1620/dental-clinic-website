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
                <h1 class="display-3 text-white animated zoomIn">Braces & Aligners</h1>
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
                <div class="col-lg-12">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Treatments</h5>
                        <!-- <h1 class="display-5 mb-0 text-light text-uppercase">A practical solution to restoring your
                            smile</h1>
                        <h4 class="text-body fst-italic mb-4">Dental bridges for better oral health and more confidence
                        </h4>
                        <p class="text-light mb-4">
                            A missing tooth (or multiple missing teeth) can certainly be embarrassing, and it can often
                            impact your confidence. You want to be able to speak, smile, and laugh freely, and a dental
                            bridge can help. A tooth bridge addresses the cosmetic and aesthetic issues with having a
                            missing tooth, but it also aids in maintaining your oral health.
                        </p> -->
                        <h4 class="display-5 mb-0 ">Correct misaligned teeth</h4>
                        <h4 class="text-body fst-italic mb-4">Redefine Your Smile with Braces and Aligners</h4>
                        <p class="mb-4 text-body">
                            Achieve a flawless, confident smile with advanced orthodontic solutions designed for your
                            comfort and lifestyle. Whether you prefer discreet clear aligners or the reliable precision
                            of braces, modern options ensure effective results with minimal disruption to your daily
                            routine. Transform your smile with personalized treatments that enhance both appearance and
                            oral health.</p>
                        <!-- <h3 class="mt-5 mb-0 text-light">What can professional teeth whitening do for you?</h3>
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

            <div class="row my-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item wow zoomIn" data-wow-delay="0.2s">
                    <!-- <h4 class="display-5 mb-5 text-light">What are my options? </h4> -->
                </div>
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/cosmetic/braces-1.jpg" alt="">
                            </div>
                            <h4 class="mt-4 mb-2 text-center">Wire & Bracket Braces </h4>
                            <h5 class="text-body">Advantages:</h5>
                            <ul>
                                <li>
                                    <h6 class="text-body">Overall treatment time is generally shorter depending on the
                                        tooth movements needed</h6>
                                </li>
                                <li>
                                    <h6 class="text-body">New material allows for braces to be clear and wire to be
                                        white, making them discreet</h6>
                                </li>
                                <li>
                                    <h6 class="text-body">Treatment success is less influenced by your compliance since
                                        they are not removable, so this is the best option if you are worried about
                                        compliance or losing clear aligners</h6>
                                </li>
                                <li>
                                    <h6 class="text-body">You don’t have to think about removing anything to eat and
                                        drink beverages</h6>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/cosmetic/aligners-1.jpg" alt="">
                            </div>
                            <h4 class="mt-4 mb-2 text-center">Clear Aligners </h4>
                            <h5 class="text-body">Advantages:</h5>
                            <ul>
                                <li>
                                    <h6 class="text-body">Clear aligner trays are more discreet and are less visible
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="text-body">It is easier to clean your teeth since you can remove the
                                        aligners to brush and floss</h6>
                                </li>
                                <li>
                                    <h6 class="text-body">Check-up appointments with the dentist are usually only every
                                        2-3 months, as opposed to once a month with traditional braces</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-7 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="display-5 mb-6">Why Bhayani Dental Clinic ?</h4>

                            <p class="text-body">Why Choose Bhayani Dental Clinic for Clear Braces and Aligners
                            </p>

                            <p class="text-body">At Bhayani Dental Clinic, Dr. Kalpesh Bhayani specializes in
                                providing clear braces and aligners to help adults with crowded, misaligned,
                                overlapping, or crooked teeth achieve their dream smiles. </p>

                            <p class="text-body">Whether you’re dealing with crowded teeth, overlapping teeth,
                                or grinding issues that have caused wear or chipping, Dr. Kalpesh Bhayani can
                                create a personalized treatment plan to align your teeth and restore their
                                natural appearance. Let us help you achieve a healthier, more confident smile!
                            </p>
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
                <!-- <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est
                            magna stet eirmod</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div> -->
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