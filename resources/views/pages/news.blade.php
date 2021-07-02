@extends('layouts.master')

@section('title', 'Послуги')

@section('content')
    <div class="container news">
        <h1 class="news-title"> Новини </h1>
        <div class="d-flex justify-content-between align-items-center">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($news as $news_item)
                    <div class="col" style="margin-bottom: 20px">
                        <div class="card h-100">
                            <img src="{{ Storage::url($news_item->img) }}" class="card-img-top" alt="item">
                            <div class="card-body">
                                <h5 class="card-title">{{ $news_item->name }}</h5>
                                <p class="card-text"> {{ $news_item->description }}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"> {{ $news_item->created_at }} </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
