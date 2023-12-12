<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Main;
use App\Models\Menu;
use App\Models\News;
use App\Models\Partner;
use App\Models\Setting;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public array $data = [];
    public function __construct()
    {
        $this->data['settings'] = Setting::first();
        $this->data['menu'] = Menu::orderBy('sort')->get();
    }

    public function welcome()
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

    public function prepareMenu($folderData)
    {
        $folderAr = [];
        $folders = Catalog::where(['folder_id' => $folderData->id, 'is_folder' => 1])->get();
        foreach ($folders as $key => $folder) {
            $folderAr[] = $this->prepareMenu($folder);
        }
        if (!empty($folderAr)) {
            $folderData['children'] = $folderAr;
        }

        return $folderData;
    }

    public function getFoldersMenu()
    {
        $folders = Catalog::where(['is_folder' => 1, 'folder_id' => null])->orderBy('sort')->get();
        foreach ($folders as &$folder) {
            $folder = $this->prepareMenu($folder);
        }
        $this->data['folders'] = $folders;
    }

    public function catalog($id = null)
    {
        $filter = ['is_folder' => 0];
        if ($id) {
            $filter['folder_id'] = $id;
        }
        $elements = Catalog::where($filter)->orderBy('sort')->paginate(3)->withQueryString();
        $this->data['elements'] = $elements;
        $this->getFoldersMenu();
        return view('catalog.catalog', $this->data);
    }

    public function catalogDetail($code)
    {
        $element = Catalog::where('id', $code)->first();
        if ($element->is_folder == 0) {
            $folders = Catalog::where(['is_folder' => 1, 'folder_id' => null])->orderBy('sort')->get();
            foreach ($folders as &$folder) {
                $folder = $this->prepareMenu($folder);
            }
            $this->data['element'] = $element;
            $this->getFoldersMenu();
            return view('catalog.catalogDetail', $this->data);
        } else {
            return $this->catalog($element->id);
        }
    }

    public function partnership()
    {
        $this->data['partners'] = Partner::orderBy('sort')->get();
        return view('partnership', $this->data);
    }

    public function news()
    {
        $news = News::orderBy('sort')->paginate(3)->withQueryString();
        $this->data['news'] = $news;
        return view('news', $this->data);
    }

    public function about()
    {
        return view('about', $this->data);
    }

    public function contacts()
    {
        $this->data['contact'] = Contact::first();
        return view('contacts', $this->data);
    }

    public function cart()
    {
        return view('cart.cart', $this->data);
    }

    public function offer()
    {
        return view('cart.offer', $this->data);
    }

    public function dev()
    {
        return view('dev', $this->data);
    }
}
