<?php
include '../isi/barang/koneksi.php';

if (isset($_GET['id'])) {
    header('Location: peminjam.php');
}

$id_peg = $_GET['id_pengguna'];

$sql = "DELETE FROM pengguna WHERE id_pengguna='$id_peg'";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    header('Location: peminjam.php');
}else{
    header('Location: hapus.php?status=gagal');  
}

?>