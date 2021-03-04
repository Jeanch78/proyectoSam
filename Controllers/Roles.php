<?php 

	class Roles extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Roles()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Roles Usuario";
			$data['page_title'] = "Roles usuario";
			$data['page_description'] = "Niveles de usuario ";
			$data['page_name'] = "rol_usuario";
			$data['data_class_rol'] = "mm-active";
            
			$this->views->getView($this,"roles",$data);
		}
	}
 ?>