<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LION</title>
    <?php 

    include ("includes/head-setup.php");

    ?>
    <script type="text/javascript">
        document.oncontextmenu = function() {
            return false;
        }

    </script>

</head>

<body>
    <header>
        <?php 

    include ("includes/header.php");

    ?>
    </header>
    <main>

        <?php

        if (isset($_GET["path"])){

          if($_GET["path"]=="home"||
            $_GET["path"]=="about"||
            $_GET["path"]=="lidership"||
            $_GET["path"]=="urban-service"||
            $_GET["path"]=="interprovincial-service"
          ){

            include "pages/".$_GET["path"].".php";

          }else {

            include "pages/404.php"; 

          }  

        }else{

          include "pages/home.php";

        } 

        ?>
    </main>
    <footer>

        <?php 

    include ("includes/footer.php");

    ?>
    </footer>
</body>

</html>
