<?php
	require_once "../app/controllers/MovimientosController.php";
?>
<div class="container">
	<div class="row">
		<h2 class="text-center">Asignacion Bienes</h2>
	</div>
	<hr>
	<form method="post">
	<div class="row form-group">
		<div class="col-sm-4">
			<label for="cedula">Número de Bien:</label>
			<input class="form-control" type="text" name="numero_bien" value="" maxlength="8" placeholder="N° de Bien">
		</div>
		<div class="col-sm-2">
			<br>
			<input name="submit_consulta_bien" type="submit" value="Buscar" class="btn btn-primary">
		</div>
	</div>
	<?php
		$num_bien = MovimientosController::consultaBien();
	?>
	<div>
		<table id="tabla" class="display nowrap" style="width:100%">
	        <thead>
	            <tr>
	            	<th>Descripción del Movimiento</th>
	            	<th>Nombre Empleado</th>
	            	<th>Apellido Empleado</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php
					while ($row = pg_fetch_assoc($num_bien))
					{
				?>
					<tr>					
						<td><?php echo $row['nombre_mov'];?></td>
						<td><?php echo $row['nombre_empleado'];?></td>
						<td><?php echo $row['apellido_empleado'];?></td>
					</tr>				
				<?php
					}
				?>
	        </tbody>
	        <tfoot>
	            <tr>
	                <th>Descripción del Movimiento</th>
	            	<th>Nombre Empleado</th>
	            	<th>Apellido Empleado</th>
	            </tr>
	        </tfoot>
		</table>
	</div>
<div>