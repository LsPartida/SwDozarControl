<?php
class DB
{
    public $user='root';
    public $dbpass='1qazxsw2.-';
    public $dbname='SWDControl';
    public $conn;
    public $result;
    protected $conn = null;

    public function Connect()
    {
        try {
            $dsn = "mysql:dbname="$dbname."; host=localhost";

            $options  = array(PDO::ATTR_ERRMODE =>      PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            );


            $this->conn = new PDO($dsn, $user, $password, $options);
            return $this->conn;

        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }
    }

    public function Close()
    {
        $this->conn = null;
    }
    public function Consultar($table,$item,$condition)
    {  
        if(isset($table))
        {
            if(isset($item))
                $sql="SELECT ".$item." FROM ".$table;
            else
                $sql="SELECT * FROM ".$table;
            if(isset($condition))
                $sql.="WHERE ".$condition;
            $sql.=";";
            $conn->query($sql);
            return $conn;
        }
        else
            return null;
    }
    public function Actualizar()
    {

    }
    public function Desactivar()
    {

    }
}
?>