<?php

namespace App\Orchid\Layouts;

use App\Models\News;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class NewsListLayout extends Table
{
    protected $target = 'news'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (News $el) {
                return Link::make($el->id)->route('platform.news.editItem', $el);
            }),
            TD::make('name', 'Название'),
            TD::make('sort', 'Сортировка'),
        ];
    }
}
