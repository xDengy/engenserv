<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\Order\AdminNewOrderEmail;
use App\Mail\Order\ClientNewOrderEmail;
use App\Mail\Partner\PartnerEmail;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendOrderForm(MailRequest $request)
    {
        $data = $request->validated();
        $order = Order::find($data['id']);
        $order->update($data);
        try {
            Mail::send(new AdminNewOrderEmail($order));
            Mail::send(new ClientNewOrderEmail($order));
            \Cart::session(session()->getId())->clear();
        } catch (\Exception $e) {
            session()->put('status', $e->getMessage());
        }
        return redirect()->route('cart');
    }

    public function sendPartnerForm(MailRequest $request)
    {
        $data = $request->validated();
        try {
            Mail::send(new PartnerEmail($data));
        } catch (\Exception $e) {
            session()->put('status', $e->getMessage());
        }
        return redirect()->route('partnership');
    }
}
?>
