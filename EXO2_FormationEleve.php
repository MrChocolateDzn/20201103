<?php
class FormationEleve {

// Declaration des attributs:
private $id_eleve;
private $nom_eleve;
private $nb_heures_cours_info ;
private $code_filiere ;

    /**
     * FormationEleve constructor.
     * @param $id_eleve
     * @param $nom_eleve
     * @param $nb_heures_cours_info
     * @param $code_filiere
     */
    public function __construct($id_eleve=null, $nom_eleve=null, $nb_heures_cours_info=null, $code_filiere=null)
    {
        $this->id_eleve = $id_eleve;
        $this->nom_eleve = $nom_eleve;
        $this->nb_heures_cours_info = $nb_heures_cours_info;
        $this->code_filiere = $code_filiere;
    }


    public function getId_eleve()
{
	return $this->id_eleve ;
}

public function setId_eleve($id)
{
	$this->id_eleve =$id;
}

public function getNom_eleve()
{
	return $this->nom_eleve ;
}

public function setNom_eleve($nom)
{
	$this->nom_eleve =$nom;
}

public function getNb_heures_cours_info()
{
	return $this->nb_heures_cours_info ;
}

public function setNb_heures_cours_info($nbh)
{
	$this->nb_heures_cours_info =$nbh;
}

public function getCode_filiere()
{
	return $this->code_filiere ;
}

public function setCode_filiere($filiere)
{
	$this->code_filiere =$filiere;
}


    public function __toString()
    {
        // TODO: Implement __toString() method.
        $aAfficher = "Identifiant est: ".$this->getId_eleve()."<BR>"."Le nom est: ".$this->getNom_eleve()."<BR>"."Le nombre heures info est: ".
            $this->getNb_heures_cours_info()."<BR>"."La filiere est: ".$this->getCode_filiere()."<BR>";
        return $aAfficher ;

    }


} // Fin de FormationEleve class.
?>