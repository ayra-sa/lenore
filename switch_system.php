<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>

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
    <link href="assets/css/switch-style.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />
  </head>
  <body>
<!-- ======= Header ======= -->

<header
      id="header"
      class="header-page fixed-top d-flex align-items-center">
      
      <!-- navbar -->
      <?php require_once ('./components/navbar-page.php'); ?>

</header>
<!-- End Header -->

  <main>
     <!-- BANNER -->
    <div class="banner">
        <div class="img">
            <img src="assets/switch and system List/Banner.png" alt="banner" class="img-fluid">
        </div>
        <div class="cover-banner">
          <div class="container">
            <h1 class="text-light fs-40">Switch <br>& System</h1>
          </div>
            <!-- <img src="assets/Homepage/blog -" class="mask-top"> -->
            <div class="banner-hex">
              <img src="assets/Homepage/story of our light - hexagon.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <section class="switchSystem">
        <div class="hex ss-hex">
            
        </div>
        <div class="container">
        <nav aria-label="breadcrumb mb-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">
                <a href="products-list.php">Switch & System</a>
              </li>
              
            </ol>
          </nav>

          <!-- content -->
          <div class="row ss-thumbnail align-items-center">
              <div class="col-lg-7">
                  <div class="video-thumb">
                      <img src="assets/switch and system List/video thumbnail 1.png" alt="" class="img-fluid">
                      <a href="#" class="play-btn"></a>
                  </div>
              </div>
              <div class="col-lg-5">
                  <h4 class="title fs-40 mb-2">Smart Living Ecosystem</h4>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At vitae aut nesciunt.</p>
              </div>
          </div>

          <div class="row ss-list">
              <h4 class="title fs-40 text-center">Products</h4>
                <a
                    href="switch_system-detail.php"
                    class="
                      col-lg-4 col-md-6 col-sm-10
                      offset-md-0 offset-sm-1
                      ss-item
                    "
                  >
                    <div
                      class="card d-flex justify-content-between text-center"
                    >
                    <div class="ss-image">
                      <img
                        class="img-fluid"
                        src="assets/switch and system List/product 1.png"
                      />
                    </div>
                      <div class="card-body">
                        <p class="text-muted text-uppercase">switch & system</p>
                        <h5 class="text-capitalize title">Lorem ipsum dolor sit amet, consectetur adipisicing</h5>
                      </div>
                    </div>
                </a>
                <a
                    href="switch_system-detail.php"
                    class="
                      col-lg-4 col-md-6 col-sm-10
                      offset-md-0 offset-sm-1
                      ss-item
                    "
                  >
                    <div
                      class="card d-flex justify-content-between text-center"
                    >
                    <div class="ss-image">
                      <img
                        class="img-fluid"
                        src="assets/switch and system List/product 2.png"
                      />
                    </div>
                      <div class="card-body">
                        <p class="text-muted text-uppercase">switch & system</p>
                        <h5 class="text-capitalize title">Lorem ipsum dolor sit amet, consectetur adipisicing</h5>
                      </div>
                    </div>
                </a>
                <a
                    href="switch_system-detail.php"
                    class="
                      col-lg-4 col-md-6 col-sm-10
                      offset-md-0 offset-sm-1
                      ss-item
                    "
                  >
                    <div
                      class="card d-flex justify-content-between text-center"
                    >
                    <div class="ss-image">
                      <img
                        class="img-fluid"
                        src="assets/switch and system List/product 3.png"
                      />
                    </div>
                      <div class="card-body">
                        <p class="text-muted text-uppercase">switch & system</p>
                        <h5 class="text-capitalize title">Lorem ipsum dolor sit amet, consectetur adipisicing</h5>
                      </div>
                    </div>
                </a>
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
