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
    <!-- stylo sign up -->
    <link rel="stylesheet" href="stylo-signup.css">
    <!-- stylo agregado -->
    <link rel="stylesheet" href="stylo-agregar.css">

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
                        <a href=""><img id="icon-logo" src="img/carrito.png" alt=""></a>
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
                            <li><a href="agregar.html">Agregar</a></li>
                            <li><a href="log-in.html">Log Out</a></li>
                        </ul>
                    </div>
                </div>

                <hr>

                <div class="container-signup">

                    <div class="container-form">
                        <div class="con-box">
                            <h2>Agregar</h2>
                            <hr>

                            <form action="agregar.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <!-- nombre -->
                                <div class="form-group">
                                    <div class="col-sm-12 box-ag">
                                        <div class="col-sm-12 email-box">
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                placeholder="Nombre" required>
                                        </div>
                                        <div class="col-sm-12 email-box">
                                            <input type="file" class="form-control" id="miniatura" name="miniatura"
                                            accept="image/*" required>
                                        </div>

                                        <div class="col-sm-12">
                                            <select class="form-control" id="year" name="year" required>
                                                <option value="" selected="1">Año</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                                <option value="1913">1913</option>
                                                <option value="1912">1912</option>
                                                <option value="1911">1911</option>
                                                <option value="1910">1910</option>
                                                <option value="1909">1909</option>
                                                <option value="1908">1908</option>
                                                <option value="1907">1907</option>
                                                <option value="1906">1906</option>
                                                <option value="1905">1905</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="link" name="link"
                                                placeholder="Link" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="descripcion" name="descripcion"
                                                placeholder="Descripcion" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="categoria" id="categoria" required>
                                                <option value="">Genero</option>
                                                <option value="Accion">Accion</option>
                                                <option value="Drama">Drama</option>
                                                <option value="Terror">Terror</option>
                                                <option value="Comedia">Comedia</option>
                                                <option value="Animada">Animada</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- boton sign up -->
                                    <div class="form-group">
                                        <div class="col-sm-offset">
                                            <a href="perfil-screen.html"><button type="submit"
                                                    class="btn btn-success col-sm-12">
                                                    Agregar
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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