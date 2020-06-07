<?php session_start();
require'functions.php';
if (!isset($_SESSION["login"])) {
  header('Location:login.php');
  exit;
}

$sql=mysqli_query($conn,"SELECT * FROM dapur");
$tampung=[];
while ($result= mysqli_fetch_assoc($sql)) {
  $tampung[]=$result;
}
// var_dump($tampung);
if (isset($_GET["id"])) {
 if (status_pesan($_GET)>0) {
    echo "<script>alert('Cek Berhasil')</script>";
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/project_uas_perweb/dasbor.php">';

 }else  echo "<script>alert('Gagal')</script>";
}
if (isset($_POST["submit"])) {
  if (hapus_cek()>0) {
     echo "<script>alert('hapus-cek Berhasil')</script>";
     echo '<meta http-equiv="refresh" content="0;url=http://localhost/project_uas_perweb/dasbor.php">';
  }
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Dasbor</title>
    <style>
      #logout{
        margin-left: 600px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="dasbor.php">cfood restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="dasbor.php">Home <span class="sr-only">(current)</span></a>
          <!--   <a class="nav-item nav-link" href="details.php">Details Order</a> -->
            <a class="nav-item nav-link" href="#">Welcome admin</a>
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            <a class="nav-item nav-link" id="logout" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- endnavbar -->

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center mt-3">Daftar Pesanan</h1>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-md-12">
               <table class="table text-dark text-center">
                    <tr>
                      <th>Id</th>
                      <th>Nama Pesanan</th>
                      <th>No_Meja</th>
                      <th>Pesanan</th>
                      <th>Cek</th>
                      <th>Status</th>
                    </tr>
                   
                    <?php foreach ($tampung as $tampungan):?>
                    <tr>
                      <td><?= $tampungan["id"];?></td>
                      <td><?= $tampungan['nama_pemesan'];?></td>
                      <td><?= $tampungan['no_meja'];?></td>
                      <td><?= $tampungan['pesanan'];?></td>
                      <td><a href="dasbor.php?id=<?= $tampungan["id"];?>"><button class="btn btn-success">Cek</button></a></td>
                      <td><?= $tampungan['status'];?></td>
                    </tr>
                    <?php endforeach; ?>

               </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <form action="" method="post">
            <button class="btn btn-danger" name="submit" onclick="return confirm('Yakin Hapus')">Hapus Cek</button>
          </form>   
        </div>
      </div>
    </div>
    


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>