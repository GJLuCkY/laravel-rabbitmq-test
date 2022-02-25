<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Events\QROrderCreateEvent;
use Illuminate\Support\Str;

final class RabbitMQController extends Controller
{
    public function qrOrderCreate()
    {
        $data = [
            'jtTransactionId'           => Str::uuid(),
            'rbOrderId'                 => Str::uuid(),
            'rbTransactionReferenceId'  => 'TR6762372',
            'merchantBin'               => '150440006756',
            'paymentDetails' => [
                'processedAt'                   => '2022-01-31T16:37:32.328995',
                'price'                         => 1000.0,
                'loanType'                      => 'INSTALLMENT', // INSTALLMENT | CREDIT
                'loanTerm'                      => 3, // 3, 6, 12, 18
                'bankCommissionPercent'         => 0.0,
                'bankCommission'                => 0.0,
                'marketplaceCommissionPercent'  => 0.0,
                'marketplaceFixedCommission'    => 0.0,
                'marketplaceCommission'         => 0.0,
            ],
            'clientDetails' => [
                'iin'   => '900607301145',
                'phone' => '77088217140',
            ],
            'job' => '',
        ];

        try {
            event(new QROrderCreateEvent($data));
        } catch (\Throwable $e) {
            dd($e);
        }
    }
}
