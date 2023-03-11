<?php

/**
 * Base API controller
 * @package App\Controllers\API
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Controllers\API;

use App\Database\DatabaseHandler;
use Illuminate\Support\Facades\Http;
use App\Helpers\MainHelper;
use App\Config\AppConfig;

class BaseController
{
    public AppConfig $config;
    public MainHelper $helper;
    public DatabaseHandler $pdo;

    public function __construct()
    {
        $this->config = new AppConfig();
        $this->helper = new MainHelper();
        $this->pdo = new DatabaseHandler();
    }
}