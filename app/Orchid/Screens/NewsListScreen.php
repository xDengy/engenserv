<?php

namespace App\Orchid\Screens;

use App\Models\News;
use App\Orchid\Layouts\NewsListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class NewsListScreen extends Screen
{
    public $name = 'Новости';
    public $folder = null;
    public $exist = false;
    public $parent = null;

    public function query($id = null, Request $request = null): array
    {
        $condition = [];
        if (!empty($request->get('filter'))) {
            $arFilter = $request->get('filter');
            foreach ($arFilter as $key => $filter) {
                if ($key == 'active') {
                    $filter = $filter == 'Да' ? 1 : 0;
                }
                $condition[] = [$key, 'like', '%' . mb_strtolower($filter) . '%'];
            }
        }
        $arFilter = $condition;

        if (!empty($arFilter)) {
            return [
                'news' => News::where($arFilter)->defaultSort('id', 'desc')->paginate()
            ];
        } else {
            return [
                'news' => News::defaultSort('id', 'desc')->paginate()
            ];
        }
    }

    public function commandBar(): array
    {
        $commandAr = [];
        $commandAr[] = Link::make('Добавить элемент')
            ->icon('plus')
            ->route('platform.news.edit');
        $commandAr[] = Link::make('Добавить тэг')
            ->icon('plus')
            ->route('platform.tags.edit');

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            NewsListLayout::class
        ];
    }
}
