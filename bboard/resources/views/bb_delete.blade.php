@extends('layouts.base')
@section("title", "Удаление объявления:: Мои объявления")
@section("main")
    <p> Автор: {{$bb->user->name}} </p>
    <form action="{{route("home.bb.destroy", $bb)}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
@endsection
