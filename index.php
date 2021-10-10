<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Lenore</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/Homepage/LOGO LENORE-01.png" rel="icon" />
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" /> -->

    <!-- Google Fonts -->
    <link rel="stylesheet" href="assets/Font/Urbanist-Thin.ttf" />
    <link rel="stylesheet" href="assets/Font/Urbanist-ExtraLight.ttf" />
    <link rel="stylesheet" href="assets/Font/Urbanist-Light.ttf" />
    <link rel="stylesheet" href="assets/Font/Urbanist-Regular.ttf" />
    <link rel="stylesheet" href="assets/Font/Urbanist-Medium.ttf" />
    <link rel="stylesheet" href="assets/Font/Urbanist-SemiBold.ttf" />
    <link rel="stylesheet" href="assets/Font/Urbanist-Bold.ttf" />
    <link rel="stylesheet" href="assets/Font/Urbanist-ExtraBold.ttf" />

    <!-- masonry -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/all.min.css">
    <link rel="stylesheet" href="fontawesome/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->

<header
      id="header"
      class="fixed-top d-flex align-items-center header-trans">
      <!-- navbar -->
      <?php require_once ('./components/navbar.php'); ?>
      
</header>
<!-- End Header -->
    

    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="hero-container">
        <!-- <div class="hex">
          <img src="assets/Homepage/product - hexagon.png" alt="hero" class="hex-loop anim-hero">
        </div> -->
        <div
          id="heroCarousel"
          data-bs-interval="5000"
          class="carousel slide carousel-fade"
          data-bs-ride="carousel"
        >
          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div
              class="carousel-item active"
              style="
                background: url(assets/Homepage/LANDING\ PAGE\ 1.jpg);
                background-position: center;
              "
            >
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown text-start">
                    Lighting Innovation for People
                  </h2>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div
              class="carousel-item"
              style="
                background: url(assets/Homepage/LANDING\ PAGE\ 3.jpg);
                background-position: center;
              "
            >
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">
                    Lighting Innovation for People
                  </h2>
                </div>
              </div>
            </div>

            <!-- Slide 3 -->
            <div
              class="carousel-item"
              style="
                background: url(assets/Homepage/LANDING\ PAGE\ 1\ NO\ LAYOUT.jpg);
                background-position: center;
              "
            >
              <div class="carousel-background">
                <!-- <img src="assets/Homepage/LANDING\ PAGE\ 4.jpg" alt="" /> -->
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">
                    Lighting Innovation for People
                  </h2>
                </div>
              </div>
            </div>

            <!-- Slide 4 -->
            <div
              class="carousel-item"
              style="
                background: url(assets/Homepage/LANDING\ PAGE\ 3\ NO\ LAYOUT.jpg);
                background-position: center;
              "
            >
              <div class="carousel-background">
                <!-- <img src="assets/Homepage/LANDING\ PAGE\ 4.jpg" alt="" /> -->
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">
                    Lighting Innovation for People
                  </h2>
                </div>
              </div>
            </div>

            <!-- Slide 5 -->
            <div
              class="carousel-item"
              style="
                background: url(assets/Homepage/LANDING\ PAGE\ 4\ NO\ LAYOUT.jpg);
                background-position: center;
              "
            >
              <div class="carousel-background">
                <!-- <img src="assets/Homepage/LANDING\ PAGE\ 4.jpg" alt="" /> -->
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">
                    Lighting Innovation for People
                  </h2>
                </div>
              </div>
            </div>
          </div>


          <a
            class="carousel-control-prev"
            href="#heroCarousel"
            role="button"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon bi bi-chevron-left"
              aria-hidden="true"
            ></span>
          </a>

          <a
            class="carousel-control-next"
            href="#heroCarousel"
            role="button"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon bi bi-chevron-right"
              aria-hidden="true"
            ></span>
          </a>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main>
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container-fluida">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 align-items-stretch">
              <img
                src="assets/Homepage/story of our light.png"
                class="img-fluid"
                alt="story"
              />
            </div>

            <div class="col-lg-6 col-md-6 d-flex flex-column">
              <div class="content">
                <h3 class="mb-3 title fs-40">The Story Of Our Lights</h3>
                <p>
                  When we strive to learn every aspect of light with passion. Cahaya Desain Indonesia was established in 2015 with its sole purpose to deliver best Value by adding professionalism to passion.
                </p>
                <div class="sub-story mb-4 d-flex">
                  <i class="story-icon"></i>
                  <div class="info-story">
                    <p class="fw-bold fs-5 mb-2 title-2">The Vision Of Our Light :</p>
                    <p class="text-uppercase mb-2">PROVIDE SOCIETY WITH LIGHTS</p>
                    <p>
                      Strive to be the leading company in Architectural Lighting products and provide the best choice of lighting products throughout Indonesia.
                    </p>
                  </div>
                </div>
                <div class="sub-story d-flex">
                  <i class="story-icon"></i>
                  <div class="info-story">
                    <p class="fw-bold fs-5 mb-2 title-2">The Mission Of Our Light :</p>
                    <p class="text-uppercase mb-2">CREATING CUSTOMER ORIENTED RELATIONSHIP.</p>
                    <p>
                      Realizing that satisfied customer is our key to success, customer relationship is our business value.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="hexagon st-hex">
              <img src="assets/Homepage/story of our light - hexagon.png" alt="" class="imf-fluid">
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- Satisfaction -->
      <section class="satisfaction" id="satisfaction">
        <div class="dots sf-dots">
          <img src="assets/Homepage/sp - dots.png" alt="">
        </div>
        <div class="container">
          <div class="row justify-content-evenly">
            <div
              class="
                col-lg-3 col-md-4
                text-center
                justify-content-start
                d-flex
                flex-column
              "
            >
              <div class="icon mb-4">
                <img
                  src="assets/Homepage/sp-consumer satisfaction.png"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <h4 class="title">Customer Satisfaction</h4>
              <p>
                We concern to the wants, needs and expectations of customers. Therefore, as a relationship business, we have to provide satisfactory service and even exceed their expectations
              </p>
            </div>
            <div
              class="
                col-lg-3 col-md-4
                text-center
                justify-content-start
                d-flex
                flex-column
              "
            >
              <div class="icon mb-4">
                <img
                  src="assets/Homepage/sp-broad insight.png"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <h4 class="title">Broad Insight</h4>
              <p>
                We hope, to educate our consumers with a broad insight about lightning
              </p>
            </div>
            <div
              class="
                col-lg-3 col-md-4
                text-center
                justify-content-start
                d-flex
                flex-column
              "
            >
              <div class="icon mb-4">
                <img
                  src="assets/Homepage/sp - satisfactory service.png"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <h4 class="title">Satisfactory Service</h4>
              <p>
                We have a team to provide the best and satisfactory service, as well as establish long-term and profitable relationship
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Satisfaction -->

      <!-- Products -->
      <section class="product" id="product">
        <div class="product-decor">
          <div class="left">
            <img src="assets/Homepage/product-line decor left.png" class="img-fluid" alt="decor">
          </div>
          <div class="right">
            <img src="assets/Homepage/product-line decor right.png" class="img-fluid" alt="decor">
          </div>
        </div>
        <div class="front container">
          <div class="row info-product">
            <div class="col-4">
              <h4 class="fs-40">500</h4>
              <p>Projects</p>
            </div>
            <div class="col-4 center">
              <h4 class="fs-40">350</h4>
              <p>Clients</p>
            </div>
            <div class="col-4">
              <h4 class="fs-40">1000</h4>
              <p>Products</p>
            </div>
          </div>
          <div class="text-center">
            <h2 class="title text-light fs-40">Our Products</h3>
          </div>
          <div class="product-img d-flex">
            <figure class="img-box">
              <img
                src="assets/Homepage/product - interior.png"
                class="img-fluid"
                alt="products"
              />
              <figcaption>
                <p class="fs-50 title text-light text">Interiror</p>
                <button class="btn btn-view">
                  <a href="products-list.php" class="btn-view-all">View All Products</a>
                </button>
              </figcaption>
            </figure>
            <figure class="img-box">
              <img
                src="assets/Homepage/product-exterior.png"
                class="img-fluid"
                alt="products"
              />
              <figcaption>
                <p class="fs-50 title text-light text">Exterior</p>
                <button class="btn btn-view">
                  <a href="products-list.php" class="btn-view-all">View All Products</a>
                </button>
              </figcaption>
            </figure>
            <figure class="img-box">
              <img
                src="assets/Homepage/product-others.png"
                class="img-fluid"
                alt="products"
              />
              <figcaption>
                <p class="fs-50 title text-light text">Others</p>
                <button class="btn btn-view">
                  <a href="products-list.php" class="btn-view-all">View All Products</a>
                </button>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="hexagon prod-hex">
          <img src="assets/Homepage/product - hexagon.png" alt="" class="img-fluid">
        </div>
      </section>

      <!-- Gallery -->
      <section class="gallery" id="gallery">
        <div class="hexagon g-hex">
          <img src="assets/Homepage/blog - hexagon.png" class="img-fluid" alt="">
        </div>
        <div class="container">
          <div class="row">
            <div class="anim">
              <img src="assets/Homepage/product - yellow square.png" class="anim-loop anim-product" alt="anim">
            </div>
            <div class="col-lg-12 d-flex top-projects">
              <div class="col-lg-7 col-md-6 col-sm-6">
                <h2 class="title fs-40">Projects</h2>
                <p>We deliver the lighting products come true with the best idea. That's what partnership are for.</p>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-6 text-end m-auto">
                <button class="btn">
                  <a href="projects-gallery.php" class="btn-view-all">View All Projects</a>
                </button>
                
              </div>
            </div>
            <!-- <div class="col-lg-4 col-md-4 col-sm-4 box box-1">
              <img
                src="assets/Homepage/project-airport.png"
                class="img-fluid"
                alt="projects"
              />
              <div class="desc">
                <h4 class="text-light">Plaza Premium Lounge - Bandara Soekarno Hatta Terminal 3</h4>
              </div>
            </div>
            <div class="right-proj col-lg-8 col-md-8 col-sm-8 d-flex flex-wrap align-content-end">
              <div class="col-lg-12 col-md-12 col-sm-12 box box-2">
                <img
                  src="assets/Homepage/project-adidas.png"
                  class="img-fluid"
                  alt="projects"
                />
                
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 box box-3">
                <img
                  src="assets/Homepage/project-loreal.png"
                  class="img-fluid"
                  alt="projects"
                />
                
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 box box-4">
                <img
                  src="assets/Homepage/project-kokoro.png"
                  class="img-fluid"
                  alt="projects"
                />
                
              </div>
            </div> -->
            <div class="gallery-wrapper">
              <div class="tall box">
                <img src="assets/Homepage/project-airport.png" alt="" class="img-fluid">
                <div class="desc">
                <h4 class="">Plaza Premium Lounge - Bandara Soekarno Hatta Terminal 3</h4>
              </div>
              </div>
              <div class="wide box">
                <img
                    src="assets/Homepage/project-adidas.png"
                    class="img-fluid"
                    alt="projects"
                  />
                  <div class="desc">
                  <h4 class="">ADIDAS Pondok Indah Mall 3</h4>
                </div>
              </div>
              <div class="box">
              <img
                  src="assets/Homepage/project-loreal.png"
                  class="img-fluid"
                  alt="projects"
                />
                <div class="desc">
                  <h4 class="">LOREAL Academy Lotte Shopping Avenue Kuningan</h4>
                </div>
              </div>
              <div class="box">
              <img
                  src="assets/Homepage/project-kokoro.png"
                  class="img-fluid"
                  alt="projects"
                />
                <div class="desc">
                  <h4 class="">KOKORO Living World Alam Sutera</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Gallery -->

      <!-- Blog -->
      <section id="blog" class="blog">
        <div class="dots blog-dots">
          <img src="assets/Homepage/blog - dots.png" alt="">
        </div>
        <div class="container mt-4">
          <div class="row justify-content-between">
            <div class="anim">
              <img src="assets/Homepage/blog - square.png" alt="anim" class="anim-loop anim-blog">
            </div>
            <div class="text-center mb-5">
              <h2 class="title fs-40">Lenore Blog</h2>
            </div>
            <div class="col-lg-4 col-md-4 mb-4">
              <div class="card">
                <img
                  src="assets/Homepage/blog 1.png"
                  class="img-fluid"
                  alt="blog"
                />
                <div class="card-body">
                  <div class="card-title d-flex align-items-center">
                    <p class="tag">Blog</p>
                    <p class="date">20 September 2021</p>
                  </div>
                  <p class="card-text mb-3">
                    Memilih Lampu yang Tepat Berdasarkan Fungsi Ruangan
                  </p>
                  <a href="blog-list.php" class="read">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4">
              <div class="card">
                <img
                  src="assets/Homepage/blog 2.png"
                  class="img-fluid"
                  alt="blog"
                />
                <div class="card-body">
                  <div class="card-title d-flex align-items-center">
                    <p class="tag">News</p>
                    <p class="date">20 September 2021</p>
                  </div>
                  <p class="card-text mb-3">
                    Memilih Lampu yang Tepat Berdasarkan Fungsi Ruangan
                  </p>
                  <a href="blog-list.php" class="read">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4">
              <div class="card">
                <img
                  src="assets/Homepage/blog 3.png"
                  class="img-fluid"
                  alt="blog"
                />
                <div class="card-body">
                  <div class="card-title d-flex align-items-center">
                    <p class="tag">Events</p>
                    <p class="date text-muted">20 September 2021</p>
                  </div>
                  <p class="card-text mb-3">
                    Memilih Lampu yang Tepat Berdasarkan Fungsi Ruangan
                  </p>
                  <a href="blog-list.php" class="read">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg text-center mt-3">
              <a href="blog-list.php" class="btn btn-view-all">Read More Blog</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Blog -->

      <!-- Contact -->
      <section id="contact" class="contact">
        <div class="dots contact-dots">
          <img src="assets/Homepage/contact us - dots.png" class="img-fluid" alt="">
        </div>
        <div class="container-fluida">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 align-items-stretch img-contact">
              <img
                src="assets/Homepage/contact us.png"
                class="img-fluid"
                alt="contact"
              />
              <img src="assets/Homepage/contact us-line.png" alt="decor" class="decor">
            </div>

            <div class="col-lg-5 col-md-5 contact-form">
              <h2 class="title mb-3 fs-40">Contact Us</h2>
              <form>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress"
                    placeholder="Name"
                    required
                  />
                </div>
                <div class="form-row d-flex justify-content-between">
                  <div class="form-group col-5">
                    <input
                      type="email"
                      class="form-control"
                      id="inputEmail4"
                      placeholder="Email"
                      required
                    />
                  </div>
                  <div class="form-group col-5">
                    <input
                      class="form-control"
                      id="company"
                      placeholder="Company"
                      required
                    />
                  </div>
                </div>

                <div class="form-group">
                  <textarea
                    class="form-control"
                    id="validationTextarea"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-view-all float-end">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact -->
    </main>

    <!-- Modal -->
  <?php require_once ('./components/modal.php'); ?>

    <!-- whatsapp button -->
    <?php require_once ('./components/wa.php'); ?>

    <!-- footer -->
    <?php require_once ('./components/footer.php'); ?>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
