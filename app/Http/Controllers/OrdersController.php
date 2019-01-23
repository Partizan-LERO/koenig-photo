<?php

namespace App\Http\Controllers;

use App\Mail\NewOrder;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    public function create(Request $request) {
        $order = new Order;
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone_number = $request->input('phone_number');
        $order->tariff_id = $request->input('tariff_id');
        $order->comment = $request->input('comment');
        $order->save();


        Mail::to('order@koenig-photo.ru')
            ->send(new NewOrder($order));

        return "OK";
    }
}
