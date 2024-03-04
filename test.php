<?php
include('smtp/PHPMailerAutoload.php');


echo smtp_mailer("rakeshdevarakonda2000@gmail.com", 'Reset Password', "resetCode");

function smtp_mailer($to, $subject, $msg)
{
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "rakeshdevarakonda2000@gmail.com";
	$mail->Password = "qqvpaevlezhzbvxz";
	$mail->SetFrom("rakeshdevarakonda2000@gmail.com");
	$mail->Subject = $subject;
	$mail->Body = $msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => false
		)
	);
	if (!$mail->Send()) {
		echo $mail->ErrorInfo;
	} else {
		header("Location:otp.php");
		return 'Sent';
	}
}




?>