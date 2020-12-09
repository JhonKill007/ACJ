<?php
$ruta= 'images/'.$_FILES['miniatura']['name'];
if ($ruta !='images/'){
    move_uploaded_file($_FILES['miniatura']['tmp_name'],$ruta);
}
else{
    $ruta=null;
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$miniatura = $ruta;
$year = $_POST['year'];
$link = $_POST['link'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];

if(!empty($nombre) && !empty($miniatura) && !empty($year) && !empty($link) && !empty($descripcion) && !empty($categoria)){
    require('conection.php');
    if(mysqli_connect_error()){
        die("connect error(".mysql_connect_errno().")".mysqli_connect_error());
    }
    else{
        $UPDATE = "UPDATE peliculas SET nombre='$nombre',miniatura='$miniatura',año='$year',link='$link',descripcion='$descripcion',categoria='$categoria' Where id='$id'";
        $resultado = $conn->query($UPDATE);

        if($resultado){
            echo 'Editado';
            header("Location: perfil-screen.php");
        }
        else{
            echo "se fue a la verga";
        }
    }
}

elseif(!empty($nombre) || !empty($year) || !empty($link) || !empty($descripcion) || !empty($categoria)){
    require('conection.php');
    if(mysqli_connect_error()){
        die("connect error(".mysql_connect_errno().")".mysqli_connect_error());
    }
    else{
        $UPDATE = "UPDATE peliculas SET nombre='$nombre',año='$year',link='$link',descripcion='$descripcion',categoria='$categoria' Where id='$id'";
        $resultado = $conn->query($UPDATE);

        if($resultado){
            echo 'Editado';
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