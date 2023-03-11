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
        $featured = $this->pdo->query('SELECT * FROM Samochody LIMIT 4')->fetchAll();
        $brands = $this->pdo->query('SELECT DISTINCT marka FROM Samochody')->fetchAll();
        $gears = $this->pdo->query('SELECT DISTINCT skrzynia_biegow FROM Samochody')->fetchAll();
        return view('home', compact('featured','brands', 'gears'));
    }
}