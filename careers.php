<?php require_once 'admin/includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>


    <?php include('meta.php'); ?>

    <?php include('links.php'); ?>

    <style>
        /* Custom Styles for Careers Page Redesign */
        .career-master-section {
            background: linear-gradient(rgba(10, 25, 47, 0.75), rgba(10, 25, 47, 0.8)), url('assets/images/hero.webp') left top / cover no-repeat;
            padding: 90px 0 100px 0;
            position: relative;
        }

        .why-join-card {
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 45px;
            color: #ffffff;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            margin-bottom: 60px;
        }

        .why-join-card .sub-title-tag {
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 700;
            color: #dcbb87;
            letter-spacing: 2px;
            display: block;
            margin-bottom: 12px;
            font-family: "Mulish", sans-serif;
        }

        .why-join-card .main-heading {
            font-size: 36px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 20px;
            font-family: "Playfair Display", sans-serif;
        }

        .why-join-card .desc-text {
            font-size: 16px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 30px;
            font-family: "Mulish", sans-serif;
        }

        .highlight-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 768px) {
            .highlight-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
        }

        .highlight-item {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 14px 20px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: background 0.3s ease;
        }

        .highlight-item:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .highlight-icon {
            font-size: 18px;
            color: #dcbb87;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .highlight-text {
            font-size: 15px;
            font-weight: 600;
            color: #ffffff;
            font-family: "Mulish", sans-serif;
        }

        /* Counters section */
        .counters-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 70px;
        }

        @media (max-width: 992px) {
            .counters-grid {
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 576px) {
            .counters-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
        }

        .counter-card {
            background: #ffffff;
            border: 2px solid #0a2540;
            border-radius: 12px;
            padding: 25px 15px;
            text-align: center;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .counter-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .counter-num {
            font-size: 36px;
            font-weight: 800;
            color: #0a2540;
            margin-bottom: 8px;
            font-family: 'Mulish', sans-serif;
        }

        .counter-label {
            font-size: 14px;
            font-weight: 700;
            color: #627d98;
            margin-bottom: 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-family: 'Mulish', sans-serif;
        }

        /* Recruitment process timeline */
        .process-section {
            text-align: center;
            margin-bottom: 60px;
        }

        .process-subtitle {
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 700;
            color: #dcbb87;
            letter-spacing: 2px;
            display: block;
            margin-bottom: 8px;
            font-family: "Mulish", sans-serif;
        }

        .process-title {
            font-size: 32px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 40px;
            font-family: "Playfair Display", sans-serif;
        }

        .timeline-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        @media (max-width: 992px) {
            .timeline-grid {
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 576px) {
            .timeline-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
        }

        .timeline-step {
            background: rgba(10, 37, 64, 0.65);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .timeline-step:hover {
            background: rgba(10, 37, 64, 0.85);
            border-color: #dcbb87;
            transform: translateY(-3px);
        }

        .step-badge {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 2px solid #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 18px;
            margin-bottom: 20px;
            background: transparent;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .timeline-step:hover .step-badge {
            background: #dcbb87;
            border-color: #dcbb87;
            color: #19232d;
        }

        .step-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 0;
            color: #ffffff;
            font-family: 'Mulish', sans-serif;
        }

        /* Ready to Take Off Card */
        .takeoff-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 50px 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 800px;
            margin: 70px auto 0 auto;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .takeoff-title {
            font-size: 32px;
            font-weight: 700;
            color: #0a2540;
            margin-bottom: 12px;
            font-family: 'Playfair Display', sans-serif;
        }

        .takeoff-desc {
            font-size: 16px;
            color: #627d98;
            margin-bottom: 30px;
            font-family: 'Mulish', sans-serif;
        }

        .takeoff-btn {
            background: #3b71ca;
            color: #ffffff;
            border: none;
            padding: 14px 40px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            box-shadow: 0 4px 14px rgba(59, 113, 202, 0.4);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .takeoff-btn:hover {
            background: #2b579a;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 113, 202, 0.6);
        }

        /* Custom styles for job listings & apply form */
        .custom-apply-form {
            background: #ffffff;
            border: none;
            padding: 0;
        }

        .custom-apply-form .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .custom-apply-form .form--control {
            border: 1.5px solid #dcbb87 !important;
            background-color: #ffffff !important;
            border-radius: 6px !important;
            height: 55px !important;
            color: #19232d !important;
            font-family: "Mulish", sans-serif;
            padding: 10px 45px 10px 18px !important;
            font-weight: 600 !important;
            font-size: 15px !important;
            box-shadow: none !important;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-apply-form .form--control:focus {
            border-color: #c5a36f !important;
            box-shadow: 0 0 0 3px rgba(220, 187, 135, 0.15) !important;
        }

        .custom-apply-form .form--control::placeholder {
            color: rgba(25, 35, 45, 0.5) !important;
            font-weight: 500 !important;
        }

        .custom-apply-form .icon {
            position: absolute;
            top: 17px;
            right: 20px;
            background-color: transparent;
            color: #dcbb87;
            font-size: 20px;
            pointer-events: none;
            z-index: 10;
        }

        .custom-apply-form textarea.form--control {
            height: auto !important;
            min-height: 150px !important;
            padding-top: 15px !important;
        }

        .custom-apply-form .nice-select .current {
            color: #19232d !important;
            font-weight: 600;
        }

        /* Success modal styling */
        .success-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }

        .success-modal.show {
            display: flex;
        }

        .success-modal-content {
            background-color: #ffffff;
            border-radius: 16px;
            padding: 40px;
            text-align: center;
            max-width: 450px;
            width: 90%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
            border: 2px solid #dcbb87;
            animation: scaleUp 0.3s ease;
        }

        @keyframes scaleUp {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .success-modal-icon {
            font-size: 60px;
            color: #28c76f;
            margin-bottom: 20px;
        }

        .success-modal-title {
            font-size: 24px;
            font-weight: 700;
            color: #19232d;
            margin-bottom: 10px;
            font-family: "Playfair Display", sans-serif;
        }

        .success-modal-desc {
            font-size: 15px;
            color: #627d98;
            margin-bottom: 25px;
            font-family: "Mulish", sans-serif;
        }

        .success-modal-btn {
            background: #dcbb87;
            color: #19232d;
            border: none;
            padding: 10px 30px;
            border-radius: 6px;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .success-modal-btn:hover {
            background: #c5a36f;
            cursor: pointer;
        }
    </style>
</head>

<body>


    <div class="page-wrapper">


        <?php include('header.php'); ?>


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Hero & Recruitment Timeline
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="career-master-section">
            <div class="container">
                <!-- Why Join Us Block -->
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="why-join-card" data-aos="fade-up" data-aos-duration="1200">
                            <span class="sub-title-tag">Why Join Us</span>
                            <h2 class="main-heading">A Dynamic Workplace for Aviation Professionals</h2>
                            <p class="desc-text">
                                We provide exciting opportunities across cargo operations, airline sales, logistics coordination, documentation, customer support, and ground handling. Our team thrives in a fast-paced environment driven by innovation, teamwork, and operational excellence.
                            </p>
                            <div class="highlight-grid">
                                <div class="highlight-item">
                                    <span class="highlight-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="highlight-text">Global airline industry exposure</span>
                                </div>
                                <div class="highlight-item">
                                    <span class="highlight-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="highlight-text">Career growth & training programs</span>
                                </div>
                                <div class="highlight-item">
                                    <span class="highlight-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="highlight-text">Competitive salary & incentives</span>
                                </div>
                                <div class="highlight-item">
                                    <span class="highlight-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="highlight-text">Travel and cargo industry benefits</span>
                                </div>
                                <div class="highlight-item">
                                    <span class="highlight-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="highlight-text">Professional & multicultural work environment</span>
                                </div>
                                <div class="highlight-item">
                                    <span class="highlight-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="highlight-text">Performance-based promotions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counters Grid -->
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="counters-grid" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="counter-card">
                                <div class="counter-num">15+</div>
                                <div class="counter-label">Years in Aviation</div>
                            </div>
                            <div class="counter-card">
                                <div class="counter-num">12+</div>
                                <div class="counter-label">Airline GSA's</div>
                            </div>
                            <div class="counter-card">
                                <div class="counter-num">200+</div>
                                <div class="counter-label">Customers</div>
                            </div>
                            <div class="counter-card">
                                <div class="counter-num">24/7</div>
                                <div class="counter-label">Airline Operations</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recruitment Process Block -->
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="process-section" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <span class="process-subtitle">Recruitment Process</span>
                            <h3 class="process-title">Your Journey Starts Here</h3>
                            <div class="timeline-grid">
                                <div class="timeline-step">
                                    <div class="step-badge">1</div>
                                    <h4 class="step-title">Submit Application</h4>
                                </div>
                                <div class="timeline-step">
                                    <div class="step-badge">2</div>
                                    <h4 class="step-title">HR Screening</h4>
                                </div>
                                <div class="timeline-step">
                                    <div class="step-badge">3</div>
                                    <h4 class="step-title">Interview & Assessment</h4>
                                </div>
                                <div class="timeline-step">
                                    <div class="step-badge">4</div>
                                    <h4 class="step-title">Offer & Onboarding</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ready to Take Off Block -->
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="takeoff-card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                            <h3 class="takeoff-title">Ready to Take Off With Us?</h3>
                            <p class="takeoff-desc">Become part of a professional aviation network shaping the future of air cargo, airline representation, and global logistics services.</p>
                            <a href="#applySection" class="takeoff-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Job Openings & Apply Form
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="faq-section ptb-120" id="applySection">
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="faq-header-area">
                            <h3 class="title">Current Job Openings</h3>
                        </div>
                        <div class="faq-wrapper">
                            <?php
                            try {
                                $stmt = $pdo->query("SELECT * FROM careers WHERE status = 'open' ORDER BY created_at DESC");
                                $first = true;
                                $has_jobs = false;
                                while ($row = $stmt->fetch()):
                                    $has_jobs = true;
                            ?>
                                     <div class="faq-item <?= $first ? 'active open' : '' ?>">
                                         <h3 class="faq-title"><span class="title"><?= htmlspecialchars($row['job_title']) ?></span><span class="right-icon"></span></h3>
                                         <div class="faq-content">
                                             <p><strong>Location:</strong> <?= htmlspecialchars($row['location']) ?> | <strong>Job Type:</strong> <?= htmlspecialchars($row['job_type']) ?></p>
                                             <div class="job-description mt-3">
                                                 <?= $row['description'] ?>
                                             </div>
                                             <?php if ($row['requirements']): ?>
                                                 <div class="job-requirements mt-3">
                                                     <h6 class="mb-2">Requirements:</h6>
                                                     <?= $row['requirements'] ?>
                                                 </div>
                                             <?php endif; ?>
                                         </div>
                                     </div>
                            <?php
                                     $first = false;
                                 endwhile;

                                 if (!$has_jobs) {
                                     echo '<div class="alert alert-info">No active job openings at the moment. Please feel free to submit a general application.</div>';
                                 }
                            } catch (PDOException $e) {
                                echo '<div class="alert alert-danger">Unable to load job openings.</div>';
                            }
                            ?>
                        </div>
                    </div>

                    <?php
                    // Fetch options dynamically for select dropdown
                    $positions = [];
                    try {
                        $stmt_select = $pdo->query("SELECT job_title FROM careers WHERE status = 'open' ORDER BY job_title ASC");
                        $positions = $stmt_select->fetchAll(PDO::FETCH_COLUMN);
                    } catch (PDOException $e) {
                        // fallback below
                    }
                    ?>

                    <div class="col-xl-6 mb-30">
                        <div class="contact-form-inner" data-aos="fade-left" data-aos-duration="1200">
                            <div class="contact-form-area">
                                <form class="contact-form p-4 rounded custom-apply-form" id="careerApplyForm">
                                    <div class="row justify-content-center mb-20-none">
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="far fa-user"></i></label>
                                            <input type="text" class="form--control" name="name" placeholder="Name" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="far fa-envelope"></i></label>
                                            <input type="email" class="form--control" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="las la-phone"></i></label>
                                            <input type="number" class="form--control" name="phone" placeholder="Phone" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <div class="contact-select">
                                                <select class="form--control" name="position" required id="positionSelect">
                                                    <option value="" disabled selected>Position Applied For</option>
                                                    <?php if (!empty($positions)): ?>
                                                        <?php foreach ($positions as $pos): ?>
                                                            <option value="<?= htmlspecialchars($pos) ?>"><?= htmlspecialchars($pos) ?></option>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <option value="Sales & Marketing">Sales & Marketing</option>
                                                        <option value="Operations">Operations</option>
                                                        <option value="Customer Service">Customer Service</option>
                                                        <option value="Other">Other</option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label class="icon"><i class="las la-file-alt"></i></label>
                                            <textarea class="form--control" placeholder="Cover Letter / Message" name="message" required></textarea>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" class="btn--base mt-10">Submit Now <i class="icon-Group-2361 ml-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include('footer.php'); ?>

    </div>


    <!-- Success Modal -->
    <div id="successModal" class="success-modal">
        <div class="success-modal-content">
            <div class="success-modal-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3 class="success-modal-title">Application Submitted!</h3>
            <p class="success-modal-desc">Thank you for applying. Our HR team will review your application and contact you shortly.</p>
            <button id="closeModalBtn" class="success-modal-btn">Done</button>
        </div>
    </div>


    <?php include('scripts.php'); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('careerApplyForm');
            const modal = document.getElementById('successModal');
            const closeBtn = document.getElementById('closeModalBtn');

            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const name = form.querySelector('[name="name"]').value.trim();
                    const email = form.querySelector('[name="email"]').value.trim();
                    const phone = form.querySelector('[name="phone"]').value.trim();
                    const position = form.querySelector('[name="position"]').value;
                    const message = form.querySelector('[name="message"]').value.trim();

                    if (!name || !email || !phone || !position || !message) {
                        alert('Please fill out all required fields.');
                        return;
                    }

                    // Display success modal
                    modal.classList.add('show');
                    
                    // Reset form fields
                    form.reset();
                    
                    // Reset nice-select label if nice-select is initialized on it
                    const niceSelectCurrent = form.querySelector('.nice-select .current');
                    if (niceSelectCurrent) {
                        niceSelectCurrent.textContent = 'Position Applied For';
                    }
                });
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', function() {
                    modal.classList.remove('show');
                });
            }

            window.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.remove('show');
                }
            });
        });
    </script>

</body>

</html>