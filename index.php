<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>BLOCK DE NOTAS</title>
</head>
<body>
    <h1>Aplicación de block de notas</h1>
    <div class="principal">
        <form action="index.php" method="POST">
            <div class="opciones">
                <h3>SELECCIONE UNA ACCION</h3>
                <input type="submit" value="Crear nota" name="opc" autofocus>
                <input type="submit" value="Ver nota" name="opc">
                <input type="submit" value="Editar nota" name="opc">
                <input type="submit" value="Eliminar nota" name="opc">
            </div>
        </form>
        <?php include('assets/opcion.php')?>
    </div>
</body>
</html>