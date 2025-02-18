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
                <h1 class="display-3 text-white animated zoomIn">Chipped / Cracked Tooth</h1>
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
                        <h4 class="display-5 mb-0 ">Do you have one or more damaged teeth?</h4>
                        <p class=" mb-4">Chips and cracks in the teeth are not just cosmetic issues. In fact,
                            depending on the location and type of damage, they may not be visible at all. But chipped or
                            cracked teeth can lead to further damage over time and pose a risk to your overall oral
                            health. They can also cause pain, especially when exposed to cold or hot temperatures.
                        </p>
                        <p class=" mb-4">
                            If you’re dealing with visible damage, pain, or other dental issues related to cracks and
                            chips, our skilled and compassionate team is here to help. We’ll examine your smile to
                            determine the source and extent of the damage and work with you to develop the right
                            treatment plan for your specific situation.</p>
                        <!-- <h3 class="mt-5 mb-0 ">What can professional teeth whitening do for you?</h3>
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
            <div class="row mb-5 g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <h2 class="mt-5 mb-0 ">Treatments for chipped or cracked teeth</h2>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>cosmatic/bonding.php">Bonding</a></h4>
                            <h4 class="text-body">If you have minor or shallow cracking, we may be able to use composite
                                bonding material to repair the damaged tooth. Bonding is non-invasive and pain-free.
                                Learn More.</h4>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>general/dental-fillings.php">Fillings</a>
                            </h4>
                            <h4 class="text-body">Fillings are a very common and safe method of fixing cracked, chipped,
                                or broken teeth. This may be the best course of action if your damaged tooth has a
                                cavity. Learn more.</h4>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>general/crowns.php">Crowns</a>
                            </h4>
                            <h4 class="text-body">Crowns can be used to cover visible cracks and chips as well as
                                protect the tooth from further damage. They can be made out of ceramic, porcelain, or
                                metal material, and can help restore the structure of a compromised tooth. Learn more.
                            </h4>
                        </div>
                    </div>
                    <div class="mt-3 row g-5">
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>cosmatic/vaneers.php">Veneers</a></h4>
                            <h4 class="text-body">Like crowns, dental veneers can be placed over damaged teeth to
                                improve the appearance of your smile and protect the tooth’s natural surface from
                                further damage. Because they look and feel just like natural teeth, veneers are a
                                popular treatment for a wide variety of cosmetic concerns. Learn more.</h4>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>surgical/implants.php">Implants</a></h4>
                            <h4 class="text-body">Dental implants involve removing the compromised tooth and creating an
                                implant to take its place. This may be the best option if your tooth is cracked or
                                chipped close to the gumline or if it’s sustained structural damage. Learn more.</h4>
                        </div>
                        <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-2 "><a href="<?php echo BASE_URL; ?>general/root-canal.php">Root
                                    canals</a></h4>
                            <h4 class="text-body">If a tooth is cracked or damaged down to the root, it may become
                                infected. If you’re dealing with an infection, we may recommend a root canal, which
                                involves removing the infection and then placing a crown over the tooth to protect it.
                                Learn more.</h4>
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