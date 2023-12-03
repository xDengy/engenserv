<?php

namespace App\Orchid\Screens;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
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

    public $name = 'Catalog';
    public $exists = false;
    public $parent = null;

    public function query($id): array
    {
        $el = Catalog::find($id);
        $this->exists = $el->exists;
        if($this->exists){
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
                ]),
            ])->title('Catalog'),
        ];
    }

    public function createOrUpdate(Catalog $el, Request $request)
    {
        $el->fill($request->get('folder'))->save();

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
