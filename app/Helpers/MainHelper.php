<?php

/**
 * Main Helper
 * @package App\Helpers
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Helpers;
use App\Config\AppConfig;
use App\Database\DatabaseHandler;

class MainHelper
{
    private AppConfig $config;
    private DatabaseHandler $pdo;

    public function __construct()
    {
        $this->config = new AppConfig();
        $this->pdo = new DatabaseHandler();
    }

    /**
     * Check string
     * @param string $data
     * @return string
     */
    public function checkString(string $data): string {
        return htmlspecialchars(addslashes(strip_tags(trim($data))), ENT_QUOTES);
    }

    /**
     * Return JSON result
     * @param bool $success
     * @param string $message
     * @return string
     */
    public function result(bool $success, string $message, array $data): string {

        $result = [
            'success' => $success,
            'message' => $message
        ];
        if(!empty($data)) {
            $result['data'] = $data;
        }
        return json_encode($result);
    }

    /**
     * Generate random string
     * @param int $length
     * @param string $characters
     * @return string
     */
    public static function generateString(int $length, string $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): string {
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $string;
    }

    /**
     * Get plural form of word
     * @param int $number
     * @param string $plural1
     * @param string $plural2
     * @param string $plural3
     * @return string
     */
    public function getPluralByNumber(int $number, string $plural1, string $plural2, string $plural3): string {
        $plural_matches = [
            $plural1 => ['1'],
            $plural2 => ['*0', '*1', '*5', '*6', '*7', '*8', '*9'],
            $plural3 => ['*2', '*3', '*4']
        ];
        $last_digit = substr($number, -1);
        $look_for = strlen($number) == $last_digit && $last_digit == 1 ? '1' : "*$last_digit";
        foreach ($plural_matches as $key => $variants) {
            if (in_array($look_for, $variants)) {
                return $key;
            }
        }
        return '?';
    }

    /**
     * Check if email is disposable
     * @param string $email
     * @return bool
     */
    public function checkMailProvider(string $email): bool {
        $source = json_decode(file_get_contents('https://cdn.jsdelivr.net/gh/disposable/disposable-email-domains@master/domains.json'));
        $email = explode('@', $email);
        if (in_array($email[1], $source)) {
            return true;
        }
        return false;
    }

    /**
     * Check if string is valid
     * @param string $string
     * @return string
     */
    public function getIpAddress(): string {
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            return $this->checkString($_SERVER['HTTP_CF_CONNECTING_IP']);
        }
        else if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            return $this->checkString($_SERVER['HTTP_CLIENT_IP']);
        }
        else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            return $this->checkString($_SERVER['HTTP_X_FORWARDED']);
        }
        else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            return $this->checkString($_SERVER['HTTP_FORWARDED_FOR']);
        }
        else if (isset($_SERVER['HTTP_FORWARDED'])) {
            return $this->checkString($_SERVER['HTTP_FORWARDED']);
        }
        else if (isset($_SERVER['REMOTE_ADDR'])) {
            return $this->checkString($_SERVER['REMOTE_ADDR']);
        }
        else {
            return '?';
        }
    }

    /**
     * Redirect to path
     * @param string $path
     */
    public function redirect(string $path) {
        header('Location: ' . $path);
        die();
    }

    /**
     * Check if session item exists
     * @param string $key
     * @return bool
     */
    function sessionHas(string $key)
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Get CSRF token
     * @param string $key
     * @return mixed
     */
    public function getCsrf()
    {
        if (!$this->sessionHas('csrf')) {
            $_SESSION['csrf'] = md5(uniqid(base64_encode(rand(100, 40000))));
        }
        return $_SESSION['csrf'];
    }
}
