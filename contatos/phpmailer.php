<?php
    include "./vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;

    $mail = new PHPMailer();

    $mail->isSMTP();

    $mail->Host = 'ssl://email-ssl.com.br';

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';

    // $mail->Username = 'cajuinateste137946@gmail.com';
    // $mail->Password = 'cajuinateste123';

    $mail->Username = 'site@cajuinatijuca.com.br';
    $mail->Password = 'tijuca@tijuca';

    $mail->Port = 465;

    $mail->CharSet = 'UTF-8';

    $mail->setFrom('site@cajuinatijuca.com.br');

    $mail->addReplyTo('site@cajuinatijuca.com.br');

    $mail->addAddress('mkt@tijucaalimentos.com');

    $mail->isHTML(true);

    $mail->Subject = 'Sugestão Recebida - Site Cajuina';

    $mail->Body    = "
        <h2> Temos uma nova sugestão enviada por: $userName </h2>
        <h2> Email: $email </h2>
        <br>
        <h3> Sugestão: </h3>
        <p> $text </p>
    ";

    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
        header('location: contato.php');
    }

?>