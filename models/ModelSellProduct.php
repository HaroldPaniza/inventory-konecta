<?php
require_once('conexion.php');

class Sales
{
    private $id_sales;
    private $product_id;
    private $id_product;
    private $quantity_product;
    private $db;

    public function __construct()
    {
        $db = null;
        $this->db = new Conexion();
    }
    //------------------------------------------------------
    public function createSales($product_id, $quantity_product)
    {
        $sql = 'INSERT INTO sales VALUES (?, ?, ?);';
        $sentencia = $this->db->cn->prepare($sql);
        $this->id_sales = null;
        $this->product_id = $product_id;
        $this->quantity_product = $quantity_product;

        //preparar sentencia
        $sentencia->bind_param('iii', $this->id_sales, $this->product_id, $this->quantity_product);
        if ($sentencia->execute()) {
            echo 'Los datos se han ingresado con exito.';
        } else {
            echo 'Error al ingresar los datos.';
        }

        $sentencia->free_result();
        $sentencia->close();
    }
    //------------------------------------------------------
    public function updateProduct($stock, $id_product)
    {
        $sql = 'UPDATE products SET stock=? WHERE id_product=?';
        $sentencia = $this->db->cn->prepare($sql);

        $this->stock = $stock;
        $this->id_product = $id_product;

        //preparar sentencia
        $sentencia->bind_param('ii', $this->stock, $this->id_product);

        if ($sentencia->execute()) {
            echo 'Los datos se han actualizado con exito.';
        } else {
            echo "Falló la ejecucion (" . $sentencia->errno . ") " . $sentencia->error;
            //echo 'Error al actualizar los datos.';
        }
        $sentencia->free_result();
        $sentencia->close();
    }


    //------------------------------------------------------
    public function cerrarConexion()
    {
        $this->db->close();
    }
}//fin de la clase