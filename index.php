<?php 
require'functions.php';
if (isset($_POST["submit"])&& isset($_POST["judul"])) {
    if (insert($_POST)>0) {
      echo "<script>alert('berhasil');</script>";
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

    <title>cfood.com!</title>
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
            <a class="nav-item nav-link" href="details.php">Details Order <span class="badge badge-danger"><?php echo count(select()); ?></span></a>
            <a class="nav-item nav-link disabled" href="">Welcome User</a>
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
            <form action="" method="post">
              <button type="submit" name="submit" class="btn btn-success">Order</button>
             

              <!-- menu -->
             
              <div class="container text-light">
                <div class="row mt-5">
                  <div class="col-md-12 text-center">
                    <!-- <img src="" alt=""> -->
                    <h1>Main Menu</h1>
                  </div>
                </div>

                <!--  -->
                <div class="row mt-5">
                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/1.jpg" id="img1" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                    <input type="hidden" class="input">
                    <input type="hidden" class="judul" value="marlin rosted">
                    <label for="img1"><h4 class="makanan">Marlin Rosted</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/2.jpg" id="img2" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                    <input type="hidden" class="input">
                    <input type="hidden" class="judul" value="pangsit seafood">
                    <label for="img2"><h4>Pangsit Seafood</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/5.jpg" id="img5" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                     <input type="hidden" class="judul" value="fried shrimp rice">
                    <label for="img5"><h4>fried shrimp rice </h4></label>
                  </div>
                </div>

                 <div class="row mt-5">
                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/6.jpg" id="img6" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Salad Italy">
                    <label for="img6"><h4>Salad Italy</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/7.jpg" id="img7" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Salad Seafood">
                    <label for="img7"><h4>Salad Seafood</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/8.jpg" id="img8" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="pancoockey">
                    <label for="img8"><h4>pancoockey</h4></label>
                  </div>
                </div>

                <div class="row mt-5">
                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/10.jpg" id="img10" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Shrimp Spagety">
                    <label for="img10"><h4>Shrimp Spagety</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/11.jpg" id="img11" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="cockle shells">
                    <label for="img11"><h4>cockle shells</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/12.jpg" id="img12" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Blue Tuna">
                    <label for="img12"><h4>Blue Tuna</h4></label>
                  </div>
                </div>


                <div class="row mt-5">
                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/13.jpg" id="img13" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Shrimp pacoy">
                    <label for="img13"><h4>Shrimp pacoy</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/14.jpg" id="img14" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Spagety Baby Shrimp">
                    <label for="img14"><h4>Spagety Baby Shrimp</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/15.jpg" id="img15" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Squid Sop">
                    <label for="img15"><h4>Squid Sop</h4></label>
                  </div>
                </div>


                <div class="row mt-5">
                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/16.jpg" id="img16" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Friend fries">
                    <label for="img16"><h4>Friend fries</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/17.jpg" id="img17" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                    <input type="hidden" class="input">
                      <input type="hidden" class="judul" value="Sate Tuna">
                    <label for="img17"><h4>Sate Tuna</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/18.jpg" id="img18" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="chiken rosted">
                    <label for="img18"><h4>chiken rosted</h4></label>
                  </div>
                </div>

                  <div class="row mt-5">
                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/19.jpg" id="img19" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                    <input type="hidden" class="input">
                      <input type="hidden" class="judul" value="Crab Sop">
                    <label for="img19"><h4>Crab Sop</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/20.jpg" id="img20" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Purple Jus">
                    <label for="img20"><h4>Purple Jus</h4></label>
                  </div>

                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/21.jpg" id="img22" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Orange Jus">
                    <label for="img22"><h4>Orange Jus</h4></label>
                  </div>

                  <div class="row mt-5">
                  <div class="col-md-4 text-center menu">
                    <img src="img/5xm/22.jpg" id="img22" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden" class="input">
                       <input type="hidden" class="judul" value="Strobery Jus">
                    <label for="img22"><h4>Strobery Jus</h4></label>
                  </div>

                  <div class="col-md-4 text-center offset-2 menu">
                    <img src="img/5xm/23.jpg" id="img23" width="300" alt="" class="rounded-circle shadow-sm p-1 mb-2 bg-white rounded">
                     <input type="hidden"  class="input">
                       <input type="hidden" class="judul" value="Lemon Jus">
                    <label for="img23"><h4>Lemon Jus</h4></label>
                  </div>

                 
                </div>

              </div>
              <!-- endmenu -->

              <!-- Modal -->
              
                  </form>
             </div>













            </div>
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
    <script src="js/events.js"></script>
  </body>
</html>