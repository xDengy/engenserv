<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    function welcome()
    {
        return view('welcome', []);
    }

    function catalog()
    {
        return view('catalog.catalog', []);
    }

    function catalogDetail($id)
    {
        return view('catalog.catalogDetail', []);
    }

    function partnership()
    {
        return view('partnership', []);
    }
}
