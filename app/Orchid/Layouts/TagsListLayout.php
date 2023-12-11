<?php

namespace App\Orchid\Layouts;

use App\Models\Tag;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TagsListLayout extends Table
{
    protected $target = 'tags'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (Tag $el) {
                return Link::make($el->id)->route('platform.tags.editItem', $el);
            }),
            TD::make('name', 'Название'),
        ];
    }
}
