    <?php

    use config\Router;
    require_once realpath('./vendor/autoload.php');
    require_once './app/config/MyRoutes.php';

    if ($router->peticion('ruta') === 'login') {
        require_once './app/controller/Login.php';
        $login = new Login();
        $login->index();
    }
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=$router->dep_css("style")?>">
        <title>Inicio</title>
    </head>
    <body>
        <a href="<?= $router->enlace("login"); ?>">Entrar</a>
    </body>
    </html>