<?php
define('BASE_URL', '/');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-nav shadow-sm px-lg-5 px-3 py-3 py-lg-0">
    <a href="<?php echo BASE_URL; ?>index.php" class="navbar-brand p-0">
        <img class="navbar navbar-brand navbar-img-width" style="color: white;" src="../img/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <svg class="navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30">
            <rect width="30" height="4" y="7" fill="currentColor" />
            <rect width="30" height="4" y="15" fill="currentColor" />
            <rect width="30" height="4" y="23" fill="currentColor" />
        </svg>
    </button>
    <div class="collapse navbar-collapse pr-10" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="<?php echo BASE_URL; ?>index.php" class="nav-item nav-link" id="home">Home</a>
            <div class="nav-item dropdown">
                <a href="#" id="about-menu" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                <div class="dropdown-menu m-0 sub-dropdown-bg">
                    <a href="<?php echo BASE_URL; ?>about/clinic-about.php" class="dropdown-item">The Bhayani Dental
                        Clinic Is Different</a>
                    <a href="<?php echo BASE_URL; ?>about/dr-about.php" class="dropdown-item">Meet Dr. Kalpesh
                        Bhayani</a>
                </div>
            </div>
            <a href="<?php echo BASE_URL; ?>before-after.php" class="nav-item nav-link">Before & After</a>
            <div class="nav-item dropdown">
                <a href="#" id="treatment-menu" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Treatment</a>
                <div class="dropdown-menu m-0 sub-dropdown-bg">
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">General</a>
                        <div class="dropdown-menu sub-dropdown-bg-dark">
                            <div class="dropdown-submenu-child">
                                <a href="<?php echo BASE_URL; ?>general/crowns.php" class="dropdown-item">Crowns</a>
                            </div>
                            <div class="dropdown-submenu-child">
                                <a href="<?php echo BASE_URL; ?>general/bridges.php" class="dropdown-item">Bridges</a>
                            </div>
                            <div class="dropdown-submenu-child">
                                <a href="<?php echo BASE_URL; ?>general/root-canal.php" class="dropdown-item">Root
                                    Canal</a>
                            </div>
                            <div class="dropdown-submenu-child">
                                <a href="<?php echo BASE_URL; ?>general/gum-therapy.php" class="dropdown-item">Gum
                                    Therapy</a>
                            </div>
                            <div class="dropdown-submenu-child">
                                <a href="<?php echo BASE_URL; ?>general/dental-fillings.php"
                                    class="dropdown-item">Dental Fillings</a>
                            </div>
                            <div class="dropdown-submenu-child">
                                <a href="<?php echo BASE_URL; ?>general/dentures.php" class="dropdown-item">Dentures</a>
                            </div>
                            <div class="dropdown-submenu-child">
                                <a href="<?php echo BASE_URL; ?>general/night-guards.php" class="dropdown-item">Night
                                    Guards</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Cosmetic</a>
                        <div class="dropdown-menu sub-dropdown-bg-dark">
                            <a href="<?php echo BASE_URL; ?>cosmatic/braces-aligners.php" class="dropdown-item">Braces &
                                Aligners</a>
                            <a href="<?php echo BASE_URL; ?>cosmatic/teeth-whitening.php" class="dropdown-item">Teeth
                                Whitening</a>
                            <a href="<?php echo BASE_URL; ?>cosmatic/vaneers.php" class="dropdown-item">Veneers (Smile
                                Design)</a>
                            <a href="<?php echo BASE_URL; ?>cosmatic/smile-makeovers.php" class="dropdown-item">Smile
                                Makeovers</a>
                        </div>
                    </div>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Surgical</a>
                        <div class="dropdown-menu sub-dropdown-bg-dark">
                            <a href="<?php echo BASE_URL; ?>surgical/implants.php" class="dropdown-item">Implants</a>
                            <a href="<?php echo BASE_URL; ?>surgical/extractions.php"
                                class="dropdown-item">Extractions</a>
                            <a href="<?php echo BASE_URL; ?>surgical/implant-supported-dentures.php"
                                class="dropdown-item">Implant Supported Over-Denture</a>
                        </div>
                    </div>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Problems We Treat</a>
                        <div class="dropdown-menu sub-dropdown-bg-dark">
                            <a href="<?php echo BASE_URL; ?>problems-we-treat/cracked-tooth.php"
                                class="dropdown-item">Chipped / Cracked Tooth</a>
                            <a href="<?php echo BASE_URL; ?>problems-we-treat/wisdom-tooth.php"
                                class="dropdown-item">Wisdom Tooth Pain</a>
                            <a href="<?php echo BASE_URL; ?>problems-we-treat/missing-tooth.php"
                                class="dropdown-item">Missing Tooth</a>
                            <a href="<?php echo BASE_URL; ?>problems-we-treat/toothache.php"
                                class="dropdown-item">Toothache</a>
                            <a href="<?php echo BASE_URL; ?>problems-we-treat/teeth-grinding.php"
                                class="dropdown-item">Teeth Grinding</a>
                            <a href="<?php echo BASE_URL; ?>problems-we-treat/stained-teeth.php"
                                class="dropdown-item">Stained Teeth</a>
                            <a href="<?php echo BASE_URL; ?>problems-we-treat/bleeding-gums.php"
                                class="dropdown-item">Bleeding Gums</a>
                            <a href="<?php echo BASE_URL; ?>problems-we-treat/bad-breath.php" class="dropdown-item">Bad
                                Breath</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo BASE_URL; ?>contact.php" class="nav-item nav-link" id="contact">Contact Us</a>
        </div>
    </div>
