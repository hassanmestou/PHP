<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma de pagamento</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container w3-teal">
        <h1>Forma de pagamento</h1>
    </div>
    <form class="w3-container" method="post" action="infoAct.php">
        <label class="w3-text-teal"><b>Nome:</b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="nome">

        <label class="w3-text-teal"><b>Valor da compra:</b></label>
        <input class="w3-input w3-light-grey w3-border" type="number" name="valor_compra">

        <label class="w3-text-teal"><b>Forma de pagamento</b></label>
        <select name="forma_pagar" id="pagamento">
            <option value="Boleto">Boleto</option>
            <option value="Credito" selected>Credito</option>
            <option value="Deposito">Deposito</option>
        </select>
        <br>
        <button class="3-btn 3-blue-grey w3-green">Comprar</button>

    </form>
</body>
</html>