@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card menu-card">
            <img src="{{ Storage::url(Auth::user()->avatar) }}" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h1>Ім'я: {{Auth::user()->name}}</h1>
                <h4 class="card-text">Email: {{Auth::user()->email}}</h4>
                @if(Auth::user()->admin)
                    <h4>Роль: Адміністратор</h4>
                @else
                    <h4>Роль: Користувач</h4>
                @endif
            </div>
        </div>
    </div>
@endsection
