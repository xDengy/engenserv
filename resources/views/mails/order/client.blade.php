@extends('layouts.mail')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <h1>Ваш заказ принят</h1>
    <h2 class="mt-5 mb-2">Товары</h2>
    <table class="table align-middle">
        <thead>
        <tr>
            <th scope="col">Товар</th>
            <th scope="col">Цена</th>
            <th scope="col">Количество</th>
            <th scope="col">Стоимость</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->catalog as $item)
            <tr>
                <td><img style="width: 100px; height: 100px; object-fit: cover; margin-right: 10px;" src="{{$item->attachment->first()->url}}"></td>
                <td>{{number_format($item->pivot->price, 0, '', ' ')}} ₽</td>
                <td>{{$item->pivot->quantity}}</td>
                <td>{{number_format(($item->pivot->quantity * $item->pivot->price), 0, '', ' ')}} ₽</td>
            </tr>
            <tr>
                <td>{{$item->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p>Спасибо за ваш заказ! <a href="{{url('/')}}">{{config('app.name')}}</a></p>
    <p>&copy; {{config('app.name')}}</p>
@endsection
