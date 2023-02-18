<?php
include  "../app/config.php";
include  "../app/Libraries/Rota.php";
include  "../app/Libraries/Controller.php";
include  "../app/Libraries/Database.php";

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=APP_NOME?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=URL?>/public/css/estilo.css">
    </head>
    <body>
        <?php
        include APP . "/Views/assets/header.php";
       
        $rotas = new Rota();
        include APP . "/Views/assets/footer.php";
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
        <script src="<?=URL?>/public/js/js.js" ></script>
    </body>
</html>