<?php
session_start();
class Conector
{
    public $user='root';
    public $dbpass='1qazxsw2.-';
    public $dbname='SWDControl';
    public $conn;
    public $result;
    public function Connect()
    {
        try {

            $dsn = "mysql:dbname=".$this->dbname."; host=localhost";
            $options  = array(PDO::ATTR_ERRMODE =>      PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            );


            $this->conn = new PDO($dsn, $this->user, $this->dbpass, $options);
            return $this->conn;

        } catch (PDOException $e) {
            echo 'Connnection error: ' . $e->getMessage();
        }
    }

    public function Close()
    {
        $this->conn = null;
    }
    public function Consultar($item,$table,$conndition)
    {  
        if(isset($table))
        {
            if(isset($item) and !is_null($item))
                $sql="SELECT ".$item." FROM ".$table;
            else
                $sql="SELECT * FROM ".$table;
            if(isset($conndition) and !is_null($conndition))
                $sql.=" WHERE ".$conndition;
            $sql.=";";
            // echo($sql);
            return $this->conn->query($sql);
        }
        else
            return null;
    }
    
    public function Agregar($table,$items,$data)
    {
        if(isset($table))
        {
            $sql="INSERT INTO ".$table;
            if(isset($items) and !is_null($items))
                $sql.="(".$items.")";
            $sql.=" VALUES(";
            if(isset($data) and !is_null($data))
                $sql.=$data.")";
            $sql.=";";
            // echo($sql);
        }
            $this->conn->exec($sql);
    }
    public function Editar($table,$campoval,$cond)
    {
        // var_dump($cond);
        if(isset($table))
        {
            if(isset($campoval))
            {
                $sql="UPDATE ".$table." SET ".$campoval;
                if (isset($cond))
                    $sql.=" WHERE ".$cond;
            }
        }
        var_dump($sql);
        $this->conn->exec($sql);
    }
    public function Desactivar()
    {

    }
}
?>