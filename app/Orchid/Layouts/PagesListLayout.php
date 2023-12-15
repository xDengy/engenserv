<?php

namespace App\Orchid\Layouts;

use App\Models\Page;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PagesListLayout extends Table
{
    protected $target = 'pages'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (Page $el) {
                return Link::make($el->id)->route('platform.pages.editItem', $el);
            }),
            TD::make('url', 'Ссылка'),
            TD::make('title', 'Заголовок'),
        ];
    }
}
