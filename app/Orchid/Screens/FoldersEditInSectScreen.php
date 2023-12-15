<?php

namespace App\Orchid\Screens;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class FoldersEditInSectScreen extends Screen
{

    public $name = 'Раздел';
    public $exists = false;
    public $parent = null;

    public function query($id): array
    {
        $this->exists = false;
        $el = Catalog::find($id);
        $this->parent = $el;
        if($this->exists){
            $this->name = $el->name;;
        } else {
            $this->name = 'Создать';
        }
        return [
            'folder' => null
        ];
    }

    public function commandBar(): array
    {
        return [
            Button::make('Создать')
                ->icon('save-alt')
                ->method('createOrUpdate'),

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
                    Input::make('folder.folder_id')
                        ->type('hidden')
                        ->value($this->parent->id),
                    Input::make('folder.is_folder')
                        ->type('hidden')
                        ->value(1),
                    Input::make('folder.sort')
                        ->title('Сортировка')
                        ->type('number')
                        ->required(),
                ]),
            ])->title('Раздел'),
        ];
    }

    public function createOrUpdate(Catalog $el, Request $request)
    {
        $requestAr = $request->get('folder');
        $requestAr['new'] = 0;
        $requestAr['code'] = Str::slug($requestAr['name']);
        Catalog::create($requestAr);

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.folder.list', $el->id);
    }
}
