<?php
include 'koneksi.php';
if(isset($_POST['simpan'])) {
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$sql = "INSERT INTO barang (id_barang, nama_barang, stok,) VALUES ('$id_barang', '$nama_barang', '$stok',)";
$query = mysqli_query($connect, $sql);
if ($query) {
    header('Location: ../examples/barang.php');
}else{
    header('Location: simpan.php?status=gagal');
}
}
?>