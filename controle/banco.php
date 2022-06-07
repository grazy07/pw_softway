<?php  

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
 
echo $nome, "<br>";
echo $email,"<br>";
echo $senha, "<br>";

$arquivo = fopen("arquivo.txt", "w");

fwrite($arquivo, 
$nome);
fwrite($arquivo,
$email);
fwrite($arquivo,
$senha);