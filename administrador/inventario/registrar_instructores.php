<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1 style="text-align: center;"> Bienvenido a registro de instructores</h1>

    <div class="container">
		<form name="FORM1" method="POST" action="alta_instructor.php">
		<label for="nombre">Ingrese el nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa el titulo de tu nombre">
                    <br />

                    <label for="num_serie">Ingrese el numero de serie</label>
                    <input type="text" name="num_serie" id="num_serie" class="form-control" placeholder="Ingresa el numero de serie">
                    <br />
                    <label for="estado">Ingrese el estado</label>
                <select name="estado" id="estado" class="form-control" required>
            <?php
        $estado =$row[4];

        if ($estado == "1"){ ?>
	        <option value="<?php echo $row[4] ?>">ACTIVO</option>
<?php }else{ ?>
            <option value="<?php echo $row[4] ?>">INACTIVO</option>
<?php  }    ?>

<option>--------------------</option>
<option value="1">Activo </option>
<option value="0">Inactivo </option>
</select>
<br>

                    <label for="imagen">Seleccione una imagen</label>
                    <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
                    <span id="imagen_subida"></span>
                    <br />
                </div>

                </div>
			<button type="submit">GUARDAR</button>
		</form>
	</div>
</body>
</html>