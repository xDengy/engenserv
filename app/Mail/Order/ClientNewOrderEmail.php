<?php

namespace App\Mail\Order;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientNewOrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this
            ->from('email@adress.com', 'Инженерсервис')
            ->to($this->order->email)
            ->subject('Новый заказ с Инженерсервис')
            ->view('mails.order.new.client', ['order' => $this->order]);
    }
}
