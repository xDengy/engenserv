<?php

namespace App\Orchid\Screens;

use App\Models\Tag;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class TagsEditScreen extends Screen
{

    public $name = 'Tag';
    public $exists = false;
    public $parent = null;

    public function query($id = null): array
    {
        if ($id) {
            $el = Tag::find($id);
            $this->exists = $el->exists;
        }
        if($this->exists){
            $this->name = $el->name;
        } else {
            $this->name = 'Создать';
        }
        return [
            'tags' => $el ?? null
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
                ->route('platform.tags.list')
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Group::make([
                    Input::make('tags.name')
                        ->title('Название')
                        ->required(),
                    Input::make('tags.color')
                        ->title('Цвет')
                        ->type('color')
                        ->required(),
                    Input::make('tags.id')
                        ->type('hidden'),
                ]),
            ]),
        ];
    }

    public function createOrUpdate(Tag $el, Request $request)
    {
        $requestAr = $request->get('tags');
        if ($requestAr['id']) {
            $el = Tag::find($requestAr['id']);
            $el->update($requestAr);
        } else {
            Tag::create($requestAr);
        }

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.tags.list');
    }

    public function remove($id)
    {
        $el = Tag::find($id);
        $el->delete();
        Alert::info('You have successfully deleted.');
        return redirect()->route('platform.tags.list');
    }
}