</nav>

<style>
    /* Dropdown styling */
    .dropdown-menu {
        border: none;
        border-radius: 0;
        background-color: #f8f9fa;
        padding: 0.5rem 0;
        display: none;
        margin: 0;
    }

    .dropdown-menu.show {
        display: block;
    }

    .dropdown-item {
        padding: 0.5rem 1.5rem;
        color: #333;
        white-space: normal;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        background-color: #e9ecef;
        /* color: #16181b; */
    }

    /* First level dropdown */
    .dropdown-submenu {
        position: relative;
    }

    /* Second level dropdown */
    .dropdown-submenu-child {
        position: relative;
    }

    /* Desktop view */
    @media (min-width: 992px) {
        .dropdown-menu {
            position: absolute;
            z-index: 1000;
            display: none;
        }

        /* First level positioning */
        .nav-item.dropdown>.dropdown-menu {
            top: 100%;
            left: 0;
        }

        /* Second level positioning */
        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: 0;
            display: none;
        }

        /* Show dropdowns on hover - first level */
        .nav-item.dropdown:hover>.dropdown-menu {
            display: block;
        }

        /* Show dropdowns on hover - second level */
        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
        }

        /* Submenu arrow */
        .dropdown-submenu>.dropdown-item::after {
            display: inline-block;
            margin-left: 0.5em;
            vertical-align: middle;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid;
            transition: transform 0.2s ease-in-out;
            transform: rotate(0deg);
        }

        /* Rotate arrow on hover */
        .dropdown-submenu:hover>.dropdown-item::after {
            transform: rotate(90deg);
        }

        .dropdown-submenu-child>.dropdown-item::after {
            display: none;
            /* margin-left: 0.5em;
            vertical-align: middle;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid;
            transform: rotate(0deg); */
        }
    }

    /* Mobile view adjustments */
    @media (max-width: 991.98px) {
        .dropdown-menu {
            background-color: transparent;
            border: none;
            padding-left: 1rem;
            position: static !important;
            float: none;
            width: auto;
            margin-top: 0;
        }

        /* First level indentation */
        .dropdown-submenu .dropdown-menu {
            margin-left: 1rem;
        }

        /* Second level indentation */
        .dropdown-submenu-child .dropdown-menu {
            margin-left: 1rem;
        }

        .dropdown-item {
            padding: 0.5rem 1rem;
            color: #EEF9FF;
        }

        .dropdown-toggle::after {
            transform: rotate(-90deg);
        }

        /* First level arrow rotation */
        .dropdown-submenu>.dropdown-toggle::after {
            transform: rotate(-90deg);
        }

        .dropdown-submenu>.dropdown-toggle.show::after {
            transform: rotate(0deg);
        }

        /* Second level arrow rotation */
        .dropdown-submenu-child>.dropdown-toggle::after {
            display: block;
            transform: rotate(-90deg);
        }

        .dropdown-submenu-child>.dropdown-toggle.show::after {
            transform: rotate(0deg);
        }

        .show>.dropdown-menu {
            display: block;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const isMobile = () => window.innerWidth < 992;
        let currentTimeout = null;

        // Function to close all dropdowns
        function closeAllDropdowns() {
            document.querySelectorAll('.dropdown-menu, .dropdown-toggle').forEach(el => {
                el.classList.remove('show');
            });
        }

        // Function to close siblings
        function closeSiblings(element, selector) {
            const parent = element.parentElement;
            const siblings = parent.querySelectorAll(selector);
            siblings.forEach(sibling => {
                if (sibling !== element) {
                    sibling.querySelector('.dropdown-menu')?.classList.remove('show');
                    sibling.querySelector('.dropdown-toggle')?.classList.remove('show');
                }
            });
        }

        if (isMobile()) {
            let lastClickTime = 0;
            const clickDelay = 50; // Minimum time between clicks in ms

            // Mobile: Handle click events
            document.addEventListener('click', function (e) {
                const currentTime = new Date().getTime();
                if (currentTime - lastClickTime < clickDelay) {
                    return; // Prevent rapid clicks
                }
                lastClickTime = currentTime;

                const toggle = e.target.closest('.dropdown-toggle');
                const menuItem = e.target.closest('.dropdown-item');

                // Handle clicks outside dropdown
                if (!toggle && !menuItem) {
                    if (!e.target.closest('.navbar')) {
                        closeAllDropdowns();
                    }
                    return;
                }

                // If clicking a menu item that's not a toggle, let it navigate
                if (menuItem && !toggle) {
                    return;
                }

                e.preventDefault();
                e.stopPropagation();

                const parent = toggle.parentElement;
                const menu = parent.querySelector('.dropdown-menu');
                const isMainDropdown = parent.classList.contains('nav-item');
                const isSubmenu = parent.classList.contains('dropdown-submenu');
                const isSubmenuChild = parent.classList.contains('dropdown-submenu-child');

                if (isMainDropdown) {
                    // Main dropdown click
                    const wasOpen = menu.classList.contains('show');
                    if (!wasOpen) {
                        // Close other main dropdowns
                        document.querySelectorAll('.nav-item.dropdown > .dropdown-menu').forEach(el => {
                            if (el !== menu) {
                                el.classList.remove('show');
                                el.previousElementSibling.classList.remove('show');
                            }
                        });
                        menu.classList.add('show');
                        toggle.classList.add('show');
                    } else {
                        // Close this dropdown and all its children
                        menu.classList.remove('show');
                        toggle.classList.remove('show');
                        menu.querySelectorAll('.show').forEach(el => el.classList.remove('show'));
                    }
                } else if (isSubmenu || isSubmenuChild) {
                    // Handle both second and third level clicks similarly
                    const siblingSelector = isSubmenu ? '.dropdown-submenu' : '.dropdown-submenu-child';
                    const wasOpen = menu.classList.contains('show');

                    // Close siblings
                    closeSiblings(parent, siblingSelector);

                    if (!wasOpen) {
                        // Open this menu
                        menu.classList.add('show');
                        toggle.classList.add('show');

                        // Ensure parent menus stay open
                        let parentMenu = parent.closest('.dropdown-menu');
                        while (parentMenu) {
                            parentMenu.classList.add('show');
                            const parentToggle = parentMenu.previousElementSibling;
                            if (parentToggle && parentToggle.classList.contains('dropdown-toggle')) {
                                parentToggle.classList.add('show');
                            }
                            parentMenu = parentMenu.parentElement.closest('.dropdown-menu');
                        }
                    } else {
                        // Close this menu and its children
                        menu.classList.remove('show');
                        toggle.classList.remove('show');
                        menu.querySelectorAll('.show').forEach(el => el.classList.remove('show'));
                    }
                }
            });
        } else {
            // Desktop: Handle hover events
            const hoverDelay = 200; // Delay in milliseconds

            function clearHoverTimeout() {
                if (currentTimeout) {
                    clearTimeout(currentTimeout);
                    currentTimeout = null;
                }
            }

            // Main dropdown hover
            document.querySelectorAll('.nav-item.dropdown').forEach(dropdown => {
                dropdown.addEventListener('mouseenter', function () {
                    clearHoverTimeout();
                    this.querySelector('.dropdown-menu').classList.add('show');
                });

                dropdown.addEventListener('mouseleave', function () {
                    const menu = this.querySelector('.dropdown-menu');
                    currentTimeout = setTimeout(() => {
                        menu.classList.remove('show');
                        // Close all child dropdowns when leaving main dropdown
                        menu.querySelectorAll('.dropdown-menu').forEach(submenu => {
                            submenu.classList.remove('show');
                        });
                    }, hoverDelay);
                });
            });

            // Second level dropdown hover
            document.querySelectorAll('.dropdown-submenu').forEach(submenu => {
                submenu.addEventListener('mouseenter', function () {
                    clearHoverTimeout();
                    this.querySelector('.dropdown-menu').classList.add('show');
                });

                submenu.addEventListener('mouseleave', function () {
                    const menu = this.querySelector('.dropdown-menu');
                    currentTimeout = setTimeout(() => {
                        menu.classList.remove('show');
                        // Close all child dropdowns when leaving submenu
                        menu.querySelectorAll('.dropdown-menu').forEach(childMenu => {
                            childMenu.classList.remove('show');
                        });
                    }, hoverDelay);
                });
            });

            // Third level dropdown hover
            document.querySelectorAll('.dropdown-submenu-child').forEach(submenuChild => {
                submenuChild.addEventListener('mouseenter', function () {
                    clearHoverTimeout();
                    this.querySelector('.dropdown-menu')?.classList.add('show');
                });

                submenuChild.addEventListener('mouseleave', function () {
                    const menu = this.querySelector('.dropdown-menu');
                    if (menu) {
                        currentTimeout = setTimeout(() => {
                            menu.classList.remove('show');
                        }, hoverDelay);
                    }
                });
            });
        }

        // Handle window resize
        window.addEventListener('resize', closeAllDropdowns);

        // Active state management
        const currentPath = window.location.pathname;
        document.querySelectorAll('.nav-link').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                // link.closest('.nav-item').classList.add('active');
            }
        });
    });
</script>
<?php ?>
<!-- </body>

</html> -->