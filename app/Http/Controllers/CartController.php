<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class CartController extends Controller
{
    public function index()
    {
        return View::make('cart.index');
    }
}
