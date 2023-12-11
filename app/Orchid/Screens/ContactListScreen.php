<?php

namespace App\Orchid\Screens;

use App\Models\Contact;
use App\Orchid\Layouts\ContactListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ContactListScreen extends Screen
{
    public $name = 'Контакты';
    public $folder = null;
    public $exist = false;
    public $parent = null;

    public function query($id = null): array
    {
        $this->exist = Contact::first();
        return [
            'contacts' => Contact::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    public function commandBar(): array
    {
        $commandAr = [];
        if(!$this->exist) {
            $commandAr[] = Link::make('Добавить элемент')
                ->icon('plus')
                ->route('platform.contact.edit');
        }

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            ContactListLayout::class
        ];
    }
}
