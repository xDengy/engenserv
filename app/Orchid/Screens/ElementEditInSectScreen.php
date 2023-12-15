<?php

namespace App\Orchid\Screens;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Str;

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
                        ->required(),
                    Input::make('element.price')
                        ->title('Цена')
                        ->type('number')
                        ->required(),
                    Input::make('element.folder_id')
                        ->type('hidden')
                        ->value($this->parent->id),
                    Input::make('element.sort')
                        ->title('Сортировка')
                        ->type('number')
                        ->required(),
                    Input::make('element.is_folder')
                        ->type('hidden')
                        ->value(0),
                ]),
            ])->title('Товар'),
            Layout::rows([
                Group::make([
                    CheckBox::make('element.new')
                        ->sendTrueOrFalse()
                        ->title('Новинка'),
                    Quill::make('element.text')
                        ->title('Описание товара')
                        ->required(),
                    Quill::make('element.chars')
                        ->title('Характеристики'),
                    Quill::make('element.scheme')
                        ->title('Схема'),
                ]),
            ])->title('Описание'),
            Layout::rows([
                Group::make([
                    Upload::make('element.attachment')
                        ->title('Фотографии')
                        ->acceptedFiles('image/*')
                        ->groups('catalog')
                        ->required(),
                ]),
            ]),
        ];
    }

    public function createOrUpdate(Catalog $el, Request $request)
    {
        $element = $request->get('element');
        $element['code'] = Str::slug($element['name']);
        $el = Catalog::create($element);

        $el->attachment()->syncWithoutDetaching(
            $request->input('element.attachment', [])
        );

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.folder.list', $element['folder_id']);
    }
}
