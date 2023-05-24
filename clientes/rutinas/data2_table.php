<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>datatable</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css"><link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/styles1.css">
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );

    new $.fn.dataTable.FixedHeader( table );
} );
</script>
</head>
<body>
<div class="table-responsive">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>titulo</th>
                <th>descripcion</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	require("conexion.php");

        	$consulta= $mysqli->query("SELECT * FROM rutinas");

        	while ($datos = mysqli_fetch_array($consulta)) {


        		
        	

        	?>
            <tr>
                <td><?php echo $datos[0]; ?></td>
                <td><?php echo $datos[1]; ?></td>
                <td><?php echo $datos[2]; ?></td>
            </tr>
           <?php
            }
            ?>
             </tbody>
        <tfoot>
            <tr>
            <th>id</th>
            <th>titulo</th>
            <th>descripcion</th>
            </tr>
        </tfoot>
    </table>
        </div>
        <a href="../index.php" class='btn btn-info'>regresar</a>
</body>
</html>