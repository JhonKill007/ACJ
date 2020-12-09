<?php
$word = $_POST['search-box'];

if(!empty($word)){
    // header("Location: busqueda.php");
    echo $word;

}
else{
    echo "todos los datos son OBLIGATORIOS";
    die();
}
?>