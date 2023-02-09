<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
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
        <a class="nav-link" href="index2.php?prog=home2.php">Helyszínek</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.php?prog=home2.php">Helyszínek</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.php?prog=home2.php">Helyszínek</a>
      </li>
      
     
    </ul>
    
        <div class="d-flex align-items-center justify-content-between">
                <a class="btn btn-outline-success" type="button"  href="index.php?prog=login.php">Belépés</a>
                <a class="btn btn-sm btn-outline-secondary" type="button" href="index.php?prog=register.php">Regisztráció</a>
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

      include "home2.php";
      ?>
    </div>
    
</body>
</html>