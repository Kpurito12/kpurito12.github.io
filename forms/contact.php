<?php
	$data = date('d/m/Y', time());

	$nombreCliente = $_POST['name'];
	$asuntoCliente = $_POST['subject'];
	$mensajeCliente = $_POST['message'];
	$correoCliente = $_POST['email'];

	$headers = 'From: ' .$correoCliente. " \r\n";
	$headers .= "Reply-To: " .$correoCliente. " \r\n";
	$headers .= "X-Mailer: PHP/" .phpversion(). " \r\n";
	$headers .= "Mime-Version: 1.0 \r\n";
	$headers .= "Content-Type: text/plain";

	$mensaje  = "Nombre: " .$nombreCliente. "\r\n";
	$mensaje .= "Asunto: " .$asuntoCliente. " \r\n";
	$mensaje .= "Mensaje: " .$mensajeCliente. " \r\n";
	$mensaje .= "Correo: " .$correoCliente. " \r\n";
	$mensaje .= "Enviado el " .$data;

	$destinatario = "cuentasinterkpo@hotmail.com";
	$asunto = "CURRICULUM PAGINA WEB " .$data;

	if (mail($destinatario, $asunto, utf8_decode($mensaje), $headers)) {
		echo "OK";
	} else {
		echo "ERROR";
	}

	// header("Location: ../");
?>