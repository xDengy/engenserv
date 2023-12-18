<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\Order\AdminNewOrderEmail;
use App\Mail\Order\ClientNewOrderEmail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function create(OrderRequest $request)
    {
        $cart = \Cart::session(session()->getId())->getContent();
        $data = $request->validated();
        $order = Order::create($data);
        foreach ($cart as $item) {
            $order->products()->syncWithPivotValues($item->id, [
                'count' => $item->quantity,
                'price' => $item->price,
            ], false);
        }
        \Cart::session(session()->getId())->clear();
        try {
            Mail::send(new AdminNewOrderEmail($order));
            Mail::send(new ClientNewOrderEmail($order));
        } catch (\Exception $e) {
            session()->flash('status', 'Something wend wrong');
        }
        return redirect()->route('cart.cart');
    }
}

?>
