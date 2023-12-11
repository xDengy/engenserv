<?php

namespace App\Orchid\Layouts;

use App\Models\Partner;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PartnerListLayout extends Table
{
    protected $target = 'partners'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (Partner $el) {
                return Link::make($el->id)->route('platform.partner.editItem', $el);
            }),
            TD::make('name', 'Название'),
            TD::make('sort', 'Сортировка')->sort(),
        ];
    }
}
