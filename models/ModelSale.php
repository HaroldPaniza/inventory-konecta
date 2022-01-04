<?php
    require_once('conexion.php');
    
    class Sale
    {
        private $id_sale;
        private $quantity_product;
        private $db;

        public function __construct()
        {
            $db = null;
            $this->db = new Conexion();
        }
        //------------------------------------------------------
  /*     public function createProduct($id_product, $name_product, $referense, $price, $weight, $caragory, $stock, $created_at)
        {
            $sql = 'INSERT INTO product VALUES (?, ?, ?, ?, ?, ?, ?, ?);';
            $sentencia = $this->db->cn->prepare($sql);
            $this->id_product = null;
            $this->id_product = $id_product;
            $this->name_product = ucwords(strtolower($name_product));
            $this->referense = $referense;
            $this->price = $price;
            $this->weight = $weight;
            $this->caragory = $caragory;
            $this->stock = $stock;
            $this->created_at = $created_at;

            //preparar sentencia
            $sentencia->bind_param('issiisii', $this->id_product, $this->identificacion, $this->nombre, $this->sexo, $this->grado_id, $this->fecha_nacimiento, $this->institucion_id, $this->estado);
            if ($sentencia->execute()) {
                echo 'Los datos se han ingresado con exito.';
            } else {
                echo 'Error al ingresar los datos.';
            }

            $sentencia->free_result();
            $sentencia->close();
        }
        //------------------------------------------------------
        public function updateProduct($identificacion, $nombre, $sexo, $grado_id, $fecha_nacimiento, $institucion_id, $id_estudiante)
        {
            $sql = 'UPDATE estudiante SET identificacion=?, nombre=?, sexo=?, grado_id=?, fecha_nacimiento=?, institucion_id=? WHERE id_estudiante=?';
            $sentencia = $this->db->cn->prepare($sql);

            $this->identificacion = $identificacion;
            $this->nombre = $nombre;
            $this->sexo = $sexo;
            $this->grado_id = $grado_id;
            $this->fecha_nacimiento = $fecha_nacimiento;
            $this->institucion_id = $institucion_id;
            $this->id_estudiante = $id_estudiante;

            //preparar sentencia
            $sentencia->bind_param('sssisii', $this->identificacion, $this->nombre, $this->sexo, $this->grado_id, $this->fecha_nacimiento, $this->institucion_id, $this->id_estudiante);

            if ($sentencia->execute()) {
                echo 'Los datos se han actualizado con exito.';
            } else {
                echo "Falló la ejecucion (" . $sentencia->errno . ") ". $sentencia->error;
                //echo 'Error al actualizar los datos.';
            }
            $sentencia->free_result();
            $sentencia->close();
        }
        */
        //------------------------------------------------------
        public function listSales()
        {
            $a=array();
            $sql = 'SELECT * FROM sales;';
            $sentencia = $this->db->cn->prepare($sql);
            $sentencia->execute();
            $result = $sentencia->get_result();
            while ($row = $result->fetch_assoc()) {
                $a[] = array(
                    'id_sale' => $row['id_sale'],
                    'quantity_product' => $row['quantity_product'],

                );
            }
            $sentencia->free_result();
            $sentencia->close();
            return $a;
        }

        
        //------------------------------------------------------
        public function cerrarConexion()
        {
            $this->db->close();
        }
    }//fin de la clase