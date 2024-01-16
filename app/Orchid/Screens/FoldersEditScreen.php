<?php

namespace App\Orchid\Screens;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Code;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class FoldersEditScreen extends Screen
{

    public $name = 'Раздел';
    public $exists = false;
    public $parent = null;

    public function query($id = null): array
    {
        $el = new Catalog;
        if($id){
            $el = Catalog::find($id);
            $this->exists = $el->exists;
            $this->parent = Catalog::find($el->folder_id);
            $this->name = $el->name;
        } else {
            $this->name = 'Создать';
        }
        return [
            'folder' => $el
        ];
    }

    public function commandBar(): array
    {
        return [
            Button::make('Создать')
                ->icon('save-alt')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Сохранить')
                ->icon('save')
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exists),

            Link::make('Назад')
                ->icon('arrow-left')
                ->route('platform.folder.list', $this->parent)
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Group::make([
                    Input::make('folder.name')
                        ->title('Name')
                        ->placeholder('Name')
                        ->required(),
                    Input::make('folder.is_folder')
                        ->type('hidden')
                        ->value(1),
                    Input::make('folder.folder_id')
                        ->type('hidden'),
                    Input::make('folder.sort')
                        ->title('Сортировка')
                        ->type('number')
                        ->required(),
                    CheckBox::make('folder.active')
                        ->sendTrueOrFalse()
                        ->title('Активность'),
                    Input::make('folder.id')
                        ->type('hidden'),
                ]),
            ])->title('Раздел'),
            Layout::rows([
                Group::make([
                    Input::make('folder.title')
                        ->title('Title страницы'),
                    Input::make('folder.desc')
                        ->title('Описание страницы'),
                    Input::make('folder.keywords')
                        ->title('Ключевые слова страницы'),
                    Input::make('folder.h1')
                        ->title('H1 страницы'),
                ]),
            ])->title('Описание страницы'),
        ];
    }

    public function createOrUpdate(Catalog $el, Request $request)
    {
        $requestAr = $request->get('folder');
        $requestAr['new'] = 0;
        $requestAr['code'] = Str::slug($requestAr['name']);
        $this->parent = Catalog::find($requestAr['folder_id']);
        $requestAr['url'] = ($this->parent->url ?? '') . $requestAr['code'] . '/';
        if (!$requestAr['title']) {
            $requestAr['title'] = $requestAr['name'];
        }
        if (!$requestAr['desc']) {
            $requestAr['desc'] = $requestAr['name'];
        }
        if (!$requestAr['keywords']) {
            $requestAr['keywords'] = $requestAr['name'];
        }
        if (!$requestAr['h1']) {
            $requestAr['h1'] = $requestAr['name'];
        }
        $el = Catalog::find($requestAr['id']);
        if ($el) {
            $el->update($requestAr);
        } else {
            Catalog::create($requestAr);
        }

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.folder.list', $el ?? null);
    }

    public function deleteFolder($folderData)
    {
        $folders = Catalog::where('folder_id', $folderData->id)->get();
        foreach ($folders as $key => $folder) {
            self::deleteFolder($folder);
        }
        $folderData->delete();
    }

    public function remove(Catalog $el)
    {
        self::deleteFolder($el);
        Alert::info('You have successfully deleted.');
        return redirect()->route('platform.folder.list', $el->folder_id);
    }
}
