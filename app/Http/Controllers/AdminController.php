<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store()
    {
        return view('admin.store');
    }

    public function show()
    {
        return view('admin.show');
    }

    public function update()
    {
        return view('admin.update');
    }

    public function destroy()
    {
        return view('admin.destroy');
    }
}
