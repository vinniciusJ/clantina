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

    <title>Clantina | Novo tipo de item</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <h1>Novo Tipo de Item</h1>
        </header>

        <form action="../controllers/ItemTypeController.php" method="POST">
            <fieldset class="fieldset">
                <label for="item-type" class="input-title">Nome de tipo de item: </label>
                <input type="text" name="item-type" id="item-type" class="input">
            </fieldset>

            <footer>
                <button class="btn">
                    <strong>Salvar <img src="../../public/images/check.svg" alt="Finalizar"></strong>
                </button>
            </footer>
            <input type="hidden" name="action" value="1">
        </form>
    </main>

    <?php include_once __DIR__ . '/components/confirmation-popup.php'?>

    <script src="../../public/scripts/back.js"></script>
    <script src="../../public/scripts/confirmation.js" type="module"></script>
</body>