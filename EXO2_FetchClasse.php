<?php
require ('EXO2_FormationEleve.php');
require ('EXO1_Repository_SQLServer.php');


class FetchRepository extends PDORepository{
		        public function init() {
		            $requeteSql = "select id_eleve, nom_eleve, nb_heures_cours_info, code_filiere from PROCS.FORMATIONELEVES";
								$statement = $this->queryList($requeteSql,PDO::FETCH_BOTH,NULL) ;
								while ($eleve = $statement->fetch())
								{
                                            print_r($eleve);
								}
		        }  // fin init
					}


class FetchClasseRepository extends PDORepository{
		        public function init() {
		            $requeteSql = "select id_eleve, nom_eleve, nb_heures_cours_info, code_filiere from PROCS.FORMATIONELEVES";
								$statement = $this->queryList($requeteSql,'?','?') ;
								// bouclez sur le résultat pour afficher un élève à chaque itération: question 5.A.2
		        }  // fin de la méthode init
					}

					// Affichage via un FETCH_BOTH
$userBoth = new FetchRepository()	;
$userBoth->init() ;


?>

 