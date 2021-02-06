<?php
class Home extends Controllers{
    public function __construct(){
        parent::__construct();
    }
    public function home($parems){
        //echo "Pronto sera una tienda virtual";
        $this->views->getViews($this,"home");
    }

    /*public function datos($params){
        echo "dato recibido: ".$params;
    }

    public function carrito($params){
       $carrito=$this->model->getCarrito($params);
       echo $carrito;
    }*/
}
?>