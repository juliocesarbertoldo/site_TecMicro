<?php 
	$email = $_POST['email'];
	$mensagem = $_POST['msg'];
	$to = 'tecmicro@tecmicrodigital.com.br';
	$subject = 'Contato - Site TecMicro';

	$body = "De: ".$email."\r\n\r\n".
			"Mensagem:\n\n".$mensagem;

	$header = "From:tecmicro@tecmicrodigital.com.br"."\r\n".
				"Reply-to:".$email."\e\n".
				"X=Mailer:PHP/".phpversion();

	if (mail($to, $subject, $body)) {
		echo "Sua mensagem foi enviada!";
	}else {
		echo "Algo deu errado, volte e tente novamente\n Insira um nome e endereço de e-mail válidos";
	}
?>