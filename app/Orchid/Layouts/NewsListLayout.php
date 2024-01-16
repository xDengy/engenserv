<?php

namespace App\Orchid\Layouts;

use App\Models\News;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class NewsListLayout extends Table
{
    protected $target = 'news'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (News $el) {
                return Link::make($el->id)->route('platform.news.editItem', $el);
            })->filter(Input::make()),
            TD::make('name', 'Название')->filter(Input::make()),
            TD::make('sort', 'Сортировка')->sort(),
            TD::make('active', 'Активность')->render(function (News $el){
                return $el ? 'Да' : 'Нет';
            })->sort()->filter(Select::make()->options([
                'Нет' => 'Нет',
                'Да' => 'Да',
            ])->empty('По-умолчанию')),
        ];
    }
}
