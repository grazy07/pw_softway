<?php

$pdo = require 'conexao.php';
$sql = 'select * from usuario';

echo '<h3>Produtos</h3>';

foreach($pdo->query($sql) as $key => $valor){
    'nome'.$valor['nome']. 
    'email'.$valor['email'].
    'senha'.$valor['senha'].
}