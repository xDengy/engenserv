<?php

namespace App\Orchid\Screens;

use App\Models\Partner;
use App\Orchid\Layouts\PartnerListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class PartnerListScreen extends Screen
{
    public $name = 'Партнеры';
    public $exist = false;

    public function query($id = null): array
    {
        return [
            'partners' => Partner::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    public function commandBar(): array
    {
        $commandAr = [];
        $commandAr[] = Link::make('Добавить элемент')
            ->icon('plus')
            ->route('platform.partner.edit');

        return $commandAr;
    }

    public function layout(): array
    {
        return [
            PartnerListLayout::class
        ];
    }
}
