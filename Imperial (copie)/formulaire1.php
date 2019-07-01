<!DOCTYPE html>
<html lang="en">

<head>
  <title>Insérer données</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="formulaire2.css">
  <script src="jquery.js" ></script>
</head>

<body>
  <div class="form">
    <h3 class="titre">Ajouter un étudiant</h3>
  <form action="" method="post">
      <p>Matricule :</p>
      <input type="text" name="matricule" id="matricule" placeholder="Entrer votre matricule" required>
      <p>Nom :</p>
      <input type="text" name="nom" id="nom" placeholder="Entrer votre nom" required >
      <p>Prénoms :</p>
      <input type="text" name="prenom" id="prenom" placeholder="Entrer votre prénom" required>
      <p>Adresse Email :</p>
      <input type="email" name="email" id="email" placeholder="Entrer votre email" required>
      <p>Telephone :</p>
      <input type="number" name="telephone" id="telephone" placeholder="Entrer votre numéro" required>
      <p>Date de naissance :</p>
      <input type="date" name="date_naissance" id="date" placeholder="Entrer votre date de naissance" required min="1989-12-31" value="YYYY-MM-JJ >
    
    
    
    <!--   boutton checkbox et radio     -->
    <div class="form-check" id="boursier"><br>
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
      <label class="form-check-label" for="exampleRadios1">
        Boursier
      </label>
    
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
      <label class="form-check-label" for="exampleRadios2">
        Non Boursier
      </label>

      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
      <label class="form-check-label" for="exampleRadios3">
        Loge
      </label>

      <button type="submit" name="ajouter" value="">Enregistrer</button>

    </div>

    </form>
  </div>

  <?php
  include('index.html');

  //include_once('connexion1.php');
  include_once('etudiantservice.php');
  include_once('etudiant.php');

  if (isset($_POST['ajouter'])) {
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['email'];
    $telephone = $_POST['telephone'];
    $date_naissance = $_POST['date_naissance'];
    $base = new PDO("mysql:host=localhost;dbname=Etudiant", 'root', 'kimora24');
    $pl = new Etudiant($matricule, $nom, $prenom, $mail, $telephone, $date_naissance);
    $etuservice = new EtudiantService($base);
    $etuservice->add($pl);
  }






  ?>


</body>

</html>