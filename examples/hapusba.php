<?php
include '../isi/barang/koneksi.php';

if (isset($_GET['id'])) {
    header('Location: barang.php');
}

$id_bar = $_GET['id_barang'];

$sql = "DELETE FROM barang WHERE id_barang='$id_bar'";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    header('Location: barang.php');
}else{
    header('Location: hapus.php?status=gagal');  
}

?>