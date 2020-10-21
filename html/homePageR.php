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
                            <h1>Buen día <br/> <strong>Bienvenido a</strong><br /> Auto4Sell</h1>
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

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Nuestras categorías</h2>
                    </header>
                    <div class="posts">
                        <article>
                            <a href="#" class="image"><img src="../images/impAutImpor.jpg" alt="" /></a>
                            <h3>Autos de importación</h3>
                            <p>Contamos con diversos vehículos de todas partes del mundo.</p>
                            <ul class="actions">
                                <li><a href="#" class="button">Ver más</a></li>
                            </ul>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../images/imgAutDepo.jpg" alt="" /></a>
                            <h3>Deportivos</h3>
                            <p>Para ese aventurero que vive dentro de ti.</p>
                            <ul class="actions">
                                <li><a href="#" class="button">Ver más</a></li>
                            </ul>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../images/imgAutUlMod.jpg" alt="" /></a>
                            <h3>Últimos modelos</h3>
                            <p>Contamos con lo más actual del mercado.</p>
                            <ul class="actions">
                                <li><a href="#" class="button">Ver más</a></li>
                            </ul>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../images/imgAutSub.jpg" alt="" /></a>
                            <h3>Suburbanos</h3>
                            <p>Vehículos con gran capacidad y comfort.</p>
                            <ul class="actions">
                                <li><a href="#" class="button">Ver más</a></li>
                            </ul>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../images/imgAutClasic.jpg" alt="" /></a>
                            <h3>Clásicos con estilo</h3>
                            <p>Los mejores autos clásicos.</p>
                            <ul class="actions">
                                <li><a href="#" class="button">Ver más</a></li>
                            </ul>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../images/imgAutCompac.jpg" alt="" /></a>
                            <h3>Compactos</h3>
                            <p>Vehículos pequeños para mejor practicidad.</p>
                            <ul class="actions">
                                <li><a href="#" class="button">Ver más</a></li>
                            </ul>
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
                        <li><a href="../controlador/logout.php">Cerrar sesión</a></li>
                        <li><a href="generic.html">Generic</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li>
                            <span class="opener">Submenu</span>
                            <ul>
                                <li><a href="#">Lorem Dolor</a></li>
                                <li><a href="#">Ipsum Adipiscing</a></li>
                                <li><a href="#">Tempus Magna</a></li>
                                <li><a href="#">Feugiat Veroeros</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Etiam Dolore</a></li>
                        <li><a href="#">Adipiscing</a></li>
                        <li>
                            <span class="opener">Another Submenu</span>
                            <ul>
                                <li><a href="#">Lorem Dolor</a></li>
                                <li><a href="#">Ipsum Adipiscing</a></li>
                                <li><a href="#">Tempus Magna</a></li>
                                <li><a href="#">Feugiat Veroeros</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Maximus Erat</a></li>
                        <li><a href="#">Sapien Mauris</a></li>
                        <li><a href="#">Amet Lacinia</a></li>
                    </ul>
                </nav>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Ante interdum</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <a href="#" class="image"><img src="../images/pic07.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../images/pic08.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../images/pic09.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                    </div>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </section>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Get in touch</h2>
                    </header>
                    <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <ul class="contact">
                        <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                        <li class="icon solid fa-phone">(000) 000-0000</li>
                        <li class="icon solid fa-home">1234 Somewhere Road #8254<br /> Nashville, TN 00000-0000</li>
                    </ul>
                </section>

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