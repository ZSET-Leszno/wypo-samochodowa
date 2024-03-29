<?php

/**
 * Contact API controller
 * @package App\Controllers\API
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Controllers\API;

class ContactController extends BaseController
{
    public function send()
    {
        $data = $this->helper->getPostData();
        if (empty($data['name']) || empty($data['email']) || empty($data['subject']) || empty($data['message'])) {
            return $this->helper->result(false, 'Wypełnij wszystkie pola');
        }
        $mail = new \PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->Host = $this->config->mail['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $this->config->mail['username'];
        $mail->Password = $this->config->mail['password'];
        $mail->SMTPSecure = $this->config->mail['encryption'];
        $mail->Port = $this->config->mail['port'];
        $mail->setFrom($data['email'], $data['name']);
        $mail->addAddress($this->config->mail['to']['address'], $this->config->mail['to']['name']);
        $mail->isHTML(true);
        $mail->Subject = 'Wiadomość z formularza kontaktowego';
        $mail->Body = '<h1>Wiadomość z formularza kontaktowego</h1><p><b>Imię i nazwisko:</b> ' . $data['name'] . '</p><p><b>Adres e-mail:</b> ' . $data['email'] . '</p><p><b>Temat:</b> ' . $data['subject'] . '</p><p><b>Treść wiadomości:</b> ' . $data['message'] . '</p>';
        if ($mail->send()) {
            return $this->helper->result(true, 'Wiadomość została wysłana');
        } else {
            return $this->helper->result(false, 'Wystąpił błąd podczas wysyłania wiadomości');
        }
    }

}