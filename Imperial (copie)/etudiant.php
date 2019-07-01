<?php
class Etudiant
{

    private $matricule;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $date_naissance;


    public function __construct($matricule="", $nom="", $prenom="", $email="", $telephone="", $date_naissance="")
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->date_naissance = $date_naissance;
    }

    public function getMatricule()
    {
        return $this->matricule;
    }
    public function setMatricule($matricule)
    {
        $this->matricule;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone;
    }


    public function getDate_naissance()
    {
        return $this->date_naissance;
    }
    public function setDate_naisance($date_naissance)
    {
        $this->date_naissance;
    }
    public function infos()
    {
        return parent::infos() . ", 
" . $this->matricule . ", " . $this->nom . "," . $this->prenom . "," . $this->email . "," . $this->telephone . " 
" . $this->date_naissance;
    }
}
