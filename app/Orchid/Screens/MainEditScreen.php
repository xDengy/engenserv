<?php

namespace App\Orchid\Screens;

use App\Models\Main;
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

class MainEditScreen extends Screen
{

    public $name = 'Main';
    public $exists = false;
    public $parent = null;

    public function query($id = null): array
    {
        if ($id) {
            $el = Main::find($id);
            $this->exists = $el->exists;
        }
        if($this->exists){
            $this->name = $el->name;
        } else {
            $this->name = 'Создать';
        }
        return [
            'main' => $el ?? null
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

            Link::make('Назад')
                ->icon('arrow-left')
                ->route('platform.mainBanner.list')
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Group::make([
                    Picture::make('main.image')
                        ->title('Картинка баннера')
                        ->required(),
                    Quill::make('main.text')
                        ->title('Текст баннера')
                        ->required(),
                    Input::make('main.id')
                        ->type('hidden'),
                ]),
            ]),
        ];
    }

    public function createOrUpdate(Main $el, Request $request)
    {
        $requestAr = $request->get('main');
        if ($requestAr['id']) {
            $el = Main::find($requestAr['id']);
            $el->update($requestAr);
        } else {
            Main::create($requestAr);
        }

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.mainBanner.list');
    }
}
