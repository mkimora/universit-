<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="formulaire1.css">
  <title>Retrouver un étudiant</title>
</head>

<body>

<form action="" method="post">
    <!-- <div class="form-group">
      <input type="text" class="form-control" placeholder="Entrer Matricule" name="matricule" required>
    </div> -->

    <div class="search-box">
    <input class="search-txt" type="text" placeholder="Type to search" name="retrouver">
    <label for="matricule" name="matricule">Matricule:</label>
    <a class="search-btn" href="retrouver.php">
<i class="fas fa-search"></i>
    </a>
  </div>


  </form>
  <!-- <button type="submit" name="retrouver" class="btn btn-danger">Rechercher</button> -->

  </div>

  <?php
  include('index.html');
  include_once('etudiantservice.php');
  include_once('etudiant.php');


  if (isset($_POST["retrouver"])) {
    $matricule = $_POST["matricule"];
    $base = new PDO("mysql:host=localhost;dbname=Etudiant", 'root', 'kimora24');
    $pl = new Etudiant($matricule);
    $etuservice = new EtudiantService($base);
    $etuservice->find($pl);
  }

  echo ' <div class="container"> 
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Matricule</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Email</th>
      <th>Telephone</th>
      <th>Date_naissance</th>
    </tr>
  </thead>
  <tbody>';






  ?>
</body>

</html>