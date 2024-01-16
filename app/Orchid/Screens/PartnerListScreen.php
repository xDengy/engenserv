<?php

namespace App\Orchid\Screens;

use App\Models\Partner;
use App\Orchid\Layouts\PartnerListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class PartnerListScreen extends Screen
{
    public $name = 'Партнеры';
    public $exist = false;

    public function query($id = null, Request $request = null): array
    {
        $condition = [];
        if (!empty($request->get('filter'))) {
            $arFilter = $request->get('filter');
            foreach ($arFilter as $key => $filter) {
                if ($key == 'active') {
                    $filter = $filter == 'Да' ? 1 : 0;
                }
                $condition[] = [$key, 'like', '%' . mb_strtolower($filter) . '%'];
            }
        }
        $arFilter = $condition;

        if (!empty($arFilter)) {
            return [
                'partners' => Partner::where($arFilter)->defaultSort('id', 'desc')->paginate()
            ];
        } else {
            return [
                'partners' => Partner::defaultSort('id', 'desc')->paginate()
            ];
        }
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
