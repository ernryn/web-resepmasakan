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
    <title>cookIngl - Recipe Edit</title>
    <!--    Favicons-->
    <link rel="icon" type="image/png" sizes="32x32" href="image/logo.png">
    <meta name="theme-color" content="#ffffff">
    <!--    Stylesheets-->
    <link href="css/theme.css" rel="stylesheet" />/>
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
                <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6" style="padding-top: 30px;">Update My Recipe</h5>
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
                      <?php 
                        include ('koneksi.php');

                        $id = "";
                        $gambar_resep = "";
                        $judul_resep = "";
                        $deskripsi_resep = "";
                        $bahan_resep = "";
                        $langkah_resep = "";
                        $tanggal_resep = "";
                        $waktu_resep = "";
                        $kategori_resep = "";

                        if (isset($_GET['resep_id'])){ 
                          $id=$_GET['resep_id']; 
                          $sql_edit=mysqli_query($koneksi,"SELECT * FROM katalog_resep WHERE resep_id='$id'");
                          while ($data=mysqli_fetch_array($sql_edit)){
                              $gambar_id = $data['resep_id'];
                              $gambar_resep = $data['resep_gambar'];
                              $judul_resep = $data['resep_judul'];
                              $deskripsi_resep = $data['resep_deskripsi'];
                              $bahan_resep = $data['resep_bahan'];
                              $langkah_resep = $data['resep_langkah'];
                              $tanggal_resep = $data['resep_tanggal'];
                              $waktu_resep = $data['resep_waktu'];
                              $kategori_resep = $data['kategori_id'];
                          }
                        }
                      ?>
                      <form class="forms-sample" action="edit-resep.php" method="POST" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-12">
                        <h4 class="card-title">Recipe Edit Box</h4>
                        <p cla ss="card-description">
                        Will you update this recipe?
                        </p>
                        </div>
                    </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Recipe Id</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="idResep" name="idResep" value="<?php echo $id ?>" readonly="readonly">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Recipe Image</label>
                        <div class="col-sm-10">
                          <image width='200px' src='<?php echo "image-posted/".$gambar_resep ?>'>
                        </div>
                      </div>  
                      <div class="form-group">
                          <label for="exampleInputTitle">Title</label>
                          <input type="text" class="form-control" id="judulResep" name="judulResep" value="<?php echo $judul_resep ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Description</label>
                            <textarea class="form-control" id="deskripsiResep" rows="2" name="deskripsiResep"><?php echo $deskripsi_resep ?>
                        </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Tools and Materials</label>
                            <textarea class="form-control" id="bahanResep" rows="6" name="bahanResep"><?php echo $bahan_resep ?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea1">Step by Step</label>
                            <textarea class="form-control" id="langkahResep" rows="10" name="langkahResep"><?php echo $langkah_resep ?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputDate">Make a Recipe</label>
                            <input type="date" class="form-control" id="tanggalResep" name="tanggalResep" value="<?php echo $tanggal_resep ?>">
                            </div>
                          <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Cooking Estimates</legend>
                            <div class="col-sm-10">
                            <?php 
                              if ($waktu_resep=='< 60 Menit'){
                                echo "
                                <div class='form-check'>
                                  <input class='form-check-input' type='radio' name='waktuResep' id='gridRadios1' value='< 60 Menit' checked>
                                  <label class='form-check-label' for='gridRadios1'>
                                    < 60 Menit
                                  </label>
                                </div>
                                <div class='form-check'>
                                  <input class='form-check-input' type='radio' name='waktuResep' id='gridRadios2' value='> 60 Menit'>
                                  <label class='form-check-label' for='gridRadios2'>
                                    > 60 Menit
                                  </label>
                                </div>
                                ";
                              }
                              else
                              {
                                echo "
                                <div class='form-check'>
                                  <input class='form-check-input' type='radio' name='waktuResep' id='gridRadios1' value='< 60 Menit'>
                                  <label class='form-check-label' for='gridRadios1'>
                                    < 60 Menit
                                  </label>
                                </div>
                                <div class='form-check'>
                                  <input class='form-check-input' type='radio' name='waktuResep' id='gridRadios2' value='> 60 Menit' checked>
                                  <label class='form-check-label' for='gridRadios2'>
                                    > 60 Menit
                                  </label>
                                </div>
                                ";
                              }
                            ?>
                            </div>
                        </fieldset>
                                    <div class="form-group">
                                        <label for="exampleSelectCategory">Category</label>
                                        <select class="form-control" id="exampleSelectCategory" name="kategoriResep">
                                        <?php
                                        include('koneksi.php');

                                        // Ambil ID kategori dari resep yang sedang diedit
                                        $selected_kategori_id = $kategori_resep;

                                        // Perintah menampilkan daftar kategori resep
                                        $sql = mysqli_query($koneksi, "SELECT kategori_id, kategori_nama FROM kategori_resep ORDER BY 
                                        kategori_id ASC");

                                        while ($row = mysqli_fetch_array($sql)) {
                                            $kategori_id = $row['kategori_id'];
                                            $kategori_nama = $row['kategori_nama'];

                                            // Cek apakah kategori ini dipilih (sama dengan kategori yang terkait dengan resep yang sedang diedit)
                                            $selected = ($kategori_id == $selected_kategori_id) ? 'selected' : '';

                                            echo "<option value='$kategori_id' $selected>" . $kategori_nama . "</option>";
                                        }
                                        ?>
                                        </select>
                                    </div><br>
                                    <button type="reset" class="btn btn-primary mr-2">Cancel</button>
                                    <button type="submit" class="btn btn-primary mr-2" name="kirim" value="Simpan">Edit</button>
                                    <div class="collapse" id="ui-basic">
                                    <br/>
                                </form><br/>
                        
                      <?php
                        /*Mengecek apabila tombol Tambahkan diklik*/
                        if (isset ($_POST['kirim'])) {
                            /*Menerima dan Menampung data*/
                            $id_resep = $_POST['idResep'];
                            $judul_resep = $_POST['judulResep'];
                            $deskripsi_resep = $_POST['deskripsiResep'];
                            $bahan_resep = $_POST['bahanResep'];
                            $langkah_resep = $_POST['langkahResep'];
                            $tanggal_resep = $_POST['tanggalResep'];
                            $waktu_resep = $_POST['waktuResep'];
                            $kategori_resep = $_POST['kategoriResep'];

                              /*Melakukan penyimpanan data*/
                              $sql=mysqli_query ($koneksi, "UPDATE katalog_resep SET resep_judul='$judul_resep',
                              resep_deskripsi='$deskripsi_resep', resep_bahan='$bahan_resep',resep_langkah='$langkah_resep', 
                              resep_tanggal='$tanggal_resep', resep_waktu='$waktu_resep', kategori_id='$kategori_resep'
                               WHERE resep_id='$id_resep'");
                              echo "<br><h5>Data resep berjudul <b><i>".$judul_resep."</b></i> berhasil diubah.</h5>";
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
    <!-- Main Seles -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>