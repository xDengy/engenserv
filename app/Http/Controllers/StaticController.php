<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public array $data = [];
    function __construct()
    {
        $this->data['settings'] = Setting::first();
        $this->data['menu'] = Menu::orderBy('sort')->get();
    }

    function welcome()
    {
        $this->data['main'] = Main::first();
        return view('welcome', $this->data);
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
