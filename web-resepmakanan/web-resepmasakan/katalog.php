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
    <title>cookIngl - Catalog</title>
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
              <a href="homepage.php" class="btn btn-white shadow-warning text-warning"><i class="fas fa-utensils me-2"></i>Homepage</a>
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
              <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6" style="padding-top: 30px;">My Catalog Recipe</h5>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Welcome Selesai -->

      <!-- Section Resep -->
      <section class="py-0">
      <div class="container">
        <div class="row">
            <div class="col-10"><h3>These are my recipes</h3></div>
            <div class="col-2"><a href="tambah-resep.php" class="btn btn-primary">Buat Resep</a></div>
        </div>
        <table class="table" style="margin-top:20px">
            <thead class="table-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Bahan-bahan</th>
                <th scope="col">Langkah</th>
                <th scope="col">Resep Dibuat</th>
                <th scope="col">Estimasi Waktu</th>
                <th scope="col">Kategori</th>
                <th scope="col">Atur</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                    include ('koneksi.php');
                    //*********** Perintah menampilkan daftar buku ***********//
                    $sql=mysqli_query($koneksi, "SELECT r.resep_id, r.resep_gambar, r.resep_judul, r.resep_deskripsi, 
                    r.resep_bahan, r.resep_langkah, r.resep_tanggal, r.resep_waktu, k.kategori_nama
                    FROM katalog_resep r
                    JOIN kategori_resep k ON r.kategori_id = k.kategori_id;
                    ");
                    $no=1;
                        while ($row=mysqli_fetch_array($sql)){
                          $judul_resep=$row['resep_judul'];
                            echo "
                            <tr>
                                    <td width='30'>".$no."</td>
                                    <td width='100'><image width='100' src='image-posted/".$row['resep_gambar']."'></td>
                                    <td width='100'>".$row['resep_judul']."</td>
                                    <td width='150'>".$row['resep_deskripsi']."</td>
                                    <td width='200'>".$row['resep_bahan']."</td>
                                    <td width='300'>".$row['resep_langkah']."</td>
                                    <td width='100'>".$row['resep_tanggal']."</td>
                                    <td width='100'>".$row['resep_waktu']."</td>
                                    <td width='100'>".$row['kategori_nama']."</td>
                                    <td width='50'>
                                    <a href='edit-resep.php?resep_id=".$row['resep_id']."'>
                                        <img src='image/edit.png' alt='Edit'  width='25' height='25' />
                                    </a>
                                    <a href='hapus-resep.php?resep_id=".$row['resep_id']."'>
                                        <img src='image/delete.png' alt='Hapus' width='25' height='25'/>
                                    </a>
                                    </td>
                                  </tr>
                                            ";
                                  $no++;
                        }
                        $no++;
                        if (isset($_GET['success']) && $_GET['success'] == 1) {
                            echo "<div class='success-message'>Data berhasil dihapus</div>";
                        } elseif (isset($_GET['error']) && $_GET['error'] == 1) {
                            echo "<div class='error-message'>Terjadi kesalahan saat menghapus data</div>";
                        }
                        ?>
            </tbody>
          </table>
    </div>
      </section>
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