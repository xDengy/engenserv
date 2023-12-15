<?php

namespace App\Orchid\Screens;

use App\Models\Page;
use App\Orchid\Layouts\PagesListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class PagesListScreen extends Screen
{
    public $name = 'Страницы';
    public $folder = null;
    public $exist = false;
    public $parent = null;

    public function query($id = null): array
    {
        return [
            'pages' => Page::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    public function commandBar(): array
    {
        $commandAr = [];
        $commandAr[] = Link::make('Добавить элемент')
            ->icon('plus')
            ->route('platform.pages.edit');

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            PagesListLayout::class
        ];
    }
}
