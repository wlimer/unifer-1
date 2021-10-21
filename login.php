<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
<body>
    <main>

        <div class="contenedor__todo">

          

            <div class="contenedor__login-register">
                <form action="servicios/login.php" method="POST" class="formulario__login" name="form1" onsubmit="return validar1()">
                    <H2>Iniciar Sesion</H2>
                    <Input type="text" placeholder="Correo Electronico" id="correo1" name="emausu">
                    <input type="password" placeholder="Contraseña" id="contraseña3" name="pasusu">
                    <div class="box__back-register">
                
                    <button id="Ingresar">Entrar</button>
                  
                </form>

                
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>

</html>