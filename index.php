<!DOCTYPE html>
<html>
    <head>
        <title>envio email anonimo</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        
        <form method="post">
            <input type="text" placeholder="name" name="name" required="">
            <input type="email" placeholder="email" name="email" required="">
            <input type="text" placeholder="asunto" name="asunto" required="">
            <textarea placeholder="mensaje" name="msg"></textarea>
            <input type="submit" name="enviar">
        </form>
        <?php require_once('correo.php'); ?>
    </body>

    
</html>