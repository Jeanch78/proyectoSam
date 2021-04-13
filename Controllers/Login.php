<?php 

	class Login extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function login()
		{
			$data['page_tag'] = "Login - Tienda Virtual";
			$data['page_title'] = "Login";
			$data['page_name'] = "Login";
			$data['page_funtions_js'] = "functions_login.js";
			$this->views->getView($this,"login",$data);
		}
	}
 ?>