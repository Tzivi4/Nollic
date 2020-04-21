<?php

    require 'database.php';

    $message = '';

    if(!empty($_POST['email']) && !empty($_POST['password'])) {

        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $passConfirm = $_POST['confirm_password'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if($stmt->execute()) {

            if(empty($passConfirm)) {
                $message = 'Confirma la contraseña';
            }

            $message = $passConfirm;

        } else {

            $message = 'Intenta Nuevamente';

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/stylesLogin.css">
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
                <a href="index.php"><span class="listSpan"> Inicio</span></a>
                <a href="categorias.html"><span class="listSpan"> Categorias</span></a>
            </div>
        </div>
    </div>

    <div class="form">
        <form action="signup.php" method="POST">
        <input class="inputs" type="text" name="email" placeholder="Email">
        <input class="inputs" type="password" name="password" placeholder="Contraseña">
        <input class="inputs" type="password" name="confirm_password" placeholder="Confirmar contraseña">
        <?php if(!empty($message)): ?>
            <p> <?= $message ?> </p>
        <?php endif; ?>
        <input class="submit" type="submit" value="Registrarse">
        <a href="login.php"><span class="span2">Iniciar Sesión</span></a>
        </form>
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
    
</body>
</html>