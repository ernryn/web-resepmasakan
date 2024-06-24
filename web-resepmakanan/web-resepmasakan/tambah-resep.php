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
    <title>cookIngl - Recipe</title>
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
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block" src="image/logo.png" 
        alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">cookIngl</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
             </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
              <p class="mb-0 fw-bold text-lg-center">Buat resepmu di sini sekarang!</p>
            </div>
            <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
              <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                <input class="form-control border-0 input-box bg-100" type="search" placeholder="Search Food" aria-label="Search" />
              </div>
              <a href="katalog.php" class="btn btn-white shadow-warning text-warning"><i class="fas fa-utensils me-2"></i>Katalog</a>
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
                <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6" style="padding-top: 30px;">Make My Recipe</h5>
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
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card" style="border-radius: 20px; border: none; margin-top: -20px; margin-bottom: -20px;">
                    <div class="card-body">
                      <form class="forms-sample" action="tambah-resep.php" method="POST" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-12">
                        <h3 class="card-title">Recipe Box</h3>
                        <p cla ss="card-description">
                        Delicious dishes waiting for your recipe!
                        </p>
                        </div>
                    </div>
                      <div class="form-group">
                          <label>File upload</label>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="fileGambar" name="fileGambar">
                          </div>
                        </div>  
                      <div class="form-group">
                          <label for="exampleInputTitle">Title</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Type a Title" name="judulResep">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Description</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="2" placeholder="Type a Question" name="deskripsiResep"></textarea>
                          </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Tools and Materials</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="6" placeholder="Type a Question" name="bahanResep"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea1">Step by Step</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="8" placeholder="Type a Question" name="langkahResep">
                            </textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputDate">Make a Recipe</label>
                            <input type="date" class="form-control" id="exampleInputDate" name="tanggalResep">
                            </div>
                          <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Cooking Estimates</legend>
                            <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="waktuResep" id="gridRadios1" value="< 60 Menit" checked>
                                <label class="form-check-label" for="gridRadios1">
                                < 60 menit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="waktuResep" id="gridRadios2" value="> 60 Menit">
                                <label class="form-check-label" for="gridRadios2">
                                > 60 menit
                                </label>
                            </div> 
                            </div>
                        </fieldset>
                        <div class="form-group">
                          <label for="exampleSelectCategory">Category</label>
                          <select class="form-control" id="exampleSelectCategory" name="kategoriResep">
                            <?php 
                              include('koneksi.php');
                              
                              // Perintah menampilkan daftar kategori resep
                              $sql = mysqli_query($koneksi, "SELECT kategori_id, kategori_nama FROM kategori_resep ORDER BY kategori_id ASC");
                              
                              while ($row = mysqli_fetch_array($sql)) {
                                $kategori_id = $row['kategori_id'];
                                $kategori_nama = $row['kategori_nama'];
                                echo "<option value='$kategori_id'>" . $kategori_nama . "</option>";
                              }
                            ?>
                          </select>
                        </div><br/>
                        <button type="submit" class="btn btn-primary mr-2" name="kirim" value="Simpan">Submit</button>
                        <button type="reset" class="btn btn-primary mr-2">Cancel</button>
                            <br/>
                          </form><br/>
            
                      <?php
                        include ('koneksi.php');

                        if (isset ($_POST['kirim'])) {
                            include ('koneksi.php');

                            /*Kiriman Data*/
                            $gambar_resep = basename($_FILES["fileGambar"]["name"]);
                            $judul_resep = $_POST['judulResep'];
                            $deskripsi_resep = $_POST['deskripsiResep'];
                            $bahan_resep = $_POST['bahanResep'];
                            $langkah_resep = $_POST['langkahResep'];
                            $tanggal_resep = $_POST['tanggalResep'];
                            $waktu_resep = $_POST['waktuResep'];
                            $kategori_resep = $_POST['kategoriResep'];

                            $target_dir = "image-posted/";
                            $target_file = $target_dir . basename($_FILES["fileGambar"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                              echo "Maaf, file Anda tidak sesuai. ";
                              $uploadOk = 0;
                            }
                            if ($uploadOk == 0) {
                              echo "Maaf, file Anda gagal diupload.";
                            } else {
                              if (move_uploaded_file($_FILES["fileGambar"]["tmp_name"], $target_file)) {
                                echo "Berhasil diupload.";
                              } else {
                                echo "Maaf, gagal diupload.";
                              }
                            }

                            if ($uploadOk == 1) {
                              /*MMengirim Data ke Database*/
                              $sql = mysqli_prepare($koneksi, "INSERT INTO katalog_resep (resep_gambar, resep_judul, resep_deskripsi, 
                              resep_bahan, resep_langkah, resep_tanggal, resep_waktu, kategori_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

                              if ($sql) {
                                  mysqli_stmt_bind_param($sql, "sssssssi", $gambar_resep, $judul_resep, $deskripsi_resep, $bahan_resep, 
                                  $langkah_resep, $tanggal_resep, $waktu_resep, $kategori_resep);
                              
                                  if (mysqli_stmt_execute($sql)) {
                                      echo "Data berhasil ditambahkan ke database.";
                                  } else {
                                      echo "Gagal menambahkan data ke database: " . mysqli_error($koneksi);
                                  }
                              
                                  mysqli_stmt_close($sql);
                              } else {
                                  echo "Kesalahan dalam persiapan pernyataan: " . mysqli_error($koneksi);
                              }
                            }
                            }
                        ?>
                       </div>
                     </div>
                  </div>
                </div>
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