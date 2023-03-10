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
        $lastCars = $this->pdo->query('SELECT * FROM Samochody LIMIT 8')->fetchAll();
        $types = $this->pdo->query('SELECT * FROM Typy')->fetchAll();
        return view('home', compact('lastCars', 'types'));
    }
}