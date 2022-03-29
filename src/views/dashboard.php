<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../public/styles/global.css">

    <link rel="stylesheet" href="../../public/styles/dashboard.css">

    <title>Clantina | Dashboard</title>
</head>
<body>
    <main class="container">
        <header class="dashboard-header">
            <h1 class="dashboard-header__title"><span class="dashboard-header__title--yellow">Clan</span>tina</h1>
        </header>

        <?php
                  
            if($_SESSION['type'] == 'seller'){
                require_once __DIR__ . "/components/dashboard-new-sale-button.php";
            } elseif($_SESSION['type'] == 'client'){
                header("Location:../views/storage.php");     
                exit();
            }
        ?>        

        <nav class="dashboard-menu">
            <ul>
                <li class="dashboard-menu__item">
                    <a href="../controllers/SaleController.php?action=2">Vendas <span class="dashboard-menu__item--chevron"><img src="../../public/images/right-chevron.svg" alt="Seta apontando para direits"></span></a>
                </li>
                <li class="dashboard-menu__item">
                    <a href="../controllers/ItemController.php?action=2">Estoque <span class="dashboard-menu__item--chevron"><img src="../../public/images/right-chevron.svg" alt="Seta apontando para direits"></span></a>
                </li>

                <?php if($_SESSION['type'] == 'admin'): ?>
                    <li class="dashboard-menu__item">
                        <a href="">Cadastro de Usuário <span class="dashboard-menu__item--chevron"><img src="../../public/images/right-chevron.svg" alt="Seta apontando para direits"></span></a>
                    </li>
                    <li class="dashboard-menu__item">
                        <a href="">Tipos de item <span class="dashboard-menu__item--chevron"><img src="../../public/images/right-chevron.svg" alt="Seta apontando para direits"></span></a>
                    </li>
                <?php endif?>
            </ul>
        </nav>
    </main>

</body>
</html>