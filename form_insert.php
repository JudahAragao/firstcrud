<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastramento</title>
</head>
<body>
    <div class="container">

        <form action="insert.php" method="POST">
            
            <input type="text" name="nome_paciente" placeholder="digite o nome:"><br><br>
            <input type="text" name="tel_paciente" placeholder="digite o telefone:"><br><br>
            <input type="email" name="email_paciente" placeholder="digite o seu email:"><br><br>
            <input type="text" name="rg" placeholder="digite o rg:"><br><br>
            <input type="text" name="cpf" placeholder="digite o cpf:"><br><br>
            <input type="text" name="data_cadas" placeholder="data de cadastro:"><br><br>
            <input type="text" name="hora_cadas" placeholder="hora do cadastro:"><br><br>
            <input type="text" name="data_nasci" placeholder="data de nascimento:"><br><br>
            <input type="text" name="valor_mensal" placeholder="mensalidade:"><br><br>
            <input type="text" name="situ_ativi" placeholder="situação:"><br><br>
            <input type="password" name="senha" placeholder="digite a senha:"><br><br>
            <input type="submit" value="Cadastrar">
            <a href="index.php">Voltar</a>

        </form>

    </div>
    
</body>
</html>