<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Catalog $element, int $count = 1)
    {
        $id = session()->getId();
        $cart = \Cart::session($id);
        $cart->add([
            'id' => $element->id,
            'name' => $element->name,
            'price' => $element->price,
            'quantity' => $count,
            'attributes' => [
                'img' => $element->attachment->first()->url,
                'url' => $element->url,
            ],
            'associatedModel' => $element
        ]);
        $data['items'] = $cart->getContent();
        $data['totalPrice'] = $cart->getTotal();
        $data['count'] = $cart->getTotalQuantity();
        return response()->json($data);
    }

    public function remove(Request $request)
    {
        $elementId = $request->get('id');
        $cart = \Cart::session(session()->getId());
        $cart->remove($elementId);

        $data['items'] = $cart->getContent();
        $data['totalPrice'] = $cart->getTotal();
        $data['count'] = $cart->getTotalQuantity();
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $elementId = $request->get('id');
        $count = $request->get('count');

        $cart = \Cart::session(session()->getId());
        $cart->update($elementId, [
            'quantity' => [
                'relative' => false,
                'value'    => $count
            ]
        ]);

        $item = $cart->get($elementId);
        $item['total'] = $item->getPriceSum();
        $item['count'] = $cart->getTotalQuantity();
        return response()->json($item);
    }

    public function updateCart(Request $request)
    {
        $elementId = $request->get('id');
        $count = $request->get('count');
        $element = Catalog::find($elementId);
        $cart = \Cart::session(session()->getId());
        if ($cart->get($elementId)) {
            $cart->update($elementId, [
                'quantity' => $count
            ]);
        } else {
            $cart->add([
                'id'              => $element->id,
                'name'            => $element->name,
                'price'           => $element->price,
                'quantity'        => $count,
                'attributes'      => [
                    'img' => $element->attachment->first()->url,
                    'url' => $element->url,
                ],
                'associatedModel' => $element
            ]);
        }

        $item = $cart->get($elementId);
        $item['total'] = $item->getPriceSum();
        $item['count'] = $cart->getTotalQuantity();
        return response()->json($item);
    }

    public function clear()
    {
        $id = session()->getId();
        \Cart::session($id)->clear();

        return redirect()->route('cart');
    }
}
