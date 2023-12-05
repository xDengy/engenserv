<?php

namespace App\Orchid\Screens;

use App\Models\Menu;
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

class MenuEditScreen extends Screen
{

    public $name = 'Menu';
    public $exists = false;
    public $parent = null;

    public function query($id = null): array
    {
        if ($id) {
            $el = Menu::find($id);
            $this->exists = $el->exists;
        }
        if($this->exists){
            $this->name = $el->name;
        } else {
            $this->name = 'Создать';
        }
        return [
            'menu' => $el ?? null
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
                ->route('platform.menu.list')
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Group::make([
                    Input::make('menu.name')
                        ->title('Название')
                        ->required(),
                    Input::make('menu.link')
                        ->title('Ссылка')
                        ->required(),
                    Input::make('menu.sort')
                        ->title('Сортировка')
                        ->type('number')
                        ->required(),
                    Input::make('menu.id')
                        ->type('hidden'),
                ]),
            ]),
        ];
    }

    public function createOrUpdate(Menu $el, Request $request)
    {
        $requestAr = $request->get('menu');
        if ($requestAr['id']) {
            $el = Menu::find($requestAr['id']);
            $el->update($requestAr);
        } else {
            Menu::create($requestAr);
        }

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.menu.list');
    }

    public function remove($id)
    {
        $el = Menu::find($id);
        $el->delete();
        Alert::info('You have successfully deleted.');
        return redirect()->route('platform.menu.list');
    }
}
