<?php 
session_start();
require'functions.php';
if (isset($_POST["submit"])) {
  if ($_POST["username"]==null or $_POST["password"]==null) {
    echo "<script>alert('Mohon masukkan login dan password Anda dengan lengkap!');</script>";
  }else{
    if (login($_POST)==false) {
    echo "<script>alert('Login gagal! Mohon cek kembali login dan password Anda!');</script>";
    }else{
      echo "<script>alert('Login Berhasil Dilakukan, Silakan gunakan system ini dengan baik.');</script>";
    }
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

    <title>login</title>
  </head>
  <body>
   
    <div class="container">
       <h1 class="text-center mt-5">cfood restaurant</h1>
           <div class="row">
              <div class="col-md-4 offset-4">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required="" placeholder="Password" name="password">
                  </div>
                 
                  <button type="submit" name="submit" class="btn btn-primary">Log in</button>
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