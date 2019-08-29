<?php

$nome         = $_POST["nome"];
$email        = $_POST["email"];
$estadocivil  = $_POST["estadocivil"];
$sexo         = $_POST["sexo"];

include_once 'conexao.php';

$sql = "INSERT INTO cliente VALUES(null, '{$nome}', '{$email}','{$estadocivil}', '{$sexo}')";

$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

header("location:msg.php?msg=".$msg);

?>