<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento realizado</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container w3-teal">
        <h1>
            <?php
                $nome = $_POST['nome'];
                $valor = $_POST['valor_compra'];
                $pagamento = $_POST['forma_pagar'];
                $desconto = 0;
                $calc = 0;
                if ($_POST['forma_pagar'] == "Deposito" || $_POST['forma_pagar'] == "Boleto"){
                    echo "Promoção de mês de aniversário para esta forma de pagamento <br>";
                    $desconto = ($pagamento == "Deposito") ? 10 : 8;
                    $calc = ($valor*$desconto)/100;
                }
                echo $nome."<br>";
                echo "Valor da compra sem desconto: $valor <br>";
                echo "Forma pagamento escolhida: ".$pagamento."<br>";

                if ($pagamento != "Credito"){
                    echo "Desconto de : $desconto% <br>";
                    echo "Você economizou:R$ $calc <br>";
                    echo "Valor a pagar: R$ ".($valor-$calc);
                }
                else{
                    echo "Valor a pagar: R$ ".$valor;
                }
            
            ?>
        </h1>
    </div>
</body>
</html>