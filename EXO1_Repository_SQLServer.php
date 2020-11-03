<?php
abstract class PDORepository{
    const USERNAME="victorf";
    const PASSWORD="Victor2020";
    const SERVER="SQLSRV2";
    const DB="vfleischmann";

    private function getConnection(){
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $server = self::SERVER;
        $db = self::DB;
        try {
            $connection = new PDO("sqlsrv:server=$server,1433;Database=$db", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
        return $connection;
    }
    protected function queryList($sql, $fetch_mode,$nom_classe){
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        if ($nom_classe === NULL && $fetch_mode != PDO::FETCH_COLUMN)
        {
            $stmt->setFetchMode($fetch_mode);
        }
        else if ($fetch_mode == PDO::FETCH_COLUMN) {
            $stmt->setFetchMode($fetch_mode,0);

        }
        else
        {
            $stmt->setFetchMode($fetch_mode|PDO::FETCH_PROPS_LATE,$nom_classe);
        }
        $stmt->execute();
        return $stmt;
    }
}

?>
