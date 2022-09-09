<?php

    if (isset($_POST['temp'])){
        $temp = filter_input(INPUT_POST, 'temp');

        $convert = ($temp - 32) * 5/9;

        if ($convert <= 0){
            echo  "<script>alert('A temperatura é: '+ $convert + ' Frio Artico');</script>";
        }else if ($convert >= 1 && $convert <= 12){
            echo  "<script>alert('A temperatura é: '+ $convert + ' Muito Frio');</script>";
        }else if ($convert >= 13 && $convert <= 23){
            echo  "<script>alert('A temperatura é: '+ $convert + ' Clima Ameno');</script>";
        }else if ($convert >= 24 && $convert <= 32){
            echo  "<script>alert('A temperatura é: '+ $convert + ' Calor');</script>";
        }else if ($convert >= 33 && $convert <= 40){
            echo  "<script>alert('A temperatura é: '+ $convert + ' Calor Tórrido');</script>";
        }else{
            echo  "<script>alert('A temperatura é: '+ $convert + ' Sem Registro para essa Temperatura');</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>

	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	
	<div class="container">
		<div class="container-login">
			<div class="wrap-login">
				<form method="post" class="login-form">
					<span class="login-form-title">
						Atividade 2
					</span>

					<div class="second-title margin-top-35 margin-bottom-35">
						<h3>Entre com uma temperatura em Fahrenheit</h3>
					</div>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="temp input-form" type="text" name="temp" id="temp" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Temperatura"></span>
					</div>

					<div class="container-login-form-btn">
						<button class="login-form-btn">
							Enviar Resposta
						</button>
					</div>

					<ul class="login-utils">
						<li class="margin-bottom-8 margin-top-8">
							<span class="text1">
								Voltar para a
							</span>
							<a href="../index.html" class="text2">
								Home
							</a>
						</li>

						<li>
							<span class="text1">
								Proxima
							</span>
							<a href="../atividadesPages/atvTres.php" class="text2">
								Atividade
							</a>
						</li>

                        <li>
							<span class="text1">
								Voltar para
							</span>
							<a href="../atividadesPages/atvUm.php" class="text2">
								Atividade Anterior
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
</body>
</html>