<?php

class Roles extends Controllers
{
	public function __construct()
	{
		session_start();
		if (empty($_SESSION['login'])) {
			header('location: ' . base_url() . '/login');
		}
		parent::__construct();
	}

	public function Roles()
	{
		$data['page_id'] = 3;
		$data['page_tag'] = "Roles Usuario";
		$data['page_title'] = "Roles usuario";
		$data['page_description'] = "Niveles de usuario ";
		$data['page_name'] = "rol_usuario";
		$data['class_active'] = "active_rol";
		$data['page_funtions_js'] = "functions_roles.js";

		$this->views->getView($this, "roles", $data);
	}

	public function getRoles()
	{
		$arrData = $this->model->selectRoles();
		for ($i = 0; $i < count($arrData); $i++) {
			if ($arrData[$i]['status'] == 1) {
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
			}

			$arrData[$i]['options'] =
				'<div class="text-center">
					<button class="btn btn-secondary btn-sm btnPermisosRol" rl="' . $arrData[$i]['idrol'] . '" title="Permisos"><i class="fas fa-key"></i></button>
					<button class="btn btn-primary btn-sm btnEditRol" rl="' . $arrData[$i]['idrol'] . '" title="Editar"><i class="fas fa-pencil-alt"></i></button>
					<button class="btn btn-danger btn-sm btnDelRol" rl="' . $arrData[$i]['idrol'] . '" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
				</div>';
		}
		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
		die();
	}

	public function getRol($idrol)
	{
		$intIdrol = intval(strClean($idrol));
		if ($intIdrol > 0) {
			$arrData = $this->model->selectRol($intIdrol);
			if (empty($arrData)) {
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			} else {
				$arrResponse = array('status' => true, 'data' => $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}

	public function setRol()
	{
		$intIdrol = intval($_POST['idRol']);
		$strRol = strClean($_POST['txtNombre']);
		$strDescripcion = strClean($_POST['txtDescripcion']);
		$intStatus = intval($_POST['listStatus']);

		if ($intIdrol == 0) {
			//clear
			$request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus);
			$option = 1;
		} else {
			$request_rol = $this->model->updateRol($intIdrol, $strRol, $strDescripcion, $intStatus);
			$option = 2;
		}

		if ($request_rol > 0) {
			if ($option == 1) {
				$arrResponse = array('status' => true, 'msg' => 'Datos Guardados con Exito.');
			} else {
				$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados con Exito.');
			}
		} else if ($request_rol == 'exist') {
			$arrResponse = array('status' => false, 'msg' => '¡Atención! el Rol ya existe.');
		} else {
			$arrResponse = array('status' => false, 'msg' => 'No es posible almacenar datos.');
		}
		echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		die();
	}

	public function delRol()
	{
		if ($_POST) {
			$intIdrol = intval($_POST['idrol']);

			//$requestDelete = $this->moldel->deleteRol($intIdrol);
			$requestDelete = $this->model->deleteRol($intIdrol);
			if ($requestDelete == "ok") {
				$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Rol');
			} elseif ($requestDelete == "exist") {
				$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un Rol asosiado a usuarios.');
			} else {
				$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Rol');
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}
}
