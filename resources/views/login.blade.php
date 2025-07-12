<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sion Wireless - Login</title>
    <link rel="stylesheet" href="{{ asset('css/estilogin.css') }}">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: whitesmoke;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contenedor-principal {
            display: flex;
            width: 100%;
            max-width: 1000px;
            height: auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .contenedor {
            width: 70%;
            padding: 20px;
        }

        .imagen-derecha {
            width: 70%;
            background-image: url('{{ asset('img/LOGO/logoCONfondo.jpeg') }}');
            background-size: cover;
            background-position: center;
        }

        .formulario {
            background: linear-gradient(to bottom, #00BFFF, #1E90FF);
            border-radius: 20px;
            padding: 20px;
            position: relative;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            color: white;
        }

        .formulario input {
            width: 100%;
            padding: 8px;
            margin: 6px 0;
            border-radius: 10px;
            border: none;
        }

        .formulario button {
            width: 100%;
            padding: 10px;
            background: white;
            color: black;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            margin-top: 10px;
            cursor: pointer;
        }

        .formulario a {
            color: white;
            text-decoration: underline;
        }

        .logo {
            width: 80px;
            display: block;
            margin: 0 auto 10px auto;
            border-radius: 10px;
        }

        .oculto {
            display: none;
        }

        .cerrar {
            position: absolute;
            top: 5px;
            right: 10px;
            font-size: 18px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .contenedor-principal {
                flex-direction: column;
                width: 95%;
            }

            .contenedor, .imagen-derecha {
                width: 100%;
            }

            .imagen-derecha {
                height: 200px;
            }
        }
    </style>
</head>
<body>

<div class="contenedor-principal">
    <div class="contenedor">
        <div class="formulario" id="form-login">
            <span class="cerrar" onclick="toggleForm()">×</span>
            <img src="{{ asset('img/LOGO/logoCONfondo.jpeg') }}" alt="Sion Wireless" class="logo">
            <h3>Iniciar sesión</h3>
            <form method="POST" action="procesar_login.php">
                <input type="email" name="correo" placeholder="Correo electrónico..." required>
                <input type="password" name="password" placeholder="Contraseña..." required>
                <button type="submit">Entrar</button>
            </form>
            <p>¿No tienes una cuenta? <a href="#" onclick="toggleForm()">Regístrate</a></p>
        </div>

        <div class="formulario oculto" id="form-registro">
            <span class="cerrar" onclick="toggleForm()">×</span>
            <img src="{{ asset('img/LOGO/logoCONfondo.jpeg') }}" alt="Sion Wireless" class="logo">
            <h3>Registro</h3>
            <form method="POST" action="procesar_registro.php">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellidos" placeholder="Apellidos" required>
                <input type="email" name="correo" placeholder="Correo electrónico" required>
                <input type="text" name="celular" placeholder="Número de celular" required>
                <input type="text" name="codigo_postal" placeholder="Código postal" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">Crear</button>
            </form>
            <p>¿Ya tienes una cuenta? <a href="#" onclick="toggleForm()">Inicia sesión</a></p>
        </div>
    </div>

    <div class="imagen-derecha">
        <!-- Imagen de cámara aquí -->
    </div>
</div>

<script>
function toggleForm() {
    document.getElementById('form-login').classList.toggle('oculto');
    document.getElementById('form-registro').classList.toggle('oculto');
}
</script>

</body>
</html>