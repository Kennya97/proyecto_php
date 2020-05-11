<!DOCTYPE html>
<html lang ="es">

<head>
<meta charset="UTF-8">
<meta name ="viewport" content ="width=device-width, initial-scale=1.0">
<title>Calculo Promedio</title>

</head>
<body bgcolor="#F5D0A9"><center>
<?php
if (isset($_POST["txtCantidad"])) {
$cantidad = $_POST["txtCantidad"];
#creamos los formularios
echo '<h1>Elabore un programa que lea una lista de nombres de aves en cualquier orden y luego las ordene en orden alfabético.
</h1> <hr>
<form action="procesar.php" method="post">';
$cuerpoForm = "";
#creamos con la estructura for la cantidad de inputs
for ($i = 1; $i <= $cantidad; $i++) {
//cuerrpo del formulario
$cuerpoForm = $cuerpoForm . '<label for = "txtnombre' . $i . '">Nombre del Ave ' . $i . '</label>
<input type="text" name="txtnombre' . $i . '" id="txtnombre' . $i . ' "required><br>';
}
echo $cuerpoForm . '<br><br><input type="hidden" name="txtCantidad" value="' . $cantidad . '"><input type="submit" value="Ordenar"></form>';
} else {
    #volver al inicio
    echo '<hr><a href="primero.php">Debe enviar la cantidad de aves...</a>';
}
?>
</center>
</body>
</html>
