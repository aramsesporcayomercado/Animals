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
<link rel="stylesheet" href="css/styles.css">
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
<table id="example" class="hover" style="width:100%" class="table align-middle">
        <thead>
            <tr>
                <th>id</th>
                <th>titulo</th>
                <th>descripcion</th>
                <th>modificar</th>
                <th>eliminar</th>
                <th>registro</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	require("conexion.php");

        	$consulta= $mysqli->query("SELECT * FROM anuncios");

        	while ($datos = mysqli_fetch_array($consulta)) {




        	?>
            <tr>
                <td><?php echo $datos[0]; ?></td>
                <td><?php echo $datos[1]; ?></td>
                <td><?php echo $datos[2]; ?></td>

<td><a href="modificar_anuncio.php?id=<?php echo $datos[0]; ?> " class="btn btn-success" style="vertical-align:top">Modificar</a>
</td>
<td><a href="cate_eliminar.php?id=<?php echo $datos[0]; ?>" class="btn btn-danger" style="vertical-align:middle" onclick="return confirm('seguro que quieres eliminar');">eliminar</a></td>
<td><div class="row">
    <div class="col-3 ">
    </div>
            <div class="col-3 ">
                <div class="text-center">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
                        <i class="bi bi-plus-circle-fill"></i> Crear
                        </button>
                </div>
            </div>
        </div>
        <br />
        <br /></td>
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
            <th>modificar</th>
            <th>eliminar</th>
            <th>registro</th>
            </tr>
        </tfoot>
    </table>
    

<!-- Modal Crear-->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
        <form method="POST" id="formulario" enctype="multipart/form-data" action="alta_anuncio.php">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="titulo">Ingrese el titulo</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Ingresa el titulo de tu anuncio">
                    <br />

                    <label for="descripcion">Ingrese la descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control"  placeholder="Ingresa la descripcion de la rutina">
                    <br />

                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="operacion" id="operacion">
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
                </div>
            </div>
        </form>
      </div>     
  </div>
</div>
<a href="../index.php" class='btn btn-info'>regresar</a>


</body>
</html>