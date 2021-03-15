<?php
    class RolesModel extends Mysql
    {
        public $intIdRol;
        public $strRol;
        public $strDescripcion;
        public $intStatus;
        public function __construct()
        {
            parent::__construct();
        }

        public function selectRoles()
        {
            $sql = "SELECT * FROM rol WHERE status !=0";
            $request = $this->select_all($sql);
            return $request;
        }
        public function insertRol(string $rol, string $descripcion, int $status ){
            $return = "";
            $this->strRol = $rol;
            $this->descripcion = $descripcion;
            $this->status = $status;

            $sql= "SELECT * FROM rol WHERE nombrerol = '{$this->strRol}'";
            $request = $this->select_all($sql);
            
            //Iama VAlida aqui!!

        }
    }
?>