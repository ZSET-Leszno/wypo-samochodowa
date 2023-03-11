<?php

/**
 * Car controller
 * @package App\Controllers\API
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Controllers\API;

use App\Controllers\API\BaseController;

class CarController extends BaseController
{
    public function getTypes(string $brand): string
    {
        $types = $this->pdo->query("SELECT DISTINCT typ FROM Samochody WHERE marka = '$brand'")->fetchAll();
        if ($types) {
            return $this->helper->result(false, 'Nie znaleziono typów dla tej marki');
        }
        return $this->helper->result(true, json_encode($types));
    }

    public function getModels(string $brand, string $type): string
    {
        $models = $this->pdo->query("SELECT DISTINCT model FROM Samochody WHERE marka = '$brand' AND typ = '$type'")->fetchAll();
        if ($models) {
            return $this->helper->result(false, 'Nie znaleziono modeli dla tej marki i typu');
        }
        return $this->helper->result(true, json_encode($models));
    }

}