<?php

namespace App\Mail\Partner;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnerEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this
            ->from('xDN.progger@yandex.com', 'Инженерсервис')
            ->to($this->data->email)
            ->subject('Заявка в партнеры с Инженерсервис')
            ->view('mails.partnership.admin', ['order' => $this->data]);
    }
}
