<?php
$email = $_POST['email'];
$mensagem = $_POST['msg'];
$to = 'tecmicro@tecmicrodigital.com.br';
$subject = 'Contato - Site TecMicro';

$body = "De: " . $email . "\r\n\r\n" .
	"Mensagem:\n\n" . $mensagem;

$header = "From:tecmicro@tecmicrodigital.com.br" . "\r\n" .
	"Reply-to:" . $email . "\e\n" .
	"X=Mailer:PHP/" . phpversion();

if (mail($to, $subject, $body)) {
	echo 
	'<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<style>
			html {
				font-family: Arial, Helvetica, sans-serif;
				text-align: center;
				background: url("imagens/fd-envio.jpg") no-repeat;
				background-size: cover;
			}
			h1 {
				font-size: 30px;
				padding-top: 40vh;
				color: white;
			}
			a {
				font-size: 15px;
				text-decoration: none;
				padding: 10px;
				color: #CECECE;
				background-color: rgba(255, 255, 255, 0.2);
				border-radius: 30px;
			}
			a:hover {
				color: white;
			}
		</style>
	</head>
	<body>
		<h1>Sua mensagem foi enviada!</h1>
		<a href="https://tecmicrodigital.com.br/">Clique aqui para voltar ao site</a>
	</body>
	</html>';
} else {
	echo 
	'<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<style>
			html {
				font-family: Arial, Helvetica, sans-serif;
				text-align: center;
				background: url("imagens/fd-envio.jpg") no-repeat;
				background-size: cover;
			}
			h1 {
				font-size: 20px;
				padding-top: 40vh;
				color: red;
			}
			a {
				font-size: 15px;
				text-decoration: none;
				padding: 10px;
				color: #CECECE;
				background-color: rgba(255, 255, 255, 0.2);
				border-radius: 30px;
			}
			a:hover {
				color: white;
			}
		</style>
	</head>
	<body>
		<h1>Algo deu errado, volte e tente novamente\n Insira um nome e endereço de e-mail válidos</h1>
		<a href="https://tecmicrodigital.com.br/">Clique aqui para voltar ao site</a>
	</body>
	</html>';
}
