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
            <img src="../../public/images/left-arrow.svg" alt="Voltar">
            <h1>Estoque</h1>
        </header>

        <?php

        if($condition = true):

        ?>

        <section class="items">
            <ul>
                <li class="item"><a href="">Pão de queijo <img src="../../public/images/chevron-right.svg"></a></li>
                <li class="item"><a href="">Pão de queijo <img src="../../public/images/chevron-right.svg"></a></li>
                <li class="item"><a href="">Pão de queijo <img src="../../public/images/chevron-right.svg"></a></li>
                <li class="item"><a href="">Pão de queijo <img src="../../public/images/chevron-right.svg"></a></li>
                <li class="item"><a href="">Pão de queijo <img src="../../public/images/chevron-right.svg"></a></li>
                <li class="item"><a href="">Pão de queijo <img src="../../public/images/chevron-right.svg"></a></li>
            </ul>
        </section>

        <?php
            endif;
        ?>

        <?php

            if($condition = false):
            
        ?>

        <section class="empty-storage">
            <img src="../../public/images/frown.svg">
            Nenhum produto em estoque
        </section> 

        <?php
            endif;
        ?>

        <footer class="footer">
            <button class="btn">
                <strong>Adicionar Item <img src="../../public/images/plus.svg" alt="Finalizar"></strong>
            </button>
        </footer>
    </main>
</body>
</html>