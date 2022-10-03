<?php
include_once("koneksi.php");

$nama = $_POST['nama'];
$npm= $_POST['npm'];
$kelas= $_POST['kelas'];
$domisili= $_POST['domisili'];
$query = "UPDATE tb_sisteminformasi SET nama='$nama',kelas='$kelas',domisili='$domisili' WHERE npm='$npm'";
$hasil=mysqli_query($conn,$query);

if ($hasil) {
header('location:tambahdata.php');
} else {
echo "Update data gagal";
}
?>