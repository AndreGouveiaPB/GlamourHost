<?php
session_start();
?>
<html>
    <head>
        <title>GlamourHost</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />

        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body class="landing">

        <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <h1><a href="index.html">GlamourHost</a></h1>
                <nav id="nav">
                    <ul>
                        <li class="special">
                            <a href="usuario.php"><i class="fa fa-lock"></i> <?= $_SESSION['usuarionome'] ?></a>

                        </li>
                        <li class="special">
                            <a href="#menu" class="menuToggle"><span>Menu</span></a>
                            <div id="menu">
                                <ul>
                                    <li><a href="indexlogado.php">Home</a></li>
                                    <li><a href="servicos.html">Serviços</a></li>
                                    <li><a  href="contato.php">Contato</a></li>
                                    <li><a href="logoff.php"> <i class="fa fa-sign-out"></i> Sair</a>

                                </ul>
                            </div>

                    </ul>
                </nav>
            </header>

            <!-- Banner -->
            <section id="banner" style="background-image: url(img/img_background.jpg);">
                <div class="inner">
                    <h2>GlamourHost</h2>
                    <p>Agendamento online em Salões de Beleza</p>
                    <div>
                        <form class="form-inline" id="busca">
                            <input type="text" class="form-control" style="width: 40%; margin-left:30%;
                                   text-align: center; display: block; height: 50px; "size="50" 
                                   placeholder="Pesquise aqui o Serviço ou Salão" required><br />
                            <a href="servicos.html" class="button fa fa-search"></a>
                        </form>                
                    </div>  

                </div>
                <a href="#one" class="more scrolly">Continuar</a>
            </section>

            <!-- One -->
            <section id="one" class="wrapper style1 special">
                <div class="inner">
                    <header class="major">
                        <h2>Aproveite a comodidade e faça já seu Agendamento<br />
                            GlamourHost</h2>
                    </header>
                    <ul class="icons major">
                        <li><span class="icon fa-female major style1"><span class="label">Lorem</span></span></li>
                        <li><span class="icon fa-diamond major style2"><span class="label">Ipsum</span></span></li>
                        <li><span class="icon fa-male major style3"><span class="label">Dolor</span></span></li>
                    </ul>
                </div>
            </section>

            <!-- Two -->
            <section id="two" class="wrapper alt style2">
                <section class="spotlight">
                    <div class="image"><img src="img/ex1.jpg" alt="" /></div><div class="content">
                        <h2>Escova</h2>
                        <button type="submit" onclick="javascript: location.href = 'agendamento.php';" class="success"> Agendar</button>


                    </div>
                </section>
                <section class="spotlight">
                    <div class="image"><img src="img/ex2.jpg" alt="" /></div><div class="content">
                        <h2>Manicure</h2>
                        <button type="submit" onclick="javascript: location.href = 'agendamento.php';" class="success"> Agendar</button>

                    </div>
                </section>
                <section class="spotlight">
                    <div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
                        <h2>Augue eleifend aliquet<br />
                            sed condimentum</h2>
                        <p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
                    </div>
                </section>
            </section>

            <!-- Three -->
            <section id="three" class="wrapper style3 special">
                <div class="inner">
                    <header class="major">
                        <h2>Accumsan mus tortor nunc aliquet</h2>
                        <p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
                            fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
                    </header>
                    <ul class="features">
                        <li class="icon fa-paper-plane-o">
                            <h3>Arcu accumsan</h3>
                            <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                        </li>
                        <li class="icon fa-laptop">
                            <h3>Ac Augue Eget</h3>
                            <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                        </li>
                        <li class="icon fa-code">
                            <h3>Mus Scelerisque</h3>
                            <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                        </li>
                        <li class="icon fa-headphones">
                            <h3>Mauris Imperdiet</h3>
                            <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                        </li>
                        <li class="icon fa-heart-o">
                            <h3>Aenean Primis</h3>
                            <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                        </li>
                        <li class="icon fa-flag-o">
                            <h3>Tortor Ut</h3>
                            <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                        </li>
                    </ul>
                </div>
            </section>

         
            

            <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; GlamourHost</li><li>Design: Equipe GlamourHost</li>
                </ul>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>



