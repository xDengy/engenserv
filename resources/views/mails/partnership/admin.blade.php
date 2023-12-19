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
            <th>{{$data->id}}</th>
            <th>{{$data->email}}</th>
            <td>{{$data->name}}</td>
        </tr>
        </tbody>
    </table>
@endsection
