<?php

namespace App\Orchid\Screens;

use App\Models\Setting;
use App\Orchid\Layouts\SettingListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class SettingListScreen extends Screen
{
    public $name = 'Настройка';
    public $folder = null;
    public $exist = false;
    public $parent = null;

    public function query($id = null): array
    {
        return [
            'settings' => Setting::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    public function commandBar(): array
    {
        $commandAr = [];
        if(!$this->exist) {
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.setting.edit');
        }

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            SettingListLayout::class
        ];
    }
}
