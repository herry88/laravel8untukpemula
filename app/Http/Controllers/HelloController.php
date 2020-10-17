<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //halaman function index
    public function index($id)
    {
        echo '<h1>Hello World, From Controller</h1>'. $id;
    }
}
