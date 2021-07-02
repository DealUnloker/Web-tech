@extends('layouts.master')

@section('title', 'Послуги')

@section('content')
    <div class="container reviews">
        <h1 class="reviews-title">Відгуки</h1>
        <div class="d-flex flex-column align-items-center">
            @foreach($reviews as $review)
                <div class="card border-success mb-3" style="width: 25rem;">
                    <div class="card-header"> {{ App\Models\User::firstWhere('id', $review->user_id)->name }}</div>
                    <div class="card-body text-success">
                        <p class="card-text">{{ $review->text }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
