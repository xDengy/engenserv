<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Main;
use App\Models\Menu;
use App\Models\News;
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
        $newsRes = News::orderBy('sort')->limit(4)->get();
        $news = [];
        foreach ($newsRes as $newItem) {
            $tag = $newItem->tags;
            $newsResAr = $newItem->toArray();
            $news[] = $newsResAr;
        }
        $this->data['news'] = [];
        $this->data['news'][] = [array_shift($news)];
        $this->data['news'][] = $news;
        $this->data['about'] = About::orderBy('sort')->get();
        return view('welcome', $this->data);
    }

    function catalog()
    {
        return view('catalog.catalog', $this->data);
    }

    function catalogDetail($code)
    {
        return view('catalog.catalogDetail', $this->data);
    }

    function partnership()
    {
        return view('partnership', $this->data);
    }

    function news()
    {
        $news = News::orderBy('sort')->paginate(3)->withQueryString();
        $this->data['news'] = $news;
        return view('news', $this->data);
    }

    function about()
    {
        return view('about', $this->data);
    }

    function contacts()
    {
        return view('contacts', $this->data);
    }

    function cart()
    {
        return view('cart.cart', $this->data);
    }

    function offer()
    {
        return view('cart.offer', $this->data);
    }

    function dev()
    {
        return view('dev', $this->data);
    }
}
