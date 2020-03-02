<?php

include "connect.php";

$nome = $_POST['nome_paciente'];
$tel = $_POST['tel_paciente'];
$email = $_POST['email_paciente'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$dat_c = $_POST['data_cadas'];
$hor_c = $_POST['hora_cadas'];
$dat_n = $_POST['data_nasci'];
$mensalidade = $_POST['valor_mensal'];
$situacao = $_POST['situ_ativi'];
$senha = $_POST['senha'];

mysqli_query($link, "insert into cadastro_pacientes(nome_paciente,tel_paciente,email_paciente,rg,cpf,data_cadas,hora_cadas,data_nasci,valor_mensal,situ_ativi,senha)
values('$nome','$tel','$email','$rg','$cpf','$dat_c','$hor_c','$dat_n','$mensalidade','$situacao','$senha')");
header('Location: index.php');

?>