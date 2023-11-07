<?php
namespace App\Http\Handlers;

use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderHandler extends BaseHandler
{

    public function process(OrderStoreRequest $request, Order $order = null, $status = null): ?Order
    {
        try {

            $user = Auth::user();

            if (!$order)
            {

                $order = $user->orders()->create($request->all());

            }else{
                $order->fill($request->all());
                $order->save();
            }

            return $order;

        } catch (\Throwable $e) {

            $this->setErrors($e->getMessage());
            return null;

        }
    }

}
