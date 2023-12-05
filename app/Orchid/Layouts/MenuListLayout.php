<?php

namespace App\Orchid\Layouts;

use App\Models\Menu;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class MenuListLayout extends Table
{
    protected $target = 'menus'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (Menu $el) {
                return Link::make($el->id)->route('platform.menu.editItem', $el);
            }),
            TD::make('name', 'Название'),
            TD::make('sort', 'Сортировка'),
        ];
    }
}
