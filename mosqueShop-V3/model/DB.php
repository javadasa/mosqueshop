<?php
class DB{
    /**
     * @return PDO
     */
    private static function connect(){
        $pdo=new PDO('mysql:host=127.0.0.1;dbname=setad;charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    /**
     * @param $query
     * @param array $params
     * @return array
     */
    public static function query($query, $params=array()){
        $statement=self::connect()->prepare($query);
        $statement->execute($params);
        $data=$statement->fetchAll();
        return $data;

    }

    /**
     * @param $query
     * @param array $params
     */
    public static function queryNofetchAll($query, $params=array()){
        $statement=self::connect()->prepare($query);
        $statement->execute($params);

        //$data=$statement->fetchAll();
        //return $data;

    }
}
