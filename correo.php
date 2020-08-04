<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['email']) &&
    !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $header = "From: cristian.py.isc@gmail.com" . "\r\n";
        $header .= "Replt-To: cristian.py.isc@gmail.com" . "\r\n";
        $header .= "X-Mailer: PHP/". phpversion();
        mail($correo,$asunto,$mensaje,$header);
        if($mail){
            echo "<h4> mail enviado </h4>";
        }
    }
}
?>
