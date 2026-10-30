<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('meta.php'); ?>

    <?php include('links.php'); ?>

    <style>
        /* Custom Redesign Styles for About Page */
        .about-hero-section {
            position: relative;
            padding: 120px 0 110px;
            background-image: url('assets/img/abt-bg-3.webp');
            background-attachment: fixed;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }

        .about-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgb(255 255 255 / 36%) 0%, rgba(255, 255, 255, 0.80) 35%, rgb(255 255 255 / 0%) 60%, rgba(255, 255, 255, 0) 85%);
            z-index: 1;
        }

        .about-hero-content {
            position: relative;
            z-index: 2;
        }

        .section-tag {
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .section-tag .tag-line {
            display: inline-block;
            width: 28px;
            height: 3px;
            background-color: #c8a364;
            border-radius: 2px;
        }

        .section-tag .tag-text {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: #c8a364;
        }

        .about-hero-title {
            font-size: 48px;
            font-weight: 800;
            color: #0f2537;
            line-height: 1.18;
            margin-bottom: 24px;
            font-family: 'Playfair Display', Georgia, serif;
        }

        .about-hero-desc {
            font-size: 15px;
            line-height: 1.75;
            color: #475569;
            font-weight: 400;
        }

        .btn-gold-pill {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 32px;
            background-color: #c8a364;
            color: #ffffff !important;
            font-weight: 600;
            font-size: 15px;
            border-radius: 50px;
            text-decoration: none !important;
            box-shadow: 0 6px 20px rgba(200, 163, 100, 0.35);
            transition: all 0.3s ease;
        }

        .btn-gold-pill:hover {
            background-color: #b38e4f;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(200, 163, 100, 0.45);
        }

        /* Our Story Section */
        .story-section {
            padding: 100px 0;
            background-color: #ffffff;
            position: relative;
        }

        .story-img-wrapper {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(15, 37, 55, 0.12);
        }

        .story-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .story-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .story-title {
            font-size: 40px;
            font-weight: 800;
            color: #0f2537;
            line-height: 1.2;
            margin-bottom: 24px;
            font-family: 'Playfair Display', Georgia, serif;
        }

        .story-desc {
            font-size: 15px;
            line-height: 1.75;
            color: #475569;
        }

        /* Statistics Section */
        .stats-banner-section {
            position: relative;
            padding: 85px 0;
            background-image: url('assets/img/bg-2.webp');
            background-attachment: fixed;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #ffffff;
        }

        .stats-banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(11, 26, 40, 0.88);
            z-index: 1;
        }

        .stats-banner-content {
            position: relative;
            z-index: 2;
        }

        .stat-box {
            text-align: center;
            padding: 15px 10px;
        }

        .stat-icon {
            font-size: 38px;
            color: #c8a364;
            margin-bottom: 16px;
            display: inline-block;
        }

        .stat-number-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 46px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1;
            margin-bottom: 10px;
            font-family: 'Mulish', sans-serif;
        }

        .stat-number-wrap .plus {
            color: #c8a364;
            margin-left: 2px;
        }

        .stat-text {
            font-size: 15px;
            font-weight: 600;
            color: #cbd5e1;
            margin: 0;
        }

        /* Why Choose Us Section */
        .why-us-section {
            padding: 100px 0;
            background-color: #f8fafc;
        }

        .section-heading-main {
            font-size: 38px;
            font-weight: 800;
            color: #0f2537;
            margin-bottom: 45px;
            font-family: 'Playfair Display', Georgia, serif;
        }

        .feature-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 34px 28px;
            height: 100%;
            box-shadow: 0 4px 20px rgba(15, 37, 55, 0.05);
            border: 1px solid #f1f5f9;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(15, 37, 55, 0.1);
            border-color: #e2e8f0;
        }

        .feature-icon-box {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background-color: #0f2537;
            color: #c8a364;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 24px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(15, 37, 55, 0.15);
        }

        .feature-card:hover .feature-icon-box {
            transform: scale(1.05);
            background-color: #0f2537;
            color: #c8a364;
        }

        .feature-card-title {
            font-size: 19px;
            font-weight: 700;
            color: #0f2537;
            margin-bottom: 12px;
        }

        .feature-card-desc {
            font-size: 14px;
            line-height: 1.65;
            color: #64748b;
            margin: 0;
            flex-grow: 1;
        }

        /* Leadership / Team Section */
        .team-section {
            padding: 100px 0;
            background-color: #ffffff;
        }

        .team-header-link {
            font-size: 15px;
            font-weight: 600;
            color: #0f2537;
            text-decoration: none !important;
            transition: color 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .team-header-link:hover {
            color: #c8a364;
        }

        .team-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(15, 37, 55, 0.06);
            border: 1px solid #f1f5f9;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 35px rgba(15, 37, 55, 0.12);
        }

        .team-card-img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            object-position: top center;
            background-color: #f1f5f9;
        }

        .team-card-body {
            padding: 24px 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .team-member-name {
            font-size: 18px;
            font-weight: 700;
            color: #0f2537;
            margin-bottom: 4px;
        }

        .team-member-role {
            font-size: 14px;
            font-weight: 600;
            color: #c8a364;
            margin-bottom: 16px;
            display: block;
        }

        .team-quote-box {
            background-color: #f8fafc;
            padding: 14px 16px;
            border-radius: 10px;
            border-left: 3px solid #c8a364;
            margin-top: auto;
        }

        .team-quote-text {
            font-size: 13px;
            line-height: 1.55;
            color: #475569;
            font-style: italic;
            margin: 0;
        }

        /* Partners Section */
        .partners-section {
            padding: 50px 0;
            background-color: #ffffff;
            border-top: 1px solid #e2e8f0;
        }

        .partner-logo-item {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            height: 90px;
            border-right: 1px solid #f1f5f9;
        }

        .col-lg-3:last-child .partner-logo-item {
            border-right: none;
        }

        .partner-logo-item img {
            max-height: 60px;
            max-width: 100%;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        .partner-logo-item:hover img {
            transform: scale(1.06);
        }

        @media (max-width: 991px) {
            .about-hero-title {
                font-size: 36px;
            }
            .story-title {
                font-size: 32px;
            }
            .about-hero-overlay {
                background: rgba(255, 255, 255, 0.92);
            }
            .partner-logo-item {
                border-right: none;
                border-bottom: 1px solid #f1f5f9;
            }
        }
    </style>
</head>

<body>

    <div class="page-wrapper">

        <?php include('header.php'); ?>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            1. HERO / ABOUT US SECTION
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="about-hero-section">
            <div class="about-hero-overlay"></div>
            <div class="container about-hero-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-tag mb-3" data-aos="fade-down" data-aos-duration="1000">
                            <span class="tag-line"></span>
                            <span class="tag-text">ABOUT US</span>
                        </div>
                        <h1 class="about-hero-title" data-aos="fade-up" data-aos-duration="1200">
                            A Legacy<br>in Global Aviation
                        </h1>
                        <p class="about-hero-desc mb-3" data-aos="fade-up" data-aos-duration="1400">
                            Al-Rashed International Aviation was formed in 2015 with an aim to excel in the Kuwait airline industry. Our young team of highly enthusiastic professionals has successfully acquired representations of multiple reputable carriers in a short span of time.
                        </p>
                        <p class="about-hero-desc mb-4" data-aos="fade-up" data-aos-duration="1600">
                            With a strong infrastructure and deep local expertise, we provide a full range of GSA services, enabling our business partners to connect with new markets and grow their presence across the region and beyond.
                        </p>
                        <div data-aos="fade-up" data-aos-duration="1800">
                            <a href="services" class="btn-gold-pill">
                                Our Services <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            2. OUR STORY SECTION
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="story-section">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1200">
                        <div class="story-img-wrapper">
                            <img src="assets/img/abt.webp" alt="Connecting Markets, Creating Opportunities - Al Rashed Aviation">
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1200">
                        <div class="section-tag mb-3">
                            <span class="tag-line"></span>
                            <span class="tag-text">OUR STORY</span>
                        </div>
                        <h2 class="story-title mb-4">
                            Connecting Markets, Creating Opportunities
                        </h2>
                        <p class="story-desc mb-3">
                            Since our establishment, Al-Rashed International Aviation has been committed to delivering world-class aviation solutions. Our expertise in cargo, passenger, and charter services has made us a trusted partner for global airlines and businesses.
                        </p>
                        <p class="story-desc">
                            We combine international standards with profound local knowledge and wide industry connections to capture new opportunities and drive sustainable growth in the aviation sector.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            3. STATISTICS BANNER SECTION
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="stats-banner-section statistics-section">
            <div class="stats-banner-overlay"></div>
            <div class="container stats-banner-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-6 mb-4 mb-lg-0">
                        <div class="stat-box statistics-item" data-aos="zoom-in" data-aos-duration="1000">
                            <i class="fas fa-trophy stat-icon"></i>
                            <div class="stat-number-wrap">
                                <span class="odometer" data-odometer-final="75">0</span>
                                <span class="plus">+</span>
                            </div>
                            <p class="stat-text">Years of Group Legacy</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-6 mb-4 mb-lg-0">
                        <div class="stat-box statistics-item" data-aos="zoom-in" data-aos-duration="1200">
                            <i class="fas fa-globe-americas stat-icon"></i>
                            <div class="stat-number-wrap">
                                <span class="odometer" data-odometer-final="10">0</span>
                                <span class="plus">+</span>
                            </div>
                            <p class="stat-text">Global Carriers Represented</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-6 mb-4 mb-lg-0">
                        <div class="stat-box statistics-item" data-aos="zoom-in" data-aos-duration="1400">
                            <i class="fas fa-plane-departure stat-icon"></i>
                            <div class="stat-number-wrap">
                                <span class="odometer" data-odometer-final="350">0</span>
                            </div>
                            <p class="stat-text">World Destinations</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                        <div class="stat-box statistics-item" data-aos="zoom-in" data-aos-duration="1600">
                            <i class="fas fa-shield-alt stat-icon"></i>
                            <div class="stat-number-wrap">
                                <span class="odometer" data-odometer-final="100">0</span>
                                <span class="plus">%</span>
                            </div>
                            <p class="stat-text">Regulatory Compliance</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            4. WHY CHOOSE US SECTION
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="why-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tag mb-3" data-aos="fade-down">
                            <span class="tag-line"></span>
                            <span class="tag-text">WHY US</span>
                        </div>
                        <h2 class="section-heading-main" data-aos="fade-up">Why Choose Al Rashed Aviation?</h2>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="feature-card">
                            <div class="feature-icon-box">
                                <i class="fas fa-plane"></i>
                            </div>
                            <h3 class="feature-card-title">Specialized Cargo Expertise</h3>
                            <p class="feature-card-desc">
                                Our teams are expertly trained in special handling, meticulously adhering to strict regulations for hazardous materials and sensitive freight to ensure safe, compliant transport.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1200">
                        <div class="feature-card">
                            <div class="feature-icon-box">
                                <i class="fas fa-cog"></i>
                            </div>
                            <h3 class="feature-card-title">Advanced Aviation IT</h3>
                            <p class="feature-card-desc">
                                We utilize proprietary systems like FIASTA and state-of-the-art automated cargo IT to provide efficient freight services and real-time tracking across our global network.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1400">
                        <div class="feature-card">
                            <div class="feature-icon-box">
                                <i class="fas fa-plane-departure"></i>
                            </div>
                            <h3 class="feature-card-title">Bespoke Air Charters</h3>
                            <p class="feature-card-desc">
                                We offer flexible, time-saving charter solutions tailored to your schedule and route, allowing you to bypass traditional hub constraints for a truly personalized experience.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1600">
                        <div class="feature-card">
                            <div class="feature-icon-box">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="feature-card-title">Global GSA Network</h3>
                            <p class="feature-card-desc">
                                As a leading GSA, we connect Kuwait to over 300 cities worldwide through strategic partnerships with major international cargo and passenger airlines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            5. LEADERSHIP EXCELLENCE SECTION
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="team-section">
            <div class="container">
                <div class="row align-items-end justify-content-between mb-5">
                    <div class="col-md-8">
                        <div class="section-tag mb-2" data-aos="fade-down">
                            <span class="tag-line"></span>
                            <span class="tag-text">OUR TEAM</span>
                        </div>
                        <h2 class="section-heading-main mb-0" data-aos="fade-up">Leadership Excellence</h2>
                    </div>
                    <div class="col-md-4 text-md-right mt-3 mt-md-0" data-aos="fade-left">
                        <a href="javascript:void(0);" class="team-header-link">
                            Meet Our Team <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Team 1 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="team-card">
                            <img src="assets/img/team/1.webp" alt="Mr. Saad Abdulaziz Al-Rashed" class="team-card-img">
                            <div class="team-card-body">
                                <h4 class="team-member-name">Mr. Saad Abdulaziz Al-Rashed</h4>
                                <span class="team-member-role">Founder</span>
                                <div class="team-quote-box">
                                    <p class="team-quote-text">
                                        "The visionary pioneer behind the establishment of Al Rashed Aviation, setting the foundation for excellence in the regional aviation industry."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team 2 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1200">
                        <div class="team-card">
                            <img src="assets/img/team/2.webp" alt="Mr. Bassim Saud A. Al-Rashed" class="team-card-img">
                            <div class="team-card-body">
                                <h4 class="team-member-name">Mr. Bassim Saud A. Al-Rashed</h4>
                                <span class="team-member-role">Chairman</span>
                                <div class="team-quote-box">
                                    <p class="team-quote-text">
                                        "Providing strategic leadership and governance, ensuring the group's long-term sustainability and adherence to core values."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team 3 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1400">
                        <div class="team-card">
                            <img src="assets/img/team/3.webp" alt="Mr. Ravi Varrier" class="team-card-img">
                            <div class="team-card-body">
                                <h4 class="team-member-name">Mr. Ravi Varrier</h4>
                                <span class="team-member-role">Chief Executive Officer</span>
                                <div class="team-quote-box">
                                    <p class="team-quote-text">
                                        "To touch the best corners of life you have to cross the worst situations. Dare to face anything in life – Winners never Quit, Quitters never Win."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team 4 -->
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1600">
                        <div class="team-card">
                            <img src="assets/img/team/4 .webp" alt="Mr. Pradeep Menon" class="team-card-img">
                            <div class="team-card-body">
                                <h4 class="team-member-name">Mr. Pradeep Menon</h4>
                                <span class="team-member-role">Chief Financial Officer</span>
                                <div class="team-quote-box">
                                    <p class="team-quote-text">
                                        "You are successful and creative if you find opportunity in every problem."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            6. PARTNERS LOGO STRIP
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="partners-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="partner-logo-item">
                            <a href="https://www.alrashed.travel/" target="_blank">
                                <img src="assets/img/logtravel.webp" alt="Al-Rashed International Travel Co.">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="partner-logo-item">
                            <a href="https://al-rashedgroup.com/" target="_blank">
                                <img src="assets/img/shipping.webp" alt="Al-Rashed International Shipping Co.">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="partner-logo-item">
                            <a href="https://alrashedholidays.com/" target="_blank">
                                <img src="assets/img/holiday.webp" alt="Al-Rashed International Freight Co.">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="partner-logo-item">
                            <a href="https://www.alrashedfreight.com/" target="_blank">
                                <img src="assets/img/freight.webp" alt="Al-Rashed International Holidays">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>

    </div>

    <?php include('scripts.php'); ?>

</body>

</html>