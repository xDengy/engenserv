<?php

namespace App\Orchid\Layouts;

use App\Models\Contact;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ContactListLayout extends Table
{
    protected $target = 'contacts'; // таблица
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')->render(function (Contact $el) {
                return Link::make('Изменить контакты')->route('platform.contact.editItem', $el);
            })
        ];
    }
}
