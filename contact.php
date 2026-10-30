<?php
$feedback = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
    $email   = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) : '';
    $phone   = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
    $subject = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : 'General Inquiry';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

    $isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
           || (isset($_POST['is_ajax']) && $_POST['is_ajax'] == '1');

    if ($name && $email && $message) {
        $to = 'info@alrashedaviation.com';
        $email_subject = "New Inquiry: [" . $subject . "] from " . $name . " - Al-Rashed Aviation";

        $body = "You have received a new contact inquiry from the Al-Rashed Aviation website:\n\n";
        $body .= "Name:    " . $name . "\n";
        $body .= "Email:   " . $email . "\n";
        $body .= "Phone:   " . ($phone ?: 'Not provided') . "\n";
        $body .= "Subject: " . $subject . "\n\n";
        $body .= "Message:\n" . $message . "\n\n";
        $body .= "--------------------------------------------------\n";
        $body .= "Sent from Al-Rashed International Aviation Contact Page\n";
        $body .= "Date & Time: " . date('Y-m-d H:i:s') . "\n";

        $headers  = "From: Al-Rashed Website <no-reply@alrashedaviation.com>\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        $mailSent = @mail($to, $email_subject, $body, $headers);

        if ($isAjax) {
            header('Content-Type: application/json');
            echo json_encode([
                'success' => true,
                'message' => 'Thank you for contacting us! Your inquiry has been sent to info@alrashedaviation.com. Our team will get back to you shortly.'
            ]);
            exit;
        }

        $feedback = [
            'type' => 'success',
            'message' => 'Thank you for contacting us! Your inquiry has been sent to info@alrashedaviation.com. Our team will get back to you shortly.'
        ];
    } else {
        $errorMessage = 'Please provide your name, a valid email address, and your message.';
        if ($isAjax) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => $errorMessage]);
            exit;
        }

        $feedback = [
            'type' => 'danger',
            'message' => $errorMessage
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('meta.php'); ?>

    <?php include('links.php'); ?>

    <style>
        .map-area {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(0, 0, 0, 0.06);
        }

        .map-area iframe {
            width: 100%;
            height: 585px;
            border: 0;
            display: block;
        }

        .contact-item-content a {
            color: inherit;
            transition: color 0.3s ease;
        }

        .contact-item-content a:hover {
            color: #dcbb87;
        }

        /* Success modal styling */
        .success-modal {
            display: none;
            position: fixed;
            z-index: 99999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6);
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
            max-width: 480px;
            width: 90%;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            border: 2px solid #dcbb87;
            animation: modalScaleUp 0.3s ease;
        }

        @keyframes modalScaleUp {
            from { transform: scale(0.85); opacity: 0; }
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
            margin-bottom: 12px;
        }

        .success-modal-desc {
            font-size: 15px;
            color: #627d98;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .success-modal-btn {
            background: #dcbb87;
            color: #19232d;
            border: none;
            padding: 12px 35px;
            border-radius: 6px;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .success-modal-btn:hover {
            background: #c5a36f;
            cursor: pointer;
        }

        .contact-feedback-alert {
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-weight: 500;
        }
        .contact-feedback-alert.alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .contact-feedback-alert.alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>

</head>

<body>

    <div class="page-wrapper">

        <?php include('header.php'); ?>

        <section class="about-section about--style page-wrapper-two ptb-120" style="background-image: url(assets/img/ccc.webp); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row justify-content-center mb-30-none p-lg-5">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-content" data-aos="fade-left" data-aos-duration="1200">
                            <h2 class="title">Contact Us</h2>
                            <p>
                                Contact Al-Rashed International Aviation, one of Kuwait’s leading aviation service providers, delivering reliable passenger and cargo solutions across global markets.
                            </p>
                            <p>
                                Our experienced team is committed to providing efficient, professional, and tailored aviation services to meet your business needs.
                            </p>
                            <p><strong>Let’s connect and move your business forward.</strong></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30"></div>
                </div>
            </div>
        </section>

        <section class="contact-section ptb-120">
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="map-area">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3477.0645064196!2d47.9690722!3d29.3684004!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2skw!4v1793335939668!5m2!1sen!2skw" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="strict-origin-when-cross-origin"
                                title="Al-Rashed Aviation Location Map">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="contact-widget">
                            <div class="contact-form-header">
                                <span class="sub-title">Get in Touch</span>
                                <h2 class="title">How to Contact Us?</h2>
                                <p>We'd love to hear from you. Whether you have a question about our services or need assistance with cargo and passenger representation, our team is ready to answer all your questions.</p>
                            </div>
                            <ul class="contact-item-list">
                                <li>
                                    <a href="https://www.google.com/maps/place/Al-Rashed+Aviation/@29.3684004,47.9690722,17z" target="_blank" rel="noopener noreferrer">
                                        <div class="contact-item-icon">
                                            <i class="icon-location-icon"></i>
                                        </div>
                                        <div class="contact-item-content">
                                            <h4 class="title">Our Location</h4>
                                            <p>Al-Rashed Complex, Ground Floor, Office no. 12-13</p>
                                            <p>Block# 12; Fahad Al-Salem Street<br>P.O. Box 20241, Safat-13063, Kuwait City</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="contact-item-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="contact-item-content">
                                            <h4 class="title">Our Phone</h4>
                                            <p><a href="tel:+96522478123">+965 2247 8123 / 4</a></p>
                                            <span class="sub-title"><a href="tel:+96522451696">+965 2245 1696</a></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="contact-item-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="contact-item-content">
                                            <h4 class="title">Our Email</h4>
                                            <p><a href="mailto:info@alrashedaviation.com">info@alrashedaviation.com</a></p>
                                            <p><a href="mailto:cargo.gsa@alrashedaviation.com">cargo.gsa@alrashedaviation.com</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section bg--gray ptb-120">
            <div class="contact-element">
                <img src="assets/images/element/element-18.png" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-5 col-lg-5 mb-30">
                        <div class="contact-left-content" data-aos="fade-right" data-aos-duration="1200">
                            <span class="sub-title">Talk to us</span>
                            <h2 class="title">Any Question?<br>Feel Free to Contact</h2>
                            <p>Reach out to us to learn more about how Al-Rashed Aviation can represent your airline and optimize your operations.</p>
                            <ul class="contact-social">
                                <li><a href="https://www.facebook.com/share/1JGHh5oyqT/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/al-rashed-international-airlines-company-and-airfreight-agent/?viewAsMember=true" target="_blank" rel="noopener noreferrer" class="active"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.instagram.com/alrashedaviationco?vrfl=MWh1MWhoeDdzOHF4cw==" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 mb-30">
                        <div class="contact-form-inner" data-aos="fade-left" data-aos-duration="1200">
                            <div class="contact-form-area">
                                <?php if ($feedback): ?>
                                    <div class="contact-feedback-alert alert-<?= $feedback['type'] ?>">
                                        <?= htmlspecialchars($feedback['message']) ?>
                                    </div>
                                <?php endif; ?>

                                <form class="contact-form" id="mainContactForm" method="POST" action="contact">
                                    <div class="row justify-content-center mb-20-none">
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="icon-name_icone"></i></label>
                                            <input type="text" class="form--control" name="name" placeholder="Name" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="las la-envelope"></i></label>
                                            <input type="email" class="form--control" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="icon-call_icone"></i></label>
                                            <input type="text" class="form--control" name="phone" placeholder="Phone">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <div class="contact-select">
                                                <select class="form--control" name="subject" required id="contactSubject">
                                                    <option value="" disabled selected>Select Subject</option>
                                                    <option value="General Inquiry">General Inquiry</option>
                                                    <option value="Passenger GSA">Passenger GSA Representation</option>
                                                    <option value="Cargo GSA">Cargo GSA & Operations</option>
                                                    <option value="Charter Services">Charter Services</option>
                                                    <option value="Corporate Sales">Corporate Sales</option>
                                                    <option value="Customer Support">Customer Support</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label class="icon"><i class="icon-massage"></i></label>
                                            <textarea class="form--control" name="message" placeholder="Message" required rows="5"></textarea>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" class="btn--base mt-10" id="contactSubmitBtn">
                                                <span>Submit Now</span> <i class="icon-Group-2361 ml-2"></i>
                                            </button>
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
    <div id="contactSuccessModal" class="success-modal">
        <div class="success-modal-content">
            <div class="success-modal-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3 class="success-modal-title">Inquiry Submitted!</h3>
            <p class="success-modal-desc" id="contactModalDesc">Thank you for reaching out. Your query has been delivered to <strong>info@alrashedaviation.com</strong>. Our team will get back to you shortly.</p>
            <button id="closeContactModalBtn" class="success-modal-btn">Done</button>
        </div>
    </div>

    <?php include('scripts.php'); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('mainContactForm');
            const modal = document.getElementById('contactSuccessModal');
            const closeBtn = document.getElementById('closeContactModalBtn');
            const submitBtn = document.getElementById('contactSubmitBtn');

            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const nameInput = form.querySelector('[name="name"]');
                    const emailInput = form.querySelector('[name="email"]');
                    const phoneInput = form.querySelector('[name="phone"]');
                    const subjectInput = form.querySelector('[name="subject"]');
                    const messageInput = form.querySelector('[name="message"]');

                    const name = nameInput ? nameInput.value.trim() : '';
                    const email = emailInput ? emailInput.value.trim() : '';
                    const message = messageInput ? messageInput.value.trim() : '';

                    if (!name || !email || !message) {
                        alert('Please fill out all required fields (Name, Email, Message).');
                        return;
                    }

                    const originalBtnHtml = submitBtn ? submitBtn.innerHTML : '';
                    if (submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<span>Sending...</span> <i class="fas fa-spinner fa-spin ml-2"></i>';
                    }

                    const formData = new FormData(form);
                    formData.append('is_ajax', '1');

                    fetch('contact', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalBtnHtml;
                        }

                        if (data && data.success) {
                            if (modal) {
                                modal.classList.add('show');
                            } else {
                                alert(data.message || 'Inquiry sent successfully!');
                            }
                            form.reset();

                            // Reset NiceSelect if active
                            const niceSelectCurrent = form.querySelector('.nice-select .current');
                            if (niceSelectCurrent) {
                                niceSelectCurrent.textContent = 'Select Subject';
                            }
                        } else {
                            alert(data.message || 'There was an error sending your message. Please try again.');
                        }
                    })
                    .catch(err => {
                        console.error('Submission error:', err);
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalBtnHtml;
                        }
                        // Fallback to traditional submit if fetch fails
                        form.submit();
                    });
                });
            }

            if (closeBtn && modal) {
                closeBtn.addEventListener('click', function() {
                    modal.classList.remove('show');
                });
            }

            if (modal) {
                window.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.classList.remove('show');
                    }
                });
            }
        });
    </script>

</body>

</html>