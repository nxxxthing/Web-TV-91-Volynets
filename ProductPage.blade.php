@extends('layout')

@section('page')
    Продукт
@endsection

@section('table')
    @if($product)
        <table>
            <tr>
                <th>Назва</th>
                <th>Опис</th>
                <th>Ціна</th>
            </tr>
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
            </tr>
            @endif
        </table>

@endsection

