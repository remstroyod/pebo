<?php
namespace App\Http\Handlers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderUpdateHandler extends BaseHandler
{

    public function process(Request $request, Order $order = null, $status = null): ?Order
    {
        try {

            $order->update([
                'status' => $status
            ]);

            return $order;

        } catch (\Throwable $e) {

            $this->setErrors($e->getMessage());
            return null;

        }
    }

}
