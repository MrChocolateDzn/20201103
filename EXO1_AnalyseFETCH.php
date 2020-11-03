<?php
require ('EXO1_Repository_SQLServer.php') ;
class UserRepository extends PDORepository{
		        public function init() {
		            $requeteSql = "select LIB_JEU from SOFTWARE.REF_LIB_JEUX";
								$statement = $this->queryList($requeteSql,PDO::FETCH_COLUMN,null) ;
								$resultat = $statement->fetchAll() ;
								var_export($resultat) ;

		        }  // fin init
					}

$user = new UserRepository()	;
$user->init() ;

?>