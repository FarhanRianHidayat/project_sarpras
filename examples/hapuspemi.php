<?php
include '../isi/barang/koneksi.php';

if (isset($_GET['id'])) {
    header('Location: peminjaman.php');
}

$id_pem = $_GET['id_peminjaman'];

$sql = "DELETE FROM peminjaman WHERE id_peminjaman='$id_pem'";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    header('Location: peminjaman.php');
}else{
    header('Location: hapus.php?status=gagal');  
}

?>