<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cookIngl - Homepage</title>
    <!--    Favicons-->
    <link rel="icon" type="image/png" sizes="32x32" href="image/logo.png">
    <meta name="theme-color" content="#ffffff">
    <!--    Stylesheets-->
    <link href="css/theme.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Main Content-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block" src="image/logo.png" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">cookIngl</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
              <p class="mb-0 fw-bold text-lg-center">Buat resepmu di sini sekarang!</p>
            </div>
            <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
              <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                <input class="form-control border-0 input-box bg-100" type="search" placeholder="Search Food" aria-label="Search" />
              </div>
              <a href="katalog.php" class="btn btn-white shadow-warning text-warning"><i class="fas fa-utensils me-2"></i>Recipes</a>
              <a href="logout.php" class="btn btn-white shadow-warning text-warning"><i class="fas fa-user me-2"></i>Logout</a>
            </form>
          </div>
        </div>
      </nav>

      <!-- Section Welcome -->
      <section class="py-0 bg-primary-gradient">

        <div class="container">
          <div class="row justify-content-center g-0">
            <div class="col-xl-9">
              <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
              <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6" style="padding-top: 30px;">
              Welcome <?= $_SESSION['username'] ?>!</h5>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Welcome Selesai  -->

      <!-- Section Kategori -->
        <section class="py-8 overflow-hidden">

          <div class="container">
            <div class="row flex-center mb-6">
              <div class="col-lg-12">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">Search by Food</h5>
              </div>
            </div>
            <div class="row flex-center">
              <div class="col-12">
                <div class="carousel slide" id="carouselSearchByFood" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <div class="row h-100 align-items-center">
                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                          <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="image/search-pizza.png" alt="..." />
                            <div class="card-body ps-0">
                              <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Main Dishes</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                          <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="image/toffes-cake.png" alt="..." />
                            <div class="card-body ps-0">
                              <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Desserts</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                          <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="image/snacks.jpg" alt="..." />
                            <div class="card-body ps-0">
                              <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Snacks</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                          <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="image/burger.png" alt="..." />
                            <div class="card-body ps-0">
                              <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Fast Food</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                          <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="image/sub-sandwich.png" alt="..." />
                            <div class="card-body ps-0">
                              <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Healthy Food</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                          <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="image/drink.jpeg" alt="..." />
                            <div class="card-body ps-0">
                              <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Drink</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Kategori Selesai -->
  
      <!-- Section Resep Selesai -->
      <section>
        <div class="bg-holder" style="background-image:url(image/bg-bawah.png);background-position:center;background-size:cover;">
        </div>
      </section>
    </main>
    <!-- Main Selesai -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>