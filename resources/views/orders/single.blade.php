@extends('layouts.layout')

@section('title', $order->name)

@section('content')

    <div>
        <h2 class="order__title">
            {{ $order->name }}
        </h2>
    </div>

@endsection
