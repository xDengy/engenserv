<?php

namespace App\Orchid\Screens;

use App\Models\Catalog;
use App\Orchid\Layouts\CatalogListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class FoldersListScreen extends Screen
{
    public $name = 'Разделы';
    public $folder = null;
    public $exist = false;
    public $parent = null;
    public $folderId = null;

    public function query($id = null): array
    {
        if($id) {
            $el = Catalog::find($id);
            $this->folder = $el;
            $this->exist = $el->exists;
            $this->folderId = $el->folder_id;
            $this->parent = Catalog::find($el->folder_id);
            $id = $el->id;
            $this->name = $el->name;
        }

        return [
            'catalogs' => Catalog::where('folder_id', $id)->filters()->defaultSort('is_folder', 'desc')->paginate()
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
                ->route('platform.elems.create', $this->folder)
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
