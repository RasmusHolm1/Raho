<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="webb.css">
    <title>Uppgift 3</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark justify-content-end">
  <!-- Navbar content -->
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="webb.php">Startsida</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Produkter</a>
  </li>
</ul>
</nav>

<div class="kontainer alert1 alert-success2" role="alert">
<h1 class="display-3">Välkommen till vår webbshop!</h1>

<h2>Produkter:</h2>
<form action="#" method="GET"> 
        Antal produkter: <br>
        <input type="text" name="limit"> 
        <input type="submit" value="Visa" class="submitbtn">
    </form>


    <?php include 'getapi.php'; ?>

<footer> &copy; Rasmus och Stina - Backend 2019</footer>
</div>
</body>
</html>