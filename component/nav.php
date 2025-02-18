<?php
define('BASE_URL', '/');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-nav shadow-sm px-lg-5 px-3 py-3 py-lg-0">
  <a href="<?php echo BASE_URL; ?>index.php" class="navbar-brand p-0">
    <!-- <h1 class="m-0 text-primary fs4"><i class="fa fa-tooth me-2"></i>Bhayani Dental Clinic
    </h1> -->
    <h1 class="m-0 text-primary fs4">Bhayani Dental Clinic
    </h1>
    <!-- <img class="navbar navbar-brand" width="200" style="color: white;" src="../img/logo.png"> -->
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <!-- <span class="navbar-toggler-icon"></span> -->
    <svg class="navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30">
      <rect width="30" height="4" y="7" fill="currentColor" />
      <rect width="30" height="4" y="15" fill="currentColor" />
      <rect width="30" height="4" y="23" fill="currentColor" />
    </svg>
  </button>
  <div class="collapse navbar-collapse pr-10" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
      <a href="<?php echo BASE_URL; ?>index.php" class="nav-item nav-link" id="home">Home</a>
      <!-- <a href="<?php #echo BASE_URL; ?>about.php" class="nav-item nav-link" id="about">About</a> -->
      <div class="nav-item dropdown">
        <a href="#" id="treatment-menu" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
          data-bs-target="about us-dropdown">About Us</a>
        <div class="dropdown-menu m-0 sub-dropdown-bg" id="treatment-dropdown">
          <a href="<?php echo BASE_URL; ?>about/clinic-about.php" class="dropdown-item">The Bhayani Clinic
            Difference</a>
          <a href="<?php echo BASE_URL; ?>about/dr-about.php" class="dropdown-item">Meet Dr. Kalpesh</a>
        </div>
      </div>
      <a href="<?php echo BASE_URL; ?>before-after.php" class="nav-item nav-link" id="home">Before & After</a>
      <div class="nav-item dropdown">
        <a href="#" id="treatment-menu" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
          data-bs-target="treatment-dropdown">Treatment</a>
        <div class="dropdown-menu m-0 sub-dropdown-bg" id="treatment-dropdown">
          <div class="dropdown dropdown-submenu">
            <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
              data-bs-target="general-dropdown">General</a>
            <div class="dropdown-menu m-0 sub-dropdown-bg-dark" id="general-dropdown">
              <a href="<?php echo BASE_URL; ?>general/crowns.php" class="dropdown-item">Crowns</a>
              <a href="<?php echo BASE_URL; ?>general/bridges.php" class="dropdown-item">Bridges</a>
              <a href="<?php echo BASE_URL; ?>general/root-canal.php" class="dropdown-item">Root Canal</a>
              <a href="<?php echo BASE_URL; ?>general/gum-therapy.php" class="dropdown-item">Gum Therapy</a>
              <a href="<?php echo BASE_URL; ?>general/dental-fillings.php" class="dropdown-item">Detnal Fillings</a>
              <a href="<?php echo BASE_URL; ?>general/dentures.php" class="dropdown-item">Dentures</a>
              <a href="<?php echo BASE_URL; ?>general/night-guards.php" class="dropdown-item">Night Guards</a>
            </div>
          </div>

          <div class="dropdown dropdown-submenu">
            <a href="#" class="dropdown-item dropdown-toggle">Cosmetic</a>
            <div class="dropdown-menu m-0 sub-dropdown-bg-dark">
              <a href="<?php echo BASE_URL; ?>cosmatic/braces-aligners.php" class="dropdown-item">Braces & Aligners</a>
              <a href="<?php echo BASE_URL; ?>cosmatic/teeth-whitening.php" class="dropdown-item">Teeth Whitening</a>
              <a href="<?php echo BASE_URL; ?>cosmatic/bonding.php" class="dropdown-item">Bonding</a>
              <a href="<?php echo BASE_URL; ?>cosmatic/vaneers.php" class="dropdown-item">Veneers (Smile Design)</a>
              <a href="<?php echo BASE_URL; ?>cosmatic/smile-makeovers.php" class="dropdown-item">Smile Makeovers</a>
            </div>
          </div>
          <div class="dropdown dropdown-submenu">
            <a href="#" class="dropdown-item dropdown-toggle">Surgical</a>
            <div class="dropdown-menu m-0 sub-dropdown-bg-dark">
              <a href="<?php echo BASE_URL; ?>surgical/implants.php" class="dropdown-item">Implants</a>
              <a href="<?php echo BASE_URL; ?>surgical/extractions.php" class="dropdown-item">Extractions</a>
              <a href="<?php echo BASE_URL; ?>surgical/implant-supported-dentures.php" class="dropdown-item">Implant
                Supported Dentures</a>
            </div>
          </div>
          <div class="dropdown dropdown-submenu">
            <a href="#" class="dropdown-item dropdown-toggle">Problems We Treat</a>
            <div class="dropdown-menu m-0 sub-dropdown-bg-dark">
              <a href="<?php echo BASE_URL; ?>problems-we-treat/cracked-tooth.php" class="dropdown-item">Chipped /
                Cracked
                Tooth</a>
              <a href="<?php echo BASE_URL; ?>problems-we-treat/wisdom-tooth.php" class="dropdown-item">Wisdom Tooth
                Pain</a>
              <a href="<?php echo BASE_URL; ?>problems-we-treat/missing-tooth.php" class="dropdown-item">Missing
                Tooth</a>
              <a href="<?php echo BASE_URL; ?>problems-we-treat/toothache.php" class="dropdown-item">Toothache</a>
              <a href="<?php echo BASE_URL; ?>problems-we-treat/teeth-grinding.php" class="dropdown-item">Teeth
                Grinding</a>
              <a href="<?php echo BASE_URL; ?>problems-we-treat/stained-teeth.php" class="dropdown-item">Stained
                Teeth</a>
              <a href="<?php echo BASE_URL; ?>problems-we-treat/bleeding-gums.php" class="dropdown-item">Bleeding
                Gums</a>
              <a href="<?php echo BASE_URL; ?>problems-we-treat/bad-breath.php" class="dropdown-item">Bad Breath</a>
            </div>
          </div>
        </div>
      </div>
      <a href="<?php echo BASE_URL; ?>contact.php" class="nav-item nav-link" id="contact">Contact</a>
    </div>
  </div>
