<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <main>
        <article>
            <section>
                <form action="./home" method="POST" id="registro">
                    <h1>Registrate</h1>
                    <input type="email" name="email" placeholder="Correo electr&oacute;nico"><br/>
                    <input type="password" name="password" placeholder="Contrase&ntilde;a"><br/>
                    <input type="password" name="password2" placeholder="Repite la Contrase&ntilde;a"><br/>
                    <br>
                    <button  type="submit">Entrar</button>
                    <button type="reset">Limpiar</button>

                    <p>Ya tienes cuenta</p>
                    <p>
                        <a href="./login">Inicia Sesion</a>
                    </p>
                </form>
            </section>
        </article>
    </main>
    
</body>
</html>