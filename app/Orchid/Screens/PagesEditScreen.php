<?php

namespace App\Orchid\Screens;

use App\Models\Page;
use App\Models\Tag;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class PagesEditScreen extends Screen
{

    public $name = 'Page';
    public $exists = false;
    public $parent = null;

    public function query($id = null): array
    {
        if ($id) {
            $el = Page::find($id);
            $this->exists = $el->exists;
        }
        if($this->exists){
            $this->name = $el->name;
        } else {
            $this->name = 'Создать';
        }
        return [
            'page' => $el ?? null
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
                ->route('platform.pages.list')
        ];
    }

    public function layout(): array
    {
        /*
page_desc1
page_desc2
         * */
        return [
            Layout::rows([
                Group::make([
                    Input::make('page.title')
                        ->title('Title страницы')
                        ->required(),
                    Input::make('page.h1')
                        ->title('H1 страницы')
                        ->required(),
                    Input::make('page.url')
                        ->title('Адрес страницы')
                        ->required(),
                    Input::make('page.id')
                        ->type('hidden'),
                ]),
            ]),
            Layout::rows([
                Group::make([
                    Input::make('page.desc')
                        ->title('Описание страницы')
                        ->required(),
                    Input::make('page.keywords')
                        ->title('Ключевые слова страницы')
                        ->required(),
                ]),
            ]),
            Layout::rows([
                Group::make([
                    Quill::make('page.page_desc1')
                        ->title('Описание на странице 1'),
                    Quill::make('page.page_desc2')
                        ->title('Описание на странице 2'),
                ]),
            ]),
            Layout::rows([
                Group::make([
                    Upload::make('page.attachment')
                        ->title('Фотографии 1')
                        ->acceptedFiles('image/*')
                        ->groups('page1'),
                    Upload::make('page.attachment')
                        ->title('Фотографии 2')
                        ->acceptedFiles('image/*')
                        ->groups('page2'),
                ]),
            ]),
        ];
    }

    public function createOrUpdate(Page $el, Request $request)
    {
        $requestAr = $request->get('page');
        if ($requestAr['id']) {
            $el = Page::find($requestAr['id']);
            $el->update($requestAr);
        } else {
            $el = Page::create($requestAr);
        }
        $el->attachment()->syncWithoutDetaching(
            $request->input('page.attachment', [])
        );

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.pages.list');
    }

    public function remove($id)
    {
        $el = Page::find($id);
        $el->delete();
        Alert::info('You have successfully deleted.');
        return redirect()->route('platform.pages.list');
    }
}
