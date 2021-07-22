<?php 

    require("Conexion.php");

    class DevuelveProductos extends Conexion {

        public function __construct(){
            
            parent::__construct();



        }

        public function get_productos() {

            $resultado=$this->conexion_db->query('SELECT * FROM productos LIMIT 10');

            $productos=$resultado->fetch_all(MYSQLI_ASSOC);

            return $productos;
        }

    }


?>