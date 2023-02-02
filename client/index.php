<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilus.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>HUTours</title>
</head>
<body>
  
  
    <div class="header">
            <img src="hutourslogo.png" alt="Logo" title="Logo" style="height:200px;">
    </div>


    <div class="navbar">
        <a href="index.php?prog=home2.php">Főoldal</a>
        <a href="index.php?prog=semmi.php">Helyszínek</a>
        <a href="#">Rólunk</a>
        <a href="#">Írj nekünk!</a>
        <a href="#">Írj nekünk!</a>

        <div class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#staticBackdrop">Bejelentkezés</button>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="modal" data-target="#staticreg">Regisztráció</button>
        </div>
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


    <div class="modal fade" id="staticreg" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="bi bi-person-lines-fill"></i></i> Regisztráció</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                         <div class="modal-body">
                         <div class="row modal-body">

                                <div class="col-5 d-flex align-items-center justify-content-center">
                                <input type="text" class="form-control" placeholder="Vezetéknév">
                                </div>
                                <div class="col-5 d-flex align-items-center justify-content-between">
                                <input type="text" class="form-control" placeholder="Keresztnév">
                                </div>
                        </div>


                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email cím">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jelszó">
                            </div>

                            
                            <div class="form-group">
                                <label for="formGroupExampleInput">Cím</label>
                                
                            <div class="col-5 d-flex align-items-center justify-content-center">
                            <input type="text" class="form-control" placeholder="Irányítószám">
                            </div>
                            <div class="col-5 d-flex align-items-center justify-content-center">
                            <input type="text" class="form-control" placeholder="Utca">
                            </div>

                            <div class="col-5 d-flex align-items-center justify-content-center">
                            <input type="text" class="form-control" placeholder="Házszám">
                            </div>
                            
                            </div>

                            <div class="col-5 d-flex align-items-center justify-content-center">
                            <input type="text" class="form-control" placeholder="Telefonszám">
                            </div>
                        



                            <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Szeretnél hírlevélre feliratkozni?</label>
                            </div>

                            <div class="d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn-secondary" >Belépés</button>
                                <a href="javascript: void(0)">Elfelejtett Jelszó?</a>
                            </div>
                        </div>

                        
                </div>
            </div>
    </div>


  
    <div class="container">
      <!--az URL-ben kapott program betöltése-->
      <?php
      //php logika-routingolás
      extract($_GET);
      if(isset($prog))
      include $prog;

      else

      include "home2.php";
      ?>
    </div>
  

</body>
</html>


