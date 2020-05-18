<?php 
$senha = 1321;
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);
echo "$senha | $senha_hash<br>";
if(password_verify($senha, $senha_hash)){
    echo "Não precisa encriptar as duas";
}else{
    echo "Precisa encriptar as duas";
}