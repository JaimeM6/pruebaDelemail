<?php

    $destinatario = $_POST["destinatario"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    mail($destinatario, $asunto, $mensaje);
    
?>