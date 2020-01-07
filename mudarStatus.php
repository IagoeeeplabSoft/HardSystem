<?php 
include_once("conexao.php");
$Feito = "Pronto";
$codigo = $_POST['id'];
$mudar = "UPDATE pedidos SET status = '$Feito' WHERE id = $codigo";
$query = mysqli_query($conexao,$mudar);


header('location:PainelServico.php');


 ?>