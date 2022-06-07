<?php

$pdo = require 'conexao.php';

$sql= 'insert into usuario(nome,email,senha) values(?,?,?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['nome']);
$prepare->bindParam(2, $_GET['email']);
$prepare->bindParam(3, $_GET['senha']);

$prepare->execute();

echo $prepare->rowCount();