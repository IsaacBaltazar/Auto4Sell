<?php
    require_once("../controlador/controlador.php");
    @session_start();
    
    if(isset($_SESSION['usuario'])){
       $nombreU=$_SESSION['usuario'];


       $aAutos = a_Autos();
    }else{
        session_destroy();
        echo"<script>alert('No has iniciado sesión');
        window.location.href='../html/login.html';
        </script>";
    }


?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Auto4Sell</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/estiloLogin.css" />
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="../index.html" class="logo"><strong>Auto4Sell</strong></a>
                    <ul class="icons">
                        <li><a href="/controlador/conexión.php" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                    </ul>
                </header>

                <!-- Formulario -->
                <button role="link" onclick="window.location='autos.php'">Agregar Auto</button>
                <br>
                <table class="table">
                    <thead>
                        <tr class="" style="background: #C0FGF0; color:#000;">
                            <th class="text-center">Modelo</th>
                            <th class="text-center">Año</th>
                            <th class="text-center">Modelo</th>
                            <th class="text-center">Modificar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo ?>
                    </tbody>
                </table>





            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="homePageR.php">Inicio</a></li>
                        <li>
                            <span class="opener">Categorias</span>
                            <ul>
                                <li><a href="autos.php">Autos de importacion</a></li>
                                <li><a href="#">Deportivos</a></li>
                                <li><a href="#">Ultimos modelos</a></li>
                                <li><a href="#">Suburbanos</a></li>
                                <li><a href="#">Clasicos con estilo</a></li>
                                <li><a href="#">Compactos</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener"><?php echo $nombreU; ?></span>
                            <ul>
                                <li><a href="perfil.php">Perfil</a></li>
                                <li><a href="../controlador/logout.php">Cerrar sesion</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="#">Etiam Dolore</a></li>
                        <li><a href="#">Adipiscing</a></li>-->
                        
                    </ul>
                </nav>

                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                </footer>

            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>