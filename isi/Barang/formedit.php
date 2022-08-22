<html>
    <head>
        <title>Tabel Barang</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <form action="simpan.php" method="POST">
            <div class="container">
                <h3 class="border-bottom mt-3 mb-3">Input data Barang</h3>
            <div class="form-group">
                <label>ID Barang</label>
                <input type="text" class="form-control" name="id_barang">
              </div>
              <div class="form-group">
                <label> Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang">
              </div>
              <div class="form-group">
                <label>Stok</label>
                <input type="text" class="form-control" name="stok">
              </div>
        </form>
    </body>
</html>