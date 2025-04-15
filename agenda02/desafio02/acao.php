<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucess</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-teal w3-container">
        <h1>Cadastro realizado com sucesso</h1>
        <?php
            $nome = $_POST['txtNome'];
            $sobrenome = $_POST['txtSobrenome'];
            $email = $_POST['txtEmail'];
            $forma = $_POST['txtFormacao'];
            $descri_empre = $_POST['txtEmprego'];

            echo "<p>Nome: $nome</p>";
            echo "<p>Sobrenome: $sobrenome</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Formação: $forma</p>";
            echo "<p>Descrição do Emprego: $descri_empre</p>";
        ?>
    </div>
</body>
</html>