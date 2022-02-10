<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require __DIR__.'/../components/PHPMailer/src/Exception.php';
require __DIR__.'/../components/PHPMailer/src/PHPMailer.php';
require __DIR__.'/../components/PHPMailer/src/SMTP.php';
require __DIR__.'/Config.php';

class Mail
{
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer();
    }

    // Método para enviar o email
    public function sendMail(string $title, string $body, string $recipient, string $recipientName = '')
    {
        try {

            // Aqui ele chama o método abaixo, que tem as configurações do PHPMailer
            $this->configMail();

            //Aqui ele recebe o email do destinatário
            $this->mail->addAddress($recipient, $recipientName);
            //Aqui você diz para o PHPMailer que o email aceita tags HTML
            $this->mail->isHTML(true);
            //Título do email
            $this->mail->Subject = $title;
            //Corpo do email
            $this->mail->Body    = $body;
            //Enviar o email
            $this->mail->send();
            echo 'Email eniviado com sucesso!';

        } catch (Exception $e) {
            echo "Erro ao enviar o email! Motivo: {$this->mail->ErrorInfo}";
        }
    }

    public function configMail(): void
    {
        //para desativar o debug na tela ao enviar o email basta alterar para DEBUG_OFF
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->mail->isSMTP();
        $this->mail->Host       = Config::SENDGRID_SERVER;
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = Config::SENDGRID_USERNAME;
        $this->mail->Password   = Config::SENDGRID_PASSWORD;
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->mail->Port       = 465;

        $this->mail->setFrom(Config::FROM_MAIL);
    }
}