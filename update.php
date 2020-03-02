<?php 

include "connect.php";

$id = $_POST['id_paciente'];
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

// Condicionais para inpedir que os campos em branco não seja inseridos como valor no db.
if (isset($id) && !empty($id)) { 

    if (isset($nome) && !empty($nome)) {

        mysqli_query($link, "update cadastro_pacientes set nome_paciente = '$nome' WHERE id_paciente = '$id'");
    
    }

    if (isset($tel) && !empty($tel)) {

        mysqli_query($link, "update cadastro_pacientes set tel_paciente = '$tel' WHERE id_paciente = '$id'");
    
    }

    if (isset($email) && !empty($email)) {

        mysqli_query($link, "update cadastro_pacientes set email_paciente = '$email' WHERE id_paciente = '$id'");
    
    }

    if (isset($rg) && !empty($rg)) {

        mysqli_query($link, "update cadastro_pacientes set rg = '$rg' WHERE id_paciente = '$id'");
    
    }

    if (isset($cpf) && !empty($cpf)) {

        mysqli_query($link, "update cadastro_pacientes set cpf = '$cpf' WHERE id_paciente = '$id'");
    
    }

    if (isset($dat_c) && !empty($dat_c)) {

        mysqli_query($link, "update cadastro_pacientes set data_cadas = '$dat_c' WHERE id_paciente = '$id'");
    
    }

    if (isset($hor_c) && !empty($hor_c)) {

        mysqli_query($link, "update cadastro_pacientes set hora_cadas = '$hor_c' WHERE id_paciente = '$id'");
    
    }

    if (isset($dat_n) && !empty($dat_n)) {

        mysqli_query($link, "update cadastro_pacientes set data_nasci = '$dat_n' WHERE id_paciente = '$id'");
    
    }

    if (isset($mensalidade) && !empty($mensalidade)) {

        mysqli_query($link, "update cadastro_pacientes set valor_mensal = '$mensalidade' WHERE id_paciente = '$id'");
    
    }

    if (isset($situacao) && !empty($situacao)) {

        mysqli_query($link, "update cadastro_pacientes set situ_ativi = '$situacao' WHERE id_paciente = '$id'");
    
    }

    if (isset($senha) && !empty($senha)) {

        mysqli_query($link, "update cadastro_pacientes set senha = '$senha' WHERE id_paciente = '$id'");
    
    }

}
header('Location: index.php');

?>