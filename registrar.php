<?php

     if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) ||  empty($_POST["txtEdad"] || empty($_POST["txtMateria"]))){
        header('Location: index.php?mensaje=falta');
        exit();
     }

     include_once 'model/conexion.php';
     $nombre = $_POST['txtNombre'];
     $edad = $_POST['txtEdad'];
     $materia = $_POST['txtMateria'];

    $sentencia = $bd->prepare("INSERT INTO persona(nombre,edad,materia)VALUES(?,?,?);");
    $resultado = $sentencia->execute([$nombre,$edad,$materia]);

    if ($resultado === TRUE){
        header('Location: index.php?mensaje=registrado');
    }else{
       header('Location: index.php?mensaje=error');
    }

?>