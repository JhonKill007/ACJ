<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$password = $_POST['password'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$genero = $_POST['genero'];
$birthday = $year."/".$month."/".$day;

if(!empty($nombre) || !empty($apellido) || !empty($numero) || !empty($email) || !empty($password) || !empty($day) || !empty($month) || !empty($year) || !empty($genero)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword =  "";
    $dbname = "acj";

    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die("connect error(".mysql_connect_errno().")".mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT * from registro where email = ? ";
        $INSERT = "INSERT INTO registro (nombre,apellido,numero,email,password,birthday,genero)values(?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt ->bind_param( "s", $email);
        $stmt ->execute();
        $stmt ->bind_result($email);
        $stmt ->store_result();
        $rnum = $stmt->num_rows;
        
        // $rnum = 0;

        if($rnum == 0){
            $stmt ->close();
            $stmt = $conn->prepare($INSERT);
            $stmt ->bind_param( "sssssss", $nombre,$apellido,$numero,$email,$password,$birthday,$genero);
            $stmt ->execute();
            echo "REGISTRADO";
            header("Location: perfil-screen.php");

        }
        else{
            
            echo "email registrado";
            header("Location: signup-replay.html");

        }
        $stmt->close();
        $conn->close();
    }
}
else{
    echo "todos los datos son OBLIGATORIOS";
    die();
}
?>
