<?php
//conexao com banco de dados
try{
    $conexao = new pdo('mysql:host=localhost;dbname=sorveteria','root','');
    echo "Conectado com sucesso";
}catch(Expection $e){
    echo $e.getMessage();
    die();
}
return $conexao;
