<?php
require_once('conexion.php');

class Product
{
    private $id_product;
    private $name_product;
    private $referense;
    private $price;
    private $weight;
    private $category;
    private $stock;
    private $created_at;
    private $db;

    public function __construct()
    {
        $db = null;
        $this->db = new Conexion();
    }

    public function createProduct($name_product, $referense, $price, $weight, $category, $stock, $created_at)
    {
        $sql = 'INSERT INTO products VALUES (?, ?, ?, ?, ?, ?, ?, ?);';
        $sentencia = $this->db->cn->prepare($sql);
        $this->id_product = null;
        $this->name_product = ucwords(strtolower($name_product));
        $this->referense = $referense;
        $this->price = $price;
        $this->weight = $weight;
        $this->category = $category;
        $this->stock = $stock;
        $this->created_at = $created_at;

        //preparar sentencia
        $sentencia->bind_param('issiisis', $this->id_product, $this->name_product, $this->referense, $this->price, $this->weight, $this->category, $this->stock, $this->created_at);
        if ($sentencia->execute()) {
            echo 'Los datos se han ingresado con exito.';
        } else {
            echo 'Error al ingresar los datos.';
        }

        $sentencia->free_result();
        $sentencia->close();
    }

    public function updateProduct($name_product, $referense, $price, $weight, $category, $stock, $created_at, $id_product)
    {
        $sql = 'UPDATE products SET name_product=?, referense=?, price=?, weight=?, category=?, stock=?, created_at=? WHERE id_product=?';
        $sentencia = $this->db->cn->prepare($sql);

        $this->name_product = ucwords(strtolower($name_product));
        $this->referense = $referense;
        $this->price = $price;
        $this->weight = $weight;
        $this->category = $category;
        $this->stock = $stock;
        $this->created_at = $created_at;
        $this->id_product = $id_product;

        $sentencia->bind_param('ssiisisi', $this->name_product, $this->referense, $this->price, $this->weight, $this->category, $this->stock, $this->created_at, $this->id_product);

        if ($sentencia->execute()) {
            echo 'Los datos se han actualizado con exito.';
        } else {
            echo "Falló la ejecucion (" . $sentencia->errno . ") " . $sentencia->error;
        }
        $sentencia->free_result();
        $sentencia->close();
    }

    public function listProducts()
    {
        $a = array();
        $sql = 'SELECT * FROM products;';
        $sentencia = $this->db->cn->prepare($sql);
        $sentencia->execute();
        $result = $sentencia->get_result();
        while ($row = $result->fetch_assoc()) {
            $a[] = array(
                'id_product' => $row['id_product'],
                'name_product' => $row['name_product'],
                'referense' => $row['referense'],
                'price' => $row['price'],
                'weight' => $row['weight'],
                'category' => $row['category'],
                'stock' => $row['stock'],
                'created_at' => $row['created_at'],
            );
        }
        $sentencia->free_result();
        $sentencia->close();
        return $a;
    }

    public function getProductById($id_product)
    {
        $a = array();
        $sql = 'SELECT * FROM products
            WHERE id_product = ?;';
        $sentencia = $this->db->cn->prepare($sql);
        $this->id_product = $id_product;

        $sentencia->bind_param('i', $this->id_product);
        $sentencia->execute();
        $result = $sentencia->get_result();
        while ($row = $result->fetch_assoc()) {
            $a[] = array(
                'id_product' => $row['id_product'],
                'name_product' => $row['name_product'],
                'referense' => $row['referense'],
                'price' => $row['price'],
                'weight' => $row['weight'],
                'category' => $row['category'],
                'stock' => $row['stock'],
                'created_at' => $row['created_at'],
            );
        }
        $sentencia->free_result();
        $sentencia->close();
        return $a;
    }

    public function deleteProductById($id_product)
    {
        $a = array();
        $sql = 'DELETE FROM products
            WHERE id_product = ?;';
        $sentencia = $this->db->cn->prepare($sql);
        $this->id_product = $id_product;

        $sentencia->bind_param('i', $this->id_product);
        $sentencia->execute();
        $sentencia->free_result();
        $sentencia->close();
        return $a;
    }

    public function cerrarConexion()
    {
        $this->db->close();
    }
}
