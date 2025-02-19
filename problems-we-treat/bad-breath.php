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
      <div class="modal-content" style="background: rgba(9, 30, 62, 0.7)">
        <div class="modal-header border-0">
          <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

  <!-- Hero Start -->
  <div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
      <div class="col-12 text-center">
        <h1 class="display-3 text-white animated zoomIn">Bad Breath</h1>
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
            <h5 class="position-relative d-inline-block text-primary text-uppercase">
              Our Treatments
            </h5>
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
            <h4 class="display-5 mb-0 ">
              Eliminate bad breath and boost your confidence
            </h4>
            <p class=" mb-4">
              We all deal with bad breath from time to time, especially after
              eating certain foods like garlic or onions. But if you’re
              experiencing bad breath (halitosis) on a regular basis, it may
              be a sign of a more serious issue such as gum disease or an
              underlying medical condition.
            </p>
            <p class=" mb-4">
              At Bhayani Dental Clinic, we diagnose and treat bad breath on a
              regular basis. Our caring and experienced Greenwood Village bad
              breath dentists will work with you to determine the specific
              cause of your bad breath and recommend effective treatments to
              resolve the issue.
            </p>
          </div>
        </div>
      </div>
      <div class="row mb-5 g-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-12">
          <div class="row g-5">
            <h2 class="mb-0 ">
              Treatments for bad breath</h2>
            <!-- <h6 class="mt-5 mb-0 ">At Bhayani Dental Clinic, we’re dedicated to providing quality
                            care for all patients. If you’re missing a tooth or multiple teeth, we can provide you with
                            long-lasting, high-quality restorations to improve your smile and your confidence.</h6> -->
            <div class="col-md-12 service-item wow zoomIn" data-wow-delay="0.3s">
              <div class="row flex flex-justify border-2">
                <a class="btn btn-secondary btn-secondary-cs" data-bs-toggle="collapse" href="#b1" role="button"
                  aria-expanded="false" aria-controls="b1">
                  <div class="row">
                    <h4 class="col-md-11 pt-1" style="text-align: left;">
                      Brush your teeth twice per day
                    </h4>
                    <i class="bi bi-plus col-md-1 fs-3"></i>
                  </div>
                </a>
                <!-- <button class="col-md-6 btn" style="color: white"> -->
                <!-- </button> -->
              </div>
              <div class="collapse mt-2" id="b1">
                <h4 class="text-body">
                  If you often forget to keep up with your daily at-home
                  dental care, this is likely causing a buildup of
                  odor-causing bacteria. Daily care such as brushing,
                  flossing, and using an antibacterial mouthwash can help to
                  eliminate bad breath and improve your overall oral health.
                </h4>
              </div>
            </div>
            <div class="col-md-12 service-item wow zoomIn" data-wow-delay="0.3s">
              <div class="row flex flex-justify border-2">
                <a class="btn btn-secondary btn-secondary-cs" data-bs-toggle="collapse" href="#b2" role="button"
                  aria-expanded="false" aria-controls="b2">
                  <div class="row">
                    <h4 class="col-md-11 pt-1" style="text-align: left;">
                      Gum disease treatment
                    </h4>
                    <i class="bi bi-plus col-md-1 fs-3"></i>
                  </div>
                </a>
              </div>
              <div class="collapse mt-2" id="b2">
                <h4 class="text-body">
                  Early-stage gum disease is a common cause of chronic bad
                  breath. We can provide targeted treatments for gum disease
                  and tooth decay to restore your oral health and alleviate
                  bad breath. Learn more.
                </h4>
              </div>
            </div>
            <div class="col-md-12 service-item wow zoomIn" data-wow-delay="0.3s">
              <div class="row flex flex-justify border-2">
                <a class="btn btn-secondary btn-secondary-cs" data-bs-toggle="collapse" href="#b3" role="button"
                  aria-expanded="false" aria-controls="b3">
                  <div class="row">
                    <h4 class="col-md-11 pt-1" style="text-align: left;">
                      Regular dental cleanings
                    </h4>
                    <i class="bi bi-plus col-md-1 fs-3"></i>
                  </div>
                </a>
              </div>
              <div class="collapse mt-2" id="b3">
                <h4 class="text-body">
                  Over time, our teeth accumulate plaque and tartar that even
                  regular brushing and flossing can’t remove, leading to mouth
                  odors. Professional dental cleanings and exams every six
                  months will help you achieve and maintain fresh breath.
                  Learn more.
                </h4>
              </div>
            </div>
            <div class="col-md-12 service-item wow zoomIn" data-wow-delay="0.3s">
              <div class="row flex flex-justify border-2">
                <a class="btn btn-secondary btn-secondary-cs" data-bs-toggle="collapse" href="#b4" role="button"
                  aria-expanded="false" aria-controls="b4">
                  <div class="row">
                    <h4 class="col-md-11 pt-1" style="text-align: left;">
                      Lifestyle changes
                    </h4>
                    <i class="bi bi-plus col-md-1 fs-3"></i>
                  </div>
                </a>
              </div>
              <div class="collapse mt-2" id="b4">
                <h4 class="text-body">
                  If you smoke or chew tobacco or regularly consume foods and
                  drinks that cause bad breath, reducing or eliminating these
                  products can help improve your breath.
                </h4>
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