<?php

$email = $_POST['email'];
$password = $_POST['password'];


if(!empty($email) || !empty($password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword =  "";
    $dbname = "acj";

    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die("connect error(".mysql_connect_errno().")".mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT * from registro where email = ? and password = ? ";
       
        $stmt = $conn->prepare($SELECT);
        $stmt ->bind_param( "ss", $email,$password);
        $stmt ->execute();
        $stmt ->bind_result($email,$password);
        $stmt ->store_result();
        $rnum = $stmt->num_rows;
        
        // $rnum = 0;

        if($rnum == 1){
            $stmt ->close();
            echo "Log In Correcto";
            $eso =  require('conection.php');
            if($eso){
                $SELECT = "SELECT * FROM registro WHERE email = '$email'";
                $resultado = mysqli_query($conn,$SELECT);
                if($resultado){
                   
                    while($row = $resultado->fetch_array()){
                        $id = $row['id'];
                        // echo $row['id'];
                        session_start();
                        $_SESSION['id']=$id;
                        header("Location: perfil-screen.php");

                    }
                }
            }
            
            // header("Location: perfil-screen.php");

        }
        else{
            
            echo "informacion incorrecta";
            header("Location: log-in-replay.html");

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
