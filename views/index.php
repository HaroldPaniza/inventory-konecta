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

<body class="hold-transition login-page">
	<div class="login-box">


		<?php
		require_once('../controllers/ProductController.php');
		?>

		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title">Lista de Estudiantes</h4>
			</div>
			<div class="modal-body table-responsive">
				<a href="../views/new_product.php" class="btn btn-success">Crear Producto</a>
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th class="sorting_asc">ID</th>
							<th>Nombre</th>
							<th>Referencia</th>
							<th>Precio</th>
							<th>Peso</th>
							<th>Categoria</th>
							<th>Stock</th>
							<th>Fecha de creación</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php

						//pendiente usar -> hidden
						for ($i = 0; $i < sizeof($data); $i++) :
							echo '<tr>';
							echo '<td class="idEstudiante" id="', $data[$i]['id_product'], '">', $data[$i]['id_product'], '</td>';
							echo '<td>', $data[$i]['name_product'], '</td>';
							echo '<td>', $data[$i]['referense'], '</td>';
							echo '<td>', $data[$i]['price'], '</td>';
							echo '<td>', $data[$i]['weight'], '</td>';
							echo '<td>', $data[$i]['category'], '</td>';
							echo '<td>', $data[$i]['stock'], '</td>';
							echo '<td>', $data[$i]['created_at'], '</td>';
							echo
							'<td>
                                        <a href="./edit_product.php?getProduct=', $data[$i]['id_product'], '" style="padding-left: 20px;" class="btn btn-primary" id="', $data[$i]['id_product'], '">Editar</a>
                                        <a href="../controllers/productController.php?deleteProduct=', $data[$i]['id_product'], '" style="padding-left: 20px;" class="btn btn-danger" id="', $data[$i]['id_product'], '">Eliminar</a>
                                        </td>
                                        </tr>';
						endfor;
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>