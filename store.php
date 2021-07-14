<?php
include './config.php';

$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$dis = (10/100)*$_POST['harga'];
$diskon =$_POST['harga']-$dis;

mysqli_query($koneksi,"insert into tokobuku values(NULL,'$nama','$kategori','$penerbit','$harga','$diskon')");

header("location:./home.php");
