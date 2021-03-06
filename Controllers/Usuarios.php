<?php

class Usuarios extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
            header('location: ' . base_url() . '/login');
        }
    }

    public function Usuarios()
    {
        $data['page_tag'] = "Usuarios";
        $data['page_title'] = "USUARIOS <small>Tienda virtual</small>";
        $data['page_name'] = "usuarios";
        $data['class_active'] = "active_usuarios";
        $data['page_funtions_js'] = "functions_usuarios.js";
        $this->views->getView($this, "usuarios", $data);
    }

    public function setUsuario()
    {
        if ($_POST) {
            if (
                empty($_POST['txtIdentificacion']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) ||
                empty($_POST['txtTelefono']) || empty($_POST['txtEmail']) || empty($_POST['listRolid']) || empty($_POST['listStatus'])
            ) {
                $arrResponse = array('status' => false, 'msg' => 'Datos incorrectos.');
            } else {
                $idUsuario = intval($_POST['idUsuario']);
                $strIdentificacion = strClean($_POST['txtIdentificacion']);
                $strNombre = ucwords(strClean($_POST['strNombre']));
                $strApellido = ucwords(strClean($_POST['strApellido']));
                $intTelefono = intval(strClean($_POST['txtTelefono']));
                $strEmail = strtolower(strClean($_POST['strEmail']));
                $intTipoId = intval(strClean($_POST['listRolid']));
                $intStatus = intval(strClean($_POST['listStatus']));

                if ($idUsuario == 0) {
                    $option = 1;
                    $strPassword = empty($_POST['txtPassword']) ? hash("SHA256", passGenerator()) : hash("SHA256", $_POST['txtPassword']);
                    $request_user = $this->model->insertUsuario(
                        $strIdentificacion,
                        $strNombre,
                        $strApellido,
                        $intTelefono,
                        $strEmail,
                        $strPassword,
                        $intTipoId,
                        $intStatus
                    );
                } else {
                    $option = 2;
                    $strPassword = empty($_POST['txtPassword']) ? "" : hash("SHA256", $_POST['txtPassword']);
                    $request_user = $this->model->updateUsuario(
                        $idUsuario,
                        $strIdentificacion,
                        $strNombre,
                        $strApellido,
                        $intTelefono,
                        $strEmail,
                        $strPassword,
                        $intTipoId,
                        $intStatus
                    );
                }
                if ($request_user > 0) {
                    if ($option == 1) {
                        $arrResponse = array('status' => true, 'msg' => 'Datos Guardados con Exito.');
                    } else {
                        $arrResponse = array('status' => true, 'msg' => 'Datos Actualizados con Exito.');
                    }
                } else if ($request_user == 'exist') {
                    $arrResponse = array('status' => false, 'msg' => '¡Atención! el Email o la identificacion ya existe,<br>ingrese otro.');
                } else {
                    $arrResponse = array('status' => false, 'msg' => 'No es posible almacenar datos.');
                }
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    public function getUsuarios()
    {
        $arrData = $this->model->selectUsuarios();
        for ($i = 0; $i < count($arrData); $i++) {
            $btnView = '';
            $btnEdit = '';
            $btnDelete = '';

            if ($arrData[$i]['status'] == 1) {
                $arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
            } else {
                $arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
            }

            if ($_SESSION['permisosMod']['r']) {
                $btnView = '<button class="btn btn-info btn-sm btnViewUsuario" onclick="fntViewUsuario(' .
                    $arrData[$i]['idpersona'] . ')" title="Ver Usuario"><i class="far fa-eye"></i></button>';
            }
            if ($_SESSION['permisosMod']['u']) {
                if (
                    $_SESSION['idUser'] == 1 and $_SESSION['userData']['idrol'] == 1 ||
                    ($_SESSION['userData']['idrol'] == 1 and $arrData[$i]['idrol'] != 1)
                ) {
                    $btnEdit =  '<button class="btn btn-primary btn-sm btnEditUsuario" onclick="fntEditUsuario(' .
                        $arrData[$i]['idpersona'] . ')" title="Editar Usuario"><i class="fas fa-pencil-alt"></i></button>';
                } else {
                    $btnEdit = '<button class="btn btn-secondary btn-sm disable"><i class="fas fa-pencil-alt"></i></button>';
                }
            }
            if ($_SESSION['permisosMod']['d']) {
                if (
                    $_SESSION['idUser'] == 1 and $_SESSION['userData']['idrol'] == 1 ||
                    ($_SESSION['userData']['idrol'] == 1 and $arrData[$i]['idrol'] != 1) and
                    ($_SESSION['userData']['idpersona'] != $arrData[$i]['idpersona'])
                ) {
                    $btnDelete = '<button class="btn btn-danger btn-sm btnDelUsuario" onclick="fntDelUsuario(' .
                        $arrData[$i]['idpersona'] . ')" title="Eliminar Usuario"><i class="fas fa-trash-alt"></i></button>';
                } else {
                    $btnDelete = '<button class="btn btn-danger btn-sm disable"><i class="fas fa-trash-alt"></i></button>';
                }
            }
            $arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . '' . $btnDelete . '</div>';
        }
        echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function getUsuario(int $idpersona)
    {
        $idusuario = intval($idpersona);
        if ($idusuario > 0) {
            $arrData = $this->model->selectUsuario($idusuario);
            if (empty($arrData)) {
                $arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
            } else {
                $arrResponse = array('status' => true, 'data' => $arrData);
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    public function delUsuario()
    {
        if ($_POST) {
            $intIdpersona = intval($_POST['idUsuario']);
            $requestDelete = $this->model->deleteUsuario($intIdpersona);
            if ($requestDelete) {
                $arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el usuario');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Error al eliminar el usuario');
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    public function perfil()
    {
        $data['page_tag'] = "Perfil";
        $data['page_title'] = "Perfil de usuario";
        $data['page_name'] = "perfil";
        $data['class_active'] = "active_perfil";
        $data['page_funtions_js'] = "functions_usuarios.js";
        $this->views->getView($this, "perfil", $data);
    }
}
