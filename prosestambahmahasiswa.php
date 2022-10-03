<?php
include_once("koneksi.php");
$npm = $_POST['npm'];
$nama= $_POST['nama'];
$kelas= $_POST['kelas'];
$domisili= $_POST['domisili'];

$query="INSERT INTO tb_sisteminformasi
(npm,nama,kelas,domisili) VALUE
('$npm','$nama','$kelas','$domisili')";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:tambahdata.php');
} else {
echo "input data gagal";
}
?>