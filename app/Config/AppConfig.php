<?php

/**
 * Config
 * @package App\Config
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Config;

class AppConfig {

    public string $base_url = 'https://wypo.michus.studio/';

    public array $db = [
        'host' => '127.0.0.1',
        'name' => 'wypo',
        'user' => 'admin',
        'password' => ''
    ];

    public array $mail = [
        'host' => '',
        'port' => 465,
        'encryption' => 'ssl',
        'username' => '',
        'password' => '',
        'from' => [
            'address' => '',
            'name' => ''
        ]
    ];

    public array $social = [
        'facebook' => 'https://facebook.com/',
        'instagram' => 'https://instagram.com/',
        'linkedin' => 'https://linkedin.com/',
        'twitter' => 'https://twitter.com/',
        'youtube' => 'https://youtube.com/'
    ];

}