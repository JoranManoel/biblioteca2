<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <?php 
        session_start();
        if(!isset($_SESSION['usuario'])){
            header('Location: login.php');
        }

        include "view/menu.php"
    ?>
    <h1>Início</h1>

</body>
</html>