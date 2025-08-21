<?php
class Mysql extends Conexion
{
	private $strquery;
    private $arrValues;
    private $conexion;

    public function __construct()
     {
    	$this->conexion = new Conexion();
        $this->conexion = $this->conexion->conect();
    }
    //METODO PARA INSERTAR USUARIOS EN LA BASE DE DATOS
    public function insert(string $query, array $arrValues)
    {
    	$this->strquery = $strquery;
    	$this->arrValues = $arrValues;

    	$insert = $this->conexion ->prepare($this->strquery);
    	$resInsert = $insert->execute($this->arrValues);
    	if($resInsert){
    		$lastInsert = $this->conexion->lastInsertId();
    	}else{
    		$lastInsert = 0;
    	}
    	return $lastInsert;
    }
    //Busca un registro
   public function select(string $query)
    {
		$this->strquery = $query;
    	$result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    //Devuelve todos los registros
    public function select_all(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
    //Actualiza registros
    public function update(sting $query, array $arrValues)
    {
        $this->strquery = $query;
        $this->arrValues = $arrValues;
        $update = $this->conexion->prepare($this->strquery);
        $resExecute = $update->execute($this->arrValues);
        return $resExecute;
    }
    //Elminar usuario
    public function delete(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->$strquery);
        $result->execute();
        return $result;
    }
}
?>