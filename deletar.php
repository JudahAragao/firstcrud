<?php

include "connect.php";

$id = $_POST['id_paciente'];

mysqli_query($link, "delete from cadastro_pacientes WHERE id_paciente = '$id'");

header('Location: index.php');
?>