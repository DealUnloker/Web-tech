@extends('layouts.master')

@section('title', 'Послуги')

@section('content')


    <div class="services container">
        <h1 class="services-title"> Наші послуги </h1>

        <div class="d-flex justify-content-between align-items-center flex-wrap">
            @foreach($services as $service)
                <div class="card">
                    <img src="{{ Storage::url($service->img) }}" class="card-img-top" alt="item">
                    <div class="card-body">
                        <h2 class="card-title">{{ $service->name }}</h2>
                        <p class="card-text"> {{ $service->description }}</p>
                        <p class="card-text font-weight-bold"> Ціна - {{ $service->price }}грн</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
