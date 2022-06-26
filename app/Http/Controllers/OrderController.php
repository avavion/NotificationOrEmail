<?php

namespace App\Http\Controllers;

use App\Events\CustomEvent;
use App\Mail\OrderMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3'],
            'phone' => ['required', 'min:11'],
            'email' => ['required'],
            'telegram_id' => ['required'],
            'price' => ['required', 'numeric']
        ]);

        $order = Order::query()->create($validator->validated());

        // WHY?
//        Mail::to($request->get('email'))->send(new OrderMail($order));

        return redirect(route('orders.all'));
    }

    public function show(Order $order)
    {
        return view('orders.single', compact('order'));
    }
}
