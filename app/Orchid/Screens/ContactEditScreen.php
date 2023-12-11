<?php

namespace App\Orchid\Screens;

use App\Models\Contact;
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

class ContactEditScreen extends Screen
{

    public $name = 'Contact';
    public $exists = false;
    public $parent = null;

    public function query($id = null): array
    {
        if ($id) {
            $el = Contact::find($id);
            $this->exists = $el->exists;
        }
        if($this->exists){
            $this->name = 'Изменить контакты';
        } else {
            $this->name = 'Создать';
        }
        return [
            'contact' => $el ?? null
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
                ->route('platform.contact.list')
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Group::make([
                    Input::make('contact.address')
                        ->title('Адрес')
                        ->required(),
                    Input::make('contact.mail')
                        ->title('Почта')
                        ->required(),
                    Input::make('contact.phone')
                        ->title('Телефон')
                        ->required(),
                    Input::make('contact.id')
                        ->type('hidden'),
                ]),
            ])->title('Основная информация'),
            Layout::rows([
                Group::make([
                    Input::make('contact.work_hours')
                        ->title('График работы'),
                    Input::make('contact.shipping_hours')
                        ->title('График отгрузки'),
                ]),
            ])->title('Время работы'),
            Layout::rows([
                Group::make([
                    Input::make('contact.map_x')
                        ->title('Значение X'),
                    Input::make('contact.map_y')
                        ->title('Значение Y'),
                ]),
            ])->title('Карта'),
        ];
    }

    public function createOrUpdate(Contact $el, Request $request)
    {
        $requestAr = $request->get('contact');
        if ($requestAr['id']) {
            $el = Contact::find($requestAr['id']);
            $el->update($requestAr);
        } else {
            Contact::create($requestAr);
        }

        Alert::info('You have successfully created / updated.');
        return redirect()->route('platform.contact.list');
    }
}
