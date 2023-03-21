<?php

/**
 * Contact controller
 * @package App\Controllers
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index()
    {
        $csrf_token = $this->helper->getCsrf();
        return view('contact', compact('csrf_token'));
    }
}