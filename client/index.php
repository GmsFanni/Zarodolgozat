<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>HUTOURS</title>
</head>
<body>
        <div class="header">
            <img src="hutourslogo.png" alt="Logo" title="Logo" style="height:200px;">
        </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Rólunk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?prog=fooldal.php">Helyszínek</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?prog=fooldal.php">Írj nekünk!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?prog=fooldal.php">Foglalások</a>
      </li>
      
     
    </ul>
        <div class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#staticBackdrop">Bejelentkezés</button>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="modal" data-target="#staticreg">Regisztráció</button>
        </div>

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="bi bi-person-circle"></i>Bejelentkezés</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email cím</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Jelszó</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn-secondary" >Belépés</button>
                                <a href="javascript: void(0)">Elfelejtett Jelszó?</a>
                            </div>
                        </div>
                </div>
            </div>
    </div>

    <div class="modal fade" id="staticreg" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="bi bi-person-circle"></i>Regisztráció</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email cím</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Jelszó</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn-secondary" >Belépés</button>
                                <a href="javascript: void(0)">Elfelejtett Jelszó?</a>
                            </div>
                        </div>
                </div>
            </div>
    </div>









    
  </div>
    </nav>

    <div class="container">
      <!--az URL-ben kapott program betöltése-->
      <?php
      //php logika-routingolás
      extract($_GET);
      if(isset($prog))
      include $prog;

      else

      include "fooldal.php";
      ?>
    </div>
</body>
</html>