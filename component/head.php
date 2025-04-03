<?php ?>
<meta charset="utf-8" />
<title>Bhayani - Dental Clinic</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="Bhayani Dental Clinic" name="keywords" />
<meta content="Bhayani dental clinic" name="description" />

<!-- Favicon -->
<link href="../img/tooth.png" rel="icon" />

<!-- Google Web Fonts -->
<!-- <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet" /> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

<!-- Libraries Stylesheet -->
<link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="../lib/animate/animate.min.css" rel="stylesheet" />
<link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
<link href="../lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="../css/bootstrap.min.css" rel="stylesheet" />

<!-- Template Stylesheet -->
<link href="../css/style.css" rel="stylesheet" />
<style>
    .dropdown-menu {
        padding: 0.5rem 0;
        margin: 0;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 0.25rem;
        background-color: #fff;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .15);
    }

    .dropdown-item {
        padding: 0.5rem 1.5rem;
        color: #212529;
        transition: all 0.2s ease;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        color: #1e2125;
        background-color: #f8f9fa;
        text-decoration: none;
    }

    /* Submenu positioning and styling */
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
        display: none;
    }

    /* Show dropdowns on hover for desktop */
    @media (min-width: 992px) {

        .dropdown-submenu:hover>.dropdown-menu,
        .dropdown-menu.show {
            display: block;
        }

        .dropdown-submenu .dropdown-toggle::after {
            transform: rotate(-90deg);
            position: absolute;
            right: 1rem;
            top: 50%;
            margin-top: -0.4rem;
        }
    }

    /* Mobile specific styles */
    @media (max-width: 991.98px) {
        .dropdown-menu {
            border: none;
            background-color: transparent;
            box-shadow: none;
            padding: 0;
        }

        .dropdown-submenu .dropdown-menu {
            left: 0;
            margin-left: 1rem;
            padding-left: 1rem;
            border-left: 2px solid #e9ecef;
        }

        .dropdown-item {
            padding: 0.75rem 1.5rem;
        }

        .dropdown-toggle::after {
            float: right;
            margin-top: 0.5rem;
        }

        .dropdown-submenu .dropdown-toggle::after {
            transform: rotate(0deg);
        }

        .dropdown-submenu .dropdown-toggle[aria-expanded="true"]::after {
            transform: rotate(180deg);
        }
    }

    /* Logo and active state */
    .navbar-img-width {
        max-height: 60px;
    }

    .nav-item.active .nav-link {
        color: #0d6efd !important;
    }

    /* Dropdown arrows animation */
    .dropdown-toggle::after {
        transition: transform 0.2s ease;
    }

    .show>.dropdown-toggle::after {
        transform: rotate(180deg);
    }

    /* Consistent background colors */
    .dropdown-menu,
    .sub-dropdown-bg,
    .sub-dropdown-bg-dark {
        background-color: #fff;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        background-color: #f8f9fa;
    }
</style>
<?php ?>