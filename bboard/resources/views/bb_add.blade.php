@extends("layouts.base")
@section("title", "Добавления объявления::Мои объявления")
@section("main")
    <form action="{{route("home.bb.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtTitle">Товар</label>
            <input name="title" id="txtTitle" class="form-control" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="txtTitle">Описание</label>
            <textarea name="content" id="txtContent" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="txtTitle">Цена</label>
            <input name="price" id="txtPrice" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
@endsection
