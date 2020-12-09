<?php

$id =$_GET['link'];

$eso =  require('conection.php');
if($eso){
    $SELECT = "DELETE FROM `peliculas` WHERE `peliculas`.`id` = $id";
    $resultado = mysqli_query($conn,$SELECT);
    if($resultado){
        echo "eliminado con exito";
        header("Location: perfil-screen.php");
           
    }
    else{
        echo " se fue a la verga";
    }
}
?>