<?php

namespace App\Orchid\Screens;

use App\Models\About;
use App\Orchid\Layouts\NewsListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class AboutListScreen extends Screen
{
    public $name = 'О компании';
    public $folder = null;
    public $exist = false;
    public $parent = null;

    public function query($id = null): array
    {
        return [
            'about' => About::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    public function commandBar(): array
    {
        $commandAr = [];
        $commandAr[] = Link::make('Добавить элемент')
            ->icon('plus')
            ->route('platform.about.edit');

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            NewsListLayout::class
        ];
    }
}
