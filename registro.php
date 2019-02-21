<?php
session_start();
require("conexion/conexion.php");

if (isset($_POST['btnre'])){
    $id= $_POST['id'];
    $nombres= $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    

    if ($nombres=="" or $apellidos==""){
        header('Location: pag2.php');
    }else{
        
    mysqli_query($con,"INSERT INTO empleado VALUES('$id','$nombres','$apellidos')");
   
    echo "Registro completado".$apellidos;
    }
    mysqli_close($con);
    echo "----Final registros----";
}

if (isset($_POST['gpdf'])){
    header('Location: reporte.php');
}
if (isset($_POST['cerrarSession'])){
    session_destroy();
    header('Location: index.php');
}


?>