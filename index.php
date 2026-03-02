<!DOCTYPE html>
<html lang="en">

<head>


    <?php include('meta.php'); ?>

    <?php include('links.php'); ?>

</head>

<body>


    <div class="page-wrapper">


        <div class="preloader">
            <svg class="svg-loader" xmlns="http://www.w3.org/2000/svg" width="230" height="230">
                <path class="loader__path" d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z" fill="none" stroke="#0099cc" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77"></path>
                <path class="loader__plane" d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z" fill="#000033"></path>
            </svg>
        </div>

        <header class="header-section header-section-one">
            <div class="header">
                <div class="header-bottom-area">
                    <div class="container-fluid">
                        <div class="header-menu-content">
                            <nav class="navbar navbar-expand-lg p-0">
                                <a class="site-logo site-title" href="./">
                                    <img src="assets/img/logo-white.webp" alt="Al-Rashed Aviation" width="300px">
                                </a>
                                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fas fa-bars"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav main-menu ml-auto">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="javascript:void(0);">About Us</a></li>
                                        <li class="menu_has_children"><a href="javascript:void(0);">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="javascript:void(0);">GSA Representation</a></li>
                                                <li><a href="javascript:void(0);">Cargo Operations</a></li>
                                                <li><a href="javascript:void(0);">Passenger Airlines</a></li>
                                                <li><a href="javascript:void(0);">Special Handling</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu_has_children"><a href="javascript:void(0);">Carriers</a>
                                            <ul class="sub-menu">
                                                <li><a href="javascript:void(0);">Turkish Cargo</a></li>
                                                <li><a href="javascript:void(0);">American Airlines</a></li>
                                                <li><a href="javascript:void(0);">Oman Air</a></li>
                                                <li><a href="javascript:void(0);">SpiceJet</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="javascript:void(0);">Careers</a></li>
                                        <li><a href="javascript:void(0);">Contact Us</a></li>
                                    </ul>
                                    <div class="header-right">
                                        <div class="search-bar d-none d-lg-block">
                                            <a href="javascript:void(0);"><i class="fas fa-search"></i></a>
                                            <div class="header-top-search-area">
                                                <form class="header-search-form" action="javascript:void(0);" method="GET">
                                                    <input type="search" name="keyword" id="header_search" placeholder="Search Services...">
                                                    <button class="header-search-btn"><i class="fas fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="header-action-area">
                                            <div class="header-action">
                                                <a href="javascript:void(0);" class="btn--base"><i class="fas fa-file-contract mr-2"></i> Get Quote</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <a href="#" class="scrollToTop">
            <i class="las la-dot-circle"></i>
            <span>Top</span>
        </a>



        <section class="banner-section">
            <div class="banner-element" data-aos="fade-left" data-aos-duration="1200">
                <img src="assets/images/element/element-1.png" alt="element">
            </div>
            <div class="banner-element-two">
                <img src="assets/images/element/element-3.png" alt="element">
            </div>

            <div class="banner-social-area">
                <ul class="banner-social">
                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#0" class="active"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#0"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xxl-5 col-xl-6 col-lg-12 mb-30">
                        <div class="banner-content" data-aos="fade-right" data-aos-duration="1800">

                            <h1 class="title">The True Airline Partner in Kuwait</h1>
                            <p>
                                Al-Rashed International Aviation serves as a premier General Sales Agent (GSA),
                                bridging the gap between global carriers and the Kuwaiti market with world-class
                                cargo operations and dedicated airline representation.
                            </p>
                            <div class="banner-btn">
                                <a href="javascript:void(0);" class="btn--base">
                                    <i class="fas fa-plane-departure mr-2"></i> Our Represented Carriers
                                </a>
                                <a href="javascript:void(0);" class="btn--base active">
                                    Request Cargo Quote <i class="fas fa-file-invoice-dollar ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6 mb-30">
                        <div class="banner-thumb">
                            <img src="assets/images/element/element-2.png" alt="element">
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <div class="overview-section ptb-120">
            <div class="container-fluid">
                <div class="overview-area">
                    <div class="overview-element" data-aos="fade-up" data-aos-duration="1200">
                        <img src="assets/images/element/element-6.png" alt="element">
                    </div>
                    <div class="overview-tab">
                        <nav>
                            <div class="overview-tab-thumb" data-aos="fade-left" data-aos-duration="1200">
                                <img src="assets/images/overview/overview-2.png" alt="overview">
                                <div class="nav-tab-area">
                                    <div class="nav-tab-header">
                                        <span class="sub-title"><span>#1</span> Aviation Excellence</span>
                                        <h2 class="title">Our Specialized Industry Solutions</h2>
                                    </div>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="gsa-services-tab" data-toggle="tab" data-target="#gsa-services" type="button" role="tab" aria-controls="gsa-services" aria-selected="true"><span>01</span> GSA Representation</button>
                                        <button class="nav-link" id="cargo-ops-tab" data-toggle="tab" data-target="#cargo-ops" type="button" role="tab" aria-controls="cargo-ops" aria-selected="false"><span>02</span> Cargo Operations</button>
                                        <button class="nav-link" id="marketing-tab" data-toggle="tab" data-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false"><span>03</span> Airline Marketing</button>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent" data-aos="fade-right" data-aos-duration="1200">
                            <div class="tab-pane fade show active" id="gsa-services" role="tabpanel" aria-labelledby="gsa-services-tab">
                                <div class="overview-item">
                                    <div class="overview-thumb">
                                        <img src="assets/img/1.webp" alt="overview">
                                        <div class="overview-thumb-content">
                                            <h3 class="title"><a href="javascript:void(0);">GSA Representation</a></h3>
                                            <p>As a leading General Sales Agent in Kuwait, we provide international airlines with a local identity, managing sales, reservations, and administrative functions with expert precision.</p>
                                            <div class="overview-btn">
                                                <a href="javascript:void(0);" class="custom-btn"><i class="icon-btn-icon-v2"></i> Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cargo-ops" role="tabpanel" aria-labelledby="cargo-ops-tab">
                                <div class="overview-item">
                                    <div class="overview-thumb">
                                        <img src="assets/img/3.webp" alt="overview">
                                        <div class="overview-thumb-content">
                                            <h3 class="title"><a href="javascript:void(0);">Cargo Operations</a></h3>
                                            <p>Comprehensive logistics management including build-up supervision, manifest preparation, and specialized handling for temperature-controlled or high-value cargo.</p>
                                            <div class="overview-btn">
                                                <a href="javascript:void(0);" class="custom-btn"><i class="icon-btn-icon-v2"></i> Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                                <div class="overview-item">
                                    <div class="overview-thumb">
                                        <img src="assets/img/2.webp" alt="overview">
                                        <div class="overview-thumb-content">
                                            <h3 class="title"><a href="javascript:void(0);">Marketing & Intelligence</a></h3>
                                            <p>We leverage local market surveys and proactive business projections to ensure our partner airlines gain a competitive advantage and maximize their local yields.</p>
                                            <div class="overview-btn">
                                                <a href="javascript:void(0);" class="custom-btn"><i class="icon-btn-icon-v2"></i> Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="about-section bg-overlay-base ptb-120 bg_img" data-background="assets/img/bg-1.webp">

            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-7 col-lg-7 mb-30">
                        <div class="about-content">
                            <span class="sub-title"><span>About</span> Al-Rashed Aviation</span>
                            <h2 class="title">Reliable Airline Representation & Global Cargo Solutions</h2>
                            <p>
                                Established in 2015, Al-Rashed International Aviation was formed with a clear vision:
                                to excel in the Kuwaiti airline industry. Our team of highly enthusiastic
                                professionals has successfully secured representations for multiple reputable
                                global carriers in a remarkably short span of time.
                            </p>
                            <p>
                                As a key division of the Al-Rashed International Group, we provide a seamless
                                bridge between our airline principals and the local market, ensuring operational
                                excellence and sustainable growth through local expertise.
                            </p>
                            <div class="about-book-area">
                                <div class="about-book-element">
                                    <img src="assets/images/element/element-7.png" alt="element">
                                </div>
                                <div class="about-book-left">
                                    <h3 class="call-title">Contact our Sales Team</h3>
                                    <span class="call"><a href="tel:+96522478123">+965 2247 8123</a></span>
                                </div>
                                <div class="about-book-right">
                                    <a href="javascript:void(0);" class="btn--base"><i class="fas fa-info-circle mr-2"></i>
                                        Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 mb-30">

                    </div>
                </div>
            </div>
        </section>


        <section class="charter-section pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-header-wrapper">
                            <div class="section-header">
                                <span class="sub-title">What We Do</span>
                                <h2 class="section-title">Comprehensive GSA Solutions</h2>
                            </div>
                            <div class="slider-nav-area" data-aos="fade-left" data-aos-duration="1200">
                                <div class="slider-prev">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                                <div class="slider-next">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="charter-slider">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="charter-item">
                                        <div class="charter-thumb">
                                            <img src="assets/img/s1.webp" alt="Sales & Marketing">
                                        </div>
                                        <div class="charter-content">
                                            <h3 class="title"><a href="javascript:void(0);">Sales & Marketing</a></h3>
                                            <p>As a true partner for Airlines we represent, we understand market trends and evolving customer demand.</p>
                                            <div class="charter-btn">
                                                <a href="javascript:void(0);"><i class="icon-btn-icon-v2"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="charter-item">
                                        <div class="charter-thumb">
                                            <img src="assets/img/s2.webp" alt="Operations">
                                        </div>
                                        <div class="charter-content">
                                            <h3 class="title"><a href="javascript:void(0);">Operations</a></h3>
                                            <p>Ensuring qualified manpower and appropriate certifications in regard to regulatory authorities.</p>
                                            <div class="charter-btn">
                                                <a href="javascript:void(0);"><i class="icon-btn-icon-v2"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="charter-item">
                                        <div class="charter-thumb">
                                            <img src="assets/img/s3.webp" alt="Corporate Sales">
                                        </div>
                                        <div class="charter-content">
                                            <h3 class="title"><a href="javascript:void(0);">Corporate Sales</a></h3>
                                            <p>Dedicated commercial department focused on travel agencies, tour operators, and corporate clients.</p>
                                            <div class="charter-btn">
                                                <a href="javascript:void(0);"><i class="icon-btn-icon-v2"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="charter-item">
                                        <div class="charter-thumb">
                                            <img src="assets/img/s4.webp" alt="Reservation & Ticketing">
                                        </div>
                                        <div class="charter-content">
                                            <h3 class="title"><a href="javascript:void(0);">Reservation & Ticketing</a></h3>
                                            <p>Top quality travel and tourism services with comprehensive airline packages for individuals and corporations.</p>
                                            <div class="charter-btn">
                                                <a href="javascript:void(0);"><i class="icon-btn-icon-v2"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="charter-item">
                                        <div class="charter-thumb">
                                            <img src="assets/img/s5.webp" alt="Customer Service">
                                        </div>
                                        <div class="charter-content">
                                            <h3 class="title"><a href="javascript:void(0);">Customer Service</a></h3>
                                            <p>Ensuring customer satisfaction by exceeding expectations and delivering on every service promise.</p>
                                            <div class="charter-btn">
                                                <a href="javascript:void(0);"><i class="icon-btn-icon-v2"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="charter-item">
                                        <div class="charter-thumb">
                                            <img src="assets/img/s6.webp" alt="Special Handling Cargo">
                                        </div>
                                        <div class="charter-content">
                                            <h3 class="title"><a href="javascript:void(0);">Special Handling Cargo</a></h3>
                                            <p>Adherence to the highest industry standards to enhance business opportunities for our cargo clients.</p>
                                            <div class="charter-btn">
                                                <a href="javascript:void(0);"><i class="icon-btn-icon-v2"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="charter-item">
                                        <div class="charter-thumb">
                                            <img src="assets/img/s7.webp" alt="IT & Communications">
                                        </div>
                                        <div class="charter-content">
                                            <h3 class="title"><a href="javascript:void(0);">IT & Communications</a></h3>
                                            <p>ICT solutions through our proprietary FIASTA system, providing a complete range of info-tech services.</p>
                                            <div class="charter-btn">
                                                <a href="javascript:void(0);"><i class="icon-btn-icon-v2"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="charter-item">
                                        <div class="charter-thumb">
                                            <img src="assets/img/s8.webp" alt="PR">
                                        </div>
                                        <div class="charter-content">
                                            <h3 class="title"><a href="javascript:void(0);">PR & Communication</a></h3>
                                            <p>Experienced in event handling and maintaining strong airline presence across local media channels.</p>
                                            <div class="charter-btn">
                                                <a href="javascript:void(0);"><i class="icon-btn-icon-v2"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="charter-item">
                                        <div class="charter-thumb">
                                            <img src="assets/img/s9.webp" alt="Admin & Legal">
                                        </div>
                                        <div class="charter-content">
                                            <h3 class="title"><a href="javascript:void(0);">Administrative & Legal</a></h3>
                                            <p>Negotiations with administrative authorities like Civil Aviation and Airport Authorities for airline operations.</p>
                                            <div class="charter-btn">
                                                <a href="javascript:void(0);"><i class="icon-btn-icon-v2"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="statistics-section bg-overlay-black mt-80 ptb-120 bg_img" data-background="assets/img/bg-2.webp">
            <div class="container">
                <div class="statistics-area">
                    <div class="row mb-30-none">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="statistics-item">
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="75">0</h3>
                                        <h3 class="odo-title">+</h3>
                                    </div>
                                    <p>Years of Group Legacy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="statistics-item">
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="10">0</h3>
                                        <h3 class="odo-title">+</h3>
                                    </div>
                                    <p>Global Carriers Represented</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="statistics-item">
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="350">0</h3>
                                    </div>
                                    <p>World Destinations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="statistics-item" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="100">0</h3>
                                        <h3 class="odo-title">%</h3>
                                    </div>
                                    <p>Regulatory Compliance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="offer-section pt-120">
            <div class="container">
                <div class="swiper passenger-slider" style="overflow: hidden; width: 100%;">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                            <div class="offer-element">
                                <img src="assets/images/element/element-14.png" alt="element">
                            </div>
                            <div class="offer-thumb">
                                <img src="assets/img/passenger/spj.webp" alt="SpiceJet Passenger Airlines">
                            </div>
                            <div class="offer-content">
                                <span class="sub-title">GSA Passenger Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-plane"></i></span></span>
                                <h2 class="title">SpiceJet: Connecting Kuwait to India</h2>
                                <p>
                                    SpiceJet is India's most preferred low-cost airline, connecting the remotest corners of the country. We operate the maximum number of UDAN flights in India, addressing our vision to make flying affordable and approachable for Indians.
                                </p>
                                <ul class="mb-4 text-white list-unstyled">
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Airline Code:</strong> SG</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 73 Online Destinations</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Hubs:</strong> DEL, HYD</li>
                                </ul>
                                <div class="offer-btn">
                                    <a href="javascript:void(0);" class="custom-btn">Inquire for Booking <i class="fas fa-ticket-alt ml-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                            <div class="offer-element">
                                <img src="assets/images/element/element-14.png" alt="element">
                            </div>
                            <div class="offer-thumb">
                                <img src="assets/img/passenger/nepal.webp" alt="Nepal Airlines">
                            </div>
                            <div class="offer-content">
                                <span class="sub-title">GSA Passenger Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-plane"></i></span></span>
                                <h2 class="title">Nepal Airlines: The Flag Carrier of Nepal</h2>
                                <p>
                                    Nepal Airline is the flag carrier of Nepal. Founded in 1958, it is the oldest airline of the country. Out of its main base at Tribhuvan International Airport, Kathmandu, the airline operates domestic services within Nepal and medium-haul services in Asia.
                                </p>
                                <ul class="mb-4 text-white list-unstyled">
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Airline Code:</strong> RA</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 36 Online Destinations</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Hubs:</strong> PHB</li>
                                </ul>
                                <div class="offer-btn">
                                    <a href="javascript:void(0);" class="custom-btn">Inquire for Booking <i class="fas fa-ticket-alt ml-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                            <div class="offer-element">
                                <img src="assets/images/element/element-14.png" alt="element">
                            </div>
                            <div class="offer-thumb">
                                <img src="assets/img/passenger/vietnam.webp" alt="Vietnam Airlines">
                            </div>
                            <div class="offer-content">
                                <span class="sub-title">GSA Passenger Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-plane"></i></span></span>
                                <h2 class="title">Vietnam Airlines: Leader in Quality</h2>
                                <p>
                                    Vietnam Airlines aims to become a fully certified five-star international airline by 2030, ranking among the Top 10 most preferred carriers in Asia. The airline is committed to the highest level of safety and maximum security, continuously elevating its brand.
                                </p>
                                <ul class="mb-4 text-white list-unstyled">
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Airline Code:</strong> VN</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 65 Online Destinations</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Hubs:</strong> HAN, SGN</li>
                                </ul>
                                <div class="offer-btn">
                                    <a href="javascript:void(0);" class="custom-btn">Inquire for Booking <i class="fas fa-ticket-alt ml-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                            <div class="offer-element">
                                <img src="assets/images/element/element-14.png" alt="element">
                            </div>
                            <div class="offer-thumb">
                                <img src="assets/img/passenger/cebu.webp" alt="Cebu Pacific">
                            </div>
                            <div class="offer-content">
                                <span class="sub-title">GSA Passenger Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-plane"></i></span></span>
                                <h2 class="title">Cebu Pacific: Making Flying Accessible</h2>
                                <p>
                                    Cebu Pacific is the leading airline in the Philippines, operating flights to over 60 domestic and international destinations across 14 countries, including Australia, China, Japan, Singapore and the United Arab Emirates.
                                </p>
                                <ul class="mb-4 text-white list-unstyled">
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Airline Code:</strong> 5J</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 62 Online Destinations</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Hubs:</strong> CEB, MNL, CRK, DVO, ILO</li>
                                </ul>
                                <div class="offer-btn">
                                    <a href="javascript:void(0);" class="custom-btn">Inquire for Booking <i class="fas fa-ticket-alt ml-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                            <div class="offer-element">
                                <img src="assets/images/element/element-14.png" alt="element">
                            </div>
                            <div class="offer-thumb">
                                <img src="assets/img/passenger/drukair.webp" alt="Drukair Royal Bhutan Airlines">
                            </div>
                            <div class="offer-content">
                                <span class="sub-title">GSA Passenger Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-plane"></i></span></span>
                                <h2 class="title">Drukair: Royal Bhutan Airlines</h2>
                                <p>
                                    Drukair Corporation Limited, operating as Drukair – Royal Bhutan Airlines, is the national flag carrier of the Kingdom of Bhutan. It presently operates scheduled flights to 10 international destinations spanning 6 countries within the South Asian region.
                                </p>
                                <ul class="mb-4 text-white list-unstyled">
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Airline Code:</strong> KB</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 19 Online Destinations</li>
                                    <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Hubs:</strong> PHB</li>
                                </ul>
                                <div class="offer-btn">
                                    <a href="javascript:void(0);" class="custom-btn">Inquire for Booking <i class="fas fa-ticket-alt ml-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>



        <section class="course-section ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-header-wrapper">
                            <div class="section-header section-header--style">
                                <span class="sub-title">Our Fleet Capacity <span class="right-icon"><i class="fas fa-boxes"></i></span></span>
                                <h2 class="section-title">Explore Our Global Cargo Capacity</h2>
                            </div>
                            <div class="section-header-btn-area">
                                <a href="javascript:void(0);" class="btn--base">All Fleet Details <i class="fas fa-plane-arrival ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-10-none">
                    <div class="col-xl-12">
                        <div class="course-slider-wrapper">
                            <div class="course-slider">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="assets/img/c-turk.webp" alt="Turkish Cargo">
                                                <div class="course-prize">
                                                    <span>24 Freighters</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="javascript:void(0);">Turkish Cargo</a></h3>
                                                    <span class="time"><i class="las la-globe"></i> 104 Cargo Destinations</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>The leading air cargo brand in the world, providing sustainable growth and combining a wide range of services utilizing Turkey's unique geographical advantages.</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="javascript:void(0);" class="btn--base">Cargo Inquiry <i class="fas fa-shuttle-van ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="assets/img/cargo/egypth.webp" alt="Egypt Air Cargo">
                                                <div class="course-prize">
                                                    <span>6 Freighters</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="javascript:void(0);">Egypt Air Cargo</a></h3>
                                                    <span class="time"><i class="las la-globe"></i> 14 Cargo Destinations</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>On the forefront of transporting general and special cargo, operating a fleet of long-range wide-body A330-200P2F aircraft connecting out of Cairo terminals.</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="javascript:void(0);" class="btn--base">Cargo Inquiry <i class="fas fa-shuttle-van ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="assets/img/cargo/american.webp" alt="American Airlines Cargo">
                                                <div class="course-prize">
                                                    <span>970 Aircrafts</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="javascript:void(0);">American Airlines Cargo</a></h3>
                                                    <span class="time"><i class="las la-globe"></i> 350 Destinations</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>Carrying on a proud tradition of innovation and experience, providing daily scheduled cargo lift to over 330 cities in 60 countries around the world.</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="javascript:void(0);" class="btn--base">Cargo Inquiry <i class="fas fa-shuttle-van ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="assets/img/cargo/ethopian.webp" alt="Ethiopian Airlines Cargo">
                                                <div class="course-prize">
                                                    <span>1M Ton Cap.</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="javascript:void(0);">Ethiopian Airlines Cargo</a></h3>
                                                    <span class="time"><i class="las la-globe"></i> 68 Cargo Destinations</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>The largest air cargo network operator in Africa, featuring a state-of-the-art terminal and highly specialized e-commerce, mail, and courier logistics services.</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="javascript:void(0);" class="btn--base">Cargo Inquiry <i class="fas fa-shuttle-van ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="assets/img/cargo/coyne.webp" alt="Coyne Air">
                                                <div class="course-prize">
                                                    <span>12 Aircrafts</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="javascript:void(0);">Coyne Air</a></h3>
                                                    <span class="time"><i class="las la-globe"></i> 36 Destinations</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>Pioneering global routes, Coyne Airways has built a reputation for providing reliable and secure scheduled cargo services to the world’s most difficult-to-reach destinations.</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="javascript:void(0);" class="btn--base">Cargo Inquiry <i class="fas fa-shuttle-van ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="assets/img/cargo/myf.webp" alt="MY FREIGHTER">
                                                <div class="course-prize">
                                                    <span>10 Aircrafts</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="javascript:void(0);">MY FREIGHTER</a></h3>
                                                    <span class="time"><i class="las la-globe"></i> 76 Destinations</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>A pivotal multi-modal transportation player creating a new Silk Road linking East and West through Central Asia, taking full responsibility for the entire shipping process.</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="javascript:void(0);" class="btn--base">Cargo Inquiry <i class="fas fa-shuttle-van ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="assets/img/cargo/centu.webp" alt="Centrum Air">
                                                <div class="course-prize">
                                                    <span>15 Aircrafts</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="javascript:void(0);">Centrum Air</a></h3>
                                                    <span class="time"><i class="las la-globe"></i> 40 Destinations</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>Uzbekistan’s leading private airline operating a highly modern fleet, continuously expanding its route network across Asia, the Middle East, and Europe.</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="javascript:void(0);" class="btn--base">Cargo Inquiry <i class="fas fa-shuttle-van ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="assets/img/cargo/fits.webp" alt="Fits Cargo">
                                                <div class="course-prize">
                                                    <span>Hybrid Fleet</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="javascript:void(0);">Fits Cargo</a></h3>
                                                    <span class="time"><i class="las la-globe"></i> Global Network</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>Operating as a hybrid physical and virtual cargo carrier, we specialize in transshipment by consolidating cargo through strategic interline agreements with over 160 partners.</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="javascript:void(0);" class="btn--base">Cargo Inquiry <i class="fas fa-shuttle-van ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="brand-section ptb-120">
            <div class="container">
                <div class="row justify-content-center mt-10-none mb-10-none">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="partners">
                            <a href="https://www.alrashed.travel/" target="_blank">
                                <img src="assets/img/logtravel.webp" alt="Al-Rashed International Travel Co.">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="partners">
                            <a href="https://al-rashedgroup.com/" target="_blank">
                                <img src="assets/img/shipping.webp" alt="Al-Rashed International Shipping Co.">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="partners">
                            <a href="https://alrashedholidays.com/" target="_blank">
                                <img src="assets/img/holiday.webp" alt="Al-Rashed International Freight Co.">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="partners">
                            <a href="https://www.alrashedfreight.com/" target="_blank">
                                <img src="assets/img/freight.webp" alt="Al-Rashed International Holidays">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="blog-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header">
                            <span class="sub-title"><span>Al-Rashed</span> Aviation News</span>
                            <h2 class="section-title">Latest Updates & Events</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="assets/images/blog/blog-1.png" alt="Turkish Cargo Trip">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="date">02 December 2018</span>
                                    <span class="comment"><i class="fas fa-plane"></i> Event</span>
                                </div>
                                <h3 class="title"><a href="javascript:void(0);">Turkish Cargo Sponsored Fam Trip to Istanbul</a></h3>
                                <p>Turkish Cargo sponsored an exclusive 3-day trip for Kuwait's top 12 cargo agents, strengthening our operational ties in Turkey.</p>
                                <div class="blog-btn">
                                    <a href="javascript:void(0);">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="assets/images/blog/blog-2.png" alt="i-Cargo Training">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="date">16 July 2018</span>
                                    <span class="comment"><i class="fas fa-laptop-code"></i> Training</span>
                                </div>
                                <h3 class="title"><a href="javascript:void(0);">Etihad Cargo – I-Cargo Software Training</a></h3>
                                <p>Our team completed specialized training for the integrated iCargo platform, ensuring a futuristic business model for our partners.</p>
                                <div class="blog-btn">
                                    <a href="javascript:void(0);">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="assets/images/blog/blog-3.png" alt="Oman Air Cargo Meeting">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="date">15 July 2018</span>
                                    <span class="comment"><i class="fas fa-users"></i> Meeting</span>
                                </div>
                                <h3 class="title"><a href="javascript:void(0);">Oman Air Cargo Annual Budget Meeting</a></h3>
                                <p>Al-Rashed Aviation participated in the annual budget meeting in Dubai to finalize strategies for the upcoming fiscal year.</p>
                                <div class="blog-btn">
                                    <a href="javascript:void(0);">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('footer.php'); ?>

    </div>



    <?php include('scripts.php'); ?>




</body>

</html>