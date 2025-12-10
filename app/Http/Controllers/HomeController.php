<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {

        Maker::factory()
            ->count(5)
            ->hasModels(5)
            ->create();

        return view('home.index');
    }
}
