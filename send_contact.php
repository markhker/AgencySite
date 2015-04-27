<?php
$my_email = 'mark@karmik.com.mx';


/* Do not change any code below this line unless you are sure what you are doing. */
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$errors = array();

if ($name == '')
{
	$errors['name'] = 'Introduzca su nombre!';
}

if ($phone == '')
{
	$errors['phone'] = 'Introduzca su teléfono!';
}

if ( ! filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$errors['email'] = 'Introduzca un email válido!';
}
if ($message == '')
{
	$errors['message'] = 'Introduzca su mensaje!';
}

if (count($errors) == 0)
{
	require 'inc/class.phpmailer.php';
	$mail = new PHPMailer;

	$mail->AddAddress($my_email);

	$mail->From = $email;
	$mail->FromName = '';
	$mail->Subject = 'Solicitud de contacto de http://'.$_SERVER['HTTP_HOST'].'/';
	$mail->Body = "Nombre: ".$name."\n"."Email: ".$email."\n"."Telefono: ".$phone."\n\n"."Mensaje:\n".$message;

	if($mail->Send()) {
		$response = array ('success' => 1);
		echo json_encode($response);
		exit;

	} else {
		$errors['sending'] = 'Ocurrió un error mientras se enviaba su mensaje! Por favor trate mas tarde.';

	}

}

$response = array ('success' => 0, 'errors' => $errors);
echo json_encode($response);
exit;