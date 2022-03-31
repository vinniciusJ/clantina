<?php
    session_start();                
?>  

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

    <link rel="stylesheet" href="../../public/styles/item.css">

    <title>Clantina | <?php echo "{$_SESSION['list-items'][0]->name}" ?>   </title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <?php
                echo "<h1>{$_SESSION['list-items'][0]->name}</h1>"
            ?>            
        </header>   
                   
            <?php 
                if($_SESSION["type"] == "seller"){
                    echo '<section class="item-infos"> ';
                    echo "<p class='item-info'><strong>Quantidade: </strong><span> {$_SESSION['list-items'][0]->quantity} </span> uni.</p>";
                    echo "<p class='item-info'><strong>Preço: </strong>R$ <span>{$_SESSION['list-items'][0]->price} </span></p>";
                    echo "<p class='item-info'><strong>Custo: </strong>R$ <span> {$_SESSION['list-items'][0]->purchase_price}</span></p>";
                    echo "<footer class='footer'>
                            <a class='link-btn' href='edit-item.php'>
                                <button class='btn'>
                                    <strong>Editar Item <img src='../../public/images/edit.svg' alt='Editar Item'></strong>
                                </button>
                            </a>
                            <a class='link-btn' href='discard-items.php'>
                                <button type='button' class='btn btn-black'>
                                    <strong>Descartar Itens <img src='../../public/images/x.svg' alt='Descartar Item'></strong>
                                </button>
                            </a>
                        </footer>";
                    echo '</section>';
                    }
                    else{
                        foreach($_SESSION['list-items'] as $item){
                            echo '<section class="item-infos"> ';
                            echo "<p class='item-info'><strong>Quantidade: </strong><span> {$item->quantity} </span> uni.</p>";
                            echo "<p class='item-info'><strong>Preço: </strong>R$ <span>{$item->price} </span></p>";
                            echo "<p class='item-info'><strong>Vendedor: </strong><span> {$item->seller}</span></p>";
                            echo '</section>';
                            echo "<br>";
                            echo '<hr>';
                            echo "<br>";
                        }
                        
                    }
            ?>                    

    </main>

    <script src="../../public/scripts/back.js"></script>
</body>
</html>