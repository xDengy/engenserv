<?php

namespace App\Orchid\Screens;

use App\Models\Main;
use App\Orchid\Layouts\MainListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class MainListScreen extends Screen
{
    public $name = 'Баннер на главной';
    public $folder = null;
    public $exist = false;
    public $parent = null;

    public function query($id = null): array
    {
        return [
            'main' => Main::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    public function commandBar(): array
    {
        $commandAr = [];
        if(!$this->exist) {
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.mainBanner.edit');
        }

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            MainListLayout::class
        ];
    }
}
