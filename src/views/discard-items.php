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
            <div>
                <h1>Descartar Itens:</h1>
                <h2>Pão de queijo</h2>
            </div>
        </header>

        <form>
            <div class="fieldset">
                <label class="input-title" for="qtd">Quantidade a ser descartada:</label>
                <input class="input" type="number" id="qtd" value="0">
            </div>
        </form>

        <footer>
        <button class="btn">
            <strong>Descartar <img src="../../public/images/check.svg" alt="Descartar"></strong>
        </button>
    </footer>
    </main>

    <dialog id="confirm-alert">
        <section>
            <h2>Descartar <?php ?> itens do tipo <?php ?>?</h2>
            <footer class="discard-alert__operations">
                <button>Não, manter</button>
                <button>Descartar</button>
            </footer>
        </section>
    </dialog>

    <dialog id="discard-alert">
        <section>
            <h2>Descartar edições?</h2>
            <footer class="discard-alert__operations">
                <button>Não, continuar</button>
                <button>Descartar</button>
            </footer>
        </section>
    </dialog>
</body>
</html>