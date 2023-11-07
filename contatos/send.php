<?php
    session_start();

require_once "recaptchalib.php";

if ($_POST['nomeUsuario']          != "" && 
    $_POST['enderecoEmail']        != "" && 
    $_POST['textoContato']         != "" 
){
    $userName   = $_POST['nomeUsuario'];
    $email      = $_POST['enderecoEmail'];
    $text       = $_POST['textoContato'];
}

    $_SESSION['response-captcha'] = '';

    $secretKey = "6LclTqcUAAAAAK0Xb01IYgHlWPV6QdCoi9mMLDyt";
    $response  = null;
    $reCaptcha = new ReCaptcha($secretKey);

    if ($_POST["g-recaptcha-response"]) 
    {
        $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
    }

    if($response != null && $response->success)
    {
        include "phpmailer.php";

        $_SESSION['response-captcha'] = "Mensagem Enviada!";

        header("location: contato.php");
    }
    else
    {
        $_SESSION['response-captcha'] = "Insira o CAPTCHA!";

        header("location: contato.php");
    }

?>