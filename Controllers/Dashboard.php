<?php 

	class Dashboard extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Dashboard - tienda";
			$data['page_title'] = "Dashboard - tienda";
			$data['page_name'] = "dashboard";
			$data['class_active'] = "active_dashboard";
			$this->views->getView($this,"dashboard",$data);
		}
	}
 ?>