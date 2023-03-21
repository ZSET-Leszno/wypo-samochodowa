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

class CarController extends BaseController
{
    public function getTypes(string $brand): string
    {
        $types = $this->pdo->query("SELECT DISTINCT id_typu FROM samochody WHERE marka = '$brand'")->fetchAll();
        if (!$types) {
            return $this->helper->result(false, 'Nie znaleziono typów dla tej marki');
        }
        $types = array_map(function ($type) {
            return [
                'id' => $this->helper->getCarType($type->id_typu)['id_typu'],
                'name' => $this->helper->getCarType($type->id_typu)['nazwa_typu']
            ];
        }, $types);
        return $this->helper->result(true, 'Znaleziono typy dla tej marki', $types);
    }

    public function getModels(string $brand, string $type): string
    {
        $models = $this->pdo->query("SELECT DISTINCT model FROM samochody WHERE marka = '$brand' AND typ = '$type'")->fetchAll();
        if (!$models) {
            return $this->helper->result(false, 'Nie znaleziono modeli dla tej marki i typu');
        }
        $models = array_map(function ($model) {
            return $model->model;
        }, $models);
        return $this->helper->result(true, 'Znaleziono modele dla tej marki i typu', $models);
    }

}