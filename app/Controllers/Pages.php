<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function index($page)
    {

        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        return view('header') .
            view($page);
    }
}
