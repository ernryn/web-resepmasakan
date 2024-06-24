<?php
include "koneksi.php";
$id = $_GET['resep_id'];

$sql = "DELETE FROM katalog_resep WHERE resep_id='$id'";
$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("location: katalog.php?success=1");
} else {
    header("location: katalog.php?error=1");
}

?>

