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
                <h1 class="display-3 text-white animated zoomIn">Implant Supported Over-Denture</h1>
                <a href="../index.html" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Surgical Treatments</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" style="min-height: 300px;">
                    <!-- <div class="twentytwenty-container position-relative h-200 rounded overflow-hidden">
                        <img class="position-absolute w-200 h-200" src="../img/surgical/implant-before.jpeg"
                            style="object-fit: cover;">
                        <img class="position-absolute w-200 h-200" src="../img/surgical/implant-after.jpeg"
                            style="object-fit: cover;">
                    </div> -->
                    <div class="col-md-10 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="../img/surgical/implant-supported-dentures-main.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
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
                        <h4 class="display-5 mb-0 ">How Do Implant-Supported Overdentures Work?</h4>
                        <p class=" mb-4">Implant-supported dentures provide several benefits over traditional
                            dentures, including greater security and comfort. During an implant-supported denture
                            procedure, your oral surgeon will place implants inside your mouth at various points around
                            your jawbone to hold attachments for artificial teeth.
                        </p>
                        <p class=" mb-4">
                            You’ll regularly visit a skilled cosmetic dentist to have new teeth attached or adjusted. At
                            each appointment, your dentist will examine your gums for inflammation or other potential
                            issues related to denture wear.</p>
                        <!-- <h6 class="text-body">Benefits of dental implants: </h6>
                        <ul>
                            <li>
                                <h5 class="text-body">You can smile confidently again. No more hiding your teeth when
                                    you’re talking or when you’re taking photos!
                                </h5>
                            </li>
                            <li>
                                <h5 class="text-body">You can chew more effectively. You won’t have to worry about what
                                    foods you can and can’t eat.
                                </h5>
                            </li>
                            <li>
                                <h5 class="text-body">You can speak with ease. Dental implants are securely in place so
                                    they won’t slip out when you’re talking.</h5>
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
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-7 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="display-5 mb-0 ">Why Bhayani Dental Clinic?</h4>
                            <ul>
                                <li>
                                    <h4 class="text-body">Are you unhappy with your current denture how missing teeth
                                        make you look and feel? Dr. Kalpesh Bhayani believes dentistry should improve
                                        both your health and quality of life. At Bhayani Dental Clinic, we want our
                                        patients to be able to enjoy the benefits of great oral health and a beautiful
                                        smile. Dentures may be the perfect solution for you.</h4>
                                </li>
                                <li>
                                    <h4 class="text-body">Your dentist is committed to giving you a healthy and happy
                                        smile so you can live your best life.</h4>
                                </li>
                                <li>
                                    <h4 class="text-body">This is everything dental care should be.</h4>
                                </li>
                                <!-- <li>
                                    <h4 class="text-body">If left untreated, a missing tooth will cause all of the teeth
                                        in your mouth to shift and fill in the empty space. This can cause larger dental
                                        issues like:</h4>
                                    <ul>
                                        <li>
                                            <h5 class="text-body">Poor tooth alignmeny</h5>
                                        </li>
                                        <li>
                                            <h5 class="text-body">Bite issues</h5>
                                        </li>
                                        <li>
                                            <h5 class="text-body">Difficulty chewing</h5>
                                        </li>
                                        <li>
                                            <h5 class="text-body">Jaw and tooth pain</h5>
                                        </li>
                                        <li>
                                            <h5 class="text-body">A change in your face shape</h5>
                                        </li>
                                    </ul>
                                </li> -->

                                <!-- <p class="text-body mb-1">This is everything dental care should be.</p> -->
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
            <!-- <div class="row mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item wow zoomIn" data-wow-delay="0.2s">
                    <h4 class="display-5 mb-5 ">What to Expect During Overdenture Installation</h4>
                </div>
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../img/pending.jpg" alt="">
                            </div>
                            <h4 class="mt-4 mb-2 text-center ">1. In-Person Consult</h4>
                            <p class="text-center text-body">Our implant team will evaluate your needs.
                            </p>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../img/pending.jpg" alt="">
                            </div>
                            <h4 class="mt-4 mb-2 text-center ">2. 3D Imaging</h4>
                            <p class="text-center text-body">We use top-of-the-tier technology to ensure proper
                                installation.
                            </p>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../img/pending.jpg" alt="">
                            </div>
                            <h4 class="mt-4 mb-2 text-center ">3. Placement </h4>
                            <p class="text-center text-body">Seamless installation of the implant in one simple visit.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row my-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12 mt-5">
                    <div class="row g-5">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/surgical/implant-supported-dentures-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/surgical/implant-supported-dentures-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/surgical/implant-supported-dentures-3.jpg" alt="">
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