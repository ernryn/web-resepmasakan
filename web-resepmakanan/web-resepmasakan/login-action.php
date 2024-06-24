<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cookIngl - Login - Message</title>
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
        <div class="container"><a class="navbar-brand d-inline-flex" href="landingpage.html"><img class="d-inline-block"
        src="image/logo.png" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">cookIngl</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
             </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
              <p class="mb-0 fw-bold text-lg-center"></p>
            </div>
            <a href="login.php" class="btn btn-white shadow-warning text-warning"><i class="fas fa-user me-2"></i>Back</a>
          </div>
        </div>
      </nav>
      <section class="py-5 overflow-hidden bg-primary" id="home">
        <div class="container">
          <div class="row flex-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!">
              <img class="img-fluid" src="image/hero-header.png" alt="hero-header" /></a></div>
            <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Sign In</h1>
              <div class="card w-xxl-75">
                <div class="card-body">
                  <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <?php 
                    include 'koneksi.php';
                    session_start();

                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $query = mysqli_query($koneksi, "SELECT * FROM admin where username='$username' and password='$password'");
                    $cek = mysqli_num_rows($query);

                    if ($cek==1)
                    {
                      session_start();
                      $_SESSION['username'] = $username;
                      header("location:katalog.php");
                    }

                    else{
                      echo "<br><br><h2>Maaf username dan password salah, coba kembali.</h2>";
                      echo "<a href='login.php' class='btn btn-danger'>Back</a>
                      <br><br>";
                    }
                    
                  ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Login Selesai-->
 
    <!-- JavaScripts-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>



