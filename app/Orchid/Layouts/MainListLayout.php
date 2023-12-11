<?php

namespace App\Orchid\Layouts;

use App\Models\Main;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class MainListLayout extends Table
{
    protected $target = 'mains'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (Main $el) {
                return Link::make('Изменить баннер')->route('platform.mainBanner.editItem', $el);
            })
        ];
    }
}
