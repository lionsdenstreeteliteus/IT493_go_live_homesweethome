<?php $page = 'contact'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="icon" type="image/png" href="assets/images/logo/colored-logo.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!-- Custom Styles -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap" rel="stylesheet">
    <script>
        window.chtlConfig = {
            chatbotId: "6175934164"
        }
    </script>
    <script async data-id="6175934164" id="chtl-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>
</head>

<body>

    <?php include('includes/header.php'); ?>

    <!-- Your page content here -->

    <section class="services-hero">
        <div class="services-hero-image">
            <img src="assets/images/covers/img-3.jpg" alt="Contact Us Banner" class="img-fluid w-100">
        </div>

        <div class="services-hero-overlay text-center text-white">
            <h1 class="services-hero-title fw-bold">Thank You For Choosing Home Sweet Home</h1>
        </div>
    </section>

    <section id="contact-form" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Request a Free Estimate</h2>
            <div class="row g-5 align-items-start">
                <!-- Form Column -->
                <div class="col-md-7">
                    <form class="contact-form mx-auto" style="max-width: 700px;" action="includes/smtp-mailer.php" method="POST" novalidate>
                        <!-- Name -->
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            <small class="text-danger d-none" id="error-name">Name must contain only letters and spaces.</small>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            <small class="text-danger d-none" id="error-email">Please enter a valid email address.</small>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                            <small class="text-danger d-none" id="error-phone">Please enter a valid US phone number.</small>
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                            <small class="text-danger d-none" id="error-address">Address must be under 70 characters and contain only letters, numbers, and spaces.</small>
                        </div>

                        <!-- Postal Code -->
                        <div class="mb-3">
                            <input type="text" name="postal" class="form-control" placeholder="Postal Code" required>
                            <small class="text-danger d-none" id="error-postal">Please enter a valid 5-digit postal code.</small>
                        </div>

                        <!-- Message -->
                        <div class="mb-3">
                            <textarea name="message" class="form-control" rows="4" placeholder="Additional Message (optional)"></textarea>
                        </div>

                        <!-- Submit -->
                        <div class="text-start mt-4">
                            <button type="submit" class="btn px-5 py-2" style="background-color: #FD914D">Submit</button>
                        </div>
                    </form>

                    <!-- Validation Script -->
                    <script>
                        const form = document.querySelector('.contact-form');
                        const nameInput = form.querySelector('input[name="name"]');
                        const emailInput = form.querySelector('input[name="email"]');
                        const phoneInput = form.querySelector('input[name="phone"]');
                        const addressInput = form.querySelector('input[name="address"]');
                        const postalInput = form.querySelector('input[name="postal"]');
                        const submitBtn = form.querySelector('button[type="submit"]');

                        const errorName = document.getElementById('error-name');
                        const errorEmail = document.getElementById('error-email');
                        const errorPhone = document.getElementById('error-phone');
                        const errorAddress = document.getElementById('error-address');
                        const errorPostal = document.getElementById('error-postal');

                        function validateName(name) {
                            return /^[A-Za-z\s]+$/.test(name.trim());
                        }

                        function validateEmail(email) {
                            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                        }

                        function validateUSPhone(phone) {
                            return /^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/.test(phone.trim());
                        }

                        function validateAddress(address) {
                            const trimmed = address.trim();
                            const pattern = /^[A-Za-z0-9\s]+$/;
                            return trimmed.length > 0 && trimmed.length <= 70 && pattern.test(trimmed);
                        }

                        function validatePostal(postal) {
                            return /^\d{5}$/.test(postal.trim());
                        }

                        function showError(element, isValid) {
                            element.classList.toggle('d-none', isValid);
                        }

                        function validateForm() {
                            const isNameValid = validateName(nameInput.value);
                            const isEmailValid = validateEmail(emailInput.value);
                            const isPhoneValid = validateUSPhone(phoneInput.value);
                            const isAddressValid = validateAddress(addressInput.value);
                            const isPostalValid = validatePostal(postalInput.value);

                            showError(errorName, isNameValid);
                            showError(errorEmail, isEmailValid);
                            showError(errorPhone, isPhoneValid);
                            showError(errorAddress, isAddressValid);
                            showError(errorPostal, isPostalValid);

                            submitBtn.disabled = !(isNameValid && isEmailValid && isPhoneValid && isAddressValid && isPostalValid);
                        }

                        [nameInput, emailInput, phoneInput, addressInput, postalInput].forEach(input => {
                            input.addEventListener('input', validateForm);
                        });

                        window.addEventListener('DOMContentLoaded', () => {
                            submitBtn.disabled = true;
                        });
                    </script>


                </div>

                <!-- Contact Info Column -->
                <div class="col-md-5">
                    <h5 style="color: #FD914D">Contact Us</h5>
                    <p><i class="fas fa-phone me-1" style="color: #FD914D"></i> +1 (571) 242-3890</p>
                    <p><i class="fas fa-envelope me-1" style="color: #FD914D"></i> info@hshhvac.com</p>
                    <p><i class="fas fa-map-marker-alt me-1" style="color: #FD914D"></i> 7626 Inishmore Court, Springfield, VA 22153.</p>
                    <!-- <div class="mt-2">
                        <a href="#" class="text-info me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-primary"><i class="fab fa-facebook-f"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- WhatsApp Floating Button -->
    <div class="tooltip-container">
        <a href="https://wa.me/15712423890" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>
        <span class="tooltip-text"> <i class="fab fa-whatsapp whatsapp-icon"></i> Let's Contact</span>
    </div>

    <!-- Scroll Up Floating Button -->
    <a href="#" class="scrollup-button">
        <i class="fas fa-arrow-up fa-sm scrollup-icon"></i>
    </a>
</body>

</html>