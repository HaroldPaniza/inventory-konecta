<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inventory</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">

    <script src="../public/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <div class="embed-container content-wrapper">
            <section class="content-header">
                <h1>Producto.</h1>
            </section>
            <?php
            require_once('../controllers/ProductController.php');
            ?>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar Producto</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="../controllers/ProductController.php" method="POST">
                        <div class="box-body ">
                            <div class="container-fluid">
                                <input type="hidden" class="form-control" name="state" id="state" placeholder="" value="edit">
                                <input type="hidden" class="form-control" name="id" id="id" placeholder="" value="<?php echo $product[0]['id_product']; ?>">

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control" name="name_product" id="name_product" placeholder="" required value="<?php echo $product[0]['name_product']; ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="referense">Referencia</label>
                                        <input type="text" class="form-control" name="referense" id="referense" placeholder="" required value="<?php echo $product[0]['referense']; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="price">Precio</label>
                                        <input type="number" class="form-control" name="price" min="0" id="price" placeholder="" required value="<?php echo $product[0]['price']; ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="weight">Peso</label>
                                        <input type="number" min="0" class="form-control" name="weight" id="weight" placeholder="" required value="<?php echo $product[0]['weight']; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="category">Categoria</label>
                                        <input type="text" class="form-control" name="category" id="category" placeholder="" required value="<?php echo $product[0]['category']; ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="Stock">Stock</label>
                                        <input type="number" min="0" class="form-control" name="stock" id="stock" placeholder="" required value="<?php echo $product[0]['stock']; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group  col-md-3">
                                        <label for="date">Fecha de creación</label>
                                        <input type="date" autocomplete="off" class="form-control" name="created_at" id="created_at" placeholder="" required value="<?php echo $product[0]['created_at']; ?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="../views/index.php" class="btn btn-success">Regresar</a>
                            <button type="submit" id="nuevo" class="btn btn-success">Editar Producto</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.footer -->
    </div>
</body>