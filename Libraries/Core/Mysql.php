<?php
class Mysql extends Conexion
{
    private $conexion; 
    private $strquery;
    private $arrValues;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion= $this->conexion->conect();
    }
    //insertar un registro
    public function insert(string $query, array $arrValues)
    {
        $this->strquery =$query;
        $this->arrValues=$arrValues;
        $insert = $this->conexion->prepare($this->strquery);
        $resInsert = $insert->execute($this->arrValues);
        if ($resInsert) {
            $lastInsert=$this->conexion->lastInsertId();
        }else{
            $lastInsert=0;
        }
        return $lastInsert;
    }
    //buscar un registro
    public function select(string $query)
    {
        $this->strquery =$query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    //devolver todos los registros
    public function select_all(string $query)
    {
        $this->strquery =$query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
    //actuaizar registro
    public function update(string $query, array $arrValues)
    {
        $this->strquery =$query;
        $this->arrValues=$arrValues;
        $update = $this->conexion->prepare($this->strquery);
        $resExecute = $update->execute($this->arrValues);
        
        return $resExecute;
    }
    //borrar registro
    public function delete(string $query)
    {
        $this->strquery =$query;
        $result = $this->conexion->prepare($this->strquery);
        $del=$result->execute();
        return $del;
    }
}
?>