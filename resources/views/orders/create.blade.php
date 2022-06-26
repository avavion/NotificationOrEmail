@extends('layouts.layout')

@section('title', 'Создать заказ')

@section('content')
    <h1>Создать заказ</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">
                Название
            </label>
            <input type="text" required name="name" id="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="phone">
                Телефон
            </label>
            <input type="text" required name="phone" id="phone" value="{{ old('phone') }}">
        </div>

        <div class="form-group">
            <label for="email">
                Электронная почта
            </label>
            <input type="email" required name="email" id="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="telegram_id">
                Телеграм ID
            </label>
            <input type="text" required name="telegram_id" id="telegram_id" value="{{ old('telegram_id') }}">
        </div>

        <div class="form-group">
            <label for="price">
                Стоимость
            </label>
            <input type="text" required name="price" id="price" value="{{ old('price') }}">
        </div>

        <button type="submit">
            Отправить
        </button>
    </form>
@endsection

<style>
    form {
        display: flex;
        flex-direction: column;
    }

    form > div {
        display: flex;
        flex-direction: column;
    }

    form input {
        padding: 10px;
    }

    form > button {
        margin-top: 10px;
        padding: 20px;
    }
</style>
