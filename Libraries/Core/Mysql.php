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
    public function insert(string $nombre, int $telefono, string $email)
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
    	$result = $this->
    }
}
?>