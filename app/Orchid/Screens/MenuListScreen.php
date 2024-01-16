<?php

namespace App\Orchid\Screens;

use App\Models\Menu;
use App\Orchid\Layouts\MenuListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class MenuListScreen extends Screen
{
    public $name = 'Меню';
    public $exist = false;

    public function query($id = null, Request $request = null): array
    {
        $condition = [];
        if (!empty($request->get('filter'))) {
            $arFilter = $request->get('filter');
            foreach ($arFilter as $key => $filter) {
                if ($key == 'active') {
                    $filter = $filter == 'Да' ? 1 : 0;
                }
                $condition[] = [$key, 'like', '%' . mb_strtolower($filter) . '%'];
            }
        }
        $arFilter = $condition;

        if (!empty($arFilter)) {
            return [
                'menus' => Menu::where($arFilter)->defaultSort('id', 'desc')->paginate()
            ];
        } else {
            return [
                'menus' => Menu::defaultSort('id', 'desc')->paginate()
            ];
        }
    }

    public function commandBar(): array
    {
        $commandAr = [];
        $commandAr[] = Link::make('Добавить элемент')
            ->icon('plus')
            ->route('platform.menu.edit');

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            MenuListLayout::class
        ];
    }
}
