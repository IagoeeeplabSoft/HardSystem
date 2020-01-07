<?php 
$Email = $_POST['email'];
$Senha = $_POST['senha'];
if ($Email ==="Admin@Hard.com" && $Senha ==="labHard2019%") {
	header('Location: Pedidos.html');
}
elseif ($Email ==="Admin@Lab.com" && $Senha ==="Lab2019") {
	header('location: PainelServico.php');
}else{
    header('location: index.html');
}

 ?>