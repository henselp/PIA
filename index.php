<?php
include './resources/consulta.php';
include './resources/conexion.php'; 
$Conexion = new conexion();
$Consulta = new Consultas($Conexion->conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <script src="https://kit.fontawesome.com/2c27531862.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="./inicio.php" class="sign-in-form" method="post">
                    <h2 class="title">Iniciar Sesión</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Correo" name="correo">
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-school"></i>
                            <select name="comunidad" class="select" id="select">
                                <option value="#">Comunity</option>
                                <option value="estudiante">Estudiante</option>
                                <option value="Auxiliar de Cocina">Auxiliar de Cocina</option>
                                <option value="Administradores">Administradores</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" name="pass">
                        </div>
                        <input type="submit" value="Login" class="btn solid">

                        <a href="#" class="social-text"><b>Olvidaste tu contraseña?</b></a>

                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>

                </form>

                <form action="./registro.php" class="sign-up-form" method="POST">
                    <h2 class="title">Registrarse</h2>
                    
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Nombre" name="nombre">
                        </div>

                        <div class="input-field">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" placeholder="Apellido" name="apellido">
                        </div>

                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Email" name="email">
                        </div>

                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Grado" name="grado">
                        </div>

                        <div class="input-field">
                            <i class="fa-regular fa-address-book"></i>
                            <input type="text" placeholder="Tarjeta Identidad" name="pass">
                        </div>

                        <input type="submit" value="Crear" class="btn solid">

                        <p class="social-text">O inicia sesión con estas plataformas</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>

                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Eres nuevo?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Magnam dignissimos cum quasi.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>

                <img src="assets/undraw_chef_cu-0-r.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Ya tienes cuenta?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Magnam dignissimos cum quasi.</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>

                <img src="assets/undraw_cooking_p7m1.svg" class="image" alt="" style="height: 300px; width:300px;">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>