<?php 
class Home extends Controllers{
	public function __construct()
	{
		parent::__construct();
	} 

	public function home()
	{
		//Informacion de vistas hacia los controladores
		$data['page_id'] = 1;
		$data['tag_page'] = "Home";
		$data['page_title'] = "Página Principal";
		$data['page_name'] = "Home";
		$data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
		$this->views->getViews($this, "home", $data);
	}

	public function insertar()
	{
		$data = $this->model->setUser("Apolinar",18);
		print_r($data);
	}
	public function verusuario($id){
		$data = $this->model->getUser($id);
		print_r($data);
	}

}
?>