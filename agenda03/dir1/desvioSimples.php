<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desvio condicional simples</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Enviar Pedido</h2>
    </div>
    <form class="w3-container"  method="post" action="desvioAction.php">
        <label class="w3-text-teal"><b>Nome do Usuário</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">

        <label class="w3-text-teal"><b>Valor total da compra</b></label>
        <input type="text" class="w3-input w3-border w3-light-grey" name="txtValorTotal" type="number">

        <label class="w3-text-teal"><b>Escolha a região</b></label>
        <select name="cmbRegiao" id="regiao" class="w3-input">
            <option value="Centro oeste">Centro-oeste</option>
            <option value="Nordeste">Nordeste</option>
            <option value="Norte">Norte</option>
            <option value="Sul">Sul</option>
            <option value="Sudeste" selected>Sudeste</option>
        </select>
        <br>
        <button class="w3-btn w3-blue-grey">Enviar</button>

    </form>
</body>
</html>