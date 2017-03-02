<?php
 
function sendMail2() {
    $to2 = 'brayansystemlp@gmail.com';
    $subject2 = 'Contacto - panamorlperu';
    $message2 = 'Contacto - panamorlperu' . "\r\n" .
            "\r\n" .
            'nombre: ' . $_POST['nombre'] . "\r\n" .
             'correo: ' . $_POST['correo'] . "\r\n" .
             'asunto: ' . $_POST['asunto'] . "\r\n" .  
            "\r\n" .
            'Mensaje: ' . $_POST['mensaje'] . "\r\n"
            ;

    $headers2 = 'From: noreply@panamorlperu.com' . "\r\n" .
            'Reply-To: noreply@panamorlperu.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $r2 = mail($to2, $subject2, $message2, $headers2);
}

function sendMail() {
    $to = 'informes3@grupomilenium.pe';
    $subject = 'Contacto - panamorlperu';
    $message = 'Contacto - panamorlperu' . "\r\n" .
            "\r\n" .
            'nombre: ' . $_POST['nombre'] . "\r\n" .
             'correo: ' . $_POST['correo'] . "\r\n" .
             'asunto: ' . $_POST['asunto'] . "\r\n" .  
            "\r\n" .
            'Mensaje: ' . $_POST['mensaje'] . "\r\n"
            ;

    $headers = 'From: noreply@panamorlperu.com' . "\r\n" .
            'Reply-To: noreply@panamorlperu.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $r = mail($to, $subject, $message, $headers);
}


function sendMailToClient() {
    $to = '';
    $subject = 'Gracias por Contactarnos';
    
    $message = file_get_contents(dirname(__FILE__) .'/email-template.php');
    $message = str_replace('[Name]', $_POST['Name'], $message);

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
    $headers .= 'To: '.$_POST['nombre'].' <'.$_POST['correo'].'>' . "\r\n";
    $headers .= 'From: info<noreply@congresospi-uaai.com.com>' . "\r\n";

// Mail it
    mail($to, $subject, $message, $headers);
}

//sendMail(); 
sendMail2();
sendMailToClient();

header("Location: agradecimiento.html");