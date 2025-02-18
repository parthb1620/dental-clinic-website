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
                <h1 class="display-3 text-white animated zoomIn">Dental Fillings</h1>
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
                <!-- <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" style="min-height: 300px;">
                    <div class="twentytwenty-container position-relative h-200 rounded overflow-hidden">
                        <img class="position-absolute w-200 h-200" src="../img/general-tratments/bridges-before.jpeg"
                            style="object-fit: cover;">
                        <img class="position-absolute w-200 h-200" src="../img/general-tratments/bridges-after.jpeg"
                            style="object-fit: cover;">
                    </div>
                </div> -->
                <div class="col-lg-10 wow zoomIn" data-wow-delay="0.3s">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Treatments</h5>
                        <h1 class="display-5 mb-0  text-uppercase">Protect your teeth and prevent decay</h1>
                        <!-- <h4 class="text-body fst-italic mb-4">Restore tooth structure, restore your health.</h4> -->
                        <p class=" mb-4">
                            Strong teeth are vital to good health. But over time, the function, integrity, and form of a
                            tooth’s structure can decay. Dental fillings repair cavities, cracked or broken teeth, and
                            teeth worn down by misuse.
                        </p>
                        <p class=" mb-4">
                            Whether you have a nail-biting habit that wears down your teeth, a painful cavity behind one
                            of your canines, or a chipped tooth from an accident, we’re here to help.
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
                            <h5 class="display-6 mb-0 ">Getting a filling at Bhayani Dental Clinic</h5>
                            <div class="mt-5 rounded-top overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/general-tratments/dental-filling-main.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-5 service-item wow zoomIn" data-wow-delay="0.6s">
                            <!-- <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../img/service-4.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Teeth Whitening</h5>
                            </div> -->
                            <h5 class="text-body">All our dental filling treatments use biocompatible materials and are
                                placed using minimally-invasive and gentle techniques.</h5>
                            <ol>
                                <li>
                                    <h5 class="text-body">Our team will make sure you feel comfortable and relaxed in
                                        your chair before getting started</h5>
                                </li>
                                <li>
                                    <h5 class="text-body">Using the Solea Laser technology, Dr. Kalpesh Bhayani will
                                        carefully remove the decayed tooth structure</h5>
                                </li>
                                <li>
                                    <h5 class="text-body">We’ll build up the filling, making sure it matches the natural
                                        color to your tooth</h5>
                                </li>
                                <li>
                                    <h5 class="text-body">Finally, we’ll polish the filling, check your bite, and make
                                        any final adjustments</h5>
                                </li>
                            </ol>
                            <h5 class="text-body">We believe in helping our patients know the joy of a happy,
                                healthy smile. When you need to stop decay or improve a tooth, we do our best to
                                make it a positive and empowering experience. You’re in good hands here.</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5 wow fadeInUp" data-wow-delay="0.1s">
                <!-- <div class="service-item wow zoomIn" data-wow-delay="0.2s">
                    <h4 class="display-5 mb-5 ">What are my options? </h4>
                </div> -->
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/general-tratments/dental-filling-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/general-tratments/dental-filling-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.s">
                            <div class="rounded overflow-hidden image-container-denture">
                                <img class="img-fluid" src="../img/general-tratments/dental-filling-3.jpg" alt="">
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