<?php
require ('EXO1_Repository_SQLServer.php') ;
class UserRepository extends PDORepository{
		        public function init() {
		            $requeteSql = "select * from SOFTWARE.REF_LIB_JEUX";
								$statement = $this->queryList($requeteSql,PDO::FETCH_BOTH,null) ;
								while ($ligneJeux = $statement->fetch())
								{
                                        print_r($ligneJeux);
										echo "<BR>";
								}
		        }  // fin init
					}

$user = new UserRepository()	;
$user->init() ;

?>