<?php

        include "connect.php";

        $consulta = $_POST['consulta'];

        $sql = mysqli_query($link, "select * from cadastro_pacientes WHERE nome_paciente like '%$consulta%'");
        while($vetor = mysqli_fetch_array($sql)){
            $id = $vetor['id_paciente'];
            $nome = $vetor['nome_paciente'];
            $tel = $vetor['tel_paciente'];
            $email = $vetor['email_paciente'];
            $rg = $vetor['rg'];
            $cpf = $vetor['cpf'];
            $senha = $vetor['senha'];
            $dat_c = $vetor['data_cadas'];
            $hor_c = $vetor['hora_cadas'];
            $dat_n = $vetor['data_nasci'];
            $mensalidade = $vetor['valor_mensal'];
            $situacao = $vetor['situ_ativi'];

            echo "Id do paciente: $id<br><br>";
            echo "Nome: $nome<br><br>";
            echo "Fone: $tel<br><br>";
            echo "Email: $email<br><br>";
            echo "RG: $rg<br><br>";
            echo "CPF: $cpf<br><br>";
            echo "Data de cadastro: $dat_c<br><br>";
            echo "Hora do cadastro: $hor_c<br><br>";
            echo "Data de nascimento: $dat_n<br><br>";
            echo "Mensalidade: R$ $mensalidade<br><br>";
            echo "Situacao: $situacao<br><br>";
            echo "Senha: $senha<br><br>";
            echo "-----------------------------------------------<br>";

        }

        ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style_cons.css">
    <title>Lista de Cadastro</title>
</head>
<body>
        
    <br><a href="index.php">Voltar para o inicio</a>
    
</body>
</html>