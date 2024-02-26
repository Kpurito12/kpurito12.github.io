<?php

	$nombre = $_POST['name'];
	$correo = $_POST['email'];
	$asunto = $_POST['subject'];
	$mensaje = $_POST['message'];

	$headers = 'From: ' . $mensaje . " \r\n";
	$headers .= "Reply-To: " . $mensaje . " \r\n";
	$headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$headers .= "Mime-Version: 1.0 \r\n";
	$headers .= "Content-Type: text/plain";

	$mensaje  = "Nombre: " . $nombre . "\r\n";
	$mensaje .= "Correo de contacto: " . $correo . " \r\n";
	$mensaje .= "Asunto: " . $asunto . " \r\n";
	$mensaje .= "Mensaje: " . $mensaje . " \r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	$destinatario = "kpurito12@gmail.com";
	$asunto = "CURRÍCULUM PAGINA WEB " . date('d/m/Y', time());

	mail($destinatario, $asunto, utf8_decode($mensaje), $headers);
	header("Location: ../");

?>