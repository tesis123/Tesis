<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <title> Usuarios </title>
 </head>
 <body>
    <h1> Bienvenido/a <?php echo $usuario ?> </h1>
    <p>
       <a href="<?php echo base_url() ?>Home/cerrar_sesion"> Cerrar sesión </a>
    </p>
 </body>
</html>