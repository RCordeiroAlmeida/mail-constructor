<html>
	<header>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        
		<link rel="stylesheet" href="css/styles.css">
    
        <!-- CSS do Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- Scripts do Bootstrap (opcional, mas recomendado para funcionalidades adicionais) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    </header>
        
	<body style="background-color:transparent; padding:10px; font-family:Arial;" >
<?php
	var_dump($_POST);
	exit();

	use PHPMailer\PHPMailer\PHPMailer;
	require_once 'vendor/autoload.php';
	$mail = new PHPMailer;


	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = "smtp.tascacatalogos.com.br";
	$mail->Port = 587;
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->SMTPAuth = true;                             // Enable SMTP authentication
	$mail->Username = 'site@tascacatalogos.com.br';         // SMTP username
	$mail->Password = 'T@sca#2023';                       // SMTP password
	$mail->SMTPSecure = 'SSL';                          // Enable encryption, 'ssl' also accepted
	$mail->CharSet = 'utf-8';
	$mail->SetLanguage("br","mailer/language/phpmailer.lang-pt_br.php");

	$mail->setFrom($_POST['email'], $_POST['nome']);
	$mail->addAddress("rafaelcordeiro299@gmail.com");  // Add a recipient
	$mail->addReplyTo($_POST['email'], $_POST['nome']);
	//$mail->addCC('fuipracasa@gmail.com');

	$mail->isHTML(true);                                  // Set email format to HTML
	// Assunto
	$mail->Subject = 'Novo pedido de ' . $_POST['con_nome'];

	// Corpo do e-mail
	$body = "Novo pedido de <strong>" . $_POST['con_nome'] . "</strong>\n\n";
	$body .= "[informações do consultor]\n\n";

	// Adiciona os itens do pedido à tabela
	$body .= "<table>\n";
	$body .= "<tr><th>Quantidade</th><th>Código</th><th>Produto</th><th>Página</th><th>Preço Unitário</th><th>Total</th></tr>\n";

	for ($i = 0; isset($_POST['ped_quantidade_' . $i]); $i++) {
		$body .= "<tr>";
		$body .= "<td>" . $_POST['ped_quantidade_' . $i] . "</td>";
		$body .= "<td>" . $_POST['ped_codigo_' . $i] . "</td>";
		$body .= "<td>" . $_POST['ped_produto_' . $i] . "</td>";
		$body .= "<td>" . $_POST['ped_pagina_' . $i] . "</td>";
		$body .= "<td>" . $_POST['ped_preco_uni_' . $i] . "</td>";
		$body .= "<td>" . $_POST['ped_total_' . $i] . "</td>";
		$body .= "</tr>\n";
	}

	$body .= "</table>\n";

	$mail->Body = $body;

	// Envia o e-mail
	if(!$mail->send()) {
		echo 'A mensagem não pôde ser enviada.';
		echo 'Erro do Mailer: ' . $mail->ErrorInfo;
	} else {
		echo 'Mensagem enviada.';
	}
?>
        </center>
    </body>
</html>
