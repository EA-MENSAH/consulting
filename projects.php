<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gen Green Consult</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* --- Responsive fixes and utilities added here --- */
    /* Ensure the main content clears the fixed header */
    .main {
      padding-top: 88px; /* adjust to match header height */
    }

    /* Project card adjustments */
    .project-card {
      /* let content decide height on small screens, keep a pleasant min height on larger screens */
      min-height: 140px;
    }

    /* Make the image responsive and keep it square-ish with object-fit */
    .card-img-left {
      width: 100%;
      display: block;
      aspect-ratio: 1/1; /* keeps image roughly square on all screen sizes */
      object-fit: cover;
    }

    /* Slightly smaller title and text on small screens */
    .project-card .card-title {
      font-size: 1rem;
    }

    .project-card .card-text {
      font-size: 0.9rem;
    }

    /* On very small screens make sure there is enough spacing */
    @media (max-width: 575.98px) {
      .project-card {
        margin-bottom: 1rem;
      }
    }
  </style>

  <!-- =======================================================
  * Template Name: Consulting
  * Template URL: https://bootstrapmade.com/bootstrap-consulting-website-template/
  * Updated: May 01 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.webp.png" alt="Gen Green logo" style="height:48px;">
        <h1 class="sitename ms-2">Gen Green Consult.</h1>
      </a>
      
      <?php include "components/nav.php";?>

      <a class="btn-getstarted" href="#consultation">Get Started</a>

    </div>
  </header>

  <main class="main">
   
    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="why-choose-us section">

      <!-- Section Title -->
      <div class="container section-title " data-aos="fade-up">
        <h2>PROJECTS</h2>
        <div class="d-flex justify-content-center fw-light">
          <p style="font-size: 15px; max-width: 8in; text-align: center;">
            Solutions Delivered, Innovations in Progress
          </p>
        </div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <!-- NOTE: use col-12 on small screens and col-md-6 on medium+ screens -->

          <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 mb-3 shadow project-card h-100">
              <div class="row g-0 h-100">
                <div class="col-12 col-md-4 d-flex align-items-stretch">
                  <img src="assets/img/misc/misc-square-12.png" alt="Project image"
                    class="img-fluid card-img-left rounded">
                </div>
                <div class="col-12 col-md-8 d-flex">
                  <div class="card-body">
                    <h5 class="card-title fw-bolder text-secondary">Climate Change Impact on Health Service Assessment
                    </h5>
                    <p class="card-text text-muted fw-light">Provided an assessment of the impact of climate change risk on the
                      health care facility and provided recommendations to help reduce risk and build resilience</p>
                    <p class="card-text  fw-semibold" style="font-size: 0.85rem; color: #018880;">Client: Accra Medical
                      Center, Ghana</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 mb-3 shadow project-card h-100">
              <div class="row g-0 h-100">
                <div class="col-12 col-md-4 d-flex align-items-stretch">
                  <img src="assets/img/misc/misc-square-13.png" alt="Project image"
                    class="img-fluid card-img-left rounded">
                </div>
                <div class="col-12 col-md-8 d-flex">
                  <div class="card-body">
                    <h5 class="card-title fw-bolder text-secondary">Nonprofit Sector Leadership and Innovation Stakeholder Engagement
                    </h5>
                    <p class="card-text text-muted fw-light">Developed and conducted a stakeholder engagement with nonprofit leaders in Regina,
                      Canada for the nonprofit certificate program offered by the college</p>
                    <p class="card-text  fw-semibold" style="font-size: 0.85rem; color: #018880;">Client: Luther College, University of Regina, Canada</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 mb-3 shadow project-card h-100">
              <div class="row g-0 h-100">
                <div class="col-12 col-md-4 d-flex align-items-stretch">
                  <img src="assets/img/misc/misc-square-14.png" alt="Project image"
                    class="img-fluid card-img-left rounded">
                </div>
                <div class="col-12 col-md-8 d-flex">
                  <div class="card-body">
                    <h5 class="card-title fw-bolder text-secondary">Situation Analysis on Nature-Based Solutions (Consortium)
                    </h5>
                    <p class="card-text text-muted fw-light">As part of a consortium, we worked on providing a situational
                      analysis of nature-based solutions and how it was being used and perceived</p>
                    <p class="card-text  fw-semibold" style="font-size: 0.85rem; color: #018880;">Luc Hoffmann Institute - WWF, Switzerland </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 mb-3 shadow project-card h-100">
              <div class="row g-0 h-100">
                <div class="col-12 col-md-4 d-flex align-items-stretch">
                  <img src="assets/img/misc/misc-square-11.png" alt="Project image"
                    class="img-fluid card-img-left rounded">
                </div>
                <div class="col-12 col-md-8 d-flex">
                  <div class="card-body">
                    <h5 class="card-title fw-bolder text-secondary">Climate Change Impact on Health Service Assessment
                    </h5>
                    <p class="card-text text-muted fw-light">Provided an assessment of the impact of climate change risk on the
                      health care facility and provided recommendations to help reduce risk and build resilience</p>
                    <p class="card-text  fw-semibold" style="font-size: 0.85rem; color: #018880;">Client: Accra Medical
                      Center, Ghana</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Choose Us Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>18 Adom Street, Adentan</p>
            <p>Accra, Ghana</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+1 (306) 209-7346</span><br>
              <strong>Email:</strong> <span>info@gengreenconsult.org</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Fri:</strong> <span>9AM - 4PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">gengreenconsult</strong> <span>All Rights
          Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Eli_Mens</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>