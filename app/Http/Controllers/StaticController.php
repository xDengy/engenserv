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
    public int $paginateCatalog = 3;
    public int $paginateNews = 3;
    public string $sort = 'sort';
    public string $order = 'ASC';
    public function __construct()
    {
        $this->data['settings'] = Setting::first();
        $this->data['menu'] = Menu::orderBy($this->sort, $this->order)->get();
//        $this->data['page'] = Page::where('url', $_SERVER['PATH_INFO'])->first();
        if (in_array($_SERVER['PATH_INFO'], ['/catalog/', '/novinki/'])) {
            $sort = 'price';
            $order = 'ASC';
            if (isset($_GET['sort'])) {
                switch ($_GET['sort']) {
                    case 'maxPrice' :
                        $sort = 'price';
                        $order = 'DESC';
                        break;
                    case 'new' :
                        $sort = 'new';
                        $order = 'DESC';
                        break;
                    default :
                        break;
                }
            }
            $this->sort = $sort;
            $this->order = $order;
        }
    }

    public function welcome()
    {
        $this->data['main'] = Main::first();
        $newsRes = News::orderBy('sort', 'ASC')->limit(4)->get();
        $news = [];
        foreach ($newsRes as $newItem) {
            $tag = $newItem->tags;
            $newsResAr = $newItem->toArray();
            $news[] = $newsResAr;
        }
        $this->data['news'] = [];
        $this->data['news'][] = [array_shift($news)];
        $this->data['news'][] = $news;
        $this->data['about'] = About::orderBy('sort', 'ASC')->get();
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
        $folders = Catalog::where(['is_folder' => 1, 'folder_id' => null])->orderBy('sort', 'ASC')->get();
        foreach ($folders as &$folder) {
            $folder = $this->prepareMenu($folder);
        }
        $this->data['folders'] = $folders;
    }

    public function catalog($codes = null)
    {
        $this->getFoldersMenu();
        $codes = explode('/', $codes);
        $code = array_pop($codes);
        $filter = ['is_folder' => 0];
        if ($code) {
            $el = Catalog::where('code', $code)->first();
            if ($el->is_folder) {
                $filter['folder_id'] = $el->id;
            } else {
                return $this->catalogDetail($el->code);
            }
        }
        $elements = Catalog::where($filter)->orderBy($this->sort, $this->order)->paginate($this->paginateCatalog)->withQueryString();
        $this->data['elements'] = $elements;
        return view('catalog.catalog', $this->data);
    }

    public function novinki()
    {
        $elements = Catalog::where(['is_folder' => 0, 'new' => 1])->orderBy($this->sort, $this->order)->paginate($this->paginateCatalog)->withQueryString();
        $this->data['elements'] = $elements;
        $this->getFoldersMenu();
        return view('catalog.catalog', $this->data);
    }

    public function catalogDetail($code)
    {
        $element = Catalog::where('code', $code)->first();
        $this->data['element'] = $element;
        return view('catalog.catalogDetail', $this->data);
    }

    public function partnership()
    {
        $this->data['partners'] = Partner::orderBy('sort', 'ASC')->get();
        return view('partnership', $this->data);
    }

    public function news()
    {
        $news = News::orderBy('sort', 'ASC')->paginate($this->paginateNews)->withQueryString();
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
