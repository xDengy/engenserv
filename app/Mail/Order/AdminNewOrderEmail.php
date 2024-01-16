<?php

namespace App\Mail\Order;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminNewOrderEmail extends Mailable
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
            ->to('xxdenkenxx@gmail.com')
            ->subject($this->title)
            ->view('mails.order.admin', ['order' => $this->order]);
    }
}
