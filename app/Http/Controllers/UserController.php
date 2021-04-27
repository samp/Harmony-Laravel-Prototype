<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class UserController extends Controller
{
    public function index()
    {
        return View::make('user.index');
    }
}
