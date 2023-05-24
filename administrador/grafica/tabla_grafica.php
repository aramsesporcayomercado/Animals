<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Red Guardianes</title>
<!-- meterlo en admin que apraesca al principio-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

 <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
</head>
<!--- adaptarlo a mi panel de admin y ponerlo como un apartado --->
<?php

require("db/conexion.php");
// cambiar la consultas //
 $busca2 = $mysqli->query("SELECT COUNT(id_cliente) FROM clientes");

 $busca3 = $mysqli->query("SELECT COUNT(id) FROM productos");

    $datos2 = mysqli_fetch_array($busca2);
    $datos3 = mysqli_fetch_array($busca3);
 ?>   
 <div class="container">   
    <div class="row">
      <div class="col-md-6">
         <canvas id="grafica"></canvas>
      </div>
    </div>
</div>

    <script type="text/javascript">
      
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X.
const etiquetas = ["Usuarios Registrados", "Productos"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosVentas2020 = {
    label: "Datos De Usuarios Registrados",
    data: ['<?php echo $datos2[0] ?>', '<?php echo $datos3[0] ?>'], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(63, 83, 250)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
// cambia el tipo de grafica //
new Chart($grafica, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});
    </script>
       


<!-- page script -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>


</body>
</html>
