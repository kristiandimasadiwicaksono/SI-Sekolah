<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class HomePageController extends Controller
{
    public function index() {
        $data = Home::all();

        return view('homepage.index', compact('data'));
    }
}
