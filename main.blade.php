@extends('layout')

@section('page')
    Главная
@endsection


@section('table')


    @if(count($Products))
    <table>
        <tr>
            <th>Название</th>
            <th>Цена</th>
        </tr>
        @foreach($Products as $product)
        <tr>
            <td><a href="/{{$product->name}}/ProductPage" style="text-decoration: none">{{$product->name}}</a></td>
            <td>{{$product->price}}</td>
        </tr>
        @endforeach
    </table>
    @endif
    <a href="/search" class="button">Пошук</a>
@endsection
