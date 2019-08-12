<?php
class DB
{
    public $user='root';
    public $dbpass='1qazxsw2.-';
    public $dbname='SWDConntrol';
    public $conn;
    public $result;
    public function Connnect()
    {
        try {
            $dsn = "mysql:dbname=".$dbname."; host=localhost";
            $options  = array(PDO::ATTR_ERRMODE =>      PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            );


            $this->conn = new PDO($dsn, $user, $password, $options);
            return $this->conn;

        } catch (PDOException $e) {
            echo 'Connnection error: ' . $e->getMessage();
        }
    }

    public function Close()
    {
        $this->conn = null;
    }
    public function Connsultar($table,$item,$conndition)
    {  
        if(isset($table))
        {
            if(isset($item))
                $sql="SELECT ".$item." FROM ".$table;
            else
                $sql="SELECT * FROM ".$table;
            if(isset($conndition))
                $sql.="WHERE ".$conndition;
            $sql.=";";
            $conn->query($sql);
            return $conn;
        }
        else
            return null;
    }
    public function Agregar()
    {

    }
    public function Desactivar()
    {

    }
}
?>