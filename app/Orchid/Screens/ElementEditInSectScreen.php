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
                        ->type('hidden'),
                    Input::make('element.sort')
                        ->title('Сортировка')
                        ->type('number')
                        ->required(),
                    CheckBox::make('element.new')
                        ->sendTrueOrFalse()
                        ->title('Новинка'),
                    CheckBox::make('element.active')
                        ->sendTrueOrFalse()
                        ->title('Активность'),
                    Input::make('element.is_folder')
                        ->type('hidden')
                        ->value(0),
                ]),
            ])->title('Товар'),
            Layout::rows([
                Group::make([
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
            Layout::rows([
                Group::make([
                    Input::make('element.title')
                        ->title('Title страницы'),
                    Input::make('element.desc')
                        ->title('Описание страницы'),
                    Input::make('element.keywords')
                        ->title('Ключевые слова страницы'),
                    Input::make('element.h1')
                        ->title('H1 страницы'),
                ]),
            ])->title('Описание страницы'),
        ];
    }

    public function createOrUpdate(Catalog $el, Request $request)
    {
        $requestAr = $request->get('element');
        $requestAr['code'] = Str::slug($requestAr['name']);
        $this->parent = Catalog::find($requestAr['folder_id']);
        $requestAr['url'] = $this->parent->url . $requestAr['code'] . '/';
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
        $el = Catalog::create($requestAr);

        $el->attachment()->syncWithoutDetaching(
            $request->input('element.attachment', [])
        );

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.folder.list', $requestAr['folder_id']);
    }
}
