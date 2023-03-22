<?php

/**
 * Rental controller
 * @package App\Controllers
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Controllers;

class RentalController extends BaseController
{
    public function index(int $id)
    {
        $car = $this->pdo->query('SELECT * FROM samochody WHERE id_samochodu = ' . $id);
        if ($car->rowCount() === 0) {
            return $this->helper->redirect('home');
        }
        $car = $car->fetch();
        return view('rental', compact('car'));
    }
}