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

    <title>Clantina | Editar Item</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <h1>Pão de queijo</h1>
        </header>

        <form method="POST">
            <div class="fieldset">
                <label class="input-title" for="qtd">Quantidade:</label>
                <input class="input" type="number" id="qtd">
            </div>
            <div class="payment__value">
                <strong>Preço unitário:</strong>
                <label for="price">
                    <strong>R$</strong>
                    <input type="number" min="0" name="price" id="price" type="text" placeholder="0,00">
                </label>
            </div>

        <footer>
            <a href="discard-items.php/">
                <button type="button" class="btn btn-black">
                    <strong>Descartar Itens <img src="../../public/images/x.svg" alt="Descartar Item"></strong>
                </button>
            </a>
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