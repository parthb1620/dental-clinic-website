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
                <h1 class="display-3 text-white animated zoomIn">Root Canal</h1>
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
                    <!-- <div class="twentytwenty-container position-relative h-200 rounded overflow-hidden">
                        <img class="position-absolute w-200 h-200" src="../img/general-tratments/bridges-before.jpeg"
                            style="object-fit: cover;">
                        <img class="position-absolute w-200 h-200" src="../img/general-tratments/bridges-after.jpeg"
                            style="object-fit: cover;">
                    </div> -->
                    <div class="rounded overflow-hidden image-container-home-main">
                        <img class="img-fluid" src="../img/general-tratments/root-canal-main.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Treatments</h5>
                        <h1 class="display-5 mb-0  text-uppercase">Stop pain & save your tooth</h1>
                        <h4 class="text-body fst-italic mb-4">Stop infections
                            and fix tooth pain!
                        </h4>
                        <p class=" mb-4">
                            Root canals are probably the most notorious procedure in dentistry, but also the most
                            misunderstood. While many people view them as “scary,” the truth is that a root canal is an
                            effective treatment to stop pain and save your tooth.
                        </p>
                        <p class=" mb-4">
                            So what is a root canal? When a tooth becomes infected, it’s usually related to the nerves
                            in the root of your tooth. These infected nerves need to be removed. Left untreated, an
                            infection can turn into an abscess, which is a much more serious problem that leads to
                            missing teeth and bone loss in your jaw.
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
            <div class="row my-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item wow zoomIn" data-wow-delay="0.2s">
                    <h4 class="display-5 mb-5 ">What To Expect </h4>
                </div>
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/general-tratments/root-canal-1.png" alt="">
                            </div>
                            <h4 class="mt-4 mb-2 text-center ">1. 3D Imaging & Diagnosis </h4>
                            <p class="text-center text-body">Modern tech allows us to understand the anatomy of your
                                tooth to treat it correctly.</p>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/general-tratments/root-canal-2.png" alt="">
                            </div>
                            <h4 class="mt-4 mb-2 text-center ">2. Remove the Infection </h4>
                            <p class="text-center text-body">We'll remove decay, clean and disinfect your canal system,
                                and seal the canal. </p>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.s">
                            <div class="rounded-top overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/general-tratments/root-canal-3.jpg" alt="">
                            </div>
                            <h4 class="mt-4 mb-2 text-center ">3. Restoring the Tooth </h4>
                            <p class="text-center text-body">We'll design a custom crown to cover and protect the tooth,
                                restoring beauty and function.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-7 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="display-5 mb-6 ">Why Bhayani Dental Clinic ?</h4>
                            <h6 class="text-body mb-6">When root canal treatment is the best recommendation for you,
                                we ensure your visit is comfortable and stress-free. Root canal therapy is a
                                safe, simple, and effective way to stop decay and infection and save your tooth
                                from extraction. </h6>
                            <h6 class="text-body">Bhayani dental clinic is the trusted place to get a root canal
                                in Liberty. With state-of-the-art technology and years of experience, your root
                                canal treatment will be easier and more comfortable than you thought. We’ll make
                                sure of it.
                            </h6>
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