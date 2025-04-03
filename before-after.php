<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'component/head.php'; ?>
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
    <?php include 'component/topbar.php'; ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include('component/nav.php') ?>
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
                <h1 class="display-3 text-white animated zoomIn">Before & After</h1>
                <!-- <a href="index.html" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Contact</a> -->
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Start -->
    <div class="container-fluid py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <h5 class="text-center text-uppercase display-5"><b>Implants</b></h5>
                    <div class="row g-5 mt-2">
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-implants">
                                <img class="img-fluid" src="../img/before-after/implants-1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-implants">
                                <img class="img-fluid" src="../img/before-after/implants-2.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.s">
                            <div class="rounded-top overflow-hidden image-container-implants">
                                <img class="img-fluid" src="../img/before-after/implants-3.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.s">
                            <div class="rounded-top overflow-hidden image-container-implants">
                                <img class="img-fluid" src="../img/before-after/implants-4.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row wow fadeInUp mt-5" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <h5 class="text-center text-uppercase display-5"><b>Crowns</b></h5>
                    <div class="row g-5 mt-2">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-crowns-final">
                                <img class="img-fluid" src="../img/before-after/crowns-1-f.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-crowns-final">
                                <img class="img-fluid" src="../img/before-after/crowns-2-f.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row wow fadeInUp mt-5" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <h5 class="text-center text-uppercase display-5"><b>Bridges</b></h5>
                    <div class="row g-5 mt-2">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../img/before-after/bridges-1.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../img/before-after/bridges-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row wow fadeInUp mt-5" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <h5 class="text-center text-uppercase display-5"><b>Dental Fillings</b></h5>
                    <div class="row g-5 mt-2">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-all height-500">
                                <img class="img-fluid" src="../img/before-after/dental-filling-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-all height-500">
                                <img class="img-fluid" src="../img/before-after/dental-filling-2.jpg" alt="">
                            </div>
                        </div>
                        <!-- <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-all height-400">
                                <img class="img-fluid" src="../img/before-after/dental-filling-3.jpg" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="row wow fadeInUp mt-5" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <h5 class="text-center text-uppercase display-5"><b>Teeth Whitening</b></h5>
                    <div class="row g-5 mt-2">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-all height-400">
                                <img class="img-fluid" src="../img/before-after/teeth-whitening-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-all height-400">
                                <img class="img-fluid" src="../img/before-after/teeth-whitening-2.jpg" alt="">
                            </div>
                        </div>
                        <!-- <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-all height-400">
                                <img class="img-fluid" src="../img/before-after/teeth-whitening-3.jpg" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- <div class="row wow fadeInUp mt-5" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <h5 class="text-center text-uppercase display-5"><b>Bonding</b></h5>
                    <div class="row g-5 mt-2">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-all height-1000">
                                <img class="img-fluid" src="../img/before-after/bonding-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-all height-1000">
                                <img class="img-fluid" src="../img/before-after/bonding-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row wow fadeInUp mt-5" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <h5 class="text-center text-uppercase display-5"><b>Smile Designing</b></h5>
                    <div class="row g-5 mt-2">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden image-container-all height-400">
                                <img class="img-fluid" src="../img/before-after/smile-design-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-all height-400">
                                <img class="img-fluid" src="../img/before-after/smile-design-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden image-container-all height-400">
                                <img class="img-fluid" src="../img/before-after/smile-design-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End -->

    <!-- Footer Start -->
    <?php include 'component/footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>