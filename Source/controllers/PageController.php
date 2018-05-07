<?php

namespace App\Controllers;

class PageController
{
    public function index()
    {
        $title = 'Home';
        return view('pages.index', compact('title'));
    }
}
