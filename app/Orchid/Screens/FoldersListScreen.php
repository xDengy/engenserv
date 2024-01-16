<?php

namespace App\Orchid\Screens;

use App\Models\Catalog;
use App\Orchid\Layouts\CatalogListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class FoldersListScreen extends Screen
{
    public $name = 'Разделы';
    public $folder = null;
    public $exist = false;
    public $parent = null;
    public $folderId = null;

    public function query($id = null, Request $request = null): array
    {
        $arFilter = [
            'folder_id' => $id
        ];
        $condition = [];
        if($id) {
            $el = Catalog::find($id);
            $this->folder = $el;
            $this->exist = $el->exists;
            $this->folderId = $el->folder_id;
            $this->parent = Catalog::find($el->folder_id);
            $id = $el->id;
            $this->name = $el->name;
        }

        if (!empty($request->get('filter'))) {
            foreach ($request->get('filter') as $key => $filter) {
                if ($key == 'active') {
                    $filter = $filter == 'Да' ? 1 : 0;
                }
                $condition[] = [$key, 'like', '%' . mb_strtolower($filter) . '%'];
            }
        }

        $arFilter += $condition;

        if (!empty($request->get('folder'))) {
            unset($arFilter['folder_id']);
        }

        return [
            'catalogs' => Catalog::where($arFilter)->defaultSort('is_folder', 'desc')->paginate()
        ];
    }

    public function commandBar(): array
    {
        $commandAr = [
            Link::make('Добавить раздел')
                ->icon('plus')
                ->route('platform.folder.create', $this->folder),

            Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.elems.create', $this->folder),

            Link::make('Все элементы')
                ->icon('folder')
                ->route('platform.folder.list', '?' . ($_SERVER['QUERY_STRING'] ? $_SERVER['QUERY_STRING'] . '&' : '') . 'folder=all'),
        ];
        if($this->exist) {
            $commandAr[] = Link::make('Изменить')
                ->icon('edit')
                ->canSee($this->exist)
                ->route('platform.folder.edit', $this->folder);

            $commandAr[] = Link::make('Назад')
                ->icon('arrow-left')
                ->route('platform.folder.list', $this->parent);

            if ($this->folderId) {
                unset($commandAr[0]);
                $commandAr = array_values($commandAr);
            }
        }

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            CatalogListLayout::class
        ];
    }
}
