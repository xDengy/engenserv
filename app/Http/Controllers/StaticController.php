<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Main;
use App\Models\Menu;
use App\Models\News;
use App\Models\Order;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\Page;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public array $data = [];
    public int $paginateCatalog = 3;
    public int $paginateNews = 3;
    public string $sort = 'sort';
    public string $order = 'ASC';
    public ?string $query = null;
    public function __construct()
    {
        $this->data['settings'] = Setting::first();
        $this->data['menu'] = Menu::orderBy('sort', 'ASC')->get();
        $this->data['request_uri'] = explode('?', $_SERVER['REQUEST_URI'])[0];
        $this->data['page'] = Page::where('url', $this->data['request_uri'])->first() ?? new Page;
        if ($this->data['page']) {
            $this->data['page']->photos1 = $this->data['page']->attachment->where('group','page1');
            $this->data['page']->photos2 = $this->data['page']->attachment->where('group','page2');
        }
        $this->data['breadcrumbs'] = [
            [
                'title' => 'Главная',
                'link' => '/',
            ],
            [
                'title' => $this->data['page']->h1,
            ],
        ];
        if (in_array($this->data['request_uri'], ['/catalog', '/novinki'])) {
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
            if (isset($_GET['q'])) {
                $this->query = $_GET['q'];
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

    public function getBreadcrumb($allCodes) {
        $folderAr = [];
        $allCodes = explode('/', $allCodes);
        foreach ($allCodes as $code) {
            $item = Catalog::where('code', $code)->first();
            $folderAr[] = [
                'title' => $item->name,
                'link' => route('catalog', $item->url)
            ];
        }
        return $folderAr;
    }

    public function catalog($codes = null)
    {
        $this->getFoldersMenu();
        $folderIds = [];
        $this->data['breadcrumbs'] = [
            [
                'title' => 'Главная',
                'link' => '/',
            ],
            [
                'title' => 'Каталог',
                'link' => '/catalog/',
            ],
        ];
        if (in_array($this->data['request_uri'], ['/catalog', '/novinki'])) {
            unset($this->data['breadcrumbs'][1]['link']);
        }
        if ($codes) {
            $el = Catalog::where('url', $codes . '/')->firstOrFail();
            $this->data['page']->title = $el->title;
            $this->data['page']->desc = $el->desc;
            $this->data['page']->keywords = $el->keywords;
            $this->data['page']->h1 = $el->h1;
            if ($el->folder_id) {
                $this->data['breadcrumbs'] = array_merge($this->data['breadcrumbs'], $this->getBreadcrumb($codes));
            }
            if ($el->is_folder) {
                $folderIds = array_column($el->folders->toArray(), 'id');
                $folderIds[] = $el->id;
            } else {
                return $this->catalogDetail($el->code);
            }
        }
        $elemRes = Catalog::where('is_folder', 0);
        if (!empty($folderIds)) {
            $elemRes = $elemRes->whereIn('folder_id', $folderIds);
        }
        if ($this->query) {
            $elemRes = $elemRes->where('name', 'like', '%' . $this->query . '%');
        }
        $elements = $elemRes->orderBy($this->sort, $this->order)->paginate($this->paginateCatalog)->withQueryString();
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
        $element = Catalog::where('code', $code)->firstOrFail();
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
        $this->getCart();
        return view('cart.cart', $this->data);
    }

    public function order(Request $request)
    {
        $this->getCart();
        $session = $request->session();
        if (!$session->has('order')) {
            $order = Order::create([]);
            $session->put('order', $order->id);
        } else {
            $order = Order::find($session->get('order'));
        }
        foreach ($this->data['cart']['items'] as $item) {
            $order->catalog()->syncWithPivotValues($item->id, [
                'quantity' => $item->quantity,
                'price' => $item->price,
            ], false);
        }
        $this->data['order'] = $order;
        return view('cart.offer', $this->data);
    }

    public function getCart()
    {
        $id = session()->getId();
        $cartSess = \Cart::session($id);
        $this->data['cart'] = [];
        $this->data['cart']['items'] = $cartSess->getContent();
        $this->data['cart']['totalPrice'] = $cartSess->getTotal();;
        $this->data['cart']['quantity'] = $cartSess->getTotalQuantity();
    }
}
