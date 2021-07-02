@extends('layouts.master')

@section('title', 'Спортивний комплекс')

@section('content')
    <div class="index-preview">
        <div class="bg-image text-center text-white d-flex justify-content-center align-items-center">
            <div class="text">
                <h1>SPORT LIFE</h1>
                <p>
                    Спортивний комплекс, sit amet consectetur adipisicing elit. Repellendus praesentium <br>
                    labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum <br>
                    neque maiores dolorem unde? Aut dolorum quod excepturi fugit.
                </p>
            </div>
        </div>
    </div>
    <div class="promo text-center text">
        <h1>Безліч послуг для будь-яких потреб!</h1>
        <a href=" {{ route('services') }}">ЗНАЙДИ СВОЮ!</a>
    </div>
    <div class="recent_news text-center d-flex justify-content-center align-items-center flex-column">
        <div class="text">
            <h1>Останні новини</h1>
            <a class="more_news" href="{{ route('news') }}">Переглянути всі</a>
        </div>
        <div class="recent_news_container d-flex">
            @foreach($news as $news_item)
                <div class="item">
                    <div class="card h-100" style="width: 18rem;">
                        <img class="card-img-top" src="{{ Storage::url($news_item->img) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $news_item->name }}</h5>
                            <p class="card-text"> {{ $news_item->description }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
