<?php
session_start();
$id = $_SESSION['id'];



$eso =  require('conection.php');
if($eso){
    $SELECT = "SELECT * FROM registro WHERE id=$id";
    $resultado = mysqli_query($conn,$SELECT);
    if($resultado){
        
        $row = $resultado->fetch_array();
        $id = $row['id'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $numero = $row['numero'];
        $email = $row['email'];
        $password = $row['password'];
        $birthday = $row['birthday'];
        $genero = $row['genero'];
        
           
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La mejor pagina para la compra y venta de articulos online.">
    <meta name="autor" content="Jhon David" />

    <!-- titulo -->
    <title>ACJ - Trailers Movie</title>

    <!-- links -->
    <!-- icono -->
    <link rel="icon" type="imagen/png" href="img/icon.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- font oswald -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">


    <!-- style bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!-- stylo principal -->
    <link rel="stylesheet" href="stylo.css">
    <!-- stylo logeados -->
    <link rel="stylesheet" href="stylo-logueados.css">
    <!-- stylo perfil -->
    <link rel="stylesheet" href="stylo-perfil.css">
    <!-- stylo inicio -->
    <link rel="stylesheet" href="stylo-catalogo.css">

</head>

<body>
    <div class="container-one" onload="time()">
        <!-- body -->
        <!-- boton escondido de menu -->
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>

        <!-- barra lateral -->
        <nav class="bar-main">

            <ul class="bar-menu">
                <div class="menu-btn-two">
                    <i class="fas fa-bars"></i>
                </div>
                <a href="perfil-screen.php"><img src="img/usuario.png" alt=""></a>
                <li><a href="perfil-screen.php"><?php echo $nombre." ".$apellido; ?></a></li>
                

            </ul>
        </nav>

        <!-- new barra -->
        <div class="barra-inicio-new">
            <!-- componentes -->
            <nav class="nav-main">
                <ul>
                    <li>
                        <!-- logo -->
                        <a href="index copy.php"><img id="logo" src="img/logo.png" alt=""></a>
                    </li>
                    <li>
                        <!-- container -->
                        <div class="middle-nav">
                            <!-- caja de busqueda -->
                            <form action="busqueda copy.php" method="POST" class="form-horizontal">
                                <input type="search" name="search-box" placeholder="Que estas buscando?" id="search-box">
                                <!-- boton buscar -->
                                <button id="search-boton" type="submit">Buscar</button>
                            </form>

                            <!-- combo-box -->
                            <select name="select" id="combo-box" aria-placeholder="Categorias">

                                <option value="value1" selected>Categorias</option>
                                <option value="value2">Electronica</option>
                                <option value="value2">moda y Belleza</option>
                                <option value="value3">Deportes</option>
                                <option value="value3">Bebes y Niños</option>
                                <option value="value3">Automotriz</option>
                                <option value="value3">Hogar y Cocina</option>
                            </select>

                        </div>
                    </li>
                    <li>
                        <!-- boton log -->
                        <div class="img-barra">
                            <a href=""><img id="usuario-photo" src="img/usuario.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <!-- carrito -->
                        <a href="perfil-screen.php"><img id="icon-logo" src="img/carrito.png" alt=""></a>
                    </li>
                </ul>

            </nav>

        </div>

        <!--container-two-->
        <section class="container-two">

            <!-- espacio bajo la barra principal -->

            <!-- <div class="caja">
                <h2>.</h2>
            </div> -->

            <!-- nav-two -->
            <nav class="nav-main-two">
                <div class="nav-box">
                    <ul class="nav-menu">
                        <li><a href="index copy.php">Inicio</a></li>
                        <li><a href="accion copy.php">Accion</a></li>
                        <li><a href="drama copy.php">Drama</a></li>
                        <li><a href="terror copy.php">Terror</a></li>
                        <li><a href="comedias copy.php">Comedias</a></li>
                        <li><a href="animadas copy.php">Animadas</a></li>
                    </ul>
                </div>
            </nav>

            <div class="container-perfil">
                <div class="cover-background">
                    <div class="perfil-img">
                        <img src="img/usuario.png" alt="">
                    </div>
                </div>
                <H2><?php echo $nombre." ".$apellido; ?></H2>

                

                <div class="nav-main-perfil">
                    <div class="nav-box-pefil">
                        <ul class="nav-perfil-menu">
                            <li><a href="perfil-screen.php">Catalogo</a></li>
                            <li><a href="agregar-.php">Agregar</a></li>
                            <li><a href="log-in.html">Log Out</a></li>
                        </ul>
                    </div>
                </div>

                <hr>

                <!-- catalogo-->
<?php
$eso =  require('conection.php');
if($eso){
    $SELECT = "SELECT * FROM Peliculas ORDER BY id DESC";
    $resultado = mysqli_query($conn,$SELECT);
    if($resultado){
        ?>
        <h2 class="cat">Catalogo</h2>
        <section class="products">
        <?php
        while($row = $resultado->fetch_array()){
            $id = $row['id'];
            $nombre = $row['nombre'];
            $miniatura = $row['miniatura'];
            $year = $row['año'];
            $link = $row['link'];
            $descripcion = $row['descripcion'];
            $categoria = $row['categoria'];
            ?>
                <!-- posicion 1 -->
                <div><a href="pelicula-copy.php?link=<?php echo $id;?>">
                        
                        <?php $id= $row['id']; ?>
                        <img src=<?php echo $row['miniatura']; ?> alt="">
                        <label><?php echo $row['nombre']; ?></label>
                        <br>
                        <a href="update.php?link=<?php echo $id;?>"><button class="btn btn-success col-sm-8">Update</button></a>
                        <br>
                        <a href="delete.php?link=<?php echo $id;?>"><button class="btn btn-danger col-sm-8">Delete</button></a>
                    </a></div>
                
            
            <?php
        }
        ?>
        </section>
        <?php
    }
}
?>
            

                <br>
                <br>

            </div>


            <!-- links sociales -->
            <section class="social">
                <p>Follow ACJ</p>
                <div class="links">
                    <a href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-linkedin"></i>
                    </a>

                </div>
            </section>

        </section>

        <!-- links footer -->
        <div class="footer-links">
            <div class="footer-container">
                <ul>
                    <li>
                        <a href="index copy.php">Inicio</a>
                    </li>
                    <li>
                        <a href="accion copy.php">Accion</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="signup.html">Sing Up</a>
                    </li>
                    <li>
                        <a href="drama copy.php">Drama</a>
                    </li>

                </ul>
                <ul>
                    <li>
                        <a href="animadas copy.php">Animadas</a>
                    </li>
                    <li>
                        <a href="terror copy.php">Terror</a>
                    </li>
                </ul>

            </div>

        </div>

        <!-- footer -->
        <footer class="footer">
            <h3>©ACJ 2020</h3>
        </footer>

    </div>

    <script src="main-inicio.js"></script>
    <script src="slide.js"></script>
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>