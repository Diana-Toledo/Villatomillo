
<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
    if(isset($_SESSION['nom'])){
        if($_SESSION['tipo']=="a"){
            include 'php/menu_adm.php';
        }
        elseif($_SESSION['tipo']=="f"){
            include 'php/menu_for.php';
        }
        elseif($_SESSION['tipo']=="p"){
            include 'php/menu_prom.php';
        }
    }
    else{ ?>

    <header>
        <section>
            <a href="index.php" id="logo" target="_blank">SIMPLON</a>
            <label for="toggle-1" class="toggle-menu">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </label>
            <input type="checkbox" id="toggle-1">
            <nav>
                <ul>
                    <li><a href="php/formulario_registro.php">Registrarse</a></li>
                    <li><a href="php/formulario_login.php">Login</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <section class="content">
        <h1>Acceso a Base de Datos</h1>
        <img src="img/Simplon-logo.png" alt="">
    </section>

    <?php
    }
    ?>
</body>

</html>