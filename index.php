<?php
// include_once("index.html");
?>

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
    <?php include('component/topbar.php'); ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include('component/nav.php') ?>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, 0.7)">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword" />
                        <button class="btn btn-primary px-4">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <div class="container-fluid p-0 position-relative">
        <video class="w-100" autoplay muted loop>
            <source src="video/intro.mp4" type="video/mp4" />
            <img src="/img/carousel-1.jpg" alt="Fallback image for video">
        </video>
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
                <h5 class="text-white text-uppercase mb-3">
                    Keep Your Teeth Healthy
                </h5>
                <h1 class="display-1 text-white mb-md-4">
                    Take The Best Quality Dental Treatment
                </h1>
            </div>
        </div>
    </div>

    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 200px">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Sat</h6>
                            <p class="mb-0">9:00pm - 1:00pm & 5:00pm - 8:30pm</p>
                        </div>
                        <!-- <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Thursday</h6>
                            <p class="mb-0">4:30pm - 8:30pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0">9:30am - 1:00pm & 4:30pm - 8:00pm</p>
                        </div> -->
                        <!-- <a class="btn btn-light" href="">Appointment</a> -->
                    </div>
                </div>
                <!-- <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Search A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker"
                                style="height: 40px;">
                        </div>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>Select A Service</option>
                            <option value="1">Service 1</option>
                            <option value="2">Service 2</option>
                            <option value="3">Service 3</option>
                        </select>
                        <a class="btn btn-light" href="">Search Doctor</a>
                    </div>
                </div> -->
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 200px">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white">
                            Call the below number to book an appointment.
                        </p>
                        <h2 class="text-white mb-0">0261 257 5353</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->

    <!-- Service Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"> -->
    <div class="container-fluid bg-primary bg-appointment py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px">
                    <!-- <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/before.jpg" style="object-fit: cover" />
                        <img class="position-absolute w-100 h-100" src="img/after.jpg" style="object-fit: cover" />
                    </div> -->
                    <!-- <div class="rounded overflow-hidden image-container-denture"> -->
                    <div class="rounded overflow-hidden image-container-home-main">
                        <img class="img-fluid" src="../img/unique-photo-main.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">
                            Our Treatments
                        </h5>
                        <h1 class="display-5 mb-0 text-light">
                            We Offer The Best Quality Dental Treatments
                        </h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid height-300" src="img/service1.jpg" alt="" />
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h4 class="m-0"><b>Cosmetic Dentistry</b></h4>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid height-300" src="img/dental-implants-home.jpg" alt="" />
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h4 class="m-0"><b>Dental Implants</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid height-300" src="img/bridges-home.jpg" alt="" />
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h4 class="m-0"><b>Dental Bridges</b></h4>
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid image-container-all height-300 width-300" src="img/teeth-whitening-home.jpg"
                                    alt="" />
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h4 class="m-0"><b>Teeth Whitening</b></h4>
                            </div>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <div class="image-container-all">
                                    <img class="img-fluid" src="img/dental-crown-final-home.jpg" alt="" />
                                </div>
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h4 class="m-0"><b>Crowns</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">
                            Our Dentist
                        </h5>
                        <h1 class="display-6 mb-4">
                            Meet Our Certified & Experienced Dentist
                        </h1>
                        <!-- <a href="appointment.html" class="btn btn-primary py-3 px-5">Appointment</a> -->
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1">
                            <img class="img-fluid rounded-top w-100" src="img/dr.jpg" alt="" />
                            <div
                                class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="bi bi-facebook fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="bi bi-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr. Kalpesh Bhayani</h4>
                            <p class="text-primary mb-0">Dentist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- gallery start -->
    <div class="container-fluid pb-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="owl-carousel testimonial-carousel rounded wow zoomIn" data-wow-delay="0.6s">
                        <?php for ($i = 1; $i <= 16; $i++) {
                               echo "<div class='testimonial-item text-center text-white'>
                                    <img class='img-fluid mx-auto rounded' src='img/gallery/g$i.jpg' alt=''>
                                </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery end -->

    <!-- Footer Start -->
    <?php include 'component/footer.php' ?>
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
<?php ?>