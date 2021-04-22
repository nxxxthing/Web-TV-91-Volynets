@extends('layout')

@section('page')
    Добавление
@endsection

@section('add')
    <form method="POST" style="margin: auto">
        @csrf
        <input type="text" name="name" placeholder="Назва" ><br><br>
        <button type="submit">Пошук</button>
    </form>
@endsection
