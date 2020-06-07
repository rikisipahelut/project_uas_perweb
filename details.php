<?php 
require'functions.php';
$result=select();

if (isset($_POST["submit3"])) {
  // var_dump($_POST);
  if (order($_POST) > 0) {
    echo "<script>alert('Order Berhasil')</script>";
  }else echo "<script>alert('Order gagal')</script>";

}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      .jumbotron{
        background-image: url("img/9.jpg");
        /*height: 500px;*/
        background-position: left bottom right bottom;
        background-repeat: no-repeat, repeat;
      }
     /* .bg-light {
        opacity: 0.5;
        filter: alpha(opacity=100); /* For IE8 and earlier */
      }*/
    </style>

    <title>details</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">cfood restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="details.php">Details Order</a>
            <a class="nav-item nav-link" href="#">Login</a>
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- endnavbar -->

    <!-- jumbotron -->

     <div class="row">
        <div class="col-md-12">
          <div class="jumbotron jumbotron-fluid mt-0">
            <div class="container">
              <h1 class="display-4 text-light">Welcome <span>cfooders</span></h1>
              <p class="lead text-light">you can order any Seafood in this page,Enjoy</p>

              <!-- menu -->
              <div class="container text-light">

                <div class="row">
                  <div class="col-md-10 offset-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Atas Nama Pesanan
                    </button>
                    <!-- end Button Triger -->
                  </div>
                </div>
                  

                <div class="row mt-5">
                  <div class="col-md-12 text-center">
                    <img src="" alt="">
                    <h1>Details Order</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-10 offset-1">
                    <table class="table text-light">
                    <tr>
                      <th>Id</th>
                      <th>Nama Pesanan</th>
                      <th>Quanity</th>
                      <th>Aksi</th>
                    </tr>
                    <?php foreach ($result as $hasil):?>
                    <tr>
                      <td><?= $hasil["id"];?></td>
                      <td><?= $hasil['judul'];?></td>
                      <td><?= $hasil['jumlah'];?></td>
                      <td><a href="delete.php?id=<?php echo $hasil['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus')">delete</a> <a href="edit.php?id=<?= $hasil["id"];?>" class="btn btn-primary">Edit</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>

                    </table>

                    <form action="" method="post">
                      <input type="hidden" name="nama_pemesan" value="<?= $_POST["nama"];?>">
                      <input type="hidden" name="meja_pemesan" value="<?= $_POST["meja"];?>">
                      <input type="hidden" name="pesanan" value="
                       
                        <?php foreach ($result as $hasil):?>
                    <?= $hasil['judul'];?> :
                    <?= $hasil['jumlah'];?> ,
                
                        <?php endforeach; ?>
                      ">
                      <button type="submit" name="submit3" class="btn btn-success">Order All</button>
                    </form>
                   
                   
                  
                    
                  </div>
                </div>
                               
              </div>

              </div>
              <!-- endmenu -->

            </div>
          </div>
        </div>

    <!-- endjumbotron -->
           

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Data Pemesan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                             <form action="details.php" method="post">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Enter name" name="nama" required="">
                                </div>
                                <div class="form-group">
                                  <input type="number" min="0" max="20" class="form-control" id="table" placeholder="table number" name="meja" required="">
                                </div>                                      
                              
                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" name="submit2" class="btn btn-primary">Save changes</button>
                                </form>
                    </div>
                  </div>
                </div>
              </div>
             <!-- endmodal -->
            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
  </body>
</html>