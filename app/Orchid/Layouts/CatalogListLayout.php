<?php

namespace App\Orchid\Layouts;

use App\Models\Catalog;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CatalogListLayout extends Table
{
    protected $target = 'catalogs'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('name', 'Название')->render(function (Catalog $el){
                $icon = '';
                $link = Link::make($el->name)->route('platform.elems.edit', $el);
                if($el->is_folder) {
                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="1em" height="1em" viewBox="0 0 32 32" class="me-2" role="img" fill="currentColor" path="folder-alt" componentname="orchid-icon"><path d="M30.005 6.5h-15l-3-3h-10c-1.105 0-2 0.896-2 2v5h-0.009v2h0.009v14c0 1.105 0.895 2 2 2h28c1.105 0 2-0.895 2-2v-18c0-1.104-0.895-2-2-2zM2.005 5.5h9.086l2.457 2.414 0.629 0.586h15.829v2h-28v-5h-0zM2.005 26.5v-14h28v14h-28z"></path></svg>';
                    $link = Link::make($el->name)->route('platform.folder.list', $el);
                }
                return '<div class="v-md-center">' . $icon . $link . '</div>';
            })->filter(Input::make()),
            TD::make('id', 'ID')->render(function (Catalog $el){
                return $el->id;
            })->filter(Input::make()),
            TD::make('sort', 'Сортировка')->sort(),
            TD::make('active', 'Активность')->render(function (Catalog $el){
                return $el ? 'Да' : 'Нет';
            })->sort()->filter(Select::make()->options([
                'Нет' => 'Нет',
                'Да' => 'Да',
            ])->empty('По-умолчанию')),
        ];
    }
}
