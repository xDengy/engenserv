<?php

namespace App\Orchid\Screens;

use App\Models\About;
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

class AboutEditScreen extends Screen
{

    public $name = 'About';
    public $exists = false;
    public $parent = null;

    public function query($id = null): array
    {
        if ($id) {
            $el = About::find($id);
            $this->exists = $el->exists;
        }
        if($this->exists){
            $this->name = $el->name;
        } else {
            $this->name = 'Создать';
        }
        return [
            'about' => $el ?? null
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
                ->route('platform.about.list')
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Group::make([
                    Input::make('about.name')
                        ->title('Название')
                        ->required(),
                    Input::make('about.link')
                        ->title('Ссылка')
                        ->required(),
                    Input::make('about.sort')
                        ->title('Сортировка')
                        ->type('number')
                        ->required(),
                    Input::make('about.use_advantages')
                        ->title('Выводить преимущества')
                        ->type('checkbox'),
                    Input::make('about.id')
                        ->type('hidden'),
                ]),
            ]),
            Layout::rows([
                Group::make([
                    Quill::make('about.text')
                        ->title('Описание')
                        ->required(),
                ]),
            ]),
        ];
    }

    public function createOrUpdate(About $el, Request $request)
    {
        $requestAr = $request->get('about');
        if ($requestAr['id']) {
            $el = About::find($requestAr['id']);
            $el->update($requestAr);
        } else {
            About::create($requestAr);
        }

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.about.list');
    }

    public function remove($id)
    {
        $el = About::find($id);
        $el->delete();
        Alert::info('You have successfully deleted.');
        return redirect()->route('platform.about.list');
    }
}
