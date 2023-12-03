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

class ElementEditScreen extends Screen
{

    public $name = 'Товар';
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
            'element' => $el
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
                    Input::make('element.name')
                        ->title('Название')
                        ->placeholder('Название')
                        ->required(),
                    Input::make('element.price')
                        ->title('Цена')
                        ->placeholder('Цена')
                        ->required(),
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
        $el->fill($request->get('element'))->save();

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.folder.list', $el ? $el->folder_id : null);
    }

    public function remove(Catalog $el)
    {
        $el->delete();
        Alert::info('You have successfully deleted.');
        return redirect()->route('platform.folder.list', $el->folder_id);
    }
}
