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