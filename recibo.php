<?php 
session_start();
//Tela atualizada
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Recibo</title>
	<style type="text/css">
		body{width:100wh;height:90vh;color:#fff;background:linear-gradient(-45deg,#000,#696969,gray,#A9A9A9,silver,#D3D3D3,#DCDCDC,#FFF);background-size:400% 400%;-webkit-animation:Gradient 15s ease infinite;-moz-animation:Gradient 15s ease infinite;animation:Gradient 15s ease infinite}@-webkit-keyframes Gradient{0%{background-position:0 50%}50%{background-position:100% 50%}100%{background-position:0 50%}}@-moz-keyframes Gradient{0%{background-position:0 50%}50%{background-position:100% 50%}100%{background-position:0 50%}}@keyframes Gradient{0%{background-position:0 50%}50%{background-position:100% 50%}100%{background-position:0 50%}}h1,h6{font-family:'Open Sans';font-weight:300;text-align:center;position:absolute;top:45%;right:0;left:0}
	</style>
</head>
<body >		

		<div>
			<center>
			<p id="reciboWrite">
				<?php echo $_SESSION["recibo"];?>
				
			</p>
			<button onclick="window.print()" class="btn btn-outline-primary">Imprimir</button>
			<a href="Pedidos.html"><button class="btn btn-outline-secondary">Voltar</button></a>
			</center>
		</div>

</body>
</html>