<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $router->dep_css('style'); ?>">

</head>

<body>
    <main>
        <article>
            <section>
                <form action="./home" method="POST">
                    <h1>Inicia Sesion</h1>
                    <input type="email" name="email" placeholder="Correo electr&oacute;nico"><br />
                    <input type="password" name="password" placeholder="Contrase&ntilde;a"><br />
                    <br>
                    <button type="submit">Entrar</button>
                    <button type="reset">Limpiar</button>

                    <p>Aun no tienes cuenta ?</p>
                    <p>
                        <a href="./registro">Registrate</a>
                    </p>
                </form>
            </section>
        </article>
    </main>

</body>

</html>