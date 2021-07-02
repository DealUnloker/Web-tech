@extends('layouts.app')

@section('content')

    <div class="container">
        <form action=" {{ route('news.store') }} " enctype="multipart/form-data" method="POST">
            @csrf
            <h1>Створити нову новину</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Назва</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Опис</label>
                <textarea class="form-control" id="description" name="description" rows="6"></textarea>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Зображення</label>
                <input type="file" class="form-control-file" id="img" name="img" style="margin-bottom: 10px">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
