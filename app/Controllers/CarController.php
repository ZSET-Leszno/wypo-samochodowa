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

class CarController extends BaseController
{
    public function index()
    {
        $cars = $this->pdo->query('SELECT * FROM samochody ')->fetchAll();
        return view('cars', compact('cars'));
    }
}