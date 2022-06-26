@extends('layouts.layout')

@section('title', 'Список для заказов')

@section('content')
    <div>
        <div>
            <h2 class="section__title">
                Список всех заказов
            </h2>
        </div>
        <div>
            <ul class="orders">
                @forelse($orders as $order)
                    <li class="order">
                        {{ $order->name }}
                    </li>
                @empty
                    <li>
                        Заказов пока нет
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection
