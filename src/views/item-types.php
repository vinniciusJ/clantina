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

    <title>Clantina | Tipos de item</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <h1>Tipos de Item</h1>
        </header>

        <ul class="items">
            <?php 
            session_start();
            foreach($_SESSION["itemsTypes"] as $type){
                echo "<li class='item'><span>{$type->name}</span></li>";
            }
            ?>                        
        </ul>

        <footer>
            <a href="new-item-type.php">
                <button class="btn">
                    <strong>Criar tipo de Item <img src="../../public/images/plus.svg" alt="Finalizar"></strong>
                </button>
            </a>
        </footer>
    </main>

    <script src="../../public/scripts/back.js"></script>
</body>