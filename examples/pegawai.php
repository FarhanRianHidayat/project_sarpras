<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
include '../isi/barang/koneksi.php';
?>
<?php
$host ="localhost";
$user ="root";
$password ="";
$database ="sarprass";
$connect =mysqli_connect($host,$user,$password,$database) or die ("Gagal Menghubungkan");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <a href="dashboard.php"><img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="..."></a>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="peminjaman.php">
                <i class="ni ni-collection text-orange"></i>
                <span class="nav-link-text">Barang pinjam</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="barang.php">
                <i class="ni ni-basket text-primary"></i>
                <span class="nav-link-text">Barang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="pegawai.php">
                <i class="ni ni-single-02 text-default"></i>
                <span class="nav-link-text">Pegawai</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="peminjam.php">
                <i class="ni ni-circle-08 text-green"></i>
                <span class="nav-link-text">Peminjam</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
              aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
              <!-- Dropdown header -->
              <!-- List group -->

              <!-- View all -->
              <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
            </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/lerstek.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-0">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Pegawai</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
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
            <form action="pegawai.php" method="post">
              <div class="form-group">
                <label>Id pegawai :</label>
                <input type="text" class="form-control" name="id_peg"><br>
                <label>Nama pegawai :</label>
                <input type="text" class="form-control" name="nama"><br>
                <label>Email :</label>
                <input type="text" class="form-control" name="email"><br>
                <label>No telepon :</label>
                <input type="text" class="form-control" name="tel"><br>
                <button class="btn btn-outline-success mt-4" name="simpan" value="simpan">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#tambahModal"><b>[+]
        Data</b></button>
    <tbody>
      <?php
      include('../isi/pegawai/koneksi.php');
      if(isset($_POST['simpan'])) {
$id_peg = $_POST['id_peg'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$datas = mysqli_query($koneksi, "insert into pegawai (id_pegawai,nama_pegawai,email,no_telepon)values('$id_peg', '$nama', '$email', '$tel')") or die(mysqli_error($koneksi));
echo "<script>alert('data berhasil disimpan.');window.location='pegawai.php';</script>";
}
      ?>
  <?php
      include('../isi/pegawai/koneksi.php');
     if (isset($_POST['edit'])) {
    $id_peg = $_POST['id_peg'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $datas = mysqli_query($koneksi, "UPDATE pegawai SET nama_pegawai='$nama' , email='$email' , no_telepon='$tel' WHERE id_pegawai='$id_peg'") or die(mysqli_error($koneksi));
    echo "<script>alert('data berhasil disimpan.');window.location='pegawai.php';</script>";

}
  ?>

    <div class="container">
      <table class="table mt-2">
        <thead>
          <tr border="6">
            <th scope="col">Id pegawai</th>
            <th scope="col">Nama pegawai</th>
            <th scope="col">Email</th>
            <th scope="col">No telepon</th>
          </tr>
        </thead>
      <?php
    //query untuk menampilkan data
    $sql ="SELECT * FROM pegawai";
    $query =mysqli_query($koneksi,$sql);
        //ambil semua data dari table
    while($peg =mysqli_fetch_array($query)){
    ?>


      <tr>
        <td><?php echo $peg['id_pegawai']; ?></td>
        <td><?php echo $peg['nama_pegawai']; ?></td>
        <td><?php echo $peg['email']; ?></td>
        <td><?php echo $peg['no_telepon']; ?></td>
        <td>
          <a href="" type="button" class="btn btn-warning" data-toggle="modal"
            data-target="#editModal<?php echo $peg['id_pegawai']; ?>">Edit</a>
          <?php echo "<a class='btn btn-danger' data-toggle='modal' data-target='#konfirmasi_hapus' data-href='hapuspe.php?id_pegawai=".$peg['id_pegawai']."'>Hapus</a>"; ?>
          <div class="modal fade" id="editModal<?php echo $peg['id_pegawai']; ?>" tabindex="-1" role="dialog"
            aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Data Barang</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="pegawai.php" method="post">
                    <div class="form-group">
                      <input type="hidden" name="" value="<?php echo $peg['id_pegawai']?>" />
                      <label>Id pegawai</label>
                      <input type="text" class="form-control" name="id_peg" value="<?php echo $peg['id_pegawai']?>">
                      <label>Nama pegawai</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $peg['nama_pegawai']?>">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="<?php echo $peg['email']?>">
                      <label>No telepon</label>
                      <input type="text" class="form-control" name="tel" value="<?php echo $peg['no_telepon']?>">
                      <button class="btn btn-outline-success mt-4" name="edit" value="simpan">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                  <a class="btn btn-danger btn-ok"> Hapus</a>
                  <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i>
                    Batal</button>
                </div>
              </div>
            </div>
          </div>

        </td>
      </tr>
          </div>
      <?php } ?>
    </tbody>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
      //Hapus Data
      $(document).ready(function () {
        $('#konfirmasi_hapus').on('show.bs.modal', function (e) {
          $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
      });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    

    <!-- Footer 
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative
              Tim</a>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link"
                target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    -->
  </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>