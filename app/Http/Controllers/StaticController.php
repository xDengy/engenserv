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

    function catalogDetail($code)
    {
        return view('catalog.catalogDetail', []);
    }

    function partnership()
    {
        return view('partnership', []);
    }

    function news()
    {
        return view('news', []);
    }

    function about()
    {
        return view('about', []);
    }

    function contacts()
    {
        return view('contacts', []);
    }

    function cart()
    {
        return view('cart.cart', []);
    }

    function offer()
    {
        return view('cart.offer', []);
    }

    function dev()
    {
        return view('dev', []);
    }
}
