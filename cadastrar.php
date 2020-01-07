<?php
// Tela Atualizada 
include_once("conexao.php");
session_start();


$qtd = $_POST['qtd'];
$nome = $_POST['NOME'];
$sobrenome = $_POST['sobrenome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sistemaO = $_POST["SO"];
$lim = $_POST["limpeza"];
$instaSoft = $_POST["instalacaoSoft"];
$instalacaoSoftLim = $_POST["instalacaoSoftLimp"];
$sobrePc = $_POST['sobrePc'];
$_SESSION["recibo"] = $sobrePc;
$status = "Em serviço";



$servico = "Nada";
	if ($lim ==="N" AND $instaSoft ==="N" AND $instalacaoSoftLim ==="N") 
	{
	$servico = "Formatação: ".$sistemaO;

    									
			}
			elseif ($lim === "N" AND $instalacaoSoftLim === "N" )
			{
			$servico = "Instalação de software: ".$instaSoft." ;
				
		  									
			}elseif($sistemaO=== "N" AND $instalacaoSoftLim=== "N") 
			{
			$servico = "Limpeza";
			
			}elseif( $instaSoft ==="N")
			{
			$servico = "Formatação: ".$sistemaO." Limpeza";
			
			}
		
			
$sql = "insert into pedido(`nome`, `sobrenome`, `endereco`, `email`, `telefone`, `sistemaOperacional`, `limpeza`, `instalacaoPrograma`, `formataçãoLimpeza`, `sobrePc`, `status`, `servico`, `preco`) values ('$nome','$sobrenome','$endereco','$email','$telefone','$sistemaO','$lim','$instaSoft','$instalacaoSoftLim','$sobrePc','$status','$servico','$preco')";
$salvar = mysqli_query($conexao,$sql);
$linha = mysqli_affected_rows($conexao);
mysqli_close($conexao);
header('Location: recibo.php');
?>