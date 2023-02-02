<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Regisztráció</title>
</head>

<style>
    body{
        background-color: rgb(156, 168, 201);

    }

</style>

<body>
    <h1 align-items: center>Regisztráció</h1>

    <div class="container">
        <form>

                <form>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Vezetéknév">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Keresztnév">
                            </div>
                        </div>
            </form>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
    </div>  
</body>
</html>