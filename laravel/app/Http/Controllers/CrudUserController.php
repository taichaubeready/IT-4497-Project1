<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudUserController extends Controller
{
    // Index Page
    public function index() {
        return view('index');
    }
}
