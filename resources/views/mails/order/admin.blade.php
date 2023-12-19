@extends('layouts.mail')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <h1>Новый заказ</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Имя</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th rowspan="2">{{$order->id}}</th>
            <th>{{$order->email}}</th>
            <td>{{$order->name}}</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center">{{$order->message}}</td>
        </tr>
        </tbody>
    </table>
    <h2 class="mt-5 mb-2">Товары</h2>
    <table class="table align-middle">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Товар</th>
            <th scope="col">Цена</th>
            <th scope="col">Количество</th>
            <th scope="col">Стоимость</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->catalog as $item)
            <tr>
                <th>{{$item->id}}</th>
                <td><img style="width: 100px; height: 100px; object-fit: cover; margin-right: 10px;" src="{{$item->attachment->first()->url}}">{{$item->name}}</td>
                <td>{{$item->pivot->price}}</td>
                <td>{{$item->pivot->quantity}}</td>
                <td>{{$item->pivot->quantity * $item->pivot->price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
