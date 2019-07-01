<?php
include_once('etudiantservice.php');
//pour identifier les erreurs qui pourrez se produire sur cette instruction,nous utiliserons une structure try catch
try{
//créer une classe connexion pour faciliter la connexion avec la base de donnée Etudiant
$base = new PDO('mysql:host=localhost; dbname=Etudiant','root', 'kimora24');
}catch(exception $e){
die('Erreur '.$e->getMessage());
}
//nous allons indiquer l'encodage à utiliser avec la méthode exec
$base->exec("SET CHARACTER SET utf8");  
//pour lire les données contenus dans une table nous utiliserons une requête SQL
//cette requête sera passé à l'objet pdo $base avec la méthode query
$retour = $base->query('SELECT * FROM Etudiants');
while($data = $retour->fetch()){
    echo $data['matricule'].' '.$data['nom'].' '.$data['prenom'].' '.$data['email'].' '.$data['telephone'].' '.$data['date_naissance'].') <br>';
}
$base = null;
var_dump($base);

// $connectdb = new EtudiantService($base);
// $connectdb->add($etudiant);










// class Connexion1
// {
//     private  $serveur = "localhost";
//     private $login = "root";
//     private $pass = "kimora24";
//     private $base = "Etudiant";

//     private static $connexion = null;
//     public static function connexion()
//     {
//         try {
//             self::$connexion = new PDO("mysql:host=" . self::$serveur . ";dbname=" . self::$base, self::$login, self::$pass);
//             self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//             // $requete = self::$connexion->prepare(
//             //     "INSERT INTO Etudiants(nom,prenom,email,telephone,date_naissance)
//             //                             VALUES(:nom, :prenom, :email, :telephone, :date_naissance)"
//             // );
//             // $requete->bindParam(':matricule', $_POST['matricule']);
//             // $requete->bindParam(':nom', $_POST['nom']);
//             // $requete->bindParam(':prenom', $_POST['prenom']);
//             // $requete->bindParam(':email', $_POST['mail']);
//             // $requete->bindParam(':telephone', $_POST['tel']);
//             // $requete->bindParam(':date_naissance', $_POST['date']);
//         } catch (PDOException $e) {
//             echo 'Echec de la connexion : ' . $e->getMessage();
//         }
//         return self::$connexion;
//     }
// }
// //Connexion1::connexion();
