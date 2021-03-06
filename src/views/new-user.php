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

    <title>Clantina | Novo Usuário</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <h1>Novo Usuário</h1>
        </header>
        <form action="../controllers/UserController.php" method="POST">
            <fieldset class="fieldset">
                <label for="user-type" class="input-title">Tipo de Usuário: </label>
                <select name="type" id="user-type" class="input">
                    <option value="seller">Vendedor</option>
                    <option value="client">Cliente</option>
                </select>
            </fieldset>
            <fieldset class="fieldset">
                <label for="name" class="input-title">Nome: </label>
                <input type="text" class="input" name="name" id="name" class="input">
            </fieldset>
            <fieldset class="fieldset">
                <label for="username" class="input-title">Username: </label>
                <input type="text" name="username" id="username" class="input">
            </fieldset>
            <fieldset class="fieldset">
                <label for="password" class="input-title">Password: </label>
                <input type="password" name="password" id="password" class="input">
            </fieldset>

            <footer>
                <button class="btn">
                    <strong>Finalizar <img src="../../public/images/check.svg" alt="Finalizar"></strong>
                </button>
            </footer>
            <input type="hidden" name="action" value="1">
        </form>
    </main>

    <?php include_once __DIR__ . '/components/confirmation-popup.php' ?>

    <script src="../../public/scripts/back.js"></script>
    <script src="../../public/scripts/confirmation.js"></script>
</body>