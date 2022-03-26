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
    
    <link rel="stylesheet" href="../../public/styles/login.css">

    <title>Clantina | Login</title>
</head>
<body>    
    <main class="container">
        <header class="login-header">
            <h1 class="login-header__title"><span class="login-header__title--yellow">Clan</span>tina</h1>
        </header>

        <form action="../controllers/UserController.php" method="POST" class="login-form">
            <div class="login-form__input-container">
                <input type="text" name="username" id="username" placeholder="Nome do usuário" required>
            </div>
            <div class="login-form__input-container">
                <input type="password" name="password" id="password" placeholder="Senha" required>
            </div>

            <button class="login-form__send-button">
                <strong>Login <img src="../../public/images/right-arrow.svg" alt="Seta para a direita"></strong>
            </button>
            <input type="hidden" name="action" value="2">
        </form>
    </main>
</body>
</html>