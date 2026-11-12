<?php require_once 'admin/includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>


    <?php include('meta.php'); ?>

    <?php include('links.php'); ?>

    <style>
        .blog-thumb a {
            display: block;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        .blog-thumb a img {
            transition: transform 0.4s ease;
        }
        .blog-thumb a:hover img {
            transform: scale(1.06);
        }
        .blog-item {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .blog-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .blog-btn {
            margin-top: auto;
            padding-top: 15px;
        }
    </style>

</head>

<body>


    <div class="page-wrapper">


        <?php include('header.php'); ?>

        <section class="static-hero">
             <div class="" style="background:url(assets/img/hero5.webp) center center / cover no-repeat;">
                        <div class="hero-slide-wrapper">
                            <div class="container pb-5">
                                <div class="row mb-30-none">
                                    <div class="col-xxl-6 col-xl-7 col-lg-8 mb-30">
                                        <div class="hero-content" data-aos="fade-right" data-aos-duration="1800">
                                            <h1 class="title text-white">The True Airline Partner in Kuwait</h1>
                                            <p class="text-white mt-3 mb-4">
                                                Al-Rashed International Aviation serves as a premier General Sales Agent (GSA),
                                                bridging the gap between global carriers and the Kuwaiti market with world-class
                                                cargo operations and dedicated airline representation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>

       

         <section class="offer-section ptb-80">
            <div class="container">
                <div class="swiper-container swiper passenger-slider" style="overflow: hidden; width: 100%;">
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
                                    <a href="spicejet" class="custom-btn">Read More <i class="fas fa-ticket-alt ml-2"></i></a>
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
                                    <a href="vietnam-airlines" class="custom-btn">Read More <i class="fas fa-ticket-alt ml-2"></i></a>
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
                                    <a href="cebu-pacific" class="custom-btn">Read More <i class="fas fa-ticket-alt ml-2"></i></a>
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
                                    <a href="drukair" class="custom-btn">Read More <i class="fas fa-ticket-alt ml-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-pagination passenger-pagination"></div>
                </div>
            </div>
        </section>


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

                             <a href="about" class="btn--base mt-4"><i class="fas fa-info-circle mr-2"></i>
                                        Read More</a>

                            
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 mb-30">

                    </div>
                </div>
            </div>
        </section>

        <section class="offer-section ptb-80">
    <div class="container">
        <div class="swiper-container swiper cargo-slider" style="overflow: hidden; width: 100%;">
            <div class="swiper-wrapper">

                <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                    <div class="offer-element">
                        <img src="assets/images/element/element-14.png" alt="element">
                    </div>
                    <div class="offer-thumb cargo-thumb">
                        <img src="assets/img/c-turk.webp?v=2.6" alt="Turkish Cargo" style="object-position: center center;">
                    </div>
                    <div class="offer-content">
                        <span class="sub-title">GSA Cargo Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-boxes"></i></span></span>
                        <h2 class="title">Turkish Cargo: Global Air Cargo Leader</h2>
                        <p>
                            The leading air cargo brand in the world, providing sustainable growth and combining a wide range of services utilizing Turkey's unique geographical advantages.
                        </p>
                        <ul class="mb-4 text-white list-unstyled">
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Capacity:</strong> 24 Freighters</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 104 Cargo Destinations</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Service:</strong> Global Coverage</li>
                        </ul>
                        <div class="offer-btn">
                            <a href="turkish-cargo" class="custom-btn">Read More <i class="fas fa-shuttle-van ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                    <div class="offer-element">
                        <img src="assets/images/element/element-14.png" alt="element">
                    </div>
                    <div class="offer-thumb cargo-thumb">
                        <img src="assets/img/cargo/egypth.webp?v=2.6" alt="Egypt Air Cargo" style="object-position: center center;">
                    </div>
                    <div class="offer-content">
                        <span class="sub-title">GSA Cargo Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-boxes"></i></span></span>
                        <h2 class="title">Egypt Air Cargo: Connecting Cairo to the World</h2>
                        <p>
                            On the forefront of transporting general and special cargo, operating a fleet of long-range wide-body A330-200P2F aircraft connecting out of Cairo terminals.
                        </p>
                        <ul class="mb-4 text-white list-unstyled">
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Capacity:</strong> 6 Freighters</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 14 Cargo Destinations</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Hub:</strong> Cairo (CAI)</li>
                        </ul>
                        <div class="offer-btn">
                            <a href="egypt-air-cargo" class="custom-btn">Read More <i class="fas fa-shuttle-van ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                    <div class="offer-element">
                        <img src="assets/images/element/element-14.png" alt="element">
                    </div>
                    <div class="offer-thumb cargo-thumb">
                        <img src="assets/img/cargo/american.webp?v=2.6" alt="American Airlines Cargo" style="object-position: center center;">
                    </div>
                    <div class="offer-content">
                        <span class="sub-title">GSA Cargo Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-boxes"></i></span></span>
                        <h2 class="title">American Airlines Cargo: Innovation & Experience</h2>
                        <p>
                            Carrying on a proud tradition of innovation and experience, providing daily scheduled cargo lift to over 330 cities in 60 countries around the world.
                        </p>
                        <ul class="mb-4 text-white list-unstyled">
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Fleet Size:</strong> 970 Aircrafts</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 350 Destinations</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Reach:</strong> 60 Countries</li>
                        </ul>
                        <div class="offer-btn">
                            <a href="american-airlines-cargo" class="custom-btn">Read More <i class="fas fa-shuttle-van ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                    <div class="offer-element">
                        <img src="assets/images/element/element-14.png" alt="element">
                    </div>
                    <div class="offer-thumb cargo-thumb">
                        <img src="assets/img/cargo/ethopian.webp?v=2.6" alt="Ethiopian Airlines Cargo" style="object-position: center center;">
                    </div>
                    <div class="offer-content">
                        <span class="sub-title">GSA Cargo Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-boxes"></i></span></span>
                        <h2 class="title">Ethiopian Airlines Cargo: Africa’s Largest Network</h2>
                        <p>
                            The largest air cargo network operator in Africa, featuring a state-of-the-art terminal and highly specialized e-commerce, mail, and courier logistics services.
                        </p>
                        <ul class="mb-4 text-white list-unstyled">
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Capacity:</strong> 1M Ton Annual Capacity</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 68 Cargo Destinations</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Hub:</strong> Addis Ababa (ADD)</li>
                        </ul>
                        <div class="offer-btn">
                            <a href="ethiopian-airlines-cargo" class="custom-btn">Read More <i class="fas fa-shuttle-van ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                    <div class="offer-element">
                        <img src="assets/images/element/element-14.png" alt="element">
                    </div>
                    <div class="offer-thumb cargo-thumb">
                        <img src="assets/img/cargo/coyne.webp?v=2.6" alt="Coyne Air" style="object-position: center center;">
                    </div>
                    <div class="offer-content">
                        <span class="sub-title">GSA Cargo Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-boxes"></i></span></span>
                        <h2 class="title">Coyne Air: Specialized Global Routes</h2>
                        <p>
                            Pioneering global routes, Coyne Airways has built a reputation for providing reliable and secure scheduled cargo services to the world’s most difficult-to-reach destinations.
                        </p>
                        <ul class="mb-4 text-white list-unstyled">
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Fleet:</strong> 12 Aircrafts</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 36 Destinations</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Focus:</strong> Remote Destinations</li>
                        </ul>
                        <div class="offer-btn">
                            <a href="coyne-air" class="custom-btn">Read More <i class="fas fa-shuttle-van ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                    <div class="offer-element">
                        <img src="assets/images/element/element-14.png" alt="element">
                    </div>
                    <div class="offer-thumb cargo-thumb">
                        <img src="assets/img/cargo/myf.webp?v=2.6" alt="MY FREIGHTER" style="object-position: center center;">
                    </div>
                    <div class="offer-content">
                        <span class="sub-title">GSA Cargo Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-boxes"></i></span></span>
                        <h2 class="title">MY FREIGHTER: The New Silk Road</h2>
                        <p>
                            A pivotal multi-modal transportation player creating a new Silk Road linking East and West through Central Asia, taking full responsibility for the entire shipping process.
                        </p>
                        <ul class="mb-4 text-white list-unstyled">
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Fleet:</strong> 10 Aircrafts</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 76 Destinations</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Specialty:</strong> Central Asia Link</li>
                        </ul>
                        <div class="offer-btn">
                            <a href="my-freighter" class="custom-btn">Read More <i class="fas fa-shuttle-van ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                    <div class="offer-element">
                        <img src="assets/images/element/element-14.png" alt="element">
                    </div>
                    <div class="offer-thumb cargo-thumb">
                        <img src="assets/img/cargo/centu.webp?v=2.6" alt="Centrum Air" style="object-position: center center;">
                    </div>
                    <div class="offer-content">
                        <span class="sub-title">GSA Cargo Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-boxes"></i></span></span>
                        <h2 class="title">Centrum Air: Modern Fleet Solutions</h2>
                        <p>
                            Uzbekistan’s leading private airline operating a highly modern fleet, continuously expanding its route network across Asia, the Middle East, and Europe.
                        </p>
                        <ul class="mb-4 text-white list-unstyled">
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Fleet Size:</strong> 15 Aircrafts</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> 40 Destinations</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Region:</strong> Asia & Europe</li>
                        </ul>
                        <div class="offer-btn">
                            <a href="centrum-air" class="custom-btn">Read More <i class="fas fa-shuttle-van ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide offer-area" data-aos="fade-up" data-aos-duration="1200">
                    <div class="offer-element">
                        <img src="assets/images/element/element-14.png" alt="element">
                    </div>
                    <div class="offer-thumb cargo-thumb">
                        <img src="assets/img/cargo/fits.webp?v=2.6" alt="Fits Cargo" style="object-position: center center;">
                    </div>
                    <div class="offer-content">
                        <span class="sub-title">GSA Cargo Airlines <span class="right-icon text--base ml-2" data-aos="fade-right" data-aos-duration="1200"><i class="fas fa-boxes"></i></span></span>
                        <h2 class="title">Fits Cargo: Hybrid Logistics Carrier</h2>
                        <p>
                            Operating as a hybrid physical and virtual cargo carrier, we specialize in transshipment by consolidating cargo through strategic interline agreements with over 160 partners.
                        </p>
                        <ul class="mb-4 text-white list-unstyled">
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Fleet:</strong> Hybrid Fleet</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Network:</strong> Global Network</li>
                            <li><i class="fas fa-check-circle text--base mr-2"></i> <strong>Partners:</strong> 160+ Interline Partners</li>
                        </ul>
                        <div class="offer-btn">
                            <a href="fits-cargo" class="custom-btn">Read More <i class="fas fa-shuttle-van ml-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
                    <div class="swiper-pagination cargo-pagination"></div>
        </div>
    </div>
</section>





        <section class="statistics-section bg-overlay-black ptb-60 bg_img" data-background="assets/img/bg-2.webp">
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
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  
 <section class="ptb-50 mt-60 brand-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="section-header mb-4">
                        <h2 class="section-title">Our Associates</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-stretch associate-logos-row">
                <div class="col-6 col-md-4 col-lg associate-col mb-3 mb-lg-0">
                    <div class="partners associate-card text-center">
                        <a href="https://www.alrashed.travel/" target="_blank" rel="noopener noreferrer" title="Al-Rashed International Travel Co.">
                            <img src="assets/img/logtravel.webp" alt="Al-Rashed International Travel Co.">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg associate-col mb-3 mb-lg-0">
                    <div class="partners associate-card text-center">
                        <a href="https://al-rashedgroup.com/" target="_blank" rel="noopener noreferrer" title="Al-Rashed International Shipping Co.">
                            <img src="assets/img/shipping.webp" alt="Al-Rashed International Shipping Co.">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg associate-col mb-3 mb-lg-0">
                    <div class="partners associate-card text-center">
                        <a href="https://alrashedholidays.com/" target="_blank" rel="noopener noreferrer" title="Al-Rashed International Holidays">
                            <img src="assets/img/holiday.webp" alt="Al-Rashed International Holidays">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg associate-col mb-3 mb-lg-0">
                    <div class="partners associate-card text-center">
                        <a href="https://www.alrashedfreight.com/" target="_blank" rel="noopener noreferrer" title="Al-Rashed International Freight Co.">
                            <img src="assets/img/freight.webp" alt="Al-Rashed International Freight Co.">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-6 col-md-4 col-lg associate-col mb-3 mb-lg-0">
                    <div class="partners associate-card text-center">
                        <a href="https://travrate.com/" target="_blank" rel="noopener noreferrer" title="Travrate">
                            <img src="assets/img/travrate.webp?v=2.8" alt="Travrate">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="blog-section ptb-80">
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
                    <?php
                    try {
                        if (!empty($pdo)) {
                            $latestStmt = $pdo->prepare("SELECT id, title, slug, content, image, event_date, created_at FROM blogs WHERE status = 'published' ORDER BY COALESCE(NULLIF(event_date, '0000-00-00'), created_at) DESC, created_at DESC, id DESC LIMIT 3");
                            $latestStmt->execute();
                            $latestBlogs = $latestStmt->fetchAll();
                        } else {
                            $latestBlogs = [];
                        }

                        if (!empty($latestBlogs)):
                            foreach ($latestBlogs as $row):
                                $display_date = (!empty($row['event_date']) && $row['event_date'] !== '0000-00-00') ? $row['event_date'] : $row['created_at'];
                                $postSlug = !empty($row['slug']) ? $row['slug'] : preg_replace('/[^a-z0-9]+/i', '-', strtolower(trim($row['title'])));
                                $detailUrl = "news-details?slug=" . urlencode($postSlug);
                                $excerpt = htmlspecialchars(mb_substr(strip_tags($row['content']), 0, 110));
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item">
                            <?php if (!empty($row['image'])): ?>
                            <div class="blog-thumb" style="height: 250px; overflow: hidden; border-radius: 8px;">
                                <a href="<?= $detailUrl ?>">
                                    <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                                </a>
                            </div>
                            <?php endif; ?>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="date"><?= date('d F Y', strtotime($display_date)) ?></span>
                                    <span class="comment"><i class="fas fa-plane"></i> Event</span>
                                </div>
                                <h3 class="title"><a href="<?= $detailUrl ?>"><?= htmlspecialchars($row['title']) ?></a></h3>
                                <p><?= $excerpt ?><?= (mb_strlen(strip_tags($row['content'])) > 110) ? '...' : '' ?></p>
                                <div class="blog-btn">
                                    <a href="<?= $detailUrl ?>">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            endforeach;
                        else:
                    ?>
                    <div class="col-12 text-center py-4">
                        <p class="text-muted">No news or events found at the moment.</p>
                    </div>
                    <?php
                        endif;
                    } catch (Throwable $e) {
                        echo '<div class="col-12 text-center text-muted py-4">Unable to load news updates at this time.</div>';
                    }
                    ?>
                </div>
            </div>
        </section>

        <?php include('footer.php'); ?>

    </div>



    <?php include('scripts.php'); ?>




</body>

</html>