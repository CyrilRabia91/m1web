<?php

namespace App\Front\Controller;

use App\Front\Controller\AbstractController;

class CountryController extends AbstractController
{
    public function index(array $uriVars = [])
    {
        $date = new \DateTime();

        $this->render('Country/index', [
            'id' => $uriVars['id'],
            'date' => $date->format('d/m/Y')
        ]);
    }
}