<?php
    if(isset($_POST['opc'])){
        switch($_POST['opc']){
            case 'Crear nota':
                //include_once('assets/crear.php');
                header('location:./assets/index_crear.php');
                break;
            case 'Ver nota':
                header('location:./assets/index_ver.php');
                break;
            case 'Editar nota':
                header('location:./assets/index_editar.php');
                break;
            case 'Eliminar nota':
                header('location:./assets/index_eliminar.php');
                break;
        }
        
    }
?>