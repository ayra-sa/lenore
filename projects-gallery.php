<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects Gallery</title>

    <link href="assets/Homepage/LOGO LENORE-01.png" rel="icon" />

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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/projects-style.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />

  </head>
  <body>
    <!-- ======= Header ======= -->

<header
      id="header"
      class="header-page fixed-top d-flex align-items-center">
      
      <div
  class="
    container-fluid container-xl
    d-flex
    align-items-center
    justify-content-between
  "
>
  <div class="logo me-auto">
    <h1>
      <a href="./index.php"
        ><img src="assets/Homepage/LOGO LENORE-01.png" alt="logo"
      /></a>
    </h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  </div>

  <nav id="navbar" class="navbar navbar-expand-lg order-last order-lg-0">
    <!-- Container wrapper -->
    <div class="container-fluida">
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavbar" aria-controls="navbarNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
  
      <!-- Collapsible wrapper -->
      <div class="collapses navbar-collapses" id="navbarNavbar">
        <!-- Left links -->
        <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
          
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown position-static">
            <a class="nav-link dropdown-toggle" href="./index.php#product" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <!-- Dropdown menu -->
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  
              <div class="container">
                <div class="row my-4">
                  <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <div class="list-group list-group-flush">
                      <p>Interior</p>
                      <a href="" class="list-group-item list-group-item-action">Spot</a>
                      <a href="" class="list-group-item list-group-item-action">General</a>
                      <a href="" class="list-group-item list-group-item-action">Linear</a>
                      <a href="" class="list-group-item list-group-item-action">Wall</a>
                      <a href="" class="list-group-item list-group-item-action">Magnetic</a>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <div class="list-group list-group-flush">
                      <p>Exterior</p>
                      <a href="" class="list-group-item list-group-item-action">Facade</a>
                      <a href="" class="list-group-item list-group-item-action">Underwater</a>
                      <a href="" class="list-group-item list-group-item-action">Landscape</a>
                      <a href="" class="list-group-item list-group-item-action">Wall</a>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="list-group list-group-flush">
                      <p>Others</p>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </li>
          <li>
            <a class="nav-link " href="./switch_system.php">Switches & System</a>
          </li>
          <li><a class="nav-link active" href="./projects-gallery.php">Projects</a></li>
          <li><a class="nav-link" href="./blog-list.php">Blog</a></li>
          <li>
            <a class="nav-link " data-bs-toggle="modal" data-bs-target="#getCatalogue" href="">Get Catalogue</a>
          </li>
          <li><a class="nav-link " href="#">About</a></li>
          <li><a class="nav-link " href="./index.php#contact">Contact Us</a></li>
          <li>
            <div class="form d-flex align-items-center">
              <i class="fa fa-search"></i>
              <input type="text" placeholder="Search" class="form-control form-input" />
            </div>
          </li>
        </ul>
            <!-- Left links -->
      </div>
          <!-- Collapsible wrapper -->
    </div>
        <!-- Container wrapper -->
  <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- .navbar -->
</div>

</header>
<!-- End Header -->

    <main>
      <section class="projects-gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h4 class="title fs-40">Projects Gallery</h4>
            </div>
          </div>
          <div
            id="carouselProjects"
            class="carousel carousel-dark slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <?php require_once ('./components/projects-bandara.php'); ?>
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <?php require_once ('./components/projects-adidas.php'); ?>
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <?php require_once ('./components/projects-loreal.php'); ?>
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <?php require_once ('./components/projects-kokoro.php'); ?>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselProjects"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselProjects"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>

    </main>

    <?php require_once ('./components/modal.php'); ?>

    <!-- whatsapp button -->
    <?php require_once ('./components/wa.php'); ?>

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
