<?php
class DB
{
    $user='root';
    $dbpass='1qazxsw2.-';
    $dbname='SWDControl';
    $conn;
    $result;
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
            PDO::query()
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