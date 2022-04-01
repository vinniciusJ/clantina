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

    <link rel="stylesheet" href="../../public/styles/sales.css">

    <title>Clantina | Vendas</title>
</head>
<body>
    <main class="container">
        <header class="header">
            <button id="go-back">
                <img src="../../public/images/left-arrow.svg" alt="Voltar">
            </button>
            <h1>Vendas</h1>
        </header>
    
        <section class="sales-list">

            <?php 
                session_start();                    
                $sales = $_SESSION["sales"];
                $salesItems = $_SESSION["salesItems"];
                $i = 0;
                foreach($sales as $sale){       
                    $formatedValue = number_format($sale->value, 2);
                    $formatedPayedValue = number_format($sale->payed_value, 2);
                    $formatedChange = number_format($sale->change, 2);
                    

                    echo "<div class='sale-container' >
                            <header class='sale-container__minus-button'>
                                <button class='sale-container__minuts-button--btn' >
                                    <img src='../../public/images/up-chevron.svg' alt='Diminuir'>
                                </button>
                            </header>
                            <ul class='basic-information'>
                            ";

                            if($_SESSION["type"] == "admin"){
                                echo "<li><strong class='information-label'>Vendedor: </strong>{$sale->seller}</li>";
                            }

                            echo "
                                <li><strong class='information-label'>Cliente: </strong>{$sale->client}</li>
                                <li><strong class='information-label'>Data: </strong>{$sale->date}</li>
                                <li><strong class='information-label'>Total: </strong>{$formatedValue}</li>
                            </ul>

                            <ul class='other-information'>
                                <li><strong class='information-label'>Pagamento: </strong>{$sale->type}</li>
                                <li><strong class='information-label'>Recebido: </strong>R$ {$formatedPayedValue}</li>
                                <li><strong class='information-label'>Troco: </strong>R$ {$formatedChange}</li>
                                <li><strong class='information-label'>Observação: </strong>{$sale->note}</li>
                            </ul>
                            <section class='sale-items'>
                                <strong class='information-label'>Itens: </strong>
                                <table class='sale-items-table'>
                                    <tbody>";
                                foreach ($salesItems[$i] as $item){    
                                    $formatedPrice = number_format($item->price, 2);
                                    
                                    echo "
                                        <tr class='sale-items-table__row'>
                                            <td>{$item->name}</td>
                                            <td>R$ {$formatedPrice}</td>
                                            <td>{$item->quantity} uni.</td>
                                        </tr>                                            
                                        ";
                                };
                                $i ++;
                                echo "</tbody>
                                </table>
                            </section>
                        </div>";
                }
            ?>            
        </section>

        <?php 
            if(sizeof($sales) == 0){
                echo '<section class="none-item-alert">
                        <img src="../../public/images/frown.svg" alt="Sad">    
                        <h2>Nenhuma venda registrada</h2>
                    </section>';
            }
        ?> 

        <footer class="period-result">
            <ul class="period-result__list">
                <li><strong class="information-label">Valor bruto: </strong>R$ <?php echo "{$_SESSION['allReceivedMoney']}" ?></li>
                <li><strong class="information-label">Despesas: </strong>R$ <?php echo "{$_SESSION['allSpentMoney']}" ?></li>
                <li><strong class="information-label">Lucro: </strong>R$ <?php echo "{$_SESSION['profit']}" ?></li>
            </ul>
        </footer>
    </main>

    <script src="../../public/scripts/sales.js" type="module"></script>
    <script src="../../public/scripts/back.js"></script>
</body>
</html>