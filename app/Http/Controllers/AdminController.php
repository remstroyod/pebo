<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user, Order $order)
    {

        return view('pages.admin', [
            'ordersAll' => $order->notNew()->get(),
            'ordersNew' => $order->new()->get()
        ]);

    }
}
