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
    <?php session_start() ?>

    <title>Clantina | Editar Item</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <h1><?php echo $_SESSION['list-items'][0]->name ?></h1>
        </header>

        <form method="POST" action="../controllers/ItemController.php?action=3">
            <div class="payment__value">
                <strong>Novo Preço Unitário:</strong>
                <label for="price">
                    <strong>R$</strong>
                    <input value=<?php echo "{$_SESSION['list-items'][0]->price}" ?> type="number" min="0" name="price" id="price" type="text" placeholder="0,00" step="0.01">
                </label>
            </div>

        <footer>
            <button class="btn">
                <strong>Salvar <img src="../../public/images/check.svg" alt="Salvar"></strong>
            </button>
        </footer>
        </form>
    </main>

    <dialog id="confirmation">
        <section>
            <h2>Descartar Edições?</h2>
            <footer class="confirmation__operations">
                <button>Não, continuar</button>
                <button>Descartar</button>
            </footer>
        </section>
    </dialog>

    <script src="../../public/scripts/back.js"></script>
    <script src="../../public/scripts/confirmation.js"></script>
</body>
</html>