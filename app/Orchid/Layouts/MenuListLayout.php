<?php

namespace App\Orchid\Layouts;

use App\Models\Menu;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
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
            })->sort()->filter(Input::make()),
            TD::make('name', 'Название')->sort()->filter(Input::make()),
            TD::make('sort', 'Сортировка')->sort(),
            TD::make('active', 'Активность')->render(function (Menu $el){
                return $el ? 'Да' : 'Нет';
            })->sort()->filter(Select::make()->options([
                'Нет' => 'Нет',
                'Да' => 'Да',
            ])->empty('По-умолчанию')),
        ];
    }
}
