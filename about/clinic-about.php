<?php
?>

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
    <?php include('../component/topbar.php'); ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include('../component/nav.php') ?>
    <!-- Navbar End -->

    <div class="container-fluid p-0 position-relative">
        <!-- <source src="video/intro.mp4" type="video/mp4" /> -->
        <img class="w-100" src="../img/service-4.JPG">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
                <!-- <h5 class="text-white text-uppercase mb-3">
                    Keep Your Teeth Healthy
                </h5> -->
                <!-- <h4 class="display-3 text-white mb-md-4" style="position: relative; bottom: -250px;">
                    THE BHAYANI DENTAL CLINIC DIFFERENCE
                </h4>
                <h4 class="display-6 text-white mb-md-4" style="position: relative; bottom: -400px;">
                    Every dental clinic is different. Are we the right one for you?
                </h4> -->
                <!-- <h4 class="display-3 text-white mb-md-4">
                    THE BHAYANI DENTAL CLINIC DIFFERENCE
                </h4>
                <h4 class="display-6 text-white mb-md-4" style="position: relative; bottom: -100px;">
                    Every dental clinic is different. Are we the right one for you?
                </h4> -->
            </div>
        </div>
    </div>

    <!-- Banner Start -->
    <!-- <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 200px">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Sat</h6>
                            <p class="mb-0">9:00pm - 1:00pm & 5:00pm - 8:30pm</p>
                        </div> -->
    <!-- <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Thursday</h6>
                            <p class="mb-0">4:30pm - 8:30pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0">9:30am - 1:00pm & 4:30pm - 8:00pm</p>
                        </div> -->
    <!-- <a class="btn btn-light" href="">Appointment</a> -->
    <!-- </div>
                </div> -->
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
    <!-- <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
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
    </div> -->
    <!-- Banner Start -->
    <div class="container-fluid py-0 my-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row">
            <div class="col-lg-6 about-us-bg">
            </div>
            <div class="col-lg-6 about-us-bg-right">
                <div class="container">
                    <div class="section-title mb-5 p-5">
                        <h5 class="display-5 position-relative d-inline-block text-white text-uppercase mb-5">The
                            Bhayani Clinic
                            Difference
                        </h5>
                        <div class="row">
                            <div class="col-lg-4 mt-5">
                                <i class="bi bi-emoji-heart-eyes text-white fs-1"></i>
                                <h6 class="display-6 text-white mb-2">
                                    Quality
                                </h6>
                                <p class="text-white">
                                    Expert clinicians, guided by science
                                </p>
                            </div>
                            <div class="col-lg-4 mt-5">
                                <i class="bi bi-stars text-white fs-1"></i>
                                <h6 class="display-6 text-white mb-2">
                                    Comfort
                                </h6>
                                <p class="text-white">
                                    Expert clinicians, guided by science
                                </p>
                            </div>
                            <div class="col-lg-4 mt-5">
                                <i class="bi bi-laptop text-white fs-1"></i>
                                <h6 class="display-6 text-white mb-2">
                                    Technology
                                </h6>
                                <p class="text-white">
                                    Expert clinicians, guided by science
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-about-us-p-2 py-0 my-0 wow fadeInUp" data-wow-delay="0.3s">
        <div class="container">
            <div class="section-title mb-5 p-5">
                <h5 class="display-6 position-relative d-inline-block text-white text-uppercase mb-5">What sets Bhayani
                    Dental apart from other dentists in Surat?
                </h5>
                <p class="text-white">
                    Our mission and passion is all about ensuring patient comfort and delivering outstanding results
                    that are functional, esthetic, and long-lasting. We use the latest and greatest in technology and
                    believe in giving back to the community through our philanthropic work. From the front desk to the
                    dental chair, you can rest assured that you’re in good hands!
                </p>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"> -->
    <!-- Service End -->

    <!-- Team Start -->
    <!-- Team End -->

    <!-- Footer Start -->
    <?php include '../component/footer.php' ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
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
<?php ?>