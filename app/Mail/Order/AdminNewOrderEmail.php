<?php

namespace App\Mail\Order;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminNewOrderEmail extends Mailable
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
            ->from('xDN.progger@yandex.com', 'Инженерсервис')
            ->to('xxdenkenxx@gmail.com')
            ->subject('Новый заказ с Инженерсервис')
            ->view('mails.order.admin', ['order' => $this->order]);
    }
}
