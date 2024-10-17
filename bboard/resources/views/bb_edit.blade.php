@extends('layouts.base')
@section("title", "Правка объявления::Мои объявления")
@section("main")
    <form action="{{route("home.bb.update", ["bb"=>$bb->id])}}"
          method="POST">
        @csrf
        @method("PATCH")
        <div class="form-group @error("title") is-invalid @enderror">
            <input name="title" value="{{old('title', $bb->title)}}">
            @error("title")
            <span class=”invalid-feedback”>
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <textarea name="content">{{$bb->content}}</textarea>
        </div>
        <div class="form-group">
            <input name="price" value="{{$bb->price}}">
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
