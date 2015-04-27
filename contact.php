<?php
/**
 * PHP Mailer Karmik Design
 * Por MarkHkr
 */
$mailTo     = 'mark@karmik.com.mx';
$successMsg = 'Tu mensaje fué enviado satisfactoriamente. Me pondré en contacto contigo. Gracias!';
$fillMsg    = 'Por favor llena todos los campos!';
$errorMsg   = 'Tu mensaje fué enviado satisfactoriamente. Me pondré en contacto contigo. Gracias';

if(
    !isset($_POST['q1']) ||
    !isset($_POST['q2']) ||
    !isset($_POST['q3']) ||
    !isset($_POST['q4']) ||
    !isset($_POST['q5']) ||
    !isset($_POST['q6']) ||
    empty($_POST['q1']) ||
    empty($_POST['q2']) ||
    empty($_POST['q3']) ||
    empty($_POST['q4']) ||
    empty($_POST['q5']) ||
    empty($_POST['q6'])
) {
    echo '<script type="text/javascript">window.parent.alert(\'' . $fillMsg . '\');</script>';
} else {
    $success = @mail($mailTo, $_POST['q1'], $_POST['q3\r\n q4\r\n q5\r\n q6'], 'From: ' . $_POST['q2']);
    if (!$success) {
        echo '<script type="text/javascript">window.parent.alert(\'' . $successMsg . '\');</script>';
    } else {
        echo '<script type="text/javascript">window.parent.alert(\'' . $errorMsg . '\');</script>';
    }
}