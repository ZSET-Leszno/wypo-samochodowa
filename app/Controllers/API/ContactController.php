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

class ContactController extends \App\Controllers\API\BaseController
{
    public function send()
    {
        $data = $this->request->getPost();
        if (empty($data['name']) || empty($data['email']) || empty($data['subject']) || empty($data['message'])) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Wypełnij wszystkie pola']);
        }
        $mail = new \PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = $this->config->mail['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $this->config->mail['username'];
        $mail->Password = $this->config->mail['password'];
        $mail->SMTPSecure = $this->config->mail['encryption'];
        $mail->Port = $this->config->mail['port'];
        $mail->setFrom($this->config->mail['from']['address'], $this->config->mail['from']['name']);
        $mail->addAddress($this->config->mail['from']['address'], $this->config->mail['from']['name']);
        $mail->isHTML(true);
        $mail->Subject = 'Wiadomość z formularza kontaktowego';
        $mail->Body = '<h1>Wiadomość z formularza kontaktowego</h1><p><b>Imię i nazwisko:</b> ' . $data['name'] . '</p><p><b>Adres e-mail:</b> ' . $data['email'] . '</p><p><b>Temat:</b> ' . $data['subject'] . '</p><p><b>Treść wiadomości:</b> ' . $data['message'] . '</p>';
        if ($mail->send()) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Wiadomość została wysłana']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Wystąpił błąd podczas wysyłania wiadomości']);
        }
    }

}