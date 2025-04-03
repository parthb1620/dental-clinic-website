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

    <div class="container-fluid py-0 my-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row mb-5 mt-3">
            <div class="col-lg-6 dr-img-bg">
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="section-title mb-5 p-5">
                        <h1 class="display-5 mb-2 ">Dr. Kalpesh Bhayani</h1>
                        <h4 class="text-body fst-italic mb-4">“It’s not just about treating dental issues, but about
                            getting to know the people behind the smiles and building lifelong relationships.”</h4>
                        <h4 class="display-6 mt-5">Meet Dr. Kalpesh Bhayani, General Dentist</h4>
                        <p class="text-body">Dr. Kalpesh Bhayani, your trusted dentist at Bhayani Dental Clinic, is
                            passionate about
                            helping you achieve your healthiest, brightest smile possible. Dr. Bhayani has provided
                            gentle, comprehensive dental care.</p>
                        <p class="text-body">With a focus on general dentistry, including fillings, root canals,
                            extractions, and
                            crowns/bridges, Dr. Bhayani is committed to delivering care tailored to your needs.</p>
                        <p class="text-body">Beyond his technical skills, Dr. Bhayani values the relationships he builds
                            with his
                            patients, celebrating their milestones and being a part of their journey to optimal dental
                            health. At Bhayani Dental Clinic, he strives to create a welcoming environment where every
                            patient feels like family.</p>
                    </div>
                </div>
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