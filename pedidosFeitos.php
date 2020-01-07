<!--Tela Atualizada-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Serviços</title>
	<Meta http-equiv="refresh" content="5" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Servicos/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Servicos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Servicos/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Servicos/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Servicos/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Servicos/css/util.css">
	<link rel="stylesheet" type="text/css" href="Servicos/css/main.css">
<!--===============================================================================================-->
<script src="//code.jivosite.com/widget.js" jv-id="3CoYEtlFLd" async></script>
</head>
<body>

	<?php
include_once("conexao.php");

$sql = "SELECT * FROM pedidos WHERE status = \"Pronto\"";
$query = mysqli_query($conexao,$sql);


$row = mysqli_num_rows($query);
	?>	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
			
		</form>
			
					




					 <table>
						<thead>
							<tr class="table100-head">
								<th class="column2">ID</th>
								<th class="column3">Nome</th>
								<th class="column4">Serviço</th>
								<th class="column6">Status</th>
							</tr>
						</thead>
						<?php
						if($row > 0){
    							while($linha = mysqli_fetch_array($query)){
    								
    								$_SESSION["sistemaOperacional"] = $linha['sistemaOperacional'];
    								$_SESSION["limpeza"] = $linha['limpeza'];
    									$_SESSION["instalacaoSoft"] = $linha['instalacaoSoft'];
    								$_SESSION["instalacaoSoftLimpe"] = $linha['instalacaoSoftLimpe'];
    								$servico = "Nada";
    								if ($_SESSION["limpeza"] ==="N" AND $_SESSION["instalacaoSoft"] ==="N" AND $_SESSION["instalacaoSoftLimpe"]==="N") 
    								{
    									$servico = "Formatação: ".$_SESSION['sistemaOperacional'];
    									
    								}
    								elseif ($_SESSION["limpeza"] === "N" AND $_SESSION["instalacaoSoftLimpe"]=== "S" )
    								{
    									$servico = "Instalação de software: ".$_SESSION['instalacaoSoft']." Formatação: ".$_SESSION['sistemaOperacional'];
    									
    								}elseif ($_SESSION["sistemaOperacional"] === "N" AND $_SESSION["instalacaoSoftLimpe"]=== "N") 
    								{
    									$servico = "Limpeza";
    								}elseif( $_SESSION["instalacaoSoft"] ==="N")
    								{
    									$servico = "Formatação: ".$_SESSION['sistemaOperacional']." Limpeza";
    								}
						echo '
						<tbody>
								<tr>
									<td class="column2">'.$_SESSION["id"] = $linha['id'].'</td>
									<td class="column3">'.$_SESSION["nome"] = $linha['nome'].' '.$_SESSION["sobrenome"] = $linha['sobrenome'].'</td>
									<td class="column4">'.$servico.'</td>
									<td class="column6">'.$_SESSION["status"] = $linha['status'].'
								</tr>
						</tbody>';
					
				}
			};
					
					?>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="Servicos/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Servicos/vendor/bootstrap/js/popper.js"></script>
	<script src="Servicos/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Servicos/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Servicos/js/main.js"></script>

</body>
</html>