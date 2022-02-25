<?php

namespace App\Events;

use Chocofamilyme\LaravelPubSub\Events\PublishEvent;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class QROrderCreateEvent extends PublishEvent implements ShouldBroadcastNow
{
    use Dispatchable;
    use InteractsWithSockets, SerializesModels;

    protected const EXCHANGE_NAME = 'jusan-tole';
    protected const NAME = 'order-service.order.qr.create';
    // protected const ROUTING_KEY = 'jusan-tole.order.qr.create';
    protected const ROUTING_KEY = '';

    public string $jtTransactionId;

    public string $rbOrderId;

    public string $rbTransactionReferenceId;

    public string $merchantBin;

    public array $paymentDetails;

    public array $clientDetails;

    public string $job;

    public function __construct(array $data)
    {
        $this->jtTransactionId          = $data['jtTransactionId'];
        $this->rbOrderId                = $data['rbOrderId'];
        $this->rbTransactionReferenceId = $data['rbTransactionReferenceId'];
        $this->merchantBin              = $data['merchantBin'];
        $this->paymentDetails           = $data['paymentDetails'];
        $this->clientDetails            = $data['clientDetails'];
        $this->job                      = $data['job'];
    }
}
