<?php

    if (isset($_POST['liderName']) && isset($_POST['time'])){
        $time = filter_input(INPUT_POST, 'time');
        $lider = filter_input(INPUT_POST, 'liderName');

        switch ($time){
            case 0:
                echo  "<script>alert('Não forma equipe!');</script>";
                break;
            case 1:
                echo  "<script>alert('Não forma equipe!');</script>";
                break;
            case 2:
            case 3:
            case 4:
                echo  "<script>alert('Equipe formada com sucesso, tendo como lider: ');</script>";
				echo "<h1>Lider $lider</h1>";
                break;
            default:
                echo  "<script>alert('Valor invalido');</script>";
                break;
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>

	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	
	<div class="container">
		<div class="container-login">
			<div class="wrap-login">
				<form method="post" class="login-form">
					<span class="login-form-title">
						Atividade 3
					</span>

					<div class="second-title margin-top-35 margin-bottom-35">
						<h3>Entre com o numero de integrantes e verificamos se forma equipe ou não</h3>
					</div>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="liderName input-form" type="text" name="liderName" id="liderName" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Nome do Lider"></span>
					</div>

                    <div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="time input-form" type="number" name="time" id="time" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Numero de integrantes"></span>
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
								Voltar para
							</span>
							<a href="../atividadesPages/atvDois.php" class="text2">
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