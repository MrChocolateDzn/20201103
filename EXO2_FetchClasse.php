<?php
require('EXO2_FormationEleve.php');
require('EXO1_Repository_SQLServer.php');


class FetchRepository extends PDORepository{
		        public function init() {
		            $requeteSql = "select id_eleve, nom_eleve, nb_heures_cours_info, code_filiere from PROCS.FORMATIONELEVES";
								$statement = $this->queryList($requeteSql,PDO::FETCH_BOTH,NULL) ;
								while ($eleve = $statement->fetch())
								{
                                            print_r($eleve);
								}
		        }  // fin init
	public function doisRedefinir()
	{
		return "Redéfinition effectuée";
	}
					}


class FetchClasseRepository extends PDORepository{
		        public function init() {
		            $requeteSql = "select id_eleve, nom_eleve, nb_heures_cours_info, code_filiere from PROCS.FORMATIONELEVES";
								$statement = $this->queryList($requeteSql,PDO::FETCH_CLASS,'FormationEleve') ;
								// bouclez sur le résultat pour afficher un élève à chaque itération: question 5.A.2
					while ($eleveClasse = $statement->fetch())
					{
						echo "L'élève a les caractéristiques suivantes: $eleveClasse" ;
					}

		        }  // fin de la méthode init

	public function insert(FormationEleve $eleve){
		        	$statement = $this->insertion($eleve) ;
	}

	public function doisRedefinir()
	{
		return "Redéfinition effectuée";
	}
					}

					// Affichage via un FETCH_BOTH
/*$userBoth = new FetchRepository()	;
$userBoth->init() ;*/

/*$userClasse = new FetchClasseRepository() ;
$userClasse->init() ;*/

$unEleve = new FormationEleve(25,"Robert",1500,"SLAM");
$userClasse = new FetchClasseRepository() ;
$userClasse->insert($unEleve) ;


?>

 