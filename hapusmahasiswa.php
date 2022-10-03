<?php
include_once ("koneksi.php");
$id=$_GET['id'];
$query="delete from tb_sisteminformasi where no_mhs=$id";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:tambahdata.php');
}else {
echo "Hapus Data Gagal";
}