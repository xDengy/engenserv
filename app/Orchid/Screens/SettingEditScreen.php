<?php

namespace App\Orchid\Screens;

use App\Models\Setting;
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

class SettingEditScreen extends Screen
{

    public $name = 'Setting';
    public $exists = false;
    public $parent = null;

    public function query($id = null): array
    {
        if ($id) {
            $el = Setting::find($id);
            $this->exists = $el->exists;
        }
        if($this->exists){
            $this->name = 'Изменить настройки';
        } else {
            $this->name = 'Создать';
        }
        return [
            'setting' => $el ?? null
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
                ->route('platform.setting.list')
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Group::make([
                    Picture::make('setting.logo')
                        ->title('Лого')
                        ->required(),
                    Quill::make('setting.logotext')
                        ->title('Текст лого')
                        ->required(),
                    Input::make('setting.id')
                        ->type('hidden'),
                ]),
            ])->title('Лого'),
            Layout::rows([
                Group::make([
                    Input::make('setting.phone')
                        ->title('Телефон')
                        ->required(),
                    Input::make('setting.email')
                        ->title('Email')
                        ->required(),
                    Input::make('setting.copyright')
                        ->title('Текст копирайта')
                        ->required(),
                ]),
            ])->title('Текст'),
        ];
    }

    public function createOrUpdate(Setting $el, Request $request)
    {
        $requestAr = $request->get('setting');
        if ($requestAr['id']) {
            $el = Setting::find($requestAr['id']);
            $el->update($requestAr);
        } else {
            Setting::create($requestAr);
        }

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.setting.list');
    }
}
