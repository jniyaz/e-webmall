<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_address' => 'required',
            'shipping_city' => 'required',
            'shipping_state' => 'required',
            'shipping_country' => 'required',
            'shipping_zipcode' => 'required',
            'payment_method' => 'required'
        ]);

        $order = new Order();
        $order->order_number = uniqid('ORN-');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_country = $request->input('shipping_country');
        $order->shipping_zipcode = $request->input('shipping_zipcode');
        $order->shipping_phone = $request->input('shipping_phone');

        if (!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_country = $request->input('shipping_country');
            $order->billing_zipcode = $request->input('shipping_zipcode');
            $order->billing_phone = $request->input('shipping_phone');
        } else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_address = $request->input('billing_address');
            $order->billing_city = $request->input('billing_city');
            $order->billing_state = $request->input('billing_state');
            $order->billing_country = $request->input('billing_country');
            $order->billing_zipcode = $request->input('billing_zipcode');
            $order->billing_phone = $request->input('billing_phone');
        }

        $order->grand_total = \Cart::session(auth()->id())->getTotal();
        $order->items_count = \Cart::session(auth()->id())->getContent()->count();
        $order->user_id = auth()->id();
        $order->save();

        // Save Order Items
        $cartItems = \Cart::session(auth()->id())->getContent();
        foreach ($cartItems as $item) {
            $order->products()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
        }

        // Payment logics
        if ($request->input('payment_method') == 'paypal') {
            // redirect to paypal
            return redirect()->route('paypal.checkout');
        }

        // empty cart
        \Cart::session(auth()->id())->clear();

        //send email to customer

        // redirect

        dd('Order completed, Thank you for purchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
