<?php

namespace App\Orchid\Screens;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ElementEditInSectScreen extends Screen
{
    public $name = 'Товар';
    public $exists = false;
    public $parent = null;

    public function query($id): array
    {
        $el = Catalog::find($id);
        $this->exists = false;
        $this->parent = $el;
        $this->name = 'Создать';
        return [
            'element' => null
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
                    Input::make('element.name')
                        ->title('Название')
                        ->placeholder('Название')
                        ->required(),
                    Input::make('element.price')
                        ->title('Цена')
                        ->placeholder('Цена')
                        ->required(),
                    Input::make('element.folder_id')
                        ->type('hidden')
                        ->value($this->parent->id),
                    Input::make('element.is_folder')
                        ->type('hidden')
                        ->value(0),
                ]),
            ])->title('Товар'),
            Layout::rows([
                Group::make([
                    Quill::make('element.text')
                        ->title('Описание товара')
                        ->placeholder('Описание товара')
                        ->required(),
                    Quill::make('element.chars')
                        ->title('Характеристики')
                        ->placeholder('Характеристики'),
                    Quill::make('element.scheme')
                        ->title('Схема')
                        ->placeholder('Схема'),
                ]),
            ])->title('Описание'),
        ];
    }

    public function createOrUpdate(Catalog $el, Request $request)
    {
        $element = $request->get('element');
        Catalog::create($element);

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.folder.list', $element['folder_id']);
    }
}
