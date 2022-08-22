<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_bar = $_POST['id_bar'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];

    $sql = "UPDATE barang SET nama_barang='$nama',stok='$stok' where id_barang='$id_bar'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: .../examples/barang.php');
    }else{
    header('Location: edit.php?status=gagal');
    }
}
?>