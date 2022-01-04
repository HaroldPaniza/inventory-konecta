<?php
    class Conexion
    {
        public $host = 'localhost';
        public $userDB = 'root';
        public $password= '';
        public $nameDB = 'inventory_konecta';
        public $characters = 'UTF8';
        public $cn = null;

        public function __construct()
        {
            try {
                $this->cn = new mysqli($this->host, $this->userDB, $this->password, $this->nameDB);
                $this->cn->set_charset($this->characters);
                if ($this->cn->connect_errno) {
                    echo 'La conexion a fallado';
                    exit();
                }
                //echo 'conexion exitosa';
                return $this->cn;
            } catch (Exception $e) {
                echo 'Excepcion capturada'.$e->getMessage(), 'n';
            }
        }
        //-----------------
        public function close()
        {
            $this->cn->close();
            $this->cn = null;
        }
    }//FIN DE LA CLASE
