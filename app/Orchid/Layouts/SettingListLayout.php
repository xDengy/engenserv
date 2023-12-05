<?php

namespace App\Orchid\Layouts;

use App\Models\Setting;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SettingListLayout extends Table
{
    protected $target = 'settings'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (Setting $el) {
                return Link::make($el->id)->route('platform.setting.editItem', $el);
            })
        ];
    }
}
