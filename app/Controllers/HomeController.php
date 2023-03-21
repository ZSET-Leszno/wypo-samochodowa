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
        $featured = $this->pdo->query('SELECT * FROM samochody LIMIT 4')->fetchAll();
        $brands = $this->pdo->query('SELECT DISTINCT marka FROM samochody')->fetchAll();
        $gears = $this->pdo->query('SELECT DISTINCT skrzynia_biegow FROM samochody')->fetchAll();
        $faqs = [
            'general' => $this->pdo->query("SELECT * FROM faq WHERE typ = 'ogolne'")->fetchAll(),
            'features' => $this->pdo->query("SELECT * FROM faq WHERE typ = 'cechy'")->fetchAll(),
            'technical' => $this->pdo->query("SELECT * FROM faq WHERE typ = 'wsparcie'")->fetchAll(),
        ];
        return view('home', compact('featured','brands', 'gears', 'faqs'));
    }
}