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

    <link rel="stylesheet" href="../../public/styles/new-sale.css">

    <title>Clantina | Nova Venda</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <h1>Nova venda</h1>
        </header>

        <form action="" method="POST">
            <section class="client">
                <h2>Cliente: </h2>
    
                <select name="client" id="client">
                    <option value="">Dyogo Bendo</option>
                    <option value="">Nikoly Cover</option>
                    <option value="">Vinicius Jimenez</option>
                </select>
            </section>
    
            <section class="items">
                <h2>Item:</h2>
                
                <div class="items-list">
                    <div class="item-container" data-id="0">
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
                                    <input type="number" name="quantity[]" value="1" id="quantity" min="0">
                                </div>
                            </div>
                            <div class="item-container__info--list">
                                <span>Preço unitário: </span>
                                <span class="price-info">R$ 
                                    <span id="price-info">2,50</span>
                                </span>
                                
                            </div>
                            <div class="item-container__info--list">
                                <span>Subtotal: </span>
                                <span class="subtotal-info">R$ 
                                    <span id="subtotal-info">2,50</span>
                                </span>
                            </div>
                        </section>
                    </div>

                    <template id="item-container">
                        <div class="item-container" data-id="">
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
                                        
                                        <input type="number" name="quantity[]" value="1" id="quantity" min="0">
                                        
                                    </div>
                                </div>
                                <div class="item-container__info--list">
                                    <span>Preço unitário: </span>
                                    <span class="price-info">R$ <span id="price-info">2,50</span></span>
                                </div>
                                <div class="item-container__info--list">
                                    <span>Subtotal: </span>
                                    <span class="subtotal-info">R$ 
                                        <span id="subtotal-info">2,50</span>
                                    </span>
                                </div>
                            </section>
                        </div>
                    </template>
                </div>
    
                <button type="button" id="add-item"><img src="../../public/images/plus.svg" alt="Adicionar item"></button>
            </section>
    
            <section class="payment">
                <h2>Pagamento:</h2>
                <select name="payment-method" id="payment-method">
                    <option value="">Dinheiro Físico</option>
                    <option value="">PIX</option>
                </select>
    
                <div class="payment__value">
                    <strong>Valor recebido</strong>
                    <label for="received-value">
                        <strong>R$</strong>
                        <input type="number" min="0" name="received-value" id="received-value" type="text">
                    </label>
                </div>
    
                <div class="payment__results">
                    <strong>Total da venda:</strong> R$ <span class="total-price">5,00</span>
                </div>
                <div class="payment__results">
                    Troco: R$ <span class="total-price">5,00</span>
                </div>
            </section>
    
            <section class="observation">
                <h2>Observação: </h2>
                
                <textarea name="" id="" cols="30" rows="10" class="observation__container">
                </textarea>
            </section>
    
            <footer class="new-sale-footer">
                <button class="btn">
                    <strong>Finalizar <img src="../../public/images/check.svg" alt="Finalizar"></strong>
                </button>
            </footer>
        </form>
    </main>

    <script src="../../public/scripts/new-sale.js" type="module"></script>
    <script src="../../public/scripts/header.js" type="module"></script>
</body>
</html>