<?php

$ruta= 'images/'.$_FILES['miniatura']['name'];
move_uploaded_file($_FILES['miniatura']['tmp_name'],$ruta);

$id = 0;
$nombre = $_POST['nombre'];
$miniatura = $ruta;
$year = $_POST['year'];
$link = $_POST['link'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];

if(!empty($nombre) || !empty($miniatura) || !empty($year) || !empty($link) || !empty($descripcion) || !empty($categoria)){
    require('conection.php');
    if(mysqli_connect_error()){
        die("connect error(".mysql_connect_errno().")".mysqli_connect_error());
    }
    else{   
        $INSERT = "INSERT INTO peliculas (id,nombre,miniatura,año,link,descripcion,categoria)values('$id','$nombre','$miniatura','$year','$link','$descripcion','$categoria')";
        $resultado = $conn->query($INSERT);

        if($resultado){
            echo 'esta en la base de datos';
            header("Location: perfil-screen.php");
        }
        else{
            echo "se fue a la verga";
        }
    }
}
else{
    echo "todos los datos son OBLIGATORIOS";
    die();
}
?>