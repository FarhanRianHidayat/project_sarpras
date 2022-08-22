<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="modal fade" id="tambahModal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Input Data Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="simpan.php" method="post">
                        <div class="form-group">
                        <label>Id barang :</label>
                        <input type="text" class="form-control" name="id_bar"><br>
                        <label>Nama barang :</label>
                        <input type="text" class="form-control" name="nama"><br>
                        <label>Stok :</label>
                        <input type="text" class="form-control" name="stok"><br>
                        <button class="btn btn-outline-success mt-4" name="simpan" value="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <button type="button" class="btn btn-primary mt-3" data-toggle="modal"
                    data-target="#tambahModal"><b>[+] Data</b></button>
    

    <div class="container">
    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">Id barang</th>
            <th scope="col">Nama barang</th>
            <th scope="col">Stok</th>
        </tr>
        </thead>
    </div>
    <tbody>
    <?php
    //query untuk menampilkan data
    $sql ="SELECT * FROM barang";
    $query =mysqli_query($connect,$sql);
        //ambil semua data dari table
    while($bar =mysqli_fetch_array($query)){
    
    ?>
    

        <tr>
        <td><?php echo $bar['id_barang']; ?></td>
        <td><?php echo $bar['nama_barang']; ?></td>
        <td><?php echo $bar['stok']; ?></td>
        <td>
        <a href="" type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?php echo $bar['id_barang']; ?>">Edit</a>
        <?php echo "<a class='btn btn-danger' data-toggle='modal' data-target='#konfirmasi_hapus' data-href='hapus.php?id_barang=".$bar['id_barang']."'>Hapus</a>"; ?>
    <div class="modal fade" id="editModal<?php echo $bar['id_barang']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="edit.php" method="post">
                    <div class="form-group">
                    <input type="hidden" name="" value="<?php echo $bar['id_barang']?>"/>
                    <label>Id barang</label>
                    <input type="text"  class="form-control" name="id_bar" value="<?php echo $bar['id_barang']?>">
                    <label>Nama barang</label>
                    <input type="text"  class="form-control" name="nama" value="<?php echo $bar['nama_barang']?>">
                    <label>Stok</label>
                    <input type="text"  class="form-control" name="nama" value="<?php echo $bar['stok']?>">
                    <button class="btn btn-outline-success mt-4" name="simpan" value="simpan">Simpan</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

        <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                    <a class="btn btn-danger btn-ok"> Hapus</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>

        </td>
        </tr>
    <?php } ?>
    </tbody>
    </table>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
//Hapus Data
    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>
</html>