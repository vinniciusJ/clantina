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

    <title>Clantina | Item:Pão de queijo</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <img src="../../public/images/left-arrow.svg" alt="Voltar">
            <?php
                session_start();                
                echo "<h1>{$_SESSION['list-items'][0]->name}</h1>"
            ?>            
        </header>   

        <section class="item-infos">            
            <?php 
                if($_SESSION["type"] == "seller"){
                    echo "<p class='item-info'><strong>Quantidade: </strong><span> {$_SESSION['list-items'][0]->quantity} </span> uni.</p>";
                    echo "<p class='item-info'><strong>Preço: </strong>R$ <span>{$_SESSION['list-items'][0]->price} </span></p>";
                    echo "<p class='item-info'><strong>Custo: </strong>R$ <span> {$_SESSION['list-items'][0]->purchase_price}</span></p>";
                    echo "<footer class='footer'>
                            <button class='btn'>
                                <strong>Editar Item <img src='../../public/images/edit.svg' alt='Finalizar'></strong>   
                            </button>
                        </footer>";
                    }
                    else{
                        foreach($_SESSION['list-items'] as $item){
                            echo "<p class='item-info'><strong>Quantidade: </strong><span> {$item->quantity} </span> uni.</p>";
                            echo "<p class='item-info'><strong>Preço: </strong>R$ <span>{$item->price} </span></p>";
                            echo "<p class='item-info'><strong>Vendedor: </strong><span> {$item->seller}</span></p>";
                        }
                        
                    }
            ?>            
        </section>

    </main>
</body>
</html>