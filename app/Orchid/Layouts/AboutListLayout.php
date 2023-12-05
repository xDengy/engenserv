<?php

namespace App\Orchid\Layouts;

use App\Models\About;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class AboutListLayout extends Table
{
    protected $target = 'abouts'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (About $el) {
                return Link::make($el->id)->route('platform.about.editItem', $el);
            }),
            TD::make('name', 'Название'),
            TD::make('sort', 'Сортировка'),
        ];
    }
}
