<?php

namespace App\Mail\Order;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientNewOrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $order;
    private $title;

    public function __construct($order, $title)
    {
        $this->order = $order;
        $this->title = $title;
    }

    public function build()
    {
        return $this
            ->from('xDN.progger@yandex.com', 'Инженерсервис')
            ->to($this->order->email)
            ->subject($this->title)
            ->view('mails.order.client', ['order' => $this->order]);
    }
}
