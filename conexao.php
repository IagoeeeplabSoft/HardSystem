<?php
$hostname = "localhost";
//$user = "id10024046_root";
//$passaword = "03112001";
//$database = "id10024046_sistema";
$user = "root";
$passaword = "";
$database = "clientes";
$conexao = mysqli_connect($hostname,$user,$passaword,$database);
$conexao->set_charset("utf8");
if(!$conexao){
    print"Falha na conexão ";
}
?>