<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../public/styles/global.css">

    <link rel="stylesheet" href="../../public/styles/storage.css">

    <title>Clantina | Estoque</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <h1>Estoque</h1>
        </header>
        <?php
            session_start(); 
        ?>

        <?php

            if(sizeof($_SESSION['list-items-categories']) > 0):

        ?>

        <section class="items">            
            <ul>               
            <?php                       
                foreach($_SESSION['list-items-categories'] as $item){
                    echo "<li class='item'><a href='../controllers/ItemController.php?action=1&id={$item->id}'> {$item->name} <img src='../../public/images/chevron-right.svg'></a></li>";
                }
            ?> 
            </ul>
        </section>

        <?php
            endif;
        ?>

        <?php

            if(sizeof($_SESSION['list-items-categories']) == 0):
            
        ?>

        <section class="empty-storage">
            <img src="../../public/images/frown.svg">
            Nenhum produto em estoque
        </section> 

        <?php
            endif;
        ?>

        <?php        
            if($_SESSION['type'] == 'seller'){
                require_once __DIR__ . "/components/storage-new-item.php";
            }            
        ?>        

    </main>

    <script src="../../public/scripts/back.js"></script>
</body>
</html>