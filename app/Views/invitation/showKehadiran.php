<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="<?=base_url();?>images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="<?=base_url();?>css/styles.css" />

    <title>Materialpro Bootstrap Admin</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?=base_url();?>libs/aos/dist/aos.css" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="<?=base_url();?>images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div class="landingpage">
        <div class="main-wrapper">
            <header class="topheader py-3" id="top">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ps-0">
                        <!-- Logo will be here -->
                        <a class="navbar-brand" href="../landingpage/index.html">
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="<?=base_url();?>images/logos/logo-icon.svg" alt="homepage">
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?=base_url();?>images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2">
                                <!-- Light Logo text -->
                                <img src="<?=base_url();?>images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage">
                            </span>
                        </a>

                        <!--Toggle button-->
                        <button class="navbar-toggler navbar-toggler-right border-0 p-0 fs-8" type="button" data-bs-toggle="offcanvas" href="#right-sidebar">
                            <iconify-icon icon="solar:hamburger-menu-line-duotone"></iconify-icon>
                        </button>

                        <!-- This is the navigation menu -->
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto stylish-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="../main/index.html" target="_blank">Main</a>
                                        <a class="dropdown-item" href="../minisidebar/index2.html" target="_blank">MiniSidebar</a>
                                        <a class="dropdown-item" href="../dark/index.html" target="_blank">Dark</a>
                                        <a class="dropdown-item" href="../horizontal/index6.html" target="_blank">Horizontal</a>
                                        <a class="dropdown-item" href="../rtl/index.html" target="_blank">RTL</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link scroll-link" href="#apps">Apps</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://wrappixel.github.io/premium-documentation-wp/bootstrap/materialpro/index.html" target="_blank">Documentation</a>
                                </li>
                                <li class="nav-item ms-3 mt-2 mt-md-0">
                                    <a class="btn btn-primary" href="../main/authentication-login.html">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>

            <!-- mobile sidebar -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="right-sidebar" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav stylish-nav">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#demos-dd">
                                <span>Demos</span>
                                <span class="fs-6">
                                    <iconify-icon icon="solar:alt-arrow-down-outline"></iconify-icon>
                                </span>
                            </a>
                            <div class="collapse" id="demos-dd">
                                <a class="px-3 py-2 dropdown-item" href="../main/index.html" target="_blank">Main</a>
                                <a class="px-3 py-2 dropdown-item" href="../minisidebar/index2.html" target="_blank">MiniSidebar</a>
                                <a class="px-3 py-2 dropdown-item" href="../dark/index.html" target="_blank">Dark</a>
                                <a class="px-3 py-2 dropdown-item" href="../horizontal/index6.html" target="_blank">Horizontal</a>

                                <a class="px-3 py-2 dropdown-item" href="../rtl/index.html" target="_blank">RTL</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="#apps">Apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://wrappixel.github.io/premium-documentation-wp/bootstrap/materialpro/index.html" target="_blank">Documentation</a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="btn btn-primary w-100" href="../main/authentication-login.html">Login</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- start banner -->
            <section class="hero-section position-relative overflow-hidden mb-0 mb-lg-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <div class="hero-content my-5 my-xl-0">
                                <h6 class="d-flex align-items-center gap-2 fs-4 fw-semibold mb-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                    <i class="ti ti-rocket fs-6"></i>Kick start
                                    your project with
                                </h6>
                                <h1 class="fw-bolder mb-7 fs-13" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                    Easy to Customize
                                    <span class="text-primary"> Admin Dashboard</span>
                                </h1>
                                <p class="fs-5 mb-5 text-dark fw-normal w-85" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                                    Materialpro Admin comes with light & dark color skins, well designed
                                    dashboards, applications and pages.
                                </p>
                                <div class="d-sm-flex align-items-center gap-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                                    <a class="btn btn-primary px-5 py-6 btn-hover-shadow d-block mb-3 mb-sm-0" href="../main/authentication-login.html">Login</a>
                                    <a class="btn btn-outline-primary d-block scroll-link px-7 py-6" href="#demos">Live Preview</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 d-none d-xl-block">
                            <div class="hero-img-slide position-relative bg-info-subtle p-4 rounded">
                                <div class="d-flex flex-row">
                                    <div class="me-4">
                                        <div class="banner-img-1 slideup">
                                            <img src="<?=base_url();?>images/landingpage/left.png" alt="" class="img-fluid" />
                                        </div>
                                        <div class="banner-img-1 slideup">
                                            <img src="<?=base_url();?>images/landingpage/left.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="banner-img-2 slideDown">
                                            <img src="<?=base_url();?>images/landingpage/right.png" alt="" class="img-fluid" />
                                        </div>
                                        <div class="banner-img-2 slideDown">
                                            <img src="<?=base_url();?>images/landingpage/right.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="<?=base_url();?>js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="<?=base_url();?>libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url();?>libs/simplebar/dist/simplebar.min.js"></script>
    <script src="<?=base_url();?>js/theme/app.init.js"></script>
    <script src="<?=base_url();?>js/theme/theme.js"></script>
    <script src="<?=base_url();?>js/theme/app.min.js"></script>
    <script src="<?=base_url();?>js/theme/feather.min.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="<?=base_url();?>libs/aos/dist/aos.js"></script>
    <script src="<?=base_url();?>js/landingpage/landingpage.js"></script>
</body>

</html>