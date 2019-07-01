<?php
include_once('etudiant.php');
class EtudiantService
{

    public function __construct($base)
    {
        //$this->setBase($base);
        $this->base = new PDO("mysql:host=localhost;dbname=Etudiant", 'root', 'kimora24');
    }



    public function add(Etudiant $etudiant)
    {
        try {
            echo 'accès table';
            $base = new PDO("mysql:host=localhost;dbname=Etudiant", 'root', 'kimora24');
            //préparation de la requête d'insertion (SQL)
            //$retour = $base->prepare('INSERT INTO Etudiants( matricule, nom, prenom, email, telephone, date_naissance) VALUES (?,?,?,?,?,?)');
            //$retour = $base->prepare('INSERT INTO Etudiants( matricule, nom, prenom, email, telephone, date_naissance) VALUES (?,?,?,?,?,?)');
            //on lie chaque marqueur à une valeur

            // $retour->bindValue(':matricule', $etudiant->getMatricule(), PDO::PARAM_STR);
            // $retour->bindValue(':nom', $etudiant->getNom(), PDO::PARAM_STR);
            // $retour->bindValue(':prenom',$etudiant->getPrenom(), PDO::PARAM_STR);
            // $retour->bindValue(':email', $etudiant->getEmail(), PDO::PARAM_STR);
            // $retour->bindValue(':telephone', $etudiant->getTelephone(), PDO::PARAM_STR);
            // $retour->bindValue(':date_naissance', $etudiant->getDate_naissance(), PDO::PARAM_STR);
            //éxécution de la requête préparée
            //préparation de la requête d'insertion (SQL)
            $retour = $base->prepare('INSERT INTO Etudiants( matricule, nom, prenom, email, telephone, date_naissance) VALUES (?,?,?,?,?,?)');
            $val = array($etudiant->getMatricule(), $etudiant->getNom(), $etudiant->getPrenom(), $etudiant->getEmail(), $etudiant->getTelephone(), $etudiant->getDate_naissance());
            //éxécution de la requête préparée
            $insertIsOk = $retour->execute($val);
            if ($insertIsOk) {
                $message = 'L\'étudiant a été ajouté dans la base de donnée.';
            } else {
                $message = 'Echec de l\'insertion.';
                echo $message;
            }
        } catch (PDOException $e) {
            echo 'Echec de la connexion : ' . $e->getMessage();
        }
    }


    // public function findEtudiant($retrouv){
    //     $pl= new Etudiant($matricule) ;
    //     $etuservice = new EtudiantService($base);
    //     $etuservice->find($pl);


    //     try {
    //         //la base de donnée est ouverte en créant un objet PDO
    //         $base = new PDO('mysql=localhost; dbname=Etudiant','root','kimora24');
    //     }catch(exception $e){
    //         //si une erreur se produit à l'ouverture de la base, elle est affichée et le programme s'arrête
    //     die('Erreur '.$e->getMessage());
    //     }//si tout s'est bien passé on indique que l'encodage à utiliser est utf8
    //     $base->exec("SET CHARACTER SET utf8");
    //     //puis une requête SQL est appliquée à la table Etudiants,cette requête récupère les champs nom,prenom etc
    //     $retour = $base->query('SELECT matricule,nom,prenom,email,telephone,date_naissance FROM Etudiants');
    //     echo"<table>";
    //     //une boucle while permet de parcourir toutes les données de la table
    //     while ( $data = $retour->fetch()){
    //         //les champs de chaque enregistrement sont alors affichés dans les colonnes d'un tableau html
    //         echo"<tr><td>".$data['matricule']."</td>";
    //         echo"<td>".$data['nom']."</td>";
    //         echo"<td>".$data['prenom']."</td>";
    //         echo"<td>".$data['email']."</td>";
    //         echo"<td>".$data['telephone']."</td>";
    //         echo"<td>".$data['date_naissance']."</td></tr>";
    //     }
    //     echo"</table>";
    //     //enfin l'objet pdo est supprimé pour mettre fin à la connexion
    //     $base = null;

    // }
    /*public function getListEtudiant($type){
        $tabperso=[];
        for($i=0;$i<=count($this->personnes);$i++){
            if(get_class($this->personnes[$i])==$type){
                $tabperso[] =$this->personnes[$i];
            }
        }
        return $tabperso;
    }
     //trouver un element dans une tableau a partir de 
    // sa position
    public function find($i)
    {
        if($i>=0 && $i<count($this->personnes) )
            return $this->personnes[$i];
        
        return null;
    }*/
}
