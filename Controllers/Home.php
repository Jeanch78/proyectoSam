<?php 

	class Home extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$data['page_id'] = 1;
			$data['tag_page'] = "Home";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "home";
			$data['page_content'] = "Pagina Principal H";
			$this->views->getView($this,"home",$data);
		}
		public function insertar()
		{
			$data =$this->model->setUser("carlos",18);
			print_r($data);
		}
		public function verusuario($id)
		{
			$data =$this->model->getUser($id);
			print_r($data);
		}
		public function actualizar()
		{
			$data =$this->model->updateuser(1,"Maria",20);
			print_r($data); 
		}
		public function verusuarios()
		{
			$data =$this->model->getUsers();
			print_r($data);
		}
		public function eliminarUsuario($id)
		{
			$data =$this->model->delUser($id);
			print_r($data);
		}
	}
 ?>