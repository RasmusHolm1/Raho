<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Uppgift 3</title>
    <style>
    .nav-link{
        color: white;
    }
    img{
      width: auto;
      height: 200px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Startsida</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Produkter</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
</ul>
</nav>

<div class="container" class="alert alert-success" role="alert">
<h1 class="display-3">Välkommen!</h1>

<h2>Produkter</h2>

<div class="card-deck">
<?php 
    include 'getapi.php';
?>
</div>
</div>







</body>
</html>