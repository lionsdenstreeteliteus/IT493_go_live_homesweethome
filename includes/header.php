<!-- Top Ribbon -->
<div class="top-ribbon d-flex justify-content-start align-items-center px-3 py-2" style="font-size: 11px;">
  <span class="ms-5 me-4 text-white"><i class="fas fa-envelope me-2"></i> info@hshhvac.com</span>
  <span class="ms-1 text-white"><i class="fas fa-phone me-2"></i> +1 (571) 242-3890</span>
</div>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg main-nav">
  <div class="container-fluid px-4">
    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <img src="./assets/images/logo/transparent-logo.png" alt="Comet Logo" class="logo-img">
    </a>


    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Links -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'home') ? 'active-link' : ''; ?>" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'about') ? 'active-link' : ''; ?>" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'services') ? 'active-link' : ''; ?>" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'portfolio') ? 'active-link' : ''; ?>" href="portfolio.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'booking') ? 'active-link' : ''; ?>" href="booking.php">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'contact') ? 'active-link' : ''; ?>" href="contact.php">Contact</a>
        </li>
        <li class="nav-item ms-3">
          <a class="btn call-btn" style="border-color: black;" href="tel:+15712423890">CALL TO ACTION</a>
        </li>
      </ul>
    </div>
  </div>
</nav>