<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        return view('pages/home', [
            'title'      => 'Home | POS Foundations',
            'activePage' => 'home',
        ]);
    }

    public function about(): string
    {
        return view('pages/about', [
            'title'      => 'About | POS Foundations',
            'activePage' => 'about',
        ]);
    }
}
