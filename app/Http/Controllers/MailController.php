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
        $status = 'error';
        $error = '';
        $order = Order::find($data['id']);
        if ($order) {
            $order->update($data);
            try {
                Mail::send(new AdminNewOrderEmail($order, 'Новый заказ с Инженерсервис'));
                Mail::send(new ClientNewOrderEmail($order, 'Ваш заказ принят'));
                \Cart::session(session()->getId())->clear();
                session()->forget('order');
                $status = 'success';
            } catch (\Exception $e) {
                $error = $e->getMessage();
            }
        } else {
            $error = 'Заказ не найден';
        }
        return [
            'status' => $status,
            'error' => $error,
        ];
    }

    public function sendPartnerForm(MailRequest $request)
    {
        $data = $request->validated();
        $status = 'error';
        $error = '';
        try {
            Mail::send(new PartnerEmail($data));
            $status = 'success';
        } catch (\Exception $e) {
            $error = $e->getMessage();
        }
        return [
            'status' => $status,
            'error' => $error,
        ];
    }
}
?>
