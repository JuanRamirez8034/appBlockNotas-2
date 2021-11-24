<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>BLOCK DE NOTAS</title>
</head>
<body>
    <h1>Aplicación de block de notas</h1>
    <div class="principal">
        <form action="index_editar.php" method="POST" class="fcrear">
            <h3>Editar una nota</h3>
            <label for="editar">Ingrese el nombre de la nota</label>
            <input type="text" name="editar" id="editar" placeholder="Name My note Example.txt" require autofocus>
            <div class="dir">
                <span><input type="checkbox" name="activadirectorio[]" id="activadirectorio" onclick="myFun()"> En directorio especifico</span>
                <input type="text" name="directorios" id="directorios" placeholder="My directory" disabled> 
            </div>
            <input type="submit" value="Busca y edita" name='buscaedita'>
            <input type="button" value="Regresar" onclick="window.location.href = '../index.php'">
        </form>
        <?php include('acciones.php');?>
    </div>
</body>
<script src="../js/accionar.js"></script>
</html>