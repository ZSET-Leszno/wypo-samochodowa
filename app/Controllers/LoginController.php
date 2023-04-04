<?php

/**
 * Login controller
 * @package App\Controllers
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === true) {
            $this->helper->redirect('/strona-glowna');
            return;
        }
        return view('login');
    }
}