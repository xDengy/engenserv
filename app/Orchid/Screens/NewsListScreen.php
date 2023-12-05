<?php

namespace App\Orchid\Screens;

use App\Models\News;
use App\Orchid\Layouts\NewsListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class NewsListScreen extends Screen
{
    public $name = 'Новости';
    public $folder = null;
    public $exist = false;
    public $parent = null;

    public function query($id = null): array
    {
        return [
            'news' => News::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    public function commandBar(): array
    {
        $commandAr = [];
        $commandAr[] = Link::make('Добавить элемент')
            ->icon('plus')
            ->route('platform.news.edit');

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            NewsListLayout::class
        ];
    }
}
