<!DOCTYPE html>
<!--Tela Atualizada-->
<html lang="en">
<head>
	<title>Serviços</title>
	<Meta http-equiv="refresh" content="5" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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

$sql = "SELECT nome, sobrenome, endereco, email, telefone FROM pedidos WHERE status = \"Pronto\"";
$query = mysqli_query($conexao,$sql);


$row = mysqli_num_rows($query);
	?>	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
			
			
					




					 <table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Nome</th>
								<th class="column2">Endereco</th>
								<th class="column3">Email</th>
								<th class="column3">Telefone</th>
							</tr>
						</thead>
						<?php
						if($row > 0){
    							while($linha = mysqli_fetch_array($query)){
    								
    								
						echo '
						<tbody>
								<tr>
									
									<td class="column1">'.$_SESSION["nome"] = $linha['nome'].' '.$_SESSION["sobrenome"] = $linha['sobrenome'].'</td>
									<td class="column2">'.$_SESSION["Endereco"] = $linha['endereco'].'</td>
									<td class="column3">'.$_SESSION["Email"] = $linha['email'].'</td>
									<td class="column3">'.$_SESSION["telefone"] = $linha['telefone'].'</td>
								</tr>

						</tbody>';
					
				}
			};
					
					?>
					</table>
				</div>
				<a href="Pedidos.html"><button class="btn btn--radius-2 btn--red">Voltar para Pedidos</button></a>
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