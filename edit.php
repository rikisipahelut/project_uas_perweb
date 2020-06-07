<?php 
require'functions.php';
$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT jumlah FROM pesanan WHERE id=$id");
$result = mysqli_fetch_assoc($sql);

if (isset($_POST['submit'])) {
  // var_dump($_POST);
	if(ubah($_POST,$id) > 0){
		header('Location:details.php');
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

                <div class="row mt-5">
                  <div class="col-md-12 text-center">
                    <img src="" alt="">
                    <h1>Edit Order</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 offset-4">
                   	
                   	<form class="form-block" method="post">
          					  <div class="form-group mx-sm-3 mb-2">
          					     <input type="number" name="jumlah" class="form-control" id="inputPassword2" placeholder="Quantity" value="<?=$result['jumlah'];?>">
          					  </div>
          					  <button type="submit" name="submit" class="btn btn-primary ml-3">Ubah</button>
          					</form>

                               
              		</div>
              	</div>
              <!-- endmenu -->

            </div>
          </div>
        </div>

    <!-- endjumbotron -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
  </body>
</html>