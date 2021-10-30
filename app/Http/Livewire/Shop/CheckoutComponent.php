<?php

namespace App\Http\Livewire\Shop;

use App\Models\Order;
use Livewire\Component;

class CheckoutComponent extends Component
{

    public $fullname, $address, $city, $state, $zipcode, $phone;
    public $billing_fullname, $billing_address, $billing_city, $billing_state, $billing_zipcode, $billing_phone;
    public $payment_method, $total;

    public function render()
    {
        return view('livewire.shop.checkout-component')->extends('layouts.app')
        ->section('content');
    }

    public function make_order()
    {


        $this->validate([
            'fullname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
            'payment_method' => 'required'

        ]);

        $order = new Order();
        $order->user_id = auth()->id();
        $order->order_number = uniqid('OrderNumber-');
    //  $order->status = Por default en la migracion
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();
        $order->shipping_address = $this->address;
        $order->shipping_city = $this->city;
        $order->shipping_state = $this->state;
        $order->shipping_zipcode = $this->zipcode;
        $order->shipping_phone = $this->phone;
        if (is_null($this->billing_fullname)) {
            $order->billing_fullname = $this->fullname;
            $order->billing_address = $this->address;
            $order->billing_city = $this->city;
            $order->billing_state = $this->state;
            $order->billing_zipcode = $this->zipcode;
            $order->billing_phone = $this->phone;
        }else{
            $order->billing_fullname = $this->billing_fullname;
            $order->billing_address = $this->billing_address;
            $order->billing_city = $this->billing_city;
            $order->billing_state = $this->billing_state;
            $order->billing_zipcode = $this->billing_zipcode;
            $order->billing_phone = $this->billing_phone;
        }

        $order->payment_method = $this->payment_method;
        $order->total = \Cart::session(auth()->id())->getTotal();
/*
//Despues de saber el metodo de pago
$order->is_paid */
    }
}
