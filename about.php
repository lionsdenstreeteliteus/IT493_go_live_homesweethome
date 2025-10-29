<?php $page = 'about'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
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
    <!-- About Us Banner -->
    <section id="about-banner">
        <div class="container-fluid p-0">
            <img src="assets/images/covers/img-3.jpg" alt="About Us Banner" class="img-fluid w-100 banner-img">
        </div>

        <div class="about-us-hero-overlay text-white">
            <h1 class="services-hero-title fw-bold">About Us</h1>
        </div>
    </section>

    <!-- About Us Content Section -->
    <section id="about-content" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6">
                    <h2 class="text-accent fw-bold mb-3">About Us</h2>
                    <h4 class="text-white fw-semibold">Home Sweet Home</h4>
                    <p class="text-light mt-3">
                        At Home Sweet Home, we specialize in transforming homes with high-quality craftsmanship and innovative designs. With years of experience in the remodeling industry, we have built a reputation for excellence, reliability, and customer satisfaction.
                    </p>
                    <!-- Instagram post link -->
                    <p class="mt-3">
                        <a href="https://www.instagram.com/p/DQO_-B1AEjH/" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                            <i class="fab fa-instagram me-2" style="color:#E1306C"></i>
                            See our recent project on Instagram
                        </a>
                    </p>
                    <h5 class="text-white fw-semibold mt-4"><i class="fa fa-history me-2" style="color: #d4af37"></i>Our History</h5>
                    <p class="text-light">
                        Home Sweet Home was founded with a vision to transform homes with quality craftsmanship and innovative design. Over the years, we have built a reputation for excellence, offering professional home remodeling services tailored to our clients’ needs.
                    </p>
                </div>

                <!-- Image Column -->
                <div class="col-md-6">
                    <img src="assets/images/covers/img-1.jpg" alt="Cover Image" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team Section -->
    <section id="team" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Meet the Team</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/user1.jpg" alt="Receptionist" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1 fw-bold">Alex Parker</h5>
                        <p class="text-accent fw-bold">Receptionist</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/user2.jpg" alt="Installer/Technician" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1 fw-bold">Peter Robinson</h5>
                        <p class="text-accent fw-bold">Installer/Technician</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/user3.jpg" alt="Emergency Technician" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1 fw-bold">Patricia John</h5>
                        <p class="text-accent fw-bold">Emergency Technician</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/user4.jpg" alt="Receptionist" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1 fw-bold">Kamal V</h5>
                        <p class="text-accent fw-bold">Inventory Logistics Manager</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/user5.jpg" alt="Installer/Technician" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1 fw-bold">Victor Henry</h5>
                        <p class="text-accent fw-bold">Service Manager</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/user6.jpg" alt="Emergency Technician" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1 fw-bold">Jake Franklin</h5>
                        <p class="text-accent fw-bold">Senior Technician</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Testimonials</h2>
            <div class="row g-4 justify-content-center">
                <!-- Testimonial Card -->
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“This repair went extremely well. Home Sweet Home promptly responded to my inquiry
                            for repair via Home Sweet Home. Highly Recommended!”</p>
                        <h6 class="text-accent mt-3">— Sarah M., Arlington VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                        <small class="text-muted">Jan 2025</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“The technician was quick to visit and did a full inspection of my appliance. He followed
                            up with a quote to repair the unit. I am most likely going to replace the unit instead.”</p>
                        <h6 class="text-accent mt-3">— James T., McLean VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                        <small class="text-muted">Jan 2025</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“Guys were nice, quick, did what
                            they said for the price they said, fixed my washing machine and showed me in detail
                            what the problem was. Would hire again.”</p>
                        <h6 class="text-accent mt-3">— Priya K., Fairfax VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </span>
                        <small class="text-muted">Nov 2024</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“HSH Representative was responsive, courteous, knowledgeable and efficient. He skillfully diagnosed
                            and solved our stovetop issue. Great guy and great service.”</p>
                        <h6 class="text-accent mt-3">— Robert G.</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                        <small class="text-muted">Sep 2024</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“HSH Representative was great! He arrived promptly at the time he said he would. He worked efficiently
                            and it was obvious he knew what he was doing.”</p>
                        <h6 class="text-accent mt-3">— Sally K.</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </span>
                        <small class="text-muted">Apr 2024</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“I was extremely impressed and happy with Home Sweet Home from initial contact
                            through completion of the job. He and his team arrived timely and completed the job timely.”</p>
                        <h6 class="text-accent mt-3">— Jessica M.</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                        <small class="text-muted">Aug 2023</small>
                    </div>
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