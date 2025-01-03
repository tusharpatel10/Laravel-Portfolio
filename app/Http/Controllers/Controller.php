<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function Home() {
        return view('Portfolio');
    }

    public function Header() {
        return view('views/header');
    }
}
