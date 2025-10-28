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

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.webp.png" alt="">
        <h1 class="sitename">Gen Green Consult.</h1>
      </a>

      <?php include "components/nav.php";?>

      <a class="btn-getstarted" href="#consultation">Get Started</a>

    </div>
  </header>

  <main class="main">

    

    
   

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>Contact</h2>
        <div><span>Contact</span> <span class="description-title">Us</span></div>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="contact-info">
              <div class="contact-card">
                <h3>Contact Information</h3>
                <p>Feel free to reach out with any questions about the book, speaking engagements, or media inquiries.
                </p>

                <div class="contact-details">
                  <div class="contact-item">
                    <i class="bi bi-envelope"></i>
                    <div>
                      <h4>Email:</h4>
                      <p>info@gengreenconsult.org</p>
                    </div>
                  </div>

                  <div class="contact-item">
                    <i class="bi bi-telephone"></i>
                    <div>
                      <h4>Phone:</h4>
                      <p>+1 (306) 209-7346</p>
                    </div>
                  </div>

                  <div class="contact-item">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>Address:</h4>
                      <p>18 Adom Street, Adentan,</p>
                      <p> Accra - Ghana</p>
                    </div>
                  </div>
                </div>

                <div class="social-links">
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form-wrapper">
              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required="">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="email">info@gengreenconsult.org</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="john@example.com"
                      required="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="I loved your book!"
                    required="">
                </div>
                <div class="form-group mt-3">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" rows="7" placeholder="Your message here..."
                    required=""></textarea>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

 <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <div><span>Frequently Asked</span> <span class="description-title">Questions</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-between">
          <div class="col-lg-8">

            <div class="faq-list">
              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="100">
                <h3>Vivamus suscipit tortor eget felis porttitor volutpat?</h3>
                <div class="faq-content">
                  <p>
                    Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum
                    sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.
                  </p>
                </div>
                <i class="bi bi-plus faq-toggle"></i>
              </div><!-- End FAQ Item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <h3>Curabitur aliquet quam id dui posuere blandit?</h3>
                <div class="faq-content">
                  <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                    neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Mauris
                    blandit aliquet elit, eget tincidunt nibh pulvinar.
                  </p>
                </div>
                <i class="bi bi-plus faq-toggle"></i>
              </div><!-- End FAQ Item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <h3>Sed porttitor lectus nibh ullamcorper sit amet?</h3>
                <div class="faq-content">
                  <p>
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis
                    a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit
                    amet quam vehicula elementum.
                  </p>
                </div>
                <i class="bi bi-plus faq-toggle"></i>
              </div><!-- End FAQ Item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <h3>Nulla quis lorem ut libero malesuada feugiat?</h3>
                <div class="faq-content">
                  <p>
                    Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                    neque, auctor sit amet aliquam vel.
                  </p>
                </div>
                <i class="bi bi-plus faq-toggle"></i>
              </div><!-- End FAQ Item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <h3>Vestibulum ac diam sit amet quam vehicula elementum?</h3>
                <div class="faq-content">
                  <p>
                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis
                    in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet
                    aliquam vel, ullamcorper sit amet ligula.
                  </p>
                </div>
                <i class="bi bi-plus faq-toggle"></i>
              </div><!-- End FAQ Item-->

            </div>

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="faq-card">
              <i class="bi bi-chat-dots-fill"></i>
              <h3>Can't find answer to your question?</h3>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam
                vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut
                libero malesuada feugiat.</p>
              <a href="#contact" class="btn btn-primary">Contact Us</a>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
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