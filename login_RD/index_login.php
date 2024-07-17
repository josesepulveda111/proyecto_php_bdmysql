<?php
session_start();
if(isset($_SESSION['doc'])){

    echo "<script>window.location='dashboard.php';</script>";
}
?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Replace Dislexia</title>
    <link rel="stylesheet" href="./src/main.css">
</head>
<body>
    <div class="container">
        <form class="form" id="login" action="codigo_login.php" method="post">
            <center>
            <img src="./imgs/Dyslexia_Logo(wide_darktext)@4x.png" width="250px" height="70px">
            </center>
            <h1 class="form__title">Iniciar sesión</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="email" autofocus placeholder="Email"> 
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="pass" autofocus placeholder="Contraseña">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="btn_login">Continuar</button>
            <p class="form__text">
                <a href="#" class="form__link">Olvidaste su contraseña?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">No tienes cuenta? Crear cuenta</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount" action="codigo_registrar.php" method="post">
            <center>
            <img src="./imgs/Dyslexia_Logo(wide_darktext)@4x.png" width="250px" height="70px">
            </center>
            <h1 class="form__title">Crear cuenta</h1>
            <div class="form__message form__message--error"></div>

            <select class="form__input" name="tipo_doc"  aria-label>
                <option selected>Seleccione Tipo de Documento</option>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="CE">Cédula de Extranjería</option>
                <option value="RC">Registro civil</option>
                <option value="PT">Pasaporte</option>
                <div class="form__input-error-message"></div>
            </select>
            <br>

            <div class="form__input-group">
                <input type="number" class="form__input" name="doc" autofocus placeholder="Documento de identidad">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="textr" class="form__input" name="p_n" autofocus placeholder="Primer Nombre">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="textr" class="form__input" name="s_n" autofocus placeholder="Segundo Nombre">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="textr" class="form__input" name="p_a" autofocus placeholder="Primer Apellidos">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="textr" class="form__input" name="s_a" autofocus placeholder="Segundo Apellidos">
                <div class="form__input-error-message"></div>
            </div>


            <div class="form__input-group">
                <input type="date" class="form__input" name="f_n" autofocus placeholder="Fecha nacimiento">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="text" class="form__input" name="email" autofocus placeholder="Dirección de Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="pass1" pattern="[A-Za-z0-9]+" autofocus placeholder="Contraseña" tittle="Xd">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="pass2" autofocus placeholder="Confirmar contraseña">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="btn_registrar">Continuar</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Ya tienes cuenta? Inicia sesión</a>
            </p>
        </form>
    </div>
    <script src="./src/main.js"></script>
    <script src="java.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>