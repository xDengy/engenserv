<?php

namespace App\Orchid\Screens;

use App\Models\Tag;
use App\Orchid\Layouts\TagsListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class TagsListScreen extends Screen
{
    public $name = 'Тэги';
    public $folder = null;
    public $exist = false;
    public $parent = null;

    public function query($id = null): array
    {
        return [
            'tags' => Tag::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    public function commandBar(): array
    {
        $commandAr = [];
        $commandAr[] = Link::make('Добавить элемент')
            ->icon('plus')
            ->route('platform.tags.edit');

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            TagsListLayout::class
        ];
    }
}
