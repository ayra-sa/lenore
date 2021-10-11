<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products</title>

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
    <link href="assets/css/products-style.css" rel="stylesheet" />
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
            <img src="assets/Product List/Banner.png" alt="banner" class="img-fluid">
        </div>
        <div class="cover-banner">
          <div class="container">
            <h1 class="text-light fs-40">All <br>Products</h1>
          </div>
            <!-- <img src="assets/Homepage/blog -" class="mask-top"> -->
            <div class="banner-hex">
              <img src="assets/Homepage/story of our light - hexagon.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>

      <section class="products">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                All Products
              </li>
            </ol>
          </nav>
          <div class="row">
            <aside class="col-lg-3 col-md-3 left">
              <article class="filter-group">
                <div
                  class="
                    filter-top
                    d-flex
                    justify-content-between
                    align-items-center
                  "
                >
                  <h4 class="title">Filter</h4>
                  <button
                    class="
                      btn btn-link
                      bg-transparent
                      text-decoration-none
                    "
                  >
                    <i class="fa fa-times"></i>
                    Clear Filter
                  </button>
                </div>
                <div class="accordion accordion-flush" id="filters">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button
                        class="accordion-button collapsed title"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#interrior"
                        aria-expanded="false"
                        aria-controls="interrior"
                      >
                        Interrior
                      </button>
                    </h2>
                    <div
                      id="interrior"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#filters"
                    >
                      <form>
                        <div class="form-group">
                          <input type="checkbox" id="artisan" />
                          <label for="artisan">All</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="breakfast" />
                          <label for="breakfast">Spot</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="healthy" />
                          <label for="healthy">General</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="healthy" />
                          <label for="healthy">Wall</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="healthy" />
                          <label for="healthy">Magnetic</label>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button
                        class="accordion-button collapsed title"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#exterrior"
                        aria-expanded="false"
                        aria-controls="exterrior"
                      >
                        Exterrior
                      </button>
                    </h2>
                    <div
                      id="exterrior"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <form>
                        <div class="form-group">
                          <input type="checkbox" id="artisan" />
                          <label for="artisan">Facode</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="breakfast" />
                          <label for="breakfast">Underwater</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="healthy" />
                          <label for="healthy">Landscape</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="healthy" />
                          <label for="healthy">Wall</label>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button
                        class="accordion-button collapsed title"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#others"
                        aria-expanded="false"
                        aria-controls="others"
                      >
                        Others
                      </button>
                    </h2>
                    <div
                      id="others"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <form>
                        <div class="form-group">
                          <input type="checkbox" id="artisan" />
                          <label for="artisan">All</label>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </article>
            </aside>
            <div class="col-lg-9 col-md-9 right">
              <div class="container">
                <div class="d-flex justify-content-between top">
                  <div class="m-2" id="res">
                    Showing <b>12</b> of <b>100</b> Products
                  </div>
                  <div class="form d-flex align-items-center">
                    <i class="fa fa-search"></i>
                    <input
                      type="text"
                      placeholder="Search Product"
                      class="form-control form-input"
                    />
                  </div>
                </div>
                <div class="row mt-3">
                  <a
                    href="product-detail.php"
                    class="
                      col-lg-4 col-md-6 col-sm-10
                      offset-md-0 offset-sm-1
                      prod-item
                    "
                  >
                    <div
                      class="card d-flex justify-content-between text-center"
                    >
                    <div class="prod-image">
                      <img
                        class="img-fluid"
                        src="assets/Product List/product 1.png"
                      />
                    </div>
                      <div class="card-body">
                        <p class="text-muted text-uppercase">interrior</p>
                        <h5 class="text-uppercase title">lnsd-asdr2</h5>
                      </div>
                    </div>
                  </a>
                  <a
                    href="product-detail.php"
                    class="
                      col-lg-4 col-md-6 col-sm-10
                      offset-md-0 offset-sm-1
                      prod-item
                    "
                  >
                    <div
                      class="card d-flex justify-content-between text-center"
                    >
                    <div class="prod-image">
                      <img
                        class="img-fluid"
                        src="assets/Product List/product 2.png"
                      />
                    </div>
                      <div class="card-body">
                        <p class="text-muted text-uppercase">interrior</p>
                        <h5 class="text-uppercase title">lnsd-asdr2</h5>
                      </div>
                    </div>
                  </a>
                  <a
                    href="product-detail.php"
                    class="
                      col-lg-4 col-md-6 col-sm-10
                      offset-md-0 offset-sm-1
                      prod-item
                    "
                  >
                    <div
                      class="card d-flex justify-content-between text-center"
                    >
                    <div class="prod-image">
                      <img
                        class="img-fluid"
                        src="assets/Product List/product 3.png"
                      />
                    </div>
                      <div class="card-body">
                        <p class="text-muted text-uppercase">interrior</p>
                        <h5 class="text-uppercase title">lnsd-asdr2</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- pagination -->
                <ul class="pagination pagination-sm mt-5 justify-content-end">
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
            </div>
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
