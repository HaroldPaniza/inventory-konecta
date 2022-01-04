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
                <h1>Venta.</h1>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Vender Producto</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="../controllers/SellProductController.php" method="POST">
                        <div class="box-body ">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="id">Id Producto</label>
                                        <input type="number" min="1" class="form-control" name="product_id" id="product_id" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="referense">Cantidad</label>
                                        <input type="number" min="0" class="form-control" name="quantity_product" id="quantity_product" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="../views/index.php" class="btn btn-success">Regresar</a>
                            <button type="submit" id="nuevo" class="btn btn-success">Vender Producto</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.footer -->
    </div>
</body>