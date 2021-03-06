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

    <title>Clantina | Descartar Itens</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <div>
                <h1>Descartar Itens:</h1>
                <?php
                session_start();
                echo "<h2>{$_SESSION['list-items'][0]->name}</h2>"
                ?>            
            </div>
        </header>

        <form method="POST" action="../controllers/ItemController.php?action=5">
            <div class="fieldset">
                <label class="input-title" for="qtd">Quantidade a ser descartada:</label>
                <input class="input" type="number" id="qtd" name="qtd" value="0" min=0 max=<?php echo "{$_SESSION['list-items'][0]->quantity}" ?> >
            </div>

            <footer>
                <button class="btn" type="submit">
                    <strong>Descartar <img src="../../public/images/check.svg" alt="Descartar"></strong>
                </button>
            </footer>
        </form>
    </main>

    <dialog id="confirmation">
        <section>
            <h2>Descartar <?php ?> itens do tipo <?php ?>?</h2>
            <footer class="confirmation__operations">
                <button>Não, manter</button>
                <button>Descartar</button>
            </footer>
        </section>
    </dialog>

    <dialog id="confirmation">
        <section>
            <h2>Descartar edições?</h2>
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