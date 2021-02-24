<?php




    // Envío a gmail
    $nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    //$empresa = $_POST['mensaje'];*/
    //$nombre='Yomismo';
    //$mail="elmismo@mismo.es";

    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
    $mensaje .= "Su e-mail es: " . $mail . " \r\n";
    $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());

    $para = 'tostaus@hotmail.com';
    $asunto = 'Mensaje de mi sitio web';

    if (mail($para, $asunto, utf8_decode($mensaje), $header)) { 
        print_r("error_get_last()");
      }
    //mail($para, $asunto, utf8_decode($mensaje), $header);
    // Hago un array conl os datos para el objeto Contacto
    

    /*nombre: $('#nombre').val(),
                email: $('#email').val(),
                asunto: $('#asunto').val(),
                mensaje: $('#mensaje').val(),*/

    
    
