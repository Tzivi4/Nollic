<?php

    session_start();

    require 'database.php';

    if(isset($_SESSION['user_id'])) {

        $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if(count($results) > 0) {
            $user = $results;
        }

    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nollic</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" 
      type="image/png" 
      href="assets/img/favicon.png">
      <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>

<body>
    <div class="header">
        <div class="logo">
            <span class="logoImg"><img width="50px" height="50px"
                    src="Nollic Recursos Gráficos/Logo Nollic sin texto negro PNG.png" alt=""></span>
            <h1 class="logoTitle">NOLLIC</h1>
        </div>
        <div class="rightMenu">
            <div class="themeChanger">
                <a class="aChanger"><i id="light" class="far fa-moon moon switch"></i></a>
            </div>

            <div class="menu">
                <?php if(!empty($user)): ?>

                <p> <?= $user['email'] ?> </p>
                <a href="logout.php"><span class="listSpan"> Salir</span></a>

                <?php else: ?>

                <a href="login.php"><span class="listSpan"> Login</span></a>
                <a href="signup.php"><span class="listSpan"> Signup</span></a>

                <?php endif; ?>
                <a href="categorias.html"><span class="listSpan"> Categorias</span></a>
            </div>
        </div>
    </div>
    <div class="content">

        <div class="banner">
            <div class="mailSoliciting">
                <input type="email" placeholder="Email..." id="mail">
                <a href="">
                    <div class="join">
                        <p id="p">Unirme</p>
                    </div>
                </a>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi inventore eveniet official
                </p>
            </div>
            <div class="spamSocial">
                <h2>Déjanos compartir contigo nuestros artículos...</h2>
                <h1>Únete a Nollic!</h1>
                <div class="contImg">
                    <a title="Instagram" href="https://www.instagram.com/nollic.live/"><img src="assets/img/insta.png" width="60px" height="60px" alt=""></a>
                    <a title="Twitter" href=""><img src="assets/img/tw.png" width="60px" height="60px" alt=""></a>
                    <a title="Facebook" href=""><img src="assets/img/face.png" width="60px" height="60px" alt=""></a>
                </div>
                <h2 id="follow">Síguenos!</h2>
            </div>
        </div>

        <h1 class="titleH1">Tendencias</h1>


        <div class="arts">
            <div class="main">

                <a id="aa1" title="6 Hábitos de los gatos que debes conocer" href="gatonoseque">

                    <div class="a1">
                        <h1>6 hábitos de los gatos que debes conocer</h1>
                        <h2>Gatos</h2>
                    </div>
                </a>

                <a id="aa2" title="15 Razas de perros" href="">
                    <div class="a1 a2">
                        <h1>15 Razas de perros</h1>
                        <h2>Perros</h2>
                    </div>
                </a>

                <a id="aa3" title="5 Trucos para Whatsapp" href="">
                    <div class="a1 a3">
                        <h1>5 Trucos para Whatsapp</h1>
                        <h2>Tecnología</h2>
                    </div>
                </a>

                <a id="aa4" href="">
                    <div class="a1 a4">
                        <h1>10 Cortes de pelo que estarán de moda este 2020</h1>
                        <h2>Style</h2>
                    </div>
                </a>

                <a id="aa5" title="Barcelona" href="">
                    <div class="a1 a5">
                        <h1>Barcelona</h1>
                        <h2>Fútbol</h2>
                    </div>
                </a>

                <a id="aa6" title="4 Tips para Telegram" href="">
                    <div class="a1 a6">
                        <h1>4 Tips para Telegram</h1>
                        <h2>Tecnología</h2>
                    </div>
                </a>

                <a id="aa7" title="Barcelona" href="">
                    <div class="a1 a7">
                        <h1>Tips para conseguir una pizza de restaurant</h1>
                        <h2>Comida</h2>
                    </div>
                </a>
                <a id="aa8" title="Barcelona" href="">
                    <div class="a1 a8">
                        <h1>Razones por la que el Joker 2019 es la mejor película</h1>
                        <h2>Entretenimiento</h2>
                    </div>
                </a>

                <a id="aa9" title="Barcelona" href="">
                    <div class="a1 a9">
                        <h1>Que hacer con los chicos en la cuarentena</h1>
                        <h2>Entretenimiento</h2>
                    </div>
                </a>
            </div>
        </div>

        

        <div class="slider">
            <div id="right"><i class="fas fa-chevron-right"></i></div>
            <ul class="ulSlider">
                <li><a title="Gatos" href="categorias.html"><img src="assets/img/slider/g1.jpeg" alt=""></a></li>

                <li><a title="Comida" href="categorias_comida.html"><img src="assets/img/slider/c1.jpeg" alt=""></a></li>

                <li><a title="Perros" href="perros.html"><img src="assets/img/slider/pr1.jpeg" alt=".jpg"></a></li>

                <li><a title="Plantas" href="plantas.html"><img src="assets/img/slider/p1.jpeg" alt=".jpg"></a></li>
            </ul>
            <div id="left"><i class="fas fa-chevron-left"></i></div>
        </div>
    </div>
    <div class="footer">
        <div class="preFooter">
            <li><a class="contactText" href="contact.html">Contáctanos</a></li>
            <ul class="redes">
                <li id="in"><a title="Instagram" href="https://www.instagram.com/nollic.live/"><img src="assets/img/insta.png" height="50px"
                            width="50px" alt=""></a></li>
                            <li id="tw"><a title="Twitter" href="https://twitter.com/Tzivi4"><img src="assets/img/tw.png" height="50px" width="50px"
                                alt=""></a></li>
                <li id="fa"><a title="Facebook" href="https://www.facebook.com/Gevi.Designs/"><img src="assets/img/face.png" height="50px"
                            width="50px" alt=""></a></li>
                
            </ul>
        </div>
        <div class="phoneNav">

            <a href="home.html" id="home"><i class="fas fa-home"></i></a>
            <a href="index.html" id="hot"><i class="fas fa-fire"></i></a>
            <a href="categorias.html" id="catBook"><i class="fas fa-book"></i></a>

        </div>
        <div class="contFooter">
            <a class="footerText" href="#">CopyRight 2019-2020 Nollic | All Rights Reserved</a>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/542a0b5b09.js" crossorigin="anonymous"></script>
    <script src="assets/JavaScript/main.js"></script>
</body>

</html>