<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $players = player::orderBy('goals', 'desc')->get();
        return view('index', ['players' => $players]);
    }
}
