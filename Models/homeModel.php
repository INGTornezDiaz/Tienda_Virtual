<?php
class HomeModel
{
	public function __construct()
	{
		// No parent constructor to call
	}	

	public function setUser(string $nombre, int $edad)
	{
		$query_insert = "INSERT INTO usuairo(nombre,edad) VALUES(?,?)";
		$arrData = array($nombre,$edad);
		$request_insert = $this->insert($query_insert,$arrData);
		return $request_insert;
	}
}
?>

