<?php
include '../isi/barang/koneksi.php';

if (isset($_GET['id'])) {
    header('Location: pegawai.php');
}

$id_peg = $_GET['id_pegawai'];

$sql = "DELETE FROM pegawai WHERE id_pegawai='$id_peg'";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    header('Location: pegawai.php');
}else{
    header('Location: hapus.php?status=gagal');  
}

?>