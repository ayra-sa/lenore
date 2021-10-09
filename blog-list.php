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
    <link href="assets/css/blog-style.css" rel="stylesheet" />
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
      <section class="banner">
        <div class="container">
          <h4 class="title text-light">All <br />Products</h4>
        </div>
      </section>

      <section class="blog">
        <div class="container">
          <nav aria-label="breadcrumb mb-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>

              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>

          <!-- tabs -->
          <div class="row blog-tabs">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="blog-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-blog">Blog</li>
                <li data-filter=".filter-news">News</li>
                <li data-filter=".filter-events">Events</li>
              </ul>
            </div>
          </div>

          <!-- blog list -->
          <div class="row blogs">
            <div class="circle1">
              <img src="assets/Homepage/product - yellow circle.png" alt="" />
            </div>
            <div class="circle2">
              <img src="assets/Homepage/product - yellow circle.png" alt="" />
            </div>
            <div class="col-lg-4 col-md-4 mb-4 blog-item filter-blog">
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
                  <a href="blog-detail.php" class="blog-link">
                    <p class="card-text mb-3">
                      Memilih Lampu yang Tepat Berdasarkan Fungsi Ruangan
                    </p>
                  </a>
                  <a href="blog-detail.php" class="read mt-2">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4 blog-item filter-news">
              <div class="card">
                <img
                  src="assets/Homepage/blog 1.png"
                  class="img-fluid"
                  alt="blog"
                />
                <div class="card-body">
                  <div class="card-title d-flex align-items-center">
                    <p class="tag">News</p>
                    <p class="date">20 September 2021</p>
                  </div>
                  <a href="blog-detail.php" class="blog-link">
                    <p class="card-text mb-3">
                      Memilih Lampu yang Tepat Berdasarkan Fungsi Ruangan
                    </p>
                  </a>
                  <a href="blog-detail.php" class="read mt-2">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4 blog-item filter-events">
              <div class="card">
                <img
                  src="assets/Homepage/blog 1.png"
                  class="img-fluid"
                  alt="blog"
                />
                <div class="card-body">
                  <div class="card-title d-flex align-items-center">
                    <p class="tag">Events</p>
                    <p class="date">20 September 2021</p>
                  </div>
                  <a href="blog-detail.php" class="blog-link">
                    <p class="card-text mb-3">
                      Memilih Lampu yang Tepat Berdasarkan Fungsi Ruangan
                    </p>
                  </a>
                  <a href="blog-detail.php" class="read mt-2">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <!-- pagination -->
          <ul class="pagination pagination-sm mt-5 justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&lsaquo;</span>
              </a>
            </li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&rsaquo;</span>
              </a>
            </li>
          </ul>
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
