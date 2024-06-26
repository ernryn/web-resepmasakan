<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cookIngl - Landing Page</title>

    <!--    Favicons-->
    <link rel="icon" type="image/png" sizes="32x32" href="image/logo.png">
    <meta name="theme-color" content="#ffffff">
    <!--    Stylesheets-->
    <link href="css/theme.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Landing Page-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="landingpage.html"><img class="d-inline-block" src="image/logo.png" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">cookIngl</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
              <p class="mb-0 fw-bold text-lg-center"></p>
            </div>
            <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0"> 
            <a href="login.php" class="btn btn-white shadow-warning text-warning"><i class="fas fa-user me-2"></i>Login</a>
            </form>
          </div>
        </div>
      </nav>
      <section class="py-5 overflow-hidden bg-primary" id="home">
        <div class="container">
          <div class="row flex-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!"><img class="img-fluid" src="image/hero-header.png" alt="hero-header" /></a></div>
            <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Apa Resepmu?</h1>
              <h1 class="text-800 mb-5 fs-4">Let's share your delicious recipes and get other recipes!</h1>
              <div class="card w-xxl-75">
                <div class="card-body">
                  <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <form class="row gx-2 gy-2 align-items-center">
                        <div class="d-grid gap-3 col-sm-auto">
                        <a href="login.php"class="btn btn-danger" type="submit">Sign In</button></a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-primary-gradient">

        <div class="container">
          <div class="row justify-content-center g-0">
            <div class="col-xl-9">
              <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="image/location.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Recipe Search</h5>
                    <p class="mb-md-0">Allows users to search for recipes based on keywords, ingredients, or food type.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="image/order.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Recipe Category</h5>
                    <p class="mb-md-0">Grouping recipes into specific categories or types of food.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="image/pay.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Everyone can try</h5>
                    <p class="mb-md-0">The recipes provided are recipes that will help people from all walks of life.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="image/meals.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Guaranteed recipe</h5>
                    <p class="mb-md-0">Food recipes from trusted sources to produce good and reliable results.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>

      <section>
        <div class="bg-holder" style="background-image:url(image/cta-one-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-10">
              <div class="card card-span shadow-warning" style="border-radius: 35px;">
                <div class="card-body py-5">
                  <div class="row justify-content-evenly">
                    <div class="col-md-3">
                      <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="image/discounts.png" width="100" alt="..." />
                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                          <h2 class="fw-bolder text-1000 mb-0 text-gradient">90%<br class="d-none d-md-block" />Guaranteed </h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 hr-vertical">
                      <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="image/live-tracking.png" width="100" alt="..." />
                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                          <h2 class="fw-bolder text-1000 mb-0 text-gradient">Local Recipes</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 hr-vertical">
                      <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="image/quick-delivery.png" width="100" alt="..." />
                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                          <h2 class="fw-bolder text-1000 mb-0 text-gradient">Quick Recipe</h2>
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

      <!-- footer -->
      <section class="py-0 pt-7 bg-1000">
        <div class="container">
          <hr class="border border-800" />
          <div class="row flex-center pb-3">
            <div class="col-md-6 order-0">
              <p class="text-200 text-center text-md-start">Pengenalan Perancangan Web Lanjut &copy; Erna Riyanti</p>
            </div>
            <div class="col-md-6 order-1">
              <p class="text-200 text-center text-md-end">&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFB30E" viewBox="0 0 16 16">
                </svg>&nbsp;by&nbsp;<a class="text-200 fw-bold">22.12.2614 </a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--footer selesai-->
    </main>
    <!-- landing page selesai-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>