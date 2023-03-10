<?php

/**
 * Home controller
 * @package App\Controllers
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $clients = $this->pdo->query('SELECT * FROM Klienci')->fetchAll();
        return view('home', compact('clients'));
    }
}