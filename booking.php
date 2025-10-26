<?php $page = 'booking'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>
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
            <img src="assets/images/covers/img-1.jpg" alt="Bookings Banner" class="img-fluid w-100">
        </div>

        <div class="services-hero-overlay text-center text-white">
            <h1 class="services-hero-title fw-bold">Bookings</h1>
        </div>
    </section>

    <!-- Free Estimate Section -->
    <section id="estimate" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Request a Free Estimate</h2>
            <form class="estimate-form mx-auto" style="max-width: 700px;" action="includes/smtp-mailer-booking.php" method="POST" novalidate>
                <!-- Name -->
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                    <small class="text-danger d-none" id="error-name">Please enter a valid name (letters and spaces only).</small>
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
                    <input type="text" name="address" class="form-control" placeholder="Address" maxlength="70" required>
                    <small class="form-text text-muted" id="address-counter">0 / 70 characters</small>
                    <small class="text-danger d-none" id="error-address">Address must be under 70 characters and contain only letters, numbers, and spaces.</small>
                </div>

                <!-- Postal Code -->
                <div class="mb-3">
                    <input type="text" name="postal" class="form-control" placeholder="Postal Code" required>
                    <small class="text-danger d-none" id="error-postal">Please enter a valid 5-digit postal code.</small>
                </div>

                <!-- Services -->
                <label class="fw-semibold mb-2">Choose Services:</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Air Conditioning" id="ac">
                            <label class="form-check-label" for="ac">Air Conditioning</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Heating Systems" id="heating">
                            <label class="form-check-label" for="heating">Heating Systems</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Ventilation" id="ventilation">
                            <label class="form-check-label" for="ventilation">Ventilation</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Plumbing Services" id="plumbing">
                            <label class="form-check-label" for="plumbing">Plumbing Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Emergency Repairs" id="emmergency">
                            <label class="form-check-label" for="emmergency">Emergency Repairs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="New Installations" id="new-installation">
                            <label class="form-check-label" for="new-installation">New Installations</label>
                        </div>
                    </div>
                </div>
                <small class="text-danger d-none" id="error-services">Please select at least one service.</small>

                <!-- Submit -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
                </div>
            </form>

            <!-- Validation Script -->
            <script>
                const form = document.querySelector('.estimate-form');
                const nameInput = form.querySelector('input[name="name"]');
                const emailInput = form.querySelector('input[name="email"]');
                const phoneInput = form.querySelector('input[name="phone"]');
                const addressInput = form.querySelector('input[name="address"]');
                const postalInput = form.querySelector('input[name="postal"]');
                const serviceCheckboxes = form.querySelectorAll('input[name="services[]"]');
                const submitBtn = form.querySelector('button[type="submit"]');

                const errorName = document.getElementById('error-name');
                const errorEmail = document.getElementById('error-email');
                const errorPhone = document.getElementById('error-phone');
                const errorAddress = document.getElementById('error-address');
                const errorServices = document.getElementById('error-services');
                const errorPostal = document.getElementById('error-postal');

                const addressCounter = document.getElementById('address-counter');

                addressInput.addEventListener('input', () => {
                    addressCounter.textContent = `${addressInput.value.length} / 70 characters`;
                    validateForm();
                });

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

                function validateServices() {
                    return Array.from(serviceCheckboxes).some(cb => cb.checked);
                }

                function showError(element, isValid) {
                    element.classList.toggle('d-none', isValid);
                }

                function validatePostal(postal) {
                    return /^\d{5}$/.test(postal.trim());
                }

                function validateForm() {
                    const isNameValid = validateName(nameInput.value);
                    const isEmailValid = validateEmail(emailInput.value);
                    const isPhoneValid = validateUSPhone(phoneInput.value);
                    const isAddressValid = validateAddress(addressInput.value);
                    const isServicesValid = validateServices();
                    const isPostalValid = validatePostal(postalInput.value);

                    showError(errorPostal, isPostalValid);
                    showError(errorName, isNameValid);
                    showError(errorEmail, isEmailValid);
                    showError(errorPhone, isPhoneValid);
                    showError(errorAddress, isAddressValid);
                    showError(errorServices, isServicesValid);

                    submitBtn.disabled = !(isNameValid && isEmailValid && isPhoneValid && isAddressValid && isPostalValid && isServicesValid);
                }

                [nameInput, emailInput, phoneInput, addressInput, postalInput].forEach(input => {
                    input.addEventListener('input', validateForm);
                });

                serviceCheckboxes.forEach(cb => {
                    cb.addEventListener('change', validateForm);
                });

                window.addEventListener('DOMContentLoaded', () => {
                    submitBtn.disabled = true;
                });
            </script>
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