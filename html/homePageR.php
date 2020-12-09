<?php
    require_once("../controlador/controlador.php");
    @session_start();
    
    if(isset($_SESSION['usuario'])){
       $nombreU=$_SESSION['usuario'];
    }else{
        session_destroy();
        echo"<script>alert('No has iniciado sesión');
        window.location.href='../html/login.html';
        </script>";
    }


?>


<html>

<head>
    <title>Auto4Sell</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="index.html" class="logo"><strong>Auto4Sell</strong></a>
                    <ul class="icons">
                        <li><a href="../controlador/conexión.php" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                    </ul>
                </header>

                <!-- Banner -->
                <section id="banner">
                    <div class="content">
                        <header>
                            <h1>Buen día <br/> <?php echo $nombreU; ?> <strong>Bienvenido a</strong><br /> Auto4Sell</h1>
                            <p>Su sitio de compra-venta de autos</p>
                        </header>
                        <p>Este mensaje sólo se puede ver si accediste como usuario.</p>
                        <ul class="actions">
                            <!--<li><a href="html/registroUsuario.html" class="button big">Registrarse</a></li>-->
                        </ul>
                    </div>
                    <span class="image object">
										<img src="../images/imgPrincipal.jpg" alt="" />
									</span>
                </section>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Te ofrecemos</h2>
                    </header>
                    <div class="features">
                        <article>
                            <span class="icon fa-gem"></span>
                            <div class="content">
                                <h3>La mejor calidad en autos</h3>
                                <p>Queremos ofrecerte los autos en mejores condiciones y con los mejores cuidados. Para ello tenemos a los mejores técnicos y mecánicos.</p>
                            </div>
                        </article>
                        <article>
                            <span class="icon solid fa-paper-plane"></span>
                            <div class="content">
                                <h3>Autos importados</h3>
                                <p>Además de contar con un gran catálogo de autos nacionales, estamos en constante actualización para ofrecer lo mejor en el mercado global.</p>
                            </div>
                        </article>
                        <article>
                            <span class="icon solid fa-rocket"></span>
                            <div class="content">
                                <h3>Más que un auto</h3>
                                <p>Sabemos que al elegir tu próximo vehículo no solo lo buscas por su utilidad, ayudamos a crear ese vinculo entre máquina y hombre</p>
                            </div>
                        </article>
                        <article>
                            <span class="icon solid fa-signal"></span>
                            <div class="content">
                                <h3>Somos los mejores</h3>
                                <p>Nuestros clientes, promociones y prestigio hablan de la calidad y buen trato que tenemos para ti.</p>
                            </div>
                        </article>
                    </div>
                </section>
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
                                <li><a href="autosReg.php">Autos de importacion</a></li>
                                <!--<li><a href="#">Deportivos</a></li>
                                <li><a href="#">Ultimos modelos</a></li>
                                <li><a href="#">Suburbanos</a></li>
                                <li><a href="#">Clasicos con estilo</a></li>
                                <li><a href="#">Compactos</a></li>
                                <li><a href="autosReg.php">Autos registrados</a></li>-->
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