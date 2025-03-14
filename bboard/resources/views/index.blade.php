@extends('layouts.base')

@section("title", "Главная")
@section('main')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб.</th>
            <th>&nbsp</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bbs as $bb)
            <tr>
                <td><h3>{{$bb->title}}</h3></td>
                <td>{{$bb->price}}</td>
                <td>
                    <a href="{{route("detail", ["bb"=>$bb->id])}}">Подробнее…</a>
                    <a href="{{route("home.bb.edit", ["bb"=>$bb->id])}}">Изменить</a>
                    <a href="{{route("home.bb.delete", ["bb" =>$bb->id])}}">Удалить</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
