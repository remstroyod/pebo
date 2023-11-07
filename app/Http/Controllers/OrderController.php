<?php

namespace App\Http\Controllers;

use App\Http\Handlers\OrderHandler;
use App\Http\Handlers\OrderUpdateHandler;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderStoreRequest $request, OrderHandler $handler)
    {

        if ($order = $handler->process($request))
        {
            return back()->with('success', 'Thank you! Your submission has been received!');
        }else{
            return back()->with('error', 'Oops! Something went wrong while submitting the form.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderUpdateHandler $handler, Order $order, $status)
    {
        if ($order = $handler->process($request, $order, $status))
        {
            return back()->with('success', 'Thank you! Your submission has been received!');
        }else{
            return back()->with('error', 'Oops! Something went wrong while submitting the form.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