</nav>
<script>
  document.querySelectorAll('.dropdown .dropdown-menu .dropdown-item').forEach(item => {
    item.addEventListener('click', () => {
      document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
      document.getElementById('treatment-menu').classList.add('active');
    });
  });

  document.getElementById('treatment-menu').addEventListener('click', () => {
    document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
    document.getElementById('treatment-menu').classList.add('active');
  });

  document.getElementById('home').addEventListener('click', () => {
    document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
    document.getElementById('home').classList.add('active');
  });

  document.getElementById('about').addEventListener('click', () => {
    document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
    document.getElementById('about').classList.add('active');
  });

  document.getElementById('contact').addEventListener('click', () => {
    document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
    document.getElementById('contact').classList.add('active');
  });


  document.addEventListener("DOMContentLoaded", function () {
    // make it as accordion for smaller screens
    if (window.innerWidth < 992) {
      // close all inner dropdowns when parent is closed
      document
        .querySelectorAll(".navbar .dropdown")
        .forEach(function (everydropdown) {
          everydropdown.addEventListener("hidden.bs.dropdown", function () {
            // after dropdown is hidden, then find all submenus
            this.querySelectorAll(".submenu").forEach(function (
              everysubmenu
            ) {
              // hide every submenu as well
              everysubmenu.style.display = "none";
            });
          });
        });

      document
        .querySelectorAll(".dropdown-menu a")
        .forEach(function (element) {
          element.addEventListener("click", function (e) {
            let nextEl = this.nextElementSibling;
            if (nextEl && nextEl.classList.contains("submenu")) {
              // prevent opening link if link needs to open dropdown
              e.preventDefault();
              if (nextEl.style.display == "block") {
                nextEl.style.display = "none";
              } else {
                nextEl.style.display = "block";
              }
            }
          });
        });
    }
    // end if innerWidth
  });
</script>
<?php ?>