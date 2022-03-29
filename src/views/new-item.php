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

    <title>Clantina | Adicionar Item</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <h1>Adicionar Item</h1>
        </header>

        <form method="POST">
            <div class="fieldset">
                <label class="input-title" for="item-type">Tipo de item:</label>
                <select class="input" name="item-type" id="item-type">
                </select>
            </div>
            <div class="fieldset">
                <label class="input-title" for="qtd">Quantidade:</label>
                <input class="input" type="number" id="qtd">
            </div>
            <div class="payment__value">
                <strong class="input-title">Custo unitário:</strong>
                <label for="coast">
                    <strong>R$</strong>
                    <input type="number" min="0" name="coast" id="coast" type="text" placeholder="0,00">
                </label>
            </div>
            <div class="payment__value">
                <strong class="input-title">Preço unitário:</strong>
                <label for="price">
                    <strong>R$</strong>
                    <input type="number" min="0" name="price" id="price" type="text" placeholder="0,00">
                </label>
            </div>

            <footer>
                <button class="btn">
                    <strong>Salvar <img src="../../public/images/check.svg" alt="Salvar"></strong>
                </button>
            </footer>
        </form>
    </main>

    <?php include_once __DIR__ . '/components/confirmation-popup.php'?>
    
    <script src="../../public/scripts/back.js"></script>
    <script src="../../public/scripts/confirmation.js"></script>

</body>
</html> 