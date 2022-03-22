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

    <link rel="stylesheet" href="../../public/styles/new-sale.php">

    <title>Clantina | Nova Venda</title>
</head>
<body>
    <main class="container">
        <header class="new-sale-header">
            <img src="../../public/images/left-arrow.svg" alt="Voltar">
            <h1>Nova venda</h1>
        </header>

        <section class="client">
            <h2>Cliente</h2>

            <select name="client" id="client">
                <option value="">Dyogo Bendo</option>
                <option value="">Nikoly Cover</option>
                <option value="">Vinicius Jimenez</option>
            </select>
        </section>

        <section class="items">
            <h2>Item:</h2>
            
            <div class="items-list">
                <div class="item-container">
                    <header class="item-container__header">
                        <select name="items[]" id="items">
                            <option value="">Pão de Queijo</option>
                            <option value="">Salame com bacon   </option>
                        </select>
                        <button><img src="../../public/images/trash.svg" alt="Excluir item"></button> 
                    </header>
                    
                    <section class="item-container__info">
                        <div class="item-container__info--list">
                            <span>Quantidade: </span>
                            <div class="qtty-input">
                                <button>-</button>
                                <input type="number" name="quantity[]" id="quantity">
                                <button>+</button>
                            </div>
                        </div>
                        <div class="item-container_info--list">
                            <span>Preço unitário: </span>
                            <span class="price-info">R$ 2,50</span>
                        </div>
                        <div class="item-container_info--list">
                            <span>Subtotal: </span>
                            <span class="subtotal-info">R$ 2,50</span>
                        </div>
                    </section>
                </div>
            </div>

            <button><img src="../../public/images/plus.svg" alt="Adicionar item"></button>
        </section>

        <section class="payment">
            <select name="payment-method" id="payment-method">
                Dinheiro físico
                PIX
            </select>

            <div class="payment__value">
                <strong>Valor recebido</strong>
                <label for="received-value">
                    <strong>R$</strong>
                    <input type="number" name="received-value" id="received-value" type="text">
                </label>
            </div>

            <div class="payment__results">
                <strong>Total da venda</strong>: R$ <span class="total-price">5,00</span>
            </div>
            <div class="payment__results">
                Troco: R$ <span class="total-price">5,00</span>
            </div>
        </section>

        <section class="observation">
            <h2>Observação: </h2>
            
            <textarea name="" id="" cols="30" rows="10" class="observation__container">
                Ex: troco pendente
            </textarea>
        </section>

        <footer class="new-sale-footer">
            <button class="btn">
                <strong>Finalizar <img src="../../public/images/check.svg" alt="Finalizar"></strong>
            </button>
        </footer>
    </main>
</body>
</html>