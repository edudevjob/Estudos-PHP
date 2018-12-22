<?php
use PHPMailer\PHPMailer\PHPMailer;
function send(array $data)
{

    $email = new PHPMailer;
    $email->Charset = 'UTF-8';
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->SMTPAuth = true;
    $email->SMTPSecure = 'plain';
    $email->Username = '6e26de89683999';
    $email->Password = '56fae9e8aee834';
    $email->Port = 465;
    $email->setFrom('eduardotecnologo@hotmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->isHTML(true);
    $email->Subject = $data['assunto'];
    $email->Body = $data['mensagem'];
    $email->AltBody = 'Para visualizar essa mensagem tenha certeza de usar um softeare que aceite HTML';
    $email->MsgHTML($data['mensagem']);
    $email->setLanguage('pt');
    echo $email->ErrorInfo;
    return $email->send();

}
