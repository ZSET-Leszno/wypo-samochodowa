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
        if(empty($_GET)) {
            $cars = $this->pdo->query('SELECT * FROM samochody ');
            return view('cars', compact('cars'));
        } else{
            $filter = [];
            foreach($_GET as $key => $value) {
                $filter[] = $key . ' = ' . $value;
            }
            $filter = implode(' AND ', $filter);
            $cars = $this->pdo->query('SELECT * FROM samochody WHERE ' . $filter);
            return view('cars', compact('cars'));
        }
    }
}