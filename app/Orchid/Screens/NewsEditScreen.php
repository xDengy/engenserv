<?php

namespace App\Orchid\Screens;

use App\Models\News;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class NewsEditScreen extends Screen
{

    public $name = 'News';
    public $exists = false;
    public $parent = null;

    public function query($id = null): array
    {
        if ($id) {
            $el = News::find($id);
            $this->exists = $el->exists;
        }
        if($this->exists){
            $this->name = $el->name;
        } else {
            $this->name = 'Создать';
        }
        return [
            'news' => $el ?? null
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
                ->route('platform.news.list')
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Group::make([
                    Input::make('news.name')
                        ->title('Название')
                        ->required(),
                    Input::make('news.sort')
                        ->title('Сортировка')
                        ->type('number')
                        ->required(),
                    Input::make('news.id')
                        ->type('hidden'),
                ]),
            ]),
            Layout::rows([
                Group::make([
                    Quill::make('news.text')
                        ->title('Описание')
                        ->required(),
                    Picture::make('news.image')
                        ->title('Картинка')
                        ->required(),
                ]),
            ]),
        ];
    }

    public function createOrUpdate(News $el, Request $request)
    {
        $requestAr = $request->get('news');
        if ($requestAr['id']) {
            $el = News::find($requestAr['id']);
            $el->update($requestAr);
        } else {
            News::create($requestAr);
        }

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.news.list');
    }

    public function remove($id)
    {
        $el = News::find($id);
        $el->delete();
        Alert::info('You have successfully deleted.');
        return redirect()->route('platform.news.list');
    }
}
