@extends('layouts.mail')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <h1>Заявка в партнеры с Инженерсервис</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$data['name']}}</td>
            <th>{{$data['email']}}</th>
        </tr>
        </tbody>
    </table>
@endsection
